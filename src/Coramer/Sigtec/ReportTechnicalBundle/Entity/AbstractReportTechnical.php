<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Coramer\Sigtec\ReportTechnicalBundle\Entity;

/**
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
abstract class AbstractReportTechnical
{
    /**
     * En progreso.(Cliente)
     */
    const STATUS_IN_PROGRESS = 0;
    /**
     * Anulado.(Cliente|Revisor)
     */
    const STATUS_CANCELED = 1;
    /**
     * En espera de correción por el cliente.(Cliente)
     */
    const STATUS_PENDING_CORRECTION = 2;
    /**
     * En revisión. Enviado al revisor. (Revisor)
     */
    const STATUS_IN_REVIEW = 3;
    /**
     * Revisado.(Revisor)
     */
    const STATUS_REVISED = 4;
    /**
     * Aprobado.(Gerente tecnico)
     */
    const STATUS_APPROVED = 5;
    /**
     * Rechazado.(Gerente Tecnico)
     */
    const STATUS_REJECTED = 6;
    
    
    function getLabelStatus()
    {
        $status = array(
            self::STATUS_IN_PROGRESS => 'sigtec.status.in_progress',
            self::STATUS_CANCELED => 'sigtec.status.canceled',
            self::STATUS_PENDING_CORRECTION => 'sigtec.status.pending_correction',
            self::STATUS_IN_REVIEW => 'sigtec.status.in_review',
            self::STATUS_REVISED => 'sigtec.status.revised',
            self::STATUS_APPROVED => 'sigtec.status.approved',
            self::STATUS_REJECTED => 'sigtec.status.rejected',
        );
        if(isset($status[$this->status])){
            return $status[$this->status];
        }
    }
}
