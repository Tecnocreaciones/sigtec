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
            
        $manager->flush();
    }
}