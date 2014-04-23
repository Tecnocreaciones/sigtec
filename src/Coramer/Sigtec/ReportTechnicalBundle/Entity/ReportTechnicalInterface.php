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
interface ReportTechnicalInterface
{
    /**
     * Status In progress.
     */
    const STATUS_IN_PROGRESS = 0;
    /**
     * Status canceled.
     */
    const STATUS_CANCELED = 1;
    /**
     * Status approved
     */
    const STATUS_APPROVED = 2;
    /**
     * Status rejected
     */
    const STATUS_REJECTED = 3;
}
