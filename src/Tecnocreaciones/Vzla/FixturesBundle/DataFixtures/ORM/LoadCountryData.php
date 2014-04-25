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

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Tecnocreaciones\Vzla\EntityBundle\Entity\Country;

/**
 * Data de Paises
 * 
 * @see https://github.com/marydn/venezuela-sql/blob/master/venezuela.sql
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class LoadCountryData extends AbstractFixture
{   
    public function load(ObjectManager $manager)
    {
        $country = new Country();
        $country->setCode('VE');
        $country->setDescription('República Bolivariana de Venezuela');
        
        $this->addReference('Country-VE', $country);
        
        $manager->persist($country);
        
        $manager->flush();
    }
}
