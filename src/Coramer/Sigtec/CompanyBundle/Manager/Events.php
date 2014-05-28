<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Coramer\Sigtec\CompanyBundle\Manager;

/**
 * Eventos del reporte tecnico
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
final class Events 
{
    const REPORT_TECHNICAL_UPDATE = 'sigtec.report_technical.update';
    
    const REPORT_TECHNICAL_DETAIL_PRODUCT_STORAGE_UPDATE = 'sigtec.report_technical.detail_product_storage.update';
    const REPORT_TECHNICAL_DETAIL_PRODUCT_STORAGE_DELETE = 'sigtec.report_technical.detail_product_storage.delete';
}
