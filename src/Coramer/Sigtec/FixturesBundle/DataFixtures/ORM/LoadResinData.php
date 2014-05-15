<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com.ve
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Coramer\Sigtec\FixturesBundle\DataFixtures\ORM;

use Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Resin;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Description of LoadResinData
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class LoadResinData extends AbstractFixture implements FixtureInterface,  OrderedFixtureInterface
{
    public function getOrder() {
        return 1;
    }
    
    public function load(ObjectManager $manager) {
        $resin = new Resin();
        $resin->setDescription('PVC');
            $this->addReference('resin-PVC', $resin);
            $manager->persist($resin);
            
        $resin = new Resin();
        $resin->setDescription('PP');
            $this->addReference('resin-PP', $resin);
            $manager->persist($resin);
            
        $resin = new Resin();
        $resin->setDescription('PE');
            $this->addReference('resin-PE', $resin);
            $manager->persist($resin);
            
        //No comercializadas por Coramer
        $resin = new Resin();
        $resin->setDescription('PS')
              ->setMarketedByCoramer(false);
            $manager->persist($resin);
            
        $resin = new Resin();
        $resin->setDescription('PET')
              ->setMarketedByCoramer(false);
            $manager->persist($resin);
            
        $resin = new Resin();
        $resin->setDescription('PC')
              ->setMarketedByCoramer(false);
            $manager->persist($resin);
            
        $resin = new Resin();
        $resin->setDescription('ABS')
              ->setMarketedByCoramer(false);
            $manager->persist($resin);
            
        $manager->flush();
    }
}
