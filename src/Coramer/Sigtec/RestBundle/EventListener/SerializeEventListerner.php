<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com.ve
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Coramer\Sigtec\RestBundle\EventListener;

use Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\DetailProductStorage;
use JMS\Serializer\EventDispatcher\Events;
use JMS\Serializer\EventDispatcher\EventSubscriberInterface;
use JMS\Serializer\EventDispatcher\ObjectEvent;
use Symfony\Bundle\FrameworkBundle\Translation\Translator;
use Symfony\Component\Routing\Router;

/**
 * Description of SerializeEventListerner
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class SerializeEventListerner implements EventSubscriberInterface
{
    /**
     * 
     * @var Router
     */
    private $router;
    
    /**
     *
     * @var Translator
     */
    private $translator;
    
    public static function getSubscribedEvents() {
        return array(
            array('event' => Events::POST_SERIALIZE, 'method' => 'onPostSerializeCompany', 'class' => 'Coramer\Sigtec\CompanyBundle\Entity\Company','format' => 'json'),
            array('event' => Events::POST_SERIALIZE, 'method' => 'onPostSerializePlant', 'class' => 'Coramer\Sigtec\CompanyBundle\Entity\Plant','format' => 'json'),
            array('event' => Events::POST_SERIALIZE, 'method' => 'onPostSerializeReportTechnical', 'class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\ReportTechnical','format' => 'json'),
            array('event' => Events::POST_SERIALIZE, 'method' => 'onPostSerializeDetailProductStorage', 'class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\DetailProductStorage','format' => 'json'),
            array('event' => Events::POST_SERIALIZE, 'method' => 'onPostSerializeProductionLevel', 'class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\ProductionLevel','format' => 'json'),
            array('event' => Events::POST_SERIALIZE, 'method' => 'onPostSerializeProductManufactured', 'class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\ProductManufactured','format' => 'json'),
        );
    }
    
    /**
     * Captura el evento luego que se serealia una compañia
     * @param ObjectEvent $event
     */
    function onPostSerializeCompany(ObjectEvent $event) {
        $object = $event->getObject();
        $event->getVisitor()->addData('_links', array(
            'self' => array(
                'href' => $this->generateUrl('coramer_sigtec_backend_company_show',array('id' => $object->getId()))
                ),
            'edit' => array(
                'href' => $this->generateUrl('coramer_sigtec_backend_company_update',array('id' => $object->getId()))
                ),
            'delete' => array(
                'href' => $this->generateUrl('coramer_sigtec_backend_company_delete',array('id' => $object->getId()))
                ),
            'validate_rif' => array(
                'href' => $this->generateUrl('coramer_sigtec_backend_company_validaterif',array('id' => $object->getId()))
                ),
            'activate' => array(
                'href' => $this->generateUrl('coramer_sigtec_backend_company_activate',array('id' => $object->getId()))
                ),
            'inactivate' => array(
                'href' => $this->generateUrl('coramer_sigtec_backend_company_inactivate',array('id' => $object->getId()))
                ),
        ));
    }
    
    /**
     * Captura el evento luego que se serealia una planta
     * @param ObjectEvent $event
     */
    function onPostSerializePlant(ObjectEvent $event) {
        $object = $event->getObject();
        $event->getVisitor()->addData('_links', array(
            'self' => array(
                'href' => $this->generateUrl('coramer_sigtec_backend_company_plant_show',array('id' => $object->getId()))
                ),
            'edit' => array(
                'href' => $this->generateUrl('coramer_sigtec_backend_company_plant_update',array('id' => $object->getId()))
                ),
            'delete' => array(
                'href' => $this->generateUrl('coramer_sigtec_backend_company_plant_delete',array('id' => $object->getId()))
                ),
        ));
    }
    /**
     * Captura el evento luego que se serealia un reporte tecnico
     * @param ObjectEvent $event
     */
    function onPostSerializeReportTechnical(ObjectEvent $event) {
        $object = $event->getObject();
        $event->getVisitor()->addData('_links', array(
            'self' => array(
                'href' => $this->generateUrl('coramer_sigtec_backend_company_report_technical_show',array('id' => $object->getId()))
                ),
            'edit' => array(
                'href' => $this->generateUrl('coramer_sigtec_backend_company_report_technical_update',array('id' => $object->getId()))
                ),
            'delete' => array(
                'href' => $this->generateUrl('coramer_sigtec_backend_company_report_technical_delete',array('id' => $object->getId()))
                ),
        ));
    }
    
    /**
     * Captura el evento luego que se serealia un nivel de produccion del reporte tecnico
     * @param ObjectEvent $event
     */
    function onPostSerializeProductionLevel(ObjectEvent $event) {
        $object = $event->getObject();
        $event->getVisitor()->addData('_links', array(
            'edit' => array(
                'href' => $this->generateUrl('coramer_sigtec_backend_company_report_technical_properties_production_level_update',array('id' => $object->getReportTechnical()->getId(),'slug' =>$object->getId()))
                ),
            'delete' => array(
                'href' => $this->generateUrl('coramer_sigtec_backend_company_report_technical_properties_production_level_delete',array('id' => $object->getReportTechnical()->getId(),'slug' =>$object->getId()))
                ),
        ));
    }
    
    /**
     * Captura el evento luego que se serealia un producto fabricado del reporte tecnico
     * @param ObjectEvent $event
     */
    function onPostSerializeProductManufactured(ObjectEvent $event) {
        $object = $event->getObject();
        $event->getVisitor()->addData('_links', array(
            'edit' => array(
                'href' => $this->generateUrl('coramer_sigtec_backend_company_report_technical_properties_product_manufactured_update',array('id' => $object->getReportTechnical()->getId(),'slug' =>$object->getId()))
                ),
            'delete' => array(
                'href' => $this->generateUrl('coramer_sigtec_backend_company_report_technical_properties_product_manufactured_delete',array('id' => $object->getReportTechnical()->getId(),'slug' =>$object->getId()))
                ),
        ));
    }
    
    /**
     * Captura el evento luego que se serealia un detalle de almacenaje del producto del reporte tecnico
     * @param ObjectEvent $event
     */
    function onPostSerializeDetailProductStorage(ObjectEvent $event) {
        $object = $event->getObject();
        $storages = array(
            DetailProductStorage::STORAGE_OUTDOOR => $this->trans('sigtec.storage.outdoor',array(),'CoramerSigtecReportTechnicalBundle'),
            DetailProductStorage::STORAGE_CONFINED => $this->trans('sigtec.storage.confined',array(),'CoramerSigtecReportTechnicalBundle'),
        );
        $separated_resins = array(
                    DetailProductStorage::SEPARATED_RESIN_NOT_APPLY => $this->trans('N/A',array(),'CoramerSigtecReportTechnicalBundle') ,
                    DetailProductStorage::SEPARATED_RESIN_YES => $this->trans('sigtec.yes',array(),'CoramerSigtecReportTechnicalBundle') ,
                    DetailProductStorage::SEPARATED_RESIN_NO => $this->trans('sigtec.no',array(),'CoramerSigtecReportTechnicalBundle') ,
                );
        $event->getVisitor()->addData('labels', array(
            'storage' => $storages[$object->getStorage()],
            'separated_resin' => $separated_resins[$object->getSeparatedResin()],
        ));
        $event->getVisitor()->addData('_links', array(
            'delete' => array(
                'href' => $this->generateUrl('coramer_sigtec_backend_company_report_technical_detail_product_storage_delete',array('id' => $object->getDescriptionAreaCompany()->getReportTechnical()->getId(),'slug'=> $object->getId()))
                ),
        ));
    }
    
    protected function generateUrl($route,array $parameters){
        return $this->router->generate($route, $parameters, Router::ABSOLUTE_URL);
    }
    public function setRouter(Router $router) {
        $this->router = $router;
    }
    function trans($id, $parameters = array(), $domain = 'messages')
    {
        return $this->getTranslator()->trans($id, $parameters, $domain);
    }
    public function getTranslator() {
        return $this->translator;
    }

    public function setTranslator(Translator $translator) {
        $this->translator = $translator;
    }
}
