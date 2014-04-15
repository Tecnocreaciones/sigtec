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

use Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Port;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Description of LoadPortData
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class LoadPortData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $port = new Port();
        $port->setDescription('Bachaquero');
            $manager->persist($port);
            
        $port = new Port();
        $port->setDescription('Cabello');
            $manager->persist($port);
            
        $port = new Port();
        $port->setDescription('Coro');
            $manager->persist($port);
            
        $port = new Port();
        $port->setDescription('Cúcuta');
            $manager->persist($port);
            
        $port = new Port();
        $port->setDescription('El Tablazo');
            $manager->persist($port);
            
        $port = new Port();
        $port->setDescription('Guanta');
            $manager->persist($port);
            
        $port = new Port();
        $port->setDescription('Guayaquil');
            $manager->persist($port);
            
        $port = new Port();
        $port->setDescription('La Guaira');
            $manager->persist($port);
            
        $port = new Port();
        $port->setDescription('Maicao');
            $manager->persist($port);
            
        $port = new Port();
        $port->setDescription('Maracaibo');
            $manager->persist($port);
            
        $port = new Port();
        $port->setDescription('Miami');
            $manager->persist($port);
            
        $port = new Port();
        $port->setDescription('Paraguachón');
            $manager->persist($port);
            
        $port = new Port();
        $port->setDescription('Puerto Principe');
            $manager->persist($port);
            
        $port = new Port();
        $port->setDescription('Punto Fijo');
            $manager->persist($port);
            
        $port = new Port();
        $port->setDescription('Río Hacha');
            $manager->persist($port);
            
        $port = new Port();
        $port->setDescription('San Antonio');
            $manager->persist($port);
            
        $port = new Port();
        $port->setDescription('San Felix');
            $manager->persist($port);
            
        $port = new Port();
        $port->setDescription('Sta. Elena');
            $manager->persist($port);
            
        $port = new Port();
        $port->setDescription('Ureña');
            $manager->persist($port);
            
        $manager->flush();
    }
}