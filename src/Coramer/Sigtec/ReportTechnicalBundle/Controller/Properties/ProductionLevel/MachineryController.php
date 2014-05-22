<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Coramer\Sigtec\ReportTechnicalBundle\Controller\Properties\ProductionLevel;

use Coramer\Sigtec\ReportTechnicalBundle\Controller\BaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Controlador de maquinaria
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class MachineryController extends BaseController
{
    public function createAction(Request $request) {
        $reportTechnical = $this->findReportTechnicalOr404($request);
        //Security Check
        $user = $this->getUser();
        if(!$user->getCompanies()->contains($reportTechnical->getCompany())){
            throw $this->createAccessDeniedHttpException();
        }
        $resource = $this->createNew();
        
        $form = $this->getFormMachinary($request,$request->get('form'));
        $dataForm = $form->getData();
        $view = $this->view();
        if ($request->isMethod('POST') && $form->submit($request)->isValid()) {
            $productionLevel = $this->getProductionLevel($request->get('slug'));
            $resource
                    ->setData($dataForm)
                    ->setProductionLevel($productionLevel)
                    ;
            
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
    
    function getFormProcessAction(Request $request)
    {
        $reportTechnical = $this->findReportTechnicalOr404($request);
        //Security Check
        $user = $this->getUser();
        $company = $reportTechnical->getCompany();
        if(!$user->getCompanies()->contains($company)){
            throw $this->createAccessDeniedHttpException();
        }
        $data = array();
        $form = $this->getFormMachinary($request,$data);
        if($form instanceof \Symfony\Component\HttpFoundation\Response){
            return $form;
        }
        return $this->render('CoramerSigtecWebBundle:Backend:ReportTechnical/Properties/ProductionLevel/formProcess.html.twig',array(
            'form' => $form->createView(),
            'reportTechnical' => $reportTechnical,
        ));
    }
    
    private function getRepositoryProductionLevel()
    {
        return $this->get('coramer_sigtec_backend.repository.company_report_technical_properties_production_level');
    }

    private function getProductionLevel($id)
    {
        $repositoryProduction = $this->getRepositoryProductionLevel();
        $productionLevel = $repositoryProduction->find($id);
        if(!$productionLevel){
            throw $this->createNotFoundException();
        }
        return $productionLevel;
    }

    private function getFormMachinary($request,$data = array())
    {
        $reportTechnical = $this->findReportTechnicalOr404($request);
        $company = $reportTechnical->getCompany();
        $productionLevel = $this->getProductionLevel($request->get('slug'));
        
        $process = $productionLevel->getProcess();
        $modelMachinery = $process->getModelMachinery();
        if(!$modelMachinery){
            return new \Symfony\Component\HttpFoundation\Response($this->trans('sigtec.feature_machinery.error.no_assigned',array('%m%' => $process->getDescription()),'CoramerSigtecReportTechnicalBundle'));
        }
        
        $formBuilder = $this->createFormBuilder($data,array(
            'translation_domain' => 'CoramerSigtecReportTechnicalBundle',
            'csrf_protection' => false,
        ));
        foreach ($modelMachinery->getFeaturesMachinery() as $featureMachinery){
            $parameters = $featureMachinery->getParameters();
            if(isset($parameters['attr'])){
                $parameters['attr']['help'] = $featureMachinery->getHelp();
            }else{
                $parameters['attr'] = array('help' => $featureMachinery->getHelp());
            }
            $evalParameters = $featureMachinery->getEvalParameters();
            if(is_array($evalParameters)){
                foreach ($evalParameters as $key => $value) {
                    eval('$r='.$value);
                    $parameters[$key] = $r;
                }
            }
            $formBuilder->add($featureMachinery->getName(),$featureMachinery->getFieldType(),$parameters);
        }
        return $formBuilder->getForm();
    }
    
    function listAction(Request $request)
    {
        $reportTechnical = $this->findReportTechnicalOr404($request);
        //Security Check
        $user = $this->getUser();
        $company = $reportTechnical->getCompany();
        if(!$user->getCompanies()->contains($company)){
            throw $this->createAccessDeniedHttpException();
        }
        
        return $this->render('CoramerSigtecWebBundle:Backend:ReportTechnical/Properties/ProductionLevel/machineryList.html.twig',array(
            'reportTechnical' => $reportTechnical,
        ));
    }
}
