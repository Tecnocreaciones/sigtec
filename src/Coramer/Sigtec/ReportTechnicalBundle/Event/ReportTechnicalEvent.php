<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Coramer\Sigtec\ReportTechnicalBundle\Event;

use Symfony\Component\EventDispatcher\Event;

/**
 * Evento de reporte tecnico
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class ReportTechnicalEvent extends Event
{
    /**
     * Reporte tecnico disparado en el evento
     * 
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\ReportTechnical
     */
    private $reportTechnical;
    
    function __construct(\Coramer\Sigtec\ReportTechnicalBundle\Entity\ReportTechnical $reportTechnical) {
        $this->reportTechnical = $reportTechnical;
    }
    
    /**
     * 
     * @return \Coramer\Sigtec\ReportTechnicalBundle\Entity\ReportTechnical
     */
    public function getReportTechnical() {
        return $this->reportTechnical;
    }

}
