<?php

/*
 * This file is part of the TecnocreacionesVzlaFixturesBundle package.
 * 
 * (c) www.tecnocreaciones.com.ve
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tecnocreaciones\Vzla\FixturesBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Tecnocreaciones\Vzla\EntityBundle\Entity\Region;

/**
 * Data de estados
 *
 * @see https://github.com/marydn/venezuela-sql/blob/master/venezuela.sql
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class LoadRegionData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $countryVe = $this->getReference('Country-VE');
        
        $region = new Region();
            
            $region->setDescription('Región Capital');
            $region->setCode('VE-RC'); 
            $region->setCountry($countryVe);
                $manager->persist($region);
            $this->addReference('Region-Capital', $region);
            
        $region = new Region();
            
            $region->setDescription('Región Guayana');
            $region->setCode('VE-RC'); 
            $region->setCountry($countryVe);
                $manager->persist($region);
            $this->addReference('Region-Guayana', $region); 

        $region = new Region();
            
            $region->setDescription('Región Insular');
            $region->setCode('VE-RC'); 
            $region->setCountry($countryVe);
                $manager->persist($region);
            $this->addReference('Region-Insular', $region); 
            
        $region = new Region();
            
            $region->setDescription('Región Los Andes');
            $region->setCode('VE-RC'); 
            $region->setCountry($countryVe);
                $manager->persist($region);
            $this->addReference('Region-Los-Andes', $region); 

        $region = new Region();
            
            $region->setDescription('Región Los Llanos');
            $region->setCode('VE-RC'); 
            $region->setCountry($countryVe);
                $manager->persist($region);
            $this->addReference('Region-Los-Llanos', $region); 

        $region = new Region();
            
            $region->setDescription('Región Nor-Oriental');
            $region->setCode('VE-RC'); 
            $region->setCountry($countryVe);
                $manager->persist($region);
            $this->addReference('Region-Nor-Oriental', $region); 
            
        $region = new Region();
            
            $region->setDescription('Región Zuliana');
            $region->setCode('VE-RC'); 
            $region->setCountry($countryVe);
                $manager->persist($region);
            $this->addReference('Region-Zuliana', $region); 
            
        $region = new Region();
            
            $region->setDescription('Región Centro-Occidental');
            $region->setCode('VE-RC'); 
            $region->setCountry($countryVe);
                $manager->persist($region);
            $this->addReference('Region-Centro-Occidental', $region); 
            
        $region = new Region();
            
            $region->setDescription('Región Central');
            $region->setCode('VE-RC'); 
            $region->setCountry($countryVe);
                $manager->persist($region);
            $this->addReference('Region-Central', $region); 

        $manager->flush();
    }
    
    public function getOrder() {
        return 1;
    }
}