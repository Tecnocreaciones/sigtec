<?php

/*
 * This file is part of the TecnocreacionesVzlaFixturesBundle package.
 * 
 * (c) www.tecnocreaciones.com.ve
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SIEMPRE\Core\DataFixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use SIEMPRE\Core\Entity\C_Regions;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Datos de los estados
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com.ve>
 */
class RegionsFixture extends AbstractFixture implements ContainerAwareInterface,  OrderedFixtureInterface {
    protected $container;

    public function load(ObjectManager $manager) {
        $entity = $this->container->get('entity');
        
        $c_PaysVE = $this->getReference('C_Pays-VE');
        
        $c_Regions = new C_Regions();
            $c_Regions->setEntity($entity);
            $c_Regions->setNom('Región Capital');
            $c_Regions->setCodeRegion('VE-RC'); 
            $c_Regions->setC_Pays($c_PaysVE);
                $manager->persist($c_Regions);
            $this->addReference('Regions-Capital', $c_Regions);
            
        $c_Regions = new C_Regions();
            $c_Regions->setEntity($entity);
            $c_Regions->setNom('Región Guayana');
            $c_Regions->setCodeRegion('VE-RC'); 
            $c_Regions->setC_Pays($c_PaysVE);
                $manager->persist($c_Regions);
            $this->addReference('Regions-Guayana', $c_Regions); 

        $c_Regions = new C_Regions();
            $c_Regions->setEntity($entity);
            $c_Regions->setNom('Región Insular');
            $c_Regions->setCodeRegion('VE-RC'); 
            $c_Regions->setC_Pays($c_PaysVE);
                $manager->persist($c_Regions);
            $this->addReference('Regions-Insular-Insular', $c_Regions); 
            
        $c_Regions = new C_Regions();
            $c_Regions->setEntity($entity);
            $c_Regions->setNom('Región Los Andes');
            $c_Regions->setCodeRegion('VE-RC'); 
            $c_Regions->setC_Pays($c_PaysVE);
                $manager->persist($c_Regions);
            $this->addReference('Regions-Los-Andes', $c_Regions); 

        $c_Regions = new C_Regions();
            $c_Regions->setEntity($entity);
            $c_Regions->setNom('Región Los Llanos');
            $c_Regions->setCodeRegion('VE-RC'); 
            $c_Regions->setC_Pays($c_PaysVE);
                $manager->persist($c_Regions);
            $this->addReference('Regions-Los-Llanos', $c_Regions); 

        $c_Regions = new C_Regions();
            $c_Regions->setEntity($entity);
            $c_Regions->setNom('Región Nor-Oriental');
            $c_Regions->setCodeRegion('VE-RC'); 
            $c_Regions->setC_Pays($c_PaysVE);
                $manager->persist($c_Regions);
            $this->addReference('Regions-Nor-Oriental', $c_Regions); 
            
        $c_Regions = new C_Regions();
            $c_Regions->setEntity($entity);
            $c_Regions->setNom('Región Zuliana');
            $c_Regions->setCodeRegion('VE-RC'); 
            $c_Regions->setC_Pays($c_PaysVE);
                $manager->persist($c_Regions);
            $this->addReference('Regions-Zuliana', $c_Regions); 
            
        $c_Regions = new C_Regions();
            $c_Regions->setEntity($entity);
            $c_Regions->setNom('Región Centro-Occidental');
            $c_Regions->setCodeRegion('VE-RC'); 
            $c_Regions->setC_Pays($c_PaysVE);
                $manager->persist($c_Regions);
            $this->addReference('Regions-Centro-Occidental', $c_Regions); 
            
        $c_Regions = new C_Regions();
            $c_Regions->setEntity($entity);
            $c_Regions->setNom('Región Central');
            $c_Regions->setCodeRegion('VE-RC'); 
            $c_Regions->setC_Pays($c_PaysVE);
                $manager->persist($c_Regions);
            $this->addReference('Regions-Central', $c_Regions); 

        $manager->flush();
    }
    
    public function getOrder() {
        return 3;
    }

    public function setContainer(ContainerInterface $container = null) {
        $this->container = $container;
    }

}