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

use Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\DetailProductStorage;
use FOS\RestBundle\Controller\FOSRestController;
use Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\AdditiveUsed;

/**
 * Description of GenericDataController
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class GenericDataController extends FOSRestController
{
    /**
     * Retorna la informacion de almacenamiento
     * @return json|xml
     */
    function getStoragesAction()
    {
        $data = array(
            DetailProductStorage::STORAGE_OUTDOOR => $this->trans('sigtec.storage.outdoor'),
            DetailProductStorage::STORAGE_CONFINED => $this->trans('sigtec.storage.confined') ,
        );
        
        return $this->handleView($this->view($data));
    }
    
    /**
     * Retorna si aplica resina
     * @return json|xml
     */
    function getSeparatedResinAction() 
    {
        $data = array(
            DetailProductStorage::SEPARATED_RESIN_NOT_APPLY => 'N/A' ,
            DetailProductStorage::SEPARATED_RESIN_YES => $this->trans('sigtec.yes') ,
            DetailProductStorage::SEPARATED_RESIN_NO => $this->trans('sigtec.no') ,
        );
        
        return $this->handleView($this->view($data));
    }
    /**
     * Retorna los tipos de concentracion de los aditivos
     * 
     * @return json|xml
     */
    function getAdditiveUsedTypeConcentrationAction() 
    {
        $data = array(
            AdditiveUsed::TYPE_CONCENTRATION_PERCENTAGE => array(
                'description' => '%',
                'min' => 0,
                'max' => 100,
                'help' => $this->trans('sigtec.help.additive_used.type_concentration.percentage',array(),'help')
            ),
            AdditiveUsed::TYPE_CONCENTRATION_PPC => array(
                'description' => 'PPC',
                'min' => 0,
                'max' => null,
                'help' => $this->trans('sigtec.help.additive_used.type_concentration.ppc',array(),'help')
            ),
        );
        
        return $this->handleView($this->view($data));
    }
    /**
     * Retorna los tipos de procesos
     * 
     * @return json|xml
     */
    function getTypeProcessAction()
    {
        $repository = $this->get('coramer_sigtec_backend.repository.company_report_technical_type_process');
        $view = $this->view($repository->getAllActive());
        $view->getSerializationContext()->setGroups(array('id','list'));
        return $this->handleView($view);
    }
    
    /**
     * Retorna la lista de procesos activos
     * 
     * @return json|xml
     */
    function getProcessAction($idTypeProcess)
    {
        $repository = $this->get('coramer_sigtec_backend.repository.company_report_technical_type_process');
        $resource = $repository->find($idTypeProcess);
        if(!$resource){
            $this->createNotFoundException();
        }
        $view = $this->view($resource->getProcesses());
        $view->getSerializationContext()->setGroups(array('id','list'));
        return $this->handleView($view);
    }
    
    /**
     * Retorna la lista de resinas activas
     * 
     * @return json|xml
     */
    function getResinAction()
    {
        $repository = $this->get('coramer_sigtec_backend.repository.company_report_technical_resin');
        $view = $this->view($repository->getAllActive());
        $view->getSerializationContext()->setGroups(array('id','list'));
        return $this->handleView($view);
    }
    
    /**
     * Retorna la lista de grados activos
     * 
     * @return json|xml
     */
    function getGradeAction()
    {
        $repository = $this->get('coramer_sigtec_backend.repository.company_report_technical_grade');
        $view = $this->view($repository->getAllActive());
        $view->getSerializationContext()->setGroups(array('id','grade'));
        return $this->handleView($view);
    }
    
    /**
     * Retorna la lista de productos activos
     * 
     * @return json|xml
     */
    function getProductsAction()
    {
        $repository = $this->get('coramer_sigtec_backend.repository.company_report_technical_product');
        $view = $this->view($repository->getAllActive());
        $view->getSerializationContext()->setGroups(array('id','list'));
        return $this->handleView($view);
    }
    
    /**
     * Retorna la lista de aditivos activos
     * 
     * @return json|xml
     */
    function getAdditivesAction()
    {
        $repository = $this->get('coramer_sigtec_backend.repository.company_report_technical_additive');
        $view = $this->view($repository->getAllActive());
        $view->getSerializationContext()->setGroups(array('id','list'));
        return $this->handleView($view);
    }
    
    /**
     * Retorna la lista de aditivos activos
     * 
     * @return json|xml
     */
    function getAdditiveProductsAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $reportTechnical = $this->findReportTechnicalOr404($request);
        $repository = $this->get('coramer_sigtec_backend.repository.company_report_technical_product');
        $view = $this->view($repository->getQueryBuilderByReportTechnical($reportTechnical));
        $view->getSerializationContext()->setGroups(array('id','list'));
        return $this->handleView($view);
    }
    
    /**
     * Retorna la lista de proveedores de aditivos activos
     * 
     * @return json|xml
     */
    function getAdditiveSuppliersAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $repository = $this->get('coramer_sigtec_backend.repository.company_report_technical_supplier');
        $view = $this->view($repository->getAllActive());
        $view->getSerializationContext()->setGroups(array('id','list'));
        return $this->handleView($view);
    }
    
    protected function trans($id, $parameters = array(), $domain = 'CoramerSigtecReportTechnicalBundle')
    {
        return $this->getTranslator()->trans($id, $parameters, $domain);
    }
    
    /**
     * 
     * @return \Symfony\Component\Translation\TranslatorInterface
     */
    protected function getTranslator()
    {
        return $this->get('translator');
    }
    
    /**
     * 
     * @param Request $request
     * @return ReportTechnical
     * @throws NotFoundHttpException
     */
    protected function findReportTechnicalOr404(Request $request)
    {
        $resource = $this->getReportTechnicalRepository()->find($request->get('id'));
        if(!$resource){
            throw $this->createNotFoundException();
        }
        return $resource;
    }
    
    /**
     * @return \Coramer\Sigtec\ReportTechnicalBundle\Repository\ReportTechnicalRepository
     */
    protected function getReportTechnicalRepository(){
        return $this->get('coramer_sigtec_backend.repository.company_report_technical');
    }
}
