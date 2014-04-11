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
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Description of LoadSubSegmentData
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class LoadSubSegmentData extends AbstractFixture implements FixtureInterface,OrderedFixtureInterface
{
    public function getOrder() {
        return 2;
    }

    public function load(ObjectManager $manager) {
        $subSegment = new \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\SubSegment();
        $subSegment
                ->setDescription('Agua')
                ->setSegment($this->getReference('segment-alimentos'))
                ;
            $manager->persist($subSegment);
            
        $manager->flush();
    }

//put your code here
}
