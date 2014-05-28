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

/**
 * Eventos del reporte tecnico
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
final class Events 
{
    const REPORT_TECHNICAL_UPDATE = 'sigtec.report_technical.update';
    
    /**
     * Eventos de detalles de almacenamiento
     */
    const REPORT_TECHNICAL_DETAIL_PRODUCT_STORAGE_PRE_CREATE = 'sigtec.report_technical.detail_product_storage.pre_create';
    const REPORT_TECHNICAL_DETAIL_PRODUCT_STORAGE_POST_CREATE= 'sigtec.report_technical.detail_product_storage.post_create';
    const REPORT_TECHNICAL_DETAIL_PRODUCT_STORAGE_PRE_UPDATE = 'sigtec.report_technical.detail_product_storage.pre_update';
    const REPORT_TECHNICAL_DETAIL_PRODUCT_STORAGE_POST_UPDATE = 'sigtec.report_technical.detail_product_storage.post_update';
    const REPORT_TECHNICAL_DETAIL_PRODUCT_STORAGE_PRE_DELETE = 'sigtec.report_technical.detail_product_storage.pre_delete';
    const REPORT_TECHNICAL_DETAIL_PRODUCT_STORAGE_POST_DELETE = 'sigtec.report_technical.detail_product_storage.post_delete';
    
    /**
     * Eventos de exportacion del producto
     */
    const REPORT_TECHNICAL_EXPORTATION_PRODUCT_PRE_CREATE = 'sigtec.report_technical.exportation_product.pre_create';
    const REPORT_TECHNICAL_EXPORTATION_PRODUCT_POST_CREATE= 'sigtec.report_technical.exportation_product.post_create';
    const REPORT_TECHNICAL_EXPORTATION_PRODUCT_PRE_UPDATE = 'sigtec.report_technical.exportation_product.pre_update';
    const REPORT_TECHNICAL_EXPORTATION_PRODUCT_POST_UPDATE = 'sigtec.report_technical.exportation_product.post_update';
    const REPORT_TECHNICAL_EXPORTATION_PRODUCT_PRE_DELETE = 'sigtec.report_technical.exportation_product.pre_delete';
    const REPORT_TECHNICAL_EXPORTATION_PRODUCT_POST_DELETE = 'sigtec.report_technical.exportation_product.post_delete';
    
    /**
     * Eventos de mercados en crecimiento
     */
    const REPORT_TECHNICAL_GROWING_MARKET_PRE_CREATE = 'sigtec.report_technical.growing_market.pre_create';
    const REPORT_TECHNICAL_GROWING_MARKET_POST_CREATE= 'sigtec.report_technical.growing_market.post_create';
    const REPORT_TECHNICAL_GROWING_MARKET_PRE_UPDATE = 'sigtec.report_technical.growing_market.pre_update';
    const REPORT_TECHNICAL_GROWING_MARKET_POST_UPDATE = 'sigtec.report_technical.growing_market.post_update';
    const REPORT_TECHNICAL_GROWING_MARKET_PRE_DELETE = 'sigtec.report_technical.growing_market.pre_delete';
    const REPORT_TECHNICAL_GROWING_MARKET_POST_DELETE = 'sigtec.report_technical.growing_market.post_delete';
    
    /**
     * Eventos de nuevas maquinarias
     */
    const REPORT_TECHNICAL_NEW_MACHINERY_PRE_CREATE = 'sigtec.report_technical.new_machinery.pre_create';
    const REPORT_TECHNICAL_NEW_MACHINERY_POST_CREATE= 'sigtec.report_technical.new_machinery.post_create';
    const REPORT_TECHNICAL_NEW_MACHINERY_PRE_UPDATE = 'sigtec.report_technical.new_machinery.pre_update';
    const REPORT_TECHNICAL_NEW_MACHINERY_POST_UPDATE = 'sigtec.report_technical.new_machinery.post_update';
    const REPORT_TECHNICAL_NEW_MACHINERY_PRE_DELETE = 'sigtec.report_technical.new_machinery.pre_delete';
    const REPORT_TECHNICAL_NEW_MACHINERY_POST_DELETE = 'sigtec.report_technical.new_machinery.post_delete';
    
    /**
     * Eventos de nuevas maquinarias
     */
    const REPORT_TECHNICAL_OTHER_MARKET_PRE_CREATE = 'sigtec.report_technical.other_market.pre_create';
    const REPORT_TECHNICAL_OTHER_MARKET_POST_CREATE= 'sigtec.report_technical.other_market.post_create';
    const REPORT_TECHNICAL_OTHER_MARKET_PRE_UPDATE = 'sigtec.report_technical.other_market.pre_update';
    const REPORT_TECHNICAL_OTHER_MARKET_POST_UPDATE = 'sigtec.report_technical.other_market.post_update';
    const REPORT_TECHNICAL_OTHER_MARKET_PRE_DELETE = 'sigtec.report_technical.other_market.pre_delete';
    const REPORT_TECHNICAL_OTHER_MARKET_POST_DELETE = 'sigtec.report_technical.other_market.post_delete';
    
    /**
     * Eventos de los detalles de otras resinas plasticas
     */
    const REPORT_TECHNICAL_DETAIL_OTHER_PLASTIC_RESIN_PRE_CREATE = 'sigtec.report_technical.detail_other_plastic_resin.pre_create';
    const REPORT_TECHNICAL_DETAIL_OTHER_PLASTIC_RESIN_POST_CREATE= 'sigtec.report_technical.detail_other_plastic_resin.post_create';
    const REPORT_TECHNICAL_DETAIL_OTHER_PLASTIC_RESIN_PRE_UPDATE = 'sigtec.report_technical.detail_other_plastic_resin.pre_update';
    const REPORT_TECHNICAL_DETAIL_OTHER_PLASTIC_RESIN_POST_UPDATE = 'sigtec.report_technical.detail_other_plastic_resin.post_update';
    const REPORT_TECHNICAL_DETAIL_OTHER_PLASTIC_RESIN_PRE_DELETE = 'sigtec.report_technical.detail_other_plastic_resin.pre_delete';
    const REPORT_TECHNICAL_DETAIL_OTHER_PLASTIC_RESIN_POST_DELETE = 'sigtec.report_technical.detail_other_plastic_resin.post_delete';
    
    /**
     * Eventos de las maquinarias
     */
    const REPORT_TECHNICAL_MACHINERY_PRE_CREATE = 'sigtec.report_technical.machinery.pre_create';
    const REPORT_TECHNICAL_MACHINERY_POST_CREATE= 'sigtec.report_technical.machinery.post_create';
    const REPORT_TECHNICAL_MACHINERY_PRE_UPDATE = 'sigtec.report_technical.machinery.pre_update';
    const REPORT_TECHNICAL_MACHINERY_POST_UPDATE = 'sigtec.report_technical.machinery.post_update';
    const REPORT_TECHNICAL_MACHINERY_PRE_DELETE = 'sigtec.report_technical.machinery.pre_delete';
    const REPORT_TECHNICAL_MACHINERY_POST_DELETE = 'sigtec.report_technical.machinery.post_delete';
    
    /**
     * Eventos de los ditivos que se emplean en el proceso
     */
    const REPORT_TECHNICAL_ADDITIVE_USED_PRE_CREATE = 'sigtec.report_technical.additive_used.pre_create';
    const REPORT_TECHNICAL_ADDITIVE_USED_POST_CREATE= 'sigtec.report_technical.additive_used.post_create';
    const REPORT_TECHNICAL_ADDITIVE_USED_PRE_UPDATE = 'sigtec.report_technical.additive_used.pre_update';
    const REPORT_TECHNICAL_ADDITIVE_USED_POST_UPDATE = 'sigtec.report_technical.additive_used.post_update';
    const REPORT_TECHNICAL_ADDITIVE_USED_PRE_DELETE = 'sigtec.report_technical.additive_used.pre_delete';
    const REPORT_TECHNICAL_ADDITIVE_USED_POST_DELETE = 'sigtec.report_technical.additive_used.post_delete';
    
    /**
     * Eventos de los ditivos que se emplean en el proceso
     */
    const REPORT_TECHNICAL_DESCRIPTION_MARKET_PRE_CREATE = 'sigtec.report_technical.description_market.pre_create';
    const REPORT_TECHNICAL_DESCRIPTION_MARKET_POST_CREATE= 'sigtec.report_technical.description_market.post_create';
    const REPORT_TECHNICAL_DESCRIPTION_MARKET_PRE_UPDATE = 'sigtec.report_technical.description_market.pre_update';
    const REPORT_TECHNICAL_DESCRIPTION_MARKET_POST_UPDATE = 'sigtec.report_technical.description_market.post_update';
    const REPORT_TECHNICAL_DESCRIPTION_MARKET_PRE_DELETE = 'sigtec.report_technical.description_market.pre_delete';
    const REPORT_TECHNICAL_DESCRIPTION_MARKET_POST_DELETE = 'sigtec.report_technical.description_market.post_delete';
    
    /**
     * Eventos de los productos fabricados
     */
    const REPORT_TECHNICAL_PRODUCT_MANUFACTURED_PRE_CREATE = 'sigtec.report_technical.product_manufactured.pre_create';
    const REPORT_TECHNICAL_PRODUCT_MANUFACTURED_POST_CREATE= 'sigtec.report_technical.product_manufactured.post_create';
    const REPORT_TECHNICAL_PRODUCT_MANUFACTURED_PRE_UPDATE = 'sigtec.report_technical.product_manufactured.pre_update';
    const REPORT_TECHNICAL_PRODUCT_MANUFACTURED_POST_UPDATE = 'sigtec.report_technical.product_manufactured.post_update';
    const REPORT_TECHNICAL_PRODUCT_MANUFACTURED_PRE_DELETE = 'sigtec.report_technical.product_manufactured.pre_delete';
    const REPORT_TECHNICAL_PRODUCT_MANUFACTURED_POST_DELETE = 'sigtec.report_technical.product_manufactured.post_delete';
    
    /**
     * Eventos del nivel de produccion
     */
    const REPORT_TECHNICAL_PRODUCTION_LEVEL_PRE_CREATE = 'sigtec.report_technical.production_level.pre_create';
    const REPORT_TECHNICAL_PRODUCTION_LEVEL_POST_CREATE= 'sigtec.report_technical.production_level.post_create';
    const REPORT_TECHNICAL_PRODUCTION_LEVEL_PRE_UPDATE = 'sigtec.report_technical.production_level.pre_update';
    const REPORT_TECHNICAL_PRODUCTION_LEVEL_POST_UPDATE = 'sigtec.report_technical.production_level.post_update';
    const REPORT_TECHNICAL_PRODUCTION_LEVEL_PRE_DELETE = 'sigtec.report_technical.production_level.pre_delete';
    const REPORT_TECHNICAL_PRODUCTION_LEVEL_POST_DELETE = 'sigtec.report_technical.production_level.post_delete';
}
