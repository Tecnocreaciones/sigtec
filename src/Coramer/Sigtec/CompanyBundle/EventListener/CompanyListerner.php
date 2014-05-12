<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Coramer\Sigtec\CompanyBundle\EventListener;

/**
 * Description of CompanyListerner
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class CompanyListerner implements \Symfony\Component\EventDispatcher\EventSubscriberInterface, \Symfony\Component\DependencyInjection\ContainerAwareInterface
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
    
    function onAddOrRemoveElements(\Coramer\Sigtec\CompanyBundle\Event\CompanyEvent $event)
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

    public function setContainer(\Symfony\Component\DependencyInjection\ContainerInterface $container = null) {
        $this->container = $container;
    }
    
    public function getEntityManager()
    {
        return $this->container->get('doctrine')->getManager();
    }
    
    /**
     * @return \Coramer\Sigtec\CompanyBundle\Manager\CompanyManager
     */
    function getCompanyManager()
    {
        return $this->container->get('coramer_sigtec_company.company_manager');
    }
}
