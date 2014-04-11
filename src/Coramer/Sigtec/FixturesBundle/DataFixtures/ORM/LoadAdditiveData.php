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
 * Description of LoadAdditiveData
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class LoadAdditiveData implements \Doctrine\Common\DataFixtures\FixtureInterface
{
    public function load(\Doctrine\Common\Persistence\ObjectManager $manager) {
        $additive = new \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Additive();
        
        $additive->setDescription('Aditivo Oxo-biodegradable');
            $manager->persist($additive);
            
        $manager->flush();
        
    }
}
