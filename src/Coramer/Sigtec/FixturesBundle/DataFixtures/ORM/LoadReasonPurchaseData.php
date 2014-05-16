<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Coramer\Sigtec\FixturesBundle\DataFixtures\ORM;

use Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\ReasonPurchase;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Data base de razon de compra para las nuevas maquinarias
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class LoadReasonPurchaseData implements FixtureInterface
{
    public function load(ObjectManager $manager) {
        $reasonPurchase = new ReasonPurchase();
        $reasonPurchase
                ->setDescription('Obsolescencia')
                ->setHelp('Si están comprando equipos para sustituir otros.')
                ;
                $manager->persist($reasonPurchase);
                
        $reasonPurchase = new ReasonPurchase();
        $reasonPurchase
                ->setDescription('Completar oferta')
                ->setHelp('Fabricará un nuevo producto, pero dentro de su mismo mercado.')
                ;
                $manager->persist($reasonPurchase);
                
        $reasonPurchase = new ReasonPurchase();
        $reasonPurchase
                ->setDescription('Aumentar capacidad de producción')
                ->setHelp('Incrementar las T/mes(Toneladas por mes) generados por la empresa.')
                ;
                $manager->persist($reasonPurchase);
                
        $reasonPurchase = new ReasonPurchase();
        $reasonPurchase
                ->setDescription('Penetrar nuevos mercados')
                ->setHelp('Fabricará un producto diferente que pertenece a un nuevo mercado para la empresa.')
                ;
                $manager->persist($reasonPurchase);
                
        $reasonPurchase = new ReasonPurchase();
        $reasonPurchase
                ->setDescription('Mejorar calidad')
                ->setHelp('Equipos incorporados para aumentar la calidad del proceso y/o producto final.')
                ;
                $manager->persist($reasonPurchase);
                
        $reasonPurchase = new ReasonPurchase();
        $reasonPurchase
                ->setDescription('Reutilizar material')
                ->setHelp('Por ejemplo, adquisición de una recuperadora.')
                ;
                $manager->persist($reasonPurchase);
                
        $manager->flush();
    }
}
