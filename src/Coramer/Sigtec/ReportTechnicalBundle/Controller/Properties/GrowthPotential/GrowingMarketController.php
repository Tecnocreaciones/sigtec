<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Coramer\Sigtec\ReportTechnicalBundle\Controller\Properties\GrowthPotential;

use Coramer\Sigtec\ReportTechnicalBundle\Controller\BaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;


/**
 * Description of GrowingMarketController
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class GrowingMarketController extends BaseController
{
    /**
     * Retorna el formulario de mercado en crecimiento
     * 
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return type
     * @throws type
     */
    function getFormAction(Request $request) 
    {
        $reportTechnical = $this->findReportTechnicalOr404($request);
        //Security Check
        $user = $this->getUser();
        if(!$user->getCompanies()->contains($reportTechnical->getCompany())){
            throw $this->createAccessDeniedHttpException();
        }
        $resource = $this->createNew();
        $form = $this->getForm($resource);
        return $this->render('CoramerSigtecWebBundle:Backend:ReportTechnical/Properties/GrowthPotential/growthMarketForm.html.twig',array(
            'form' => $form->createView(),
            'reportTechnical' => $reportTechnical,
        ));
    }
    
    /**
     * Lista los mercados en crecimiento
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return type
     * @throws type
     */
    function listAction(Request $request)
    {
        $reportTechnical = $this->findReportTechnicalOr404($request);
        //Security Check
        $user = $this->getUser();
        if(!$user->getCompanies()->contains($reportTechnical->getCompany())){
            throw $this->createAccessDeniedHttpException();
        }
        
        $growthPotential = $reportTechnical->getGrowthPotential();
        
        $view = $this->view($growthPotential->getGrowthMarkets());
        return $this->handleView($view);
    }
    
    /**
     * Añade un mercado en crecimiento
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return type
     * @throws type
     */
   public function createAction(Request $request) {
        $reportTechnical = $this->findReportTechnicalOr404($request);
        //Security Check
        $user = $this->getUser();
        if(!$user->getCompanies()->contains($reportTechnical->getCompany())){
            throw $this->createAccessDeniedHttpException();
        }
        $resource = $this->createNew();
        $resource->setGrowthPotential($reportTechnical->getGrowthPotential());
        $form = $this->getForm($resource);
        $data = array();
        $view = $this->view();
        if ($request->isMethod('POST') && $form->submit($request)->isValid()) {
            $resource->setGrowthPotential($reportTechnical->getGrowthPotential());
            $resource = $this->domainManager->create($resource);
            
            /** @var FlashBag $flashBag */
            $flashBag = $this->get('session')->getBag('flashes');
            if (null === $resource) {
                $view->setStatusCode(400);
                $data['message'] = 'Error';
            }else{
                $data['message'] = $flashBag->get('success');
                return $this->handleView($this->view($data));
            }
        }
        
        $data['form'] = $form;
        $view->setData($data);
        return $this->handleView($view);
    }
    
    /**
     * Actualiza un mercado en crecimiento
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     * @throws type
     */
    public function updateAction(Request $request) {
        $reportTechnical = $this->findReportTechnicalOr404($request);
        //Security Check
        $user = $this->getUser();
        if(!$user->getCompanies()->contains($reportTechnical->getCompany())){
            throw $this->createAccessDeniedHttpException();
        }
        $resource = $this->getRepository()->find($request->get('slug'));
        $resource->setGrowthPotential($reportTechnical->getGrowthPotential());
        $form = $this->getForm($resource);
        
        if (($request->isMethod('PUT') || $request->isMethod('POST')) && $form->submit($request)->isValid()) {

            $this->domainManager->update($resource);
            if ($request->isXmlHttpRequest()) {
                /** @var FlashBag $flashBag */
                $flashBag = $this->get('session')->getBag('flashes');
                $data = array(
                    'message' => $flashBag->get('success'),
                );
                return new \Symfony\Component\HttpFoundation\JsonResponse($data);
            }
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
    
    /**
     * Elimina un mercado en crecimiento
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return type
     * @throws type
     */
    public function deleteAction(Request $request) {
        $reportTechnical = $this->findReportTechnicalOr404($request);
        //Security Check
        $user = $this->getUser();
        if(!$user->getCompanies()->contains($reportTechnical->getCompany())){
            throw $this->createAccessDeniedHttpException();
        }
        if($request->isXmlHttpRequest()){
            $resource = $this->getRepository()->find($request->get('slug'));
            if(!$resource){
                throw $this->createNotFoundException();
            }
            $this->domainManager->delete($resource);
            /** @var FlashBag $flashBag */
            $flashBag = $this->get('session')->getBag('flashes');
            $data = array(
                'message' => $flashBag->get('success'),
            );
            return new JsonResponse($data);
        }
    }
    
    /**
     * Contruye el formulario de los mercados en crecimiento
     * @param type $data
     * @return type
     */
    private function getFormGrowthMarket($data = null)
    {
        return $this->createFormBuilder($data,array('translation_domain'=>'CoramerSigtecReportTechnicalBundle','csrf_protection' => false))
                ->add('segment','entity',array(
                    'label' => 'sigtec.growth_potential.growth_market.segment',
                    'class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Segment',
                    'property' => 'description',
                    'attr' => array(
                        'class' => 'select expandable-list small-margin-right input-large validate[required]',
                        'ng-model' => 'model.growth_potential.growth_market.segment',
                        'ng-options' => 'value as value.description for (key,value) in data.segments',
                        'ng-change' => 'reportTechnicalManager.getData().getSubSegmentsGrowthMarket(model.growth_potential.growth_market.segment)'
                    ),
                    'query_builder' => function(\Coramer\Sigtec\CoreBundle\Repository\Model\MasterEntityRepository $er){
                        return $er->getQueryAllActive();
                    }
                ))
                ->add('subSegment','entity',array(
                    'label' => 'sigtec.growth_potential.growth_market.sub_segment',
                    'class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\SubSegment',
                    'property' => 'description',
                    'attr' => array(
                        'class' => 'select auto-refesh expandable-list small-margin-right input-large validate[required]',
                        'ng-model' => 'model.growth_potential.growth_market.sub_segment',
                        'ng-options' => 'value as value.description for (key,value) in data.sub_segments',
                    ),
                    'query_builder' => function(\Coramer\Sigtec\CoreBundle\Repository\Model\MasterEntityRepository $er){
                        return $er->getQueryAllActive();
                    }
                ))
                ->getForm()
                ;
    }
}
