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
        
        $this->addUserMenu($menu, $section);
        
        $menu->addChild('admin', array(
            'route' => 'sonata_admin_dashboard',
            'labelAttributes' => array('icon' => 'icon-card'),
            'linkAttributes' => array('target' => '_blank'),
        ))->setLabel($this->translate(sprintf('sigtec.backend.menu.%s.admin', 'sidebar')));
        
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
                    'route' => 'coramer_sigtec_backend_company_client_index',
                    ))
                ->setLabel($this->translate(sprintf('sigtec.backend.menu.%s.client.company', $section)));
        $child
                ->addChild('client.technical_reports', array(
                    'route' => 'coramer_sigtec_backend_company_report_technical_client_index',
                    ))
                ->setLabel($this->translate(sprintf('sigtec.backend.menu.%s.client.technical_reports', $section)));
        
        
//            $subchild = $this->factory->createItem('subclient',
//                        $this->getSecondLevelOptions(array(
//                        'uri' => null,
//                        'labelAttributes' => array('icon' => 'icon-book',),
//                        ))
//                    )
//                    ->setLabel($this->translate(sprintf('menu.%s.clients', $section)));
//            $subchild
//                    ->addChild('subclient.manager', array(
//                        'route' => self::ROUTE_DEFAULT,
//                        ))
//                    ->setLabel($this->translate(sprintf('%s.client.manager', $section)));
//
//            $subchild->addChild('subclient.group', array(
//                        'route' => self::ROUTE_DEFAULT,
//                    ))
//                    ->setLabel($this->translate(sprintf('%s.generic.group', $section)));
//        
//        $child->addChild($subchild);
               
        $menu->addChild($child);
    }
    
    /**
     * Construye el menu de usuarios
     * 
     * @param \Knp\Menu\ItemInterface $menu
     * @param type $section
     */
    function addUserMenu(ItemInterface $menu, $section) {
        $child = $this->factory->createItem('user',
                    $this->getSecondLevelOptions(array(
                    'uri' => null,
                    'labelAttributes' => array('icon' => 'icon-book',),
                    ))
                )
                ->setLabel($this->translate(sprintf('sigtec.backend.menu.%s.user.user', $section)));
        $child
                ->addChild('user.company', array(
                    'route' => 'coramer_sigtec_backend_company_index',
                    ))
                ->setLabel($this->translate(sprintf('sigtec.backend.menu.%s.user.company', $section)));
        $child
                ->addChild('user.technical_reports', array(
                    'route' => 'coramer_sigtec_backend_company_report_technical_index',
                    ))
                ->setLabel($this->translate(sprintf('sigtec.backend.menu.%s.user.technical_reports', $section)));
        
        
            $subchild = $this->factory->createItem('user.report',
                        $this->getSecondLevelOptions(array(
                        'uri' => null,
                        'labelAttributes' => array('icon' => 'icon-book',),
                        ))
                    )
                    ->setLabel($this->translate(sprintf('sigtec.backend.menu.%s.report', $section)));
            $subchild
                    ->addChild('subclient.manager', array(
                        'route' => self::ROUTE_DEFAULT,
                        ))
                    ->setLabel($this->translate(sprintf('%s.user.manager', $section)));

            $subchild->addChild('subclient.group', array(
                        'route' => self::ROUTE_DEFAULT,
                    ))
                    ->setLabel($this->translate(sprintf('%s.generic.group', $section)));
        
        $child->addChild($subchild);
               
        $menu->addChild($child);
    }
}
