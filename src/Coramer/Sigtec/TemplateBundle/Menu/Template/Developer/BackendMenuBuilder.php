<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com.ve
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Coramer\Sigtec\TemplateBundle\Menu\Template\Developer;

use Knp\Menu\ItemInterface;
use Symfony\Component\HttpFoundation\Request;
use Tecnocreaciones\Vzla\GovernmentBundle\Menu\Template\Developer\BackendMenuBuilder as BaseBackendMenuBuilder;

/**
 * Main menu builder.
 *
 * @author Anais Ortega <adcom23@tecnocreaciones.com.ve>
 */
class BackendMenuBuilder extends BaseBackendMenuBuilder
{
    /**
     * Builds backend sidebar menu.
     *
     * @param Request $request
     *
     * @return ItemInterface
     */
    public function createSidebarMenu(Request $request)
    {
        $menu = $this->factory->createItem('root', array(
            'childrenAttributes' => array(
                'class' => 'big-menu',
            )
        ));
        $section = 'sidebar';
        $menu->addChild('home',array(
            'route' => 'coramer_sigtec_web_dashboard_index',
            'labelAttributes' => array('icon' => 'icon-home'),
        ))->setLabel($this->translate(sprintf('sigtec.backend.menu.%s.home', $section)));
        
        $this->addClientMenu($menu, $section);
        
        $menu->addChild('support', array(
            'route' => self::ROUTE_DEFAULT,
            'labelAttributes' => array('icon' => 'icon-info'),
        ))->setLabel($this->translate(sprintf('sigtec.backend.menu.%s.support', 'sidebar')));
        return $menu;
    }
    
    /**
     * Construye el menu de clientes
     * 
     * @param \Knp\Menu\ItemInterface $menu
     * @param type $section
     */
    function addClientMenu(ItemInterface $menu, $section) {
        $child = $this->factory->createItem('client',
                    $this->getSecondLevelOptions(array(
                    'uri' => null,
                    'labelAttributes' => array('icon' => 'icon-book',),
                    ))
                )
                ->setLabel($this->translate(sprintf('sigtec.backend.menu.%s.client', $section)));
        $child
                ->addChild('client.company', array(
                    'route' => 'coramer_sigtec_backend_company_index',
                    ))
                ->setLabel($this->translate(sprintf('sigtec.backend.menu.%s.client.company', $section)));
        $child
                ->addChild('client.technical_reports', array(
                    'route' => 'coramer_sigtec_backend_company_report_technical_index',
                    ))
                ->setLabel($this->translate(sprintf('sigtec.backend.menu.%s.client.technical_reports', $section)));
        
        
            $subchild = $this->factory->createItem('subclient',
                        $this->getSecondLevelOptions(array(
                        'uri' => null,
                        'labelAttributes' => array('icon' => 'icon-book',),
                        ))
                    )
                    ->setLabel($this->translate(sprintf('menu.%s.clients', $section)));
            $subchild
                    ->addChild('subclient.manager', array(
                        'route' => self::ROUTE_DEFAULT,
                        ))
                    ->setLabel($this->translate(sprintf('%s.client.manager', $section)));

            $subchild->addChild('subclient.group', array(
                        'route' => self::ROUTE_DEFAULT,
                    ))
                    ->setLabel($this->translate(sprintf('%s.generic.group', $section)));
        
        $child->addChild($subchild);
               
        $menu->addChild($child);
    }
    
    /**
     * Contruye el menu de mensajes
     * 
     * @param \Knp\Menu\ItemInterface $menu
     * @param type $section
     */
    function addMessageMenu(ItemInterface $menu, $section) {
        
        $child = $this->factory->createItem('message',
                    $this->getSecondLevelOptions(array(
                    'uri' => '#',
                    'labelAttributes' => array('icon' => 'icon-envelope'),
                    ))
                )->setLabel($this->translate(sprintf('sigtec.backend.menu.%s.message', $section)));
        
        $childMessage = $this->factory->createItem('message.sms', array(
            'route' => 'sms_facilito_backend_message_sms_index',
        ))
                ->setLabel($this->translate(sprintf('sigtec.backend.menu.%s.message.sms', $section)));
        
        $child->addChild($childMessage);
        
        $childEmail = $this->factory->createItem('message.email',array(
            'route' => 'sms_facilito_backend_message_email_index',
        ))
                ->setLabel($this->translate(sprintf('sigtec.backend.menu.%s.message.email', $section)));
        $child->addChild($childEmail);
        
        $childSocialNetworks = $this->factory->createItem('message.social_networks', $this->getThirdLevelOptions())
                ->setLabel($this->translate(sprintf('sigtec.backend.menu.%s.message.social_networks', $section)));
                
                $childSocialNetworks->addChild('message.social_networks.facebook',array(
                     'route' => self::ROUTE_DEFAULT
                 ))->setLabel($this->translate(sprintf('sigtec.backend.menu.%s.message.social_networks.facebook', $section)));
                
                $childSocialNetworks->addChild('message.social_networks.twitter',array(
                     'route' => self::ROUTE_DEFAULT
                 ))->setLabel($this->translate(sprintf('sigtec.backend.menu.%s.message.social_networks.twitter', $section)));
                
                $childSocialNetworks->addChild('message.social_networks.google_plus',array(
                     'route' => self::ROUTE_DEFAULT
                 ))->setLabel($this->translate(sprintf('sigtec.backend.menu.%s.message.social_networks.google_plus', $section)));
        
        $child->addChild($childSocialNetworks);
        
        $child->addChild('message.statistics', array(
                    'route' => self::ROUTE_DEFAULT,
                ))
                ->setLabel($this->translate(sprintf('sigtec.backend.menu.%s.message.statistics', $section)));
        
        $menu->addChild($child);
    }
    
    /**
     * Construye el menu de planes y tarifas
     * 
     * @param \Knp\Menu\ItemInterface $menu
     * @param type $section
     */
    function addPlansMenu(ItemInterface $menu, $section) {
        $child = $this->factory->createItem('plans_tariffs',
                    $this->getSecondLevelOptions(array(
                    'uri' => '#',
                    'labelAttributes' => array('icon' => 'icon-shopping-cart'),
                    ))
                )
                ->setLabel($this->translate(sprintf('sigtec.backend.menu.%s.plans_tariffs', $section)));
        
                $childPlans = $this->factory->createItem('plans_tariffs.plans',$this->getThirdLevelOptions())
                        ->setLabel($this->translate(sprintf('sigtec.backend.menu.%s.plans_tariffs.plans', $section)));
                    
                    $childPlans->addChild('plans_tariffs.plans.new',array(
                         'route' => self::ROUTE_DEFAULT
                     ))->setLabel($this->translate(sprintf('sigtec.backend.menu.%s.generic.new', $section)));
                    
                    $childPlans->addChild('plans_tariffs.plans.manage',array(
                         'route' => self::ROUTE_DEFAULT
                     ))->setLabel($this->translate(sprintf('sigtec.backend.menu.%s.generic.manage', $section)));
                    
                    $childPlans->addChild('plans_tariffs.plans.renew_plan',array(
                         'route' => self::ROUTE_DEFAULT
                     ))->setLabel($this->translate(sprintf('sigtec.backend.menu.%s.plans.renew_plan', $section)));
                    
                    $childPlans->addChild('plans_tariffs.plans.change_of_plan',array(
                         'route' => self::ROUTE_DEFAULT
                     ))->setLabel($this->translate(sprintf('sigtec.backend.menu.%s.plans.change_of_plan', $section)));

                $child->addChild($childPlans);
                
                $childTariffs = $this->factory->createItem('plans_tariffs.tariffs',$this->getThirdLevelOptions())
                        ->setLabel($this->translate(sprintf('sigtec.backend.menu.%s.plans_tariffs.tariffs', $section)));
                
                    $childTariffs->addChild('plans_tariffs.tariffs.new',array(
                         'route' => self::ROUTE_DEFAULT
                     ))->setLabel($this->translate(sprintf('sigtec.backend.menu.%s.generic.new', $section)));
                    
                    $childTariffs->addChild('plans_tariffs.tariffs.manage',array(
                         'route' => self::ROUTE_DEFAULT
                     ))->setLabel($this->translate(sprintf('sigtec.backend.menu.%s.generic.manage', $section)));
                
                $child->addChild($childTariffs);
                
        $menu->addChild($child);
    }
    
    /**
     * Construye el menu de pagos
     * 
     * @param \Knp\Menu\ItemInterface $menu
     * @param type $section
     */
    function addPaymentsMenu(ItemInterface $menu, $section) {
        $child = $this->factory->createItem('payments',
                    $this->getSecondLevelOptions(array(
                    'uri' => '#',
                    'labelAttributes' => array('icon' => 'icon-money'),
                    ))
                )
                ->setLabel($this->translate(sprintf('sigtec.backend.menu.%s.payments', $section)));
                
        $child->addChild('payments.new',array(
                         'route' => self::ROUTE_DEFAULT
                     ))->setLabel($this->translate(sprintf('sigtec.backend.menu.%s.generic.new', $section)));
        
        $child->addChild('payments.history',array(
                         'route' => self::ROUTE_DEFAULT
                     ))->setLabel($this->translate(sprintf('sigtec.backend.menu.%s.generic.history', $section)));
        
        $child->addChild('payments.pending',array(
                         'route' => self::ROUTE_DEFAULT
                     ))->setLabel($this->translate(sprintf('sigtec.backend.menu.%s.payments.pending', $section)));
        
        $menu->addChild($child);
    }
    
    function addCustomersMenu(ItemInterface $menu, $section) {
         $child = $this->factory->createItem('customers',
                    $this->getSecondLevelOptions(array(
                    'uri' => '#',
                    'labelAttributes' => array('icon' => 'icon-user'),
                    ))
                )
                ->setLabel($this->translate(sprintf('sigtec.backend.menu.%s.customers', $section)));
                
            $child->addChild('customers.new',array(
                             'route' => self::ROUTE_DEFAULT
                         ))->setLabel($this->translate(sprintf('sigtec.backend.menu.%s.generic.new', $section)));
            
            $child->addChild('customers.manage',array(
                             'route' => self::ROUTE_DEFAULT
                         ))->setLabel($this->translate(sprintf('sigtec.backend.menu.%s.generic.manage', $section)));
            
            $child->addChild('customers.group',array(
                             'route' => self::ROUTE_DEFAULT
                         ))->setLabel($this->translate(sprintf('sigtec.backend.menu.%s.generic.group', $section)));
            
         $menu->addChild($child);   
    }
}
