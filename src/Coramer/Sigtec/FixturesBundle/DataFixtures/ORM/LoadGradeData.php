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

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

/**
 * Description of LoadGradeData
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class LoadGradeData extends AbstractFixture implements FixtureInterface,  OrderedFixtureInterface
{
    public function getOrder() {
        return 2;
    }

    public function load(\Doctrine\Common\Persistence\ObjectManager $manager) {
        $grade = new \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Grade();
        $grade->setDescription('115');
        $grade->setResin($this->getReference('resin-PVC'));
            $manager->persist($grade);
            
        $manager->flush();
    }

}
