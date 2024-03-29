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

use Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\AdditiveUsed;
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
class SerializeEventListerner implements EventSubscriberInterface,  \Symfony\Component\DependencyInjection\ContainerAwareInterface
{
    /**
     *
     * @var \Symfony\Component\DependencyInjection\ContainerInterface
     */
    private $container;
    
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
            array('event' => Events::POST_SERIALIZE, 'method' => 'onPostSerializeAdditiveUsed', 'class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\AdditiveUsed','format' => 'json'),
            array('event' => Events::POST_SERIALIZE, 'method' => 'onPostSerializeDetailOtherPlasticResin', 'class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\OtherPlasticResin\DetailOtherPlasticResin','format' => 'json'),
            array('event' => Events::POST_SERIALIZE, 'method' => 'onPostSerializeDescriptionMarket', 'class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionMarket','format' => 'json'),
            array('event' => Events::POST_SERIALIZE, 'method' => 'onPostSerializeExportationProduct', 'class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\Exportation\ExportationProduct','format' => 'json'),
            array('event' => Events::POST_SERIALIZE, 'method' => 'onPostSerializeGrowingMarket', 'class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\GrowthPotential\GrowingMarket','format' => 'json'),
            array('event' => Events::POST_SERIALIZE, 'method' => 'onPostSerializeOtherMarket', 'class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\GrowthPotential\OtherMarket','format' => 'json'),
            array('event' => Events::POST_SERIALIZE, 'method' => 'onPostSerializeNewMachinery', 'class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\GrowthPotential\NewMachinery','format' => 'json'),
            array('event' => Events::POST_SERIALIZE, 'method' => 'onPostSerializeFeatureMachinery', 'class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\FeatureMachinery','format' => 'json'),
            array('event' => Events::POST_SERIALIZE, 'method' => 'onPostSerializeMachinery', 'class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\ProductionLevel\Machinery','format' => 'json'),
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
            'cancel' => array(
                'href' => $this->generateUrl('coramer_sigtec_backend_company_report_technical_cancel',array('id' => $object->getId()))
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
     * Captura el evento luego que se serealia un uso de aditivo del reporte tecnico
     * @param ObjectEvent $event
     */
    function onPostSerializeAdditiveUsed(ObjectEvent $event) {
        $object = $event->getObject();
        
        $typeConcentration = array(
            AdditiveUsed::TYPE_CONCENTRATION_PERCENTAGE => '%',
            AdditiveUsed::TYPE_CONCENTRATION_PPC => 'PPC',
        );
        $event->getVisitor()->addData('_links', array(
            'edit' => array(
                'href' => $this->generateUrl('coramer_sigtec_backend_company_report_technical_properties_additive_used_update',array('id' => $object->getReportTechnical()->getId(),'slug' =>$object->getId()))
                ),
            'delete' => array(
                'href' => $this->generateUrl('coramer_sigtec_backend_company_report_technical_properties_additive_used_delete',array('id' => $object->getReportTechnical()->getId(),'slug' =>$object->getId()))
                ),
        ));
        $event->getVisitor()->addData('_labels', array(
            'type_concentration' => $typeConcentration[$object->getTypeConcentration()],
        ));
    }
    
    /**
     * Captura el evento luego que se serealiza un detalle de otra resina plastica
     * @param ObjectEvent $event
     */
    function onPostSerializeDetailOtherPlasticResin(ObjectEvent $event) {
        $object = $event->getObject();
        $reportTechnical = $object->getOtherPlasticResin()->getReportTechnical();
        
        $event->getVisitor()->addData('_links', array(
            'edit' => array(
                'href' => $this->generateUrl('coramer_sigtec_backend_company_report_technical_properties_detail_other_plastic_resin_update',array('id' => $reportTechnical->getId(),'slug' =>$object->getId()))
                ),
            'delete' => array(
                'href' => $this->generateUrl('coramer_sigtec_backend_company_report_technical_properties_detail_other_plastic_resin_delete',array('id' => $reportTechnical->getId(),'slug' =>$object->getId()))
                ),
        ));
    }
    
    /**
     * Captura el evento luego que se serializa una descripcion de mercado
     * @param ObjectEvent $event
     */
    function onPostSerializeDescriptionMarket(ObjectEvent $event) {
        $object = $event->getObject();
        $reportTechnical = $object->getReportTechnical();
        
        $event->getVisitor()->addData('_links', array(
            'edit' => array(
                'href' => $this->generateUrl('coramer_sigtec_backend_company_report_technical_properties_description_market_update',array('id' => $reportTechnical->getId(),'slug' =>$object->getId()))
                ),
            'delete' => array(
                'href' => $this->generateUrl('coramer_sigtec_backend_company_report_technical_properties_description_market_delete',array('id' => $reportTechnical->getId(),'slug' =>$object->getId()))
                ),
        ));
    }
    
    /**
     * Captura el evento luego que se serializa una exportacion de producto
     * @param ObjectEvent $event
     */
    function onPostSerializeExportationProduct(ObjectEvent $event) {
        $object = $event->getObject();
        $reportTechnical = $object->getExportation()->getReportTechnical();
        
        $event->getVisitor()->addData('_links', array(
            'edit' => array(
                'href' => $this->generateUrl('coramer_sigtec_backend_company_report_technical_properties_exportation_product_update',array('id' => $reportTechnical->getId(),'slug' =>$object->getId()))
                ),
            'delete' => array(
                'href' => $this->generateUrl('coramer_sigtec_backend_company_report_technical_properties_exportation_product_delete',array('id' => $reportTechnical->getId(),'slug' =>$object->getId()))
                ),
        ));
    }
    
    /**
     * Captura el evento luego que se serializa un mercado en crecimiento
     * @param ObjectEvent $event
     */
    function onPostSerializeGrowingMarket(ObjectEvent $event) {
        $object = $event->getObject();
        $reportTechnical = $object->getGrowthPotential()->getReportTechnical();
        
        $event->getVisitor()->addData('_links', array(
            'edit' => array(
                'href' => $this->generateUrl('coramer_sigtec_backend_company_report_technical_properties_growth_potential_growth_market_update',array('id' => $reportTechnical->getId(),'slug' =>$object->getId()))
                ),
            'delete' => array(
                'href' => $this->generateUrl('coramer_sigtec_backend_company_report_technical_properties_growth_potential_growth_market_delete',array('id' => $reportTechnical->getId(),'slug' =>$object->getId()))
                ),
        ));
    }
    
    /**
     * Captura el evento luego que se serializa un mercado en crecimiento
     * @param ObjectEvent $event
     */
    function onPostSerializeOtherMarket(ObjectEvent $event) {
        $object = $event->getObject();
        $reportTechnical = $object->getGrowthPotential()->getReportTechnical();
        
        $event->getVisitor()->addData('_links', array(
            'edit' => array(
                'href' => $this->generateUrl('coramer_sigtec_backend_company_report_technical_properties_growth_potential_other_market_update',array('id' => $reportTechnical->getId(),'slug' =>$object->getId()))
                ),
            'delete' => array(
                'href' => $this->generateUrl('coramer_sigtec_backend_company_report_technical_properties_growth_potential_other_market_delete',array('id' => $reportTechnical->getId(),'slug' =>$object->getId()))
                ),
        ));
    }
    
    /**
     * Captura el evento luego que se serializa una nueva maquinaria
     * @param ObjectEvent $event
     */
    function onPostSerializeNewMachinery(ObjectEvent $event) {
        $object = $event->getObject();
        $reportTechnical = $object->getGrowthPotential()->getReportTechnical();
        
        $event->getVisitor()->addData('_links', array(
            'edit' => array(
                'href' => $this->generateUrl('coramer_sigtec_backend_company_report_technical_properties_growth_potential_new_machinery_update',array('id' => $reportTechnical->getId(),'slug' =>$object->getId()))
                ),
            'delete' => array(
                'href' => $this->generateUrl('coramer_sigtec_backend_company_report_technical_properties_growth_potential_new_machinery_delete',array('id' => $reportTechnical->getId(),'slug' =>$object->getId()))
                ),
        ));
    }
    
    /**
     * Captura el evento luego que se serializa una caracteristica de maquinaria
     * @param ObjectEvent $event
     */
    function onPostSerializeFeatureMachinery(ObjectEvent $event) {
        $object = $event->getObject();
        
        $event->getVisitor()->addData('_labels', array(
            'label' => $this->trans(sprintf('sigtec.feature_machinery.label.%s',$object->getName()),array(),'CoramerSigtecReportTechnicalBundle'),
        ));
    }
    
    /**
     * Captura el evento luego que se serializa una maquinaria
     * @param ObjectEvent $event
     */
    function onPostSerializeMachinery(ObjectEvent $event) {
        $object = $event->getObject();
        $reportTechnical = $object->getProductionLevel()->getReportTechnical();
        $data = array();
        $i = 0;
        
        $event->getVisitor()->addData('_links', array(
            'delete' => array(
                'href' => $this->generateUrl('coramer_sigtec_backend_company_report_technical_properties_production_level_machinery_delete',array('id' => $reportTechnical->getId(),'slug' =>$object->getId()))
                ),
        ));
        
        $parameterResolver = $this->getFeatureParameterResolver();
        foreach ($object->getData() as $name => $value) {
            $value = $parameterResolver->getResolveValue($name, $value);
            $data[] = array(
                'pos' => $i,
                'name' => $name,
                'value' => $value,
            );
            $i++;
        }
        $event->getVisitor()->addData('_data', array(
            'options' => $data,
        ));
    }
    
    /**
     * Captura el evento luego que se serealia un detalle de almacenaje del producto del reporte tecnico
     * @param ObjectEvent $event
     */
    function onPostSerializeDetailProductStorage(ObjectEvent $event) {
        $object = $event->getObject();
        $event->getVisitor()->addData('labels', array(
            'storage' => $this->trans($object->getLabelStorage(),array(),'CoramerSigtecReportTechnicalBundle'),
            'separated_resin' => $this->trans($object->getLabelSeparatedResin(),array(),'CoramerSigtecReportTechnicalBundle'),
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
    
    public function setContainer(\Symfony\Component\DependencyInjection\ContainerInterface $container = null) {
        $this->container = $container;
    }
    
    /**
     * 
     * @return \Coramer\Sigtec\ReportTechnicalBundle\Resolve\FeatureMachine\ParameterResolver
     */
    private function getFeatureParameterResolver()
    {
        return $this->container->get('coramer_sigtec_report_technical.parameter_resolver');
    }
}
