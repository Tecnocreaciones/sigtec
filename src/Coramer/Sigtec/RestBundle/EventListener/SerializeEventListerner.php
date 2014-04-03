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

use JMS\Serializer\EventDispatcher\Events;
use JMS\Serializer\EventDispatcher\EventSubscriberInterface;
use Symfony\Bundle\FrameworkBundle\Translation\Translator;
use Symfony\Component\Routing\Router;
use JMS\Serializer\EventDispatcher\ObjectEvent;

/**
 * Description of SerializeEventListerner
 *
 * @author inhack20
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
        );
    }
    
    /**
     * Captura el evento luego que se serealia una compañia
     * @param \JMS\Serializer\EventDispatcher\ObjectEvent $event
     */
    function onPostSerializeCompany(ObjectEvent $event) {
        $object = $event->getObject();
        $event->getVisitor()->addData('_links', array(
            'self' => array(
                'href' => $this->generateUrl('coramer_sigtec_company_show',array('id' => $object->getId()))
                ),
            'edit' => array(
                'href' => $this->generateUrl('coramer_sigtec_company_update',array('id' => $object->getId()))
                ),
            'delete' => array(
                'href' => $this->generateUrl('coramer_sigtec_company_delete',array('id' => $object->getId()))
                ),
        ));
    }
    
    protected function generateUrl($route,array $parameters){
        return $this->router->generate($route, $parameters, Router::ABSOLUTE_URL);
    }
    public function setRouter(Router $router) {
        $this->router = $router;
    }
    
    public function getTranslator() {
        return $this->translator;
    }

    public function setTranslator(Translator $translator) {
        $this->translator = $translator;
    }
}
