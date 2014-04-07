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


/**
 * Description of LoadDedicationData
 *
 * @author inhack20
 */
class LoadDedicationData implements \Doctrine\Common\DataFixtures\FixtureInterface
{
    public function load(\Doctrine\Common\Persistence\ObjectManager $manager) {
        $dedication = new \Coramer\Sigtec\CompanyBundle\Entity\Dedication();
        $dedication->setDescription('Producción');
            $manager->persist($dedication);
            
        $dedication = new \Coramer\Sigtec\CompanyBundle\Entity\Dedication();
        $dedication->setDescription('Almacenaje de materia prima');
            $manager->persist($dedication);
            
        $dedication = new \Coramer\Sigtec\CompanyBundle\Entity\Dedication();
        $dedication->setDescription('Almacenaje de producto terminado');
            $manager->persist($dedication);
            
        $manager->flush();
    }
}
