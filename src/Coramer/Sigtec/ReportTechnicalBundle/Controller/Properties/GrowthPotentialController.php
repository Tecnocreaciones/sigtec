<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Coramer\Sigtec\ReportTechnicalBundle\Controller\Properties;

use Coramer\Sigtec\ReportTechnicalBundle\Controller\BaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Controlador de potencial de crecimiento
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class GrowthPotentialController extends BaseController
{
    function getGrowthMarketFormAction(Request $request) 
    {
        $reportTechnical = $this->findReportTechnicalOr404($request);
        //Security Check
        $user = $this->getUser();
        if(!$user->getCompanies()->contains($reportTechnical->getCompany())){
            throw $this->createAccessDeniedHttpException();
        }
        
        $form = $this->getFormGrowthMarket();
        return $this->render('CoramerSigtecWebBundle:Backend:ReportTechnical/Properties/GrowthPotential/growthMarketForm.html.twig',array(
            'form' => $form->createView(),
            'reportTechnical' => $reportTechnical,
        ));
    }
    
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
    
    function addGrowthMarketAction(Request $request)
    {
        $reportTechnical = $this->findReportTechnicalOr404($request);
        //Security Check
        $user = $this->getUser();
        if(!$user->getCompanies()->contains($reportTechnical->getCompany())){
            throw $this->createAccessDeniedHttpException();
        }
        
        $growthPotential = $reportTechnical->getGrowthPotential();
        $form = $this->getFormGrowthMarket();
        $data = array();
        if($form->submit($request)->isValid()){
            $formData = $form->getData();
            $growthPotential->addGrowthMarket($formData['subSegment']);
            $em = $this->getDoctrine()->getManager();
            $em->persist($growthPotential);
            $em->flush();
            $data = array(
                'message' => 'add_ok',
            );
        }else{
            $data = $form;
        }
        
        $view = $this->view($data);
        return $this->handleView($view);
    }
    
    public function updateGrowthMarketAction(Request $request) {
        $reportTechnical = $this->findReportTechnicalOr404($request);
        //Security Check
        $user = $this->getUser();
        if(!$user->getCompanies()->contains($reportTechnical->getCompany())){
            throw $this->createAccessDeniedHttpException();
        }
        $resource = $this->getRepository()->find($request->get('slug'));
        $form = $this->getFormGrowthMarket();
        
        if (($request->isMethod('PUT') || $request->isMethod('POST')) && $form->submit($request)->isValid())
        {
            if ($request->isXmlHttpRequest()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($resource);
                $em->flush();
                $data = array(
                    'message' => 'ok_update',
                );
                return new \Symfony\Component\HttpFoundation\JsonResponse($data);
            }
        }

        if ($this->config->isApiRequest()) {
            return $this->handleView($this->view($form));
        }

        $view = $this
            ->view()
            ->setData(array(
                'form'                           => $form->createView()
            ))
        ;

        return $this->handleView($view);
    }
    
    function listGrowthMarketAction(Request $request)
    {
        $reportTechnical = $this->findReportTechnicalOr404($request);
        //Security Check
        $user = $this->getUser();
        if(!$user->getCompanies()->contains($reportTechnical->getCompany())){
            throw $this->createAccessDeniedHttpException();
        }
        
        $growthPotential = $reportTechnical->getGrowthPotential();
        
        $view = $this->view($growthPotential->getGrowthMarkets());
        //$view->getSerializationContext()->setGroups(array('show','details'));
        return $this->handleView($view);
    }
    
    public function deleteGrowthMarketAction(Request $request) {
        $reportTechnical = $this->findReportTechnicalOr404($request);
        //Security Check
        $user = $this->getUser();
        if(!$user->getCompanies()->contains($reportTechnical->getCompany())){
            throw $this->createAccessDeniedHttpException();
        }
        
        $data = array();
        if($request->isXmlHttpRequest()){
            $resource = $this->getRepository()->find($request->get('slug'));
            if(!$resource){
                throw $this->createNotFoundException();
            }
            $em = $this->getDoctrine()->getManager();
            $em->remove($resource);
            $em->flush();
            $data = array(
                'message' => 'remove_ok',
            );
        }
        $view = $this->view($data);
        return $this->handleView($view);
    }
}