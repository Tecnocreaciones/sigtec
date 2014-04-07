<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com.ve
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Coramer\Sigtec\CoreBundle\DataFixtures\ORM;

/**
 * Carga datos de prueba
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com.ve>
 */
class LoadFakerData implements \Doctrine\Common\DataFixtures\FixtureInterface
{
    public function load(\Doctrine\Common\Persistence\ObjectManager $manager) {
        // load objects from a yaml file
        $loader = new \Nelmio\Alice\Loader\Yaml();
        $objects = $loader->load(__DIR__.'/fixtures.yml');

        // optionally persist them into the doctrine object manager
        // you can also do that yourself or persist them in another way
        // if you do not use doctrine
        $persister = new \Nelmio\Alice\ORM\Doctrine($manager);
        $persister->persist($objects);
    }
}
