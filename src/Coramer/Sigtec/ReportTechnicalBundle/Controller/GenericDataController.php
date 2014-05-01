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
            DetailProductStorage::STORAGE_OUTDOOR => 'sigtec.storage.outdoor' ,
            DetailProductStorage::STORAGE_CONFINED => $this->trans('sigtec.storage.confined') ,
        );
        
        return $this->handleView($this->view($data));
    }
    
    function getSeparatedResinAction() 
    {
        $data = array(
            DetailProductStorage::SEPARATED_RESIN_NOT_APPLY => 'N/A' ,
            DetailProductStorage::SEPARATED_RESIN_YES => $this->trans('sigtec.yes') ,
            DetailProductStorage::SEPARATED_RESIN_NO => $this->trans('sigtec.no') ,
        );
        
        return $this->handleView($this->view($data));
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
