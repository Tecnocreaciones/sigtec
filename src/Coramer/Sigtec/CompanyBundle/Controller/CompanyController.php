<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com.ve
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Coramer\Sigtec\CompanyBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Tecnocreaciones\Bundle\ResourceBundle\Controller\ResourceController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * Description of CompanyController
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class CompanyController extends ResourceController
{
    /**
     * 
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return type
     * @Security("is_granted('ROLE_REVISER')")
     */
    public function indexAction(Request $request) {
        return parent::indexAction($request);
    }
    
    public function showAction(Request $request) {
        $resource = $this->findOr404($request);
        
        //Security Check
        $user = $this->getUser();
        if(!$this->getSecurityContext()->isGranted('ROLE_REVISER') && !$user->getCompanies()->contains($resource)){
            throw $this->createAccessDeniedHttpException();
        }
        
        $view = $this
            ->view()
            ->setTemplate($this->config->getTemplate('show.html'))
            ->setTemplateVar($this->config->getResourceName())
            ->setData(array(
                'company' => $resource,
                'company_manager' => $this->get('coramer_sigtec_company.company_manager')
            ))
        ;
        $view->getSerializationContext()->setGroups('show');
        return $this->handleView($view);
    }
    
    /**
     * 
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return type
     * @Security("is_granted('ROLE_USER')")
     */
    function clientIndexAction(Request $request) {
        $user = $this->getUser();
        $criteria = $request->get('filter',$this->config->getCriteria());
        $sorting = $request->get('sorting',$this->config->getSorting());
        $repository = $this->getRepository();
        $criteria['user'] = $user->getId();
        
        if ($this->config->isPaginated()) {
            $resources = $this->resourceResolver->getResource(
                $repository,
                'createPaginator',
                array($criteria, $sorting)
            );
            $maxPerPage = $this->config->getPaginationMaxPerPage();
            if(($limit = $request->query->get('limit')) && $limit > 0){
                if($limit > 100){
                    $limit = 100;
                }
                $maxPerPage = $limit;
            }
            $resources->setCurrentPage($request->get('page', 1), true, true);
            $resources->setMaxPerPage($maxPerPage);
        } else {
            $resources = $this->resourceResolver->getResource(
                $repository,
                'findBy',
                array($criteria, $sorting, $this->config->getLimit())
            );
        }

        $view = $this
            ->view()
            ->setTemplate($this->config->getTemplate('clientIndex.html'))
            ->setTemplateVar($this->config->getPluralResourceName())
        ;
        if($request->get('_format') == 'html'){
            $view->setData($resources);
        }else{
            $formatData = $request->get('_formatData','default');
            $view->setData($resources->toArray($this->config->getRedirectRoute('client_index'),array(),$formatData));
        }
        return $this->handleView($view);
    }
    
    function validateRifAction(Request $request) {
        $resource = $this->findOr404($request);
        $response = new \Symfony\Component\HttpFoundation\JsonResponse();
        $data = array();
        if($resource->isRifValidated()){
            $data['message'] = $this->get('translator')->trans('sigtec.the_rif_has_already_been_validated');
        }else{
            /** \Tecnocreaciones\Vzla\ToolsBundle\Tools\RifTool **/
            $rifService = $this->get('tecnocreaciones_vzla_tools.rif');
            
            $rifResponse= $rifService->getRif($resource->getRif());
            if($rifResponse->isValid()){
                $resource
                        ->setName($rifResponse->getName())
                        ->setRifValidated(true);
                $em = $this->getDoctrine()->getManager();
                $em->persist($resource);
                $em->flush();
                $data['message'] = $this->get('translator')->trans('sigtec.the_rif_was_validated_correctly');
            }else{
                $response->setStatusCode(400);
                $data = $rifResponse->getArrayResponse();
            }
        }
        $response->setData($data);
        
        return $response;
    }
    
    function plantsAction(Request $request) {
        $resource = $this->findOr404($request);
        $view = $this
            ->view()
            ->setTemplate($this->config->getTemplate('plants.html'))
            ->setTemplateVar($this->config->getResourceName())
            ->setData($resource->getPlants())
        ;
        $view->getSerializationContext()->setGroups('companies');
        return $this->handleView($view);
    }
    
    public function updateAction(Request $request) {
        $resource = $this->findOr404($request);
        
        //Security Check
        $user = $this->getUser();
        if(!$user->getCompanies()->contains($resource)){
            throw $this->createAccessDeniedHttpException();
        }
        
        $form = $this->getForm($resource);

        if (($request->isMethod('PUT') || $request->isMethod('POST')) && $form->submit($request)->isValid()) {

            $this->domainManager->update($resource);

            return $this->redirectHandler->redirectTo($resource);
        }

        if ($this->config->isApiRequest()) {
            return $this->handleView($this->view($form));
        }

        $view = $this
            ->view()
            ->setTemplate($this->config->getTemplate('update.html'))
            ->setData(array(
                $this->config->getResourceName() => $resource,
                'form'                           => $form->createView()
            ))
        ;

        return $this->handleView($view);
    }
    
    public function createAction(Request $request) {
        $user = $this->getUser();
        $resource = $this->createNew();
        $resource->setUser($user);
        $form = $this->getForm($resource);

        if ($request->isMethod('POST') && $form->submit($request)->isValid()) {
            /** @var FlashBag $flashBag */
            $flashBag = $this->get('session')->getBag('flashes');
            /** \Tecnocreaciones\Vzla\ToolsBundle\Tools\RifTool **/
            $rifService = $this->get('tecnocreaciones_vzla_tools.rif');
            
            $rifResponse= $rifService->getRif($resource->getRif());
            if($rifResponse->isValid()){
                $resource
                        ->setName($rifResponse->getName())
                        ->setRifValidated(true);
                $flashBag->add('success',$this->get('translator')->trans('sigtec.the_rif_was_validated_correctly'));
            }else{
                $flashBag->add('error',$this->get('translator')->trans($rifResponse->getMessage()));
            }
            
            
            $resource = $this->domainManager->create($resource);

            if (null === $resource) {
                return $this->redirectHandler->redirectToIndex();
            }
            
            return $this->redirectHandler->redirectTo($resource);
        }

        if ($this->config->isApiRequest()) {
            return $this->handleView($this->view($form));
        }

        $view = $this
            ->view()
            ->setTemplate($this->config->getTemplate('create.html'))
            ->setData(array(
                $this->config->getResourceName() => $resource,
                'form'                           => $form->createView()
            ))
        ;

        return $this->handleView($view);
    }
    
    public function deleteAction(Request $request)
    {
        $resource = $this->findOr404($request);
        //Security Check
        $user = $this->getUser();
        if(!$user->getCompanies()->contains($resource)){
            throw $this->createAccessDeniedHttpException();
        }
        
        $this->domainManager->delete($resource);
        if($request->isXmlHttpRequest()){
            /** @var FlashBag $flashBag */
            $flashBag = $this->get('session')->getBag('flashes');
            $data = array(
                'message' => $flashBag->get('success'),
            );
            return new \Symfony\Component\HttpFoundation\JsonResponse($data);
        }else{
            return $this->redirectHandler->redirectToRoute($this->config->getRedirectRoute('client_index'));
        }
    }
    
    /**
     * Activa una empresa
     * 
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return type
     * @Security("is_granted('ROLE_REVISER')")
     */
    function activateAction(Request $request)
    {
        $resource = $this->findOr404($request);
        $resource->setActiveBusiness(true);
        $em = $this->getDoctrine()->getManager();
        $em->persist($resource);
        $em->flush();
        $data = array(
            'message' => $this->get('translator')->trans('sigtec.company.message.activate',array('%s%' => $resource->getRif()),'CoramerSigtecCompanyBundle'),
        );
        $view = $this
            ->view()
            ->setTemplate($this->config->getTemplate('update.html'))
            ->setData($data)
        ;

        return $this->handleView($view);
    }
    
    /**
     * Inactiva una empresa
     * 
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return type
     * @Security("is_granted('ROLE_REVISER')")
     */
    function inactivateAction(Request $request)
    {
        $resource = $this->findOr404($request);
        $resource->setActiveBusiness(false);
        $em = $this->getDoctrine()->getManager();
        $em->persist($resource);
        $em->flush();
        $data = array(
            'message' => $this->get('translator')->trans('sigtec.company.message.inactivate',array('%s%' => $resource->getRif()),'CoramerSigtecCompanyBundle'),
        );
        $view = $this
            ->view()
            ->setTemplate($this->config->getTemplate('update.html'))
            ->setData($data)
        ;

        return $this->handleView($view);
    }
}
