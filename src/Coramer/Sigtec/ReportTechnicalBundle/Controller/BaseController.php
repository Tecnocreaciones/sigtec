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

use Tecnocreaciones\Bundle\ResourceBundle\Controller\ResourceController;

/**
 * Description of BaseController
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class BaseController extends ResourceController
{
    /**
     * 
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return \Coramer\Sigtec\ReportTechnicalBundle\Entity\ReportTechnical
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     */
    protected function findReportTechnicalOr404(\Symfony\Component\HttpFoundation\Request $request)
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
