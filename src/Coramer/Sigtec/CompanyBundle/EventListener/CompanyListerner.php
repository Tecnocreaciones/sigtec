<?php
namespace Coramer\Sigtec\CompanyBundle\EventListener;

use Coramer\Sigtec\CompanyBundle\Event\CompanyEvent;
use Coramer\Sigtec\CompanyBundle\Manager\CompanyManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Escuchador de eventos de compañia
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class CompanyListerner implements EventSubscriberInterface, ContainerAwareInterface
{
    private $container;

    public static function getSubscribedEvents() 
    {   
        return array(
            Events::PLANT_ADD => 'onAddOrRemoveElements',
            Events::PLANT_UPDATE => 'onAddOrRemoveElements',
            Events::PLANT_REMOVE => 'onAddOrRemoveElements',
            
            Events::CONTACT_ADD => 'onAddOrRemoveElements',
            Events::CONTACT_UPDATE => 'onAddOrRemoveElements',
            Events::CONTACT_REMOVE => 'onAddOrRemoveElements',
        );
    }
    
    function onAddOrRemoveElements(CompanyEvent $event)
    {
        $company = $event->getCompany();
        if($this->getCompanyManager()->isValidRegistration($company)){
            $company->setValid(true);
        }else{
            $company->setValid(false);
        }
        $em = $this->getEntityManager();
        $em->persist($company);
        $em->flush();
    }

    public function setContainer(ContainerInterface $container = null) {
        $this->container = $container;
    }
    
    public function getEntityManager()
    {
        return $this->container->get('doctrine')->getManager();
    }
    
    /**
     * @return CompanyManager
     */
    function getCompanyManager()
    {
        return $this->container->get('coramer_sigtec_company.company_manager');
    }
}
