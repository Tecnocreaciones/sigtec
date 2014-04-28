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
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class LoadFakerData implements \Doctrine\Common\DataFixtures\FixtureInterface,  \Symfony\Component\DependencyInjection\ContainerAwareInterface
{
    /**
     *
     * @var \Symfony\Component\DependencyInjection\ContainerInterface
     */
    private $container;
    
    public function load(\Doctrine\Common\Persistence\ObjectManager $manager)
    {
        if($this->container->get('kernel')->getEnvironment() != 'test'){
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

    public function setContainer(\Symfony\Component\DependencyInjection\ContainerInterface $container = null) {
        $this->container = $container;
    }

}
