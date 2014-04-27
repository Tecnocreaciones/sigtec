<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Coramer\Sigtec\ReportTechnicalBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Tecnocreaciones\Bundle\ResourceBundle\Controller\ResourceController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * Description of ReportTechnicalController
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class ReportTechnicalController extends ResourceController
{
    /**
     * 
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return type
     * @Security("is_granted('ROLE_ADMIN')")
     */
    public function indexAction(Request $request) {
        return parent::indexAction($request);
    }
    
    public function showAction(Request $request) {
        $resource = $this->findOr404($request);
        
        //Security Check
        $user = $this->getUser();
        if(!$user->getCompanies()->contains($resource->getCompany())){
            throw $this->createAccessDeniedHttpException();
        }
        
        $view = $this
            ->view()
            ->setTemplate($this->config->getTemplate('show.html'))
            ->setTemplateVar($this->config->getResourceName())
            ->setData($resource)
        ;
        $view->getSerializationContext()->setGroups('show');
        return $this->handleView($view);
    }
    
    /**
     * 
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return type
     * @Security("is_granted('ROLE_CLIENT')")
     */
    function indexClientAction(Request $request)
    {
        $formCompany = $this->buildFormCompanyField();
        $criteria = $request->get('filter',$this->config->getCriteria());
        $sorting = $request->get('sorting',$this->config->getSorting());
        $repository = $this->getRepository();
            $resources = $this->resourceResolver->getResource(
                $repository,
                'createPaginatorByClient',
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
                
        $view = $this
            ->view()
            ->setTemplate($this->config->getTemplate('index.html'))
            ->setTemplateVar($this->config->getPluralResourceName())
        ;
        if($request->get('_format') == 'html'){
        $view->setData(array(
            'form_company' => $formCompany->createView(),'company_report_technicals' => $resources
        ));
        }else{
            $formatData = $request->get('_formatData','default');
            $view->setData($resources->toArray($this->config->getRedirectRoute('index'),array(),$formatData));
        }
        return $this->handleView($view);
    }
    
    public function createAction(Request $request) {
        $resource = $this->createNew();
        $formCompany = $this->buildFormCompanyField($resource);
        $sequenceGenerator = $this->get('sigtec.sequence_generator');
                
        if ($request->isMethod('POST') && $formCompany->submit($request)->isValid()) {
            $resource
                    ->setArchive($sequenceGenerator->getNextTempArchive())
                    ->setProfessionalProfile(new \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\ProfessionalProfile());
                    ;
            $resource = $this->domainManager->create($resource);

            if (null === $resource) {
                return $this->redirectHandler->redirectToIndex();
            }

            return $this->redirectHandler->redirectTo($resource);
        }

        if ($this->config->isApiRequest()) {
            return $this->handleView($this->view($formCompany));
        }

        $view = $this
            ->view()
            ->setTemplate($this->config->getTemplate('index.html'))
            ->setData(array(
                $this->config->getResourceName() => $resource,
                'form_company'                   => $formCompany->createView()
            ))
        ;

        return $this->handleView($view);
    }
    
    public function updateAction(Request $request) {
        $resource = $this->findOr404($request);
                
        $form = $this->getForm($resource);
        $data = array();
        if (($request->isMethod('PUT') || $request->isMethod('POST')) && $form->submit($request)->isValid()) {


            if($request->isXmlHttpRequest()){
                $em = $this->getDoctrine()->getManager();
                $em->persist($resource);
                $em->flush();
                $data['message'] = 'sigtec.the_changes_have_been_successfully_saved';
            }else{
                $this->domainManager->update($resource);
                return $this->redirectHandler->redirectTo($resource);
            }
        }else{
            $data = $form;
        }

        if ($this->config->isApiRequest()) {
            return $this->handleView($this->view($form));
        }
        $view = $this
                ->view();
        if($request->isXmlHttpRequest()){
            $view
                ->setFormat('json')
                ->setTemplate($this->config->getTemplate('update.html'))
                ->setData($data)
            ;
        }else{
            $view
                ->setTemplate($this->config->getTemplate('update.html'))
                ->setData(array(
                    $this->config->getResourceName() => $resource,
                    'form'                           => $form->createView()
                ))
            ;
        }

        return $this->handleView($view);
    }
    
    function getProfessionalProfileAction(Request $request)
    {
        $resource = $this->findOr404($request);
        $view = $this
            ->view()
            ->setTemplate($this->config->getTemplate('show.html'))
            ->setData(array(
                $resource->getProfessionalProfile(),
            ))
        ;

        return $this->handleView($view);
    }
    
    private function buildFormCompanyField($resource = null) {
        $user = $this->getUser();
        $form =  $this->createFormBuilder($resource)->add('company','entity',array(
                'label' => 'sigtec.company',
                'class' => 'Coramer\Sigtec\CompanyBundle\Entity\Company',
                'property' => 'rif',
                'empty_value' => 'sigtec.select',
                'attr' => array(
                    'class' => 'select blue-gradient replacement glossy input-large',
                ),
                'required' => true,
                'query_builder' => function(\Tecnocreaciones\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository $er) use ($user) {
                    $qb = $er->createQueryBuilder('c');
                    $qb
                        ->select('c')
                        ->innerJoin('c.user','u')
                        ->andWhere('c.status = :status')
                        ->andWhere('u.id = :user')
                        ->setParameter('user', $user)
                        ->setParameter('status', true)
                            ;
                    return $qb;
                },
            ));
        return $form->getForm();
    }
}
