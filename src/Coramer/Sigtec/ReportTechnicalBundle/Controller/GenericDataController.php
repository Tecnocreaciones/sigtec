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

/**
 * Description of GenericDataController
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class GenericDataController extends FOSRestController
{
    function getStoragesAction()
    {
        $data = array(
            DetailProductStorage::STORAGE_OUTDOOR => $this->trans('sigtec.storage.outdoor'),
            DetailProductStorage::STORAGE_CONFINED => $this->trans('sigtec.storage.confined') ,
        );
        
        return $this->handleView($this->view($data));
    }
    /**
     * 
     * @return type
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
    
    function getTypeProcessAction()
    {
        $repository = $this->get('coramer_sigtec_backend.repository.company_report_technical_type_process');
        $view = $this->view($repository->getAllActive());
        $view->getSerializationContext()->setGroups('list');
        return $this->handleView($view);
    }
    
    /**
     * Retorna la lista de procesos activas
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
        $view->getSerializationContext()->setGroups('list');
        return $this->handleView($view);
    }
    
    /**
     * Retorna la lista de resinas activas
     * @return json|xml
     */
    function getResinAction()
    {
        $repository = $this->get('coramer_sigtec_backend.repository.company_report_technical_resin');
        $view = $this->view($repository->getAllActive());
        $view->getSerializationContext()->setGroups('list');
        return $this->handleView($view);
    }
    
    /**
     * Retorna la lista de grados activos
     * @return json|xml
     */
    function getGradeAction()
    {
        $repository = $this->get('coramer_sigtec_backend.repository.company_report_technical_grade');
        $view = $this->view($repository->getAllActive());
        $view->getSerializationContext()->setGroups(array('grade'));
        return $this->handleView($view);
    }
    
    /**
     * Retorna la lista de productos activos
     * @return json|xml
     */
    function getProductsAction()
    {
        $repository = $this->get('coramer_sigtec_backend.repository.company_report_technical_product');
        $view = $this->view($repository->getAllActive());
        $view->getSerializationContext()->setGroups('list');
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
}
