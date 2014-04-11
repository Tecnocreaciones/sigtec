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

use Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Segment;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Description of LoadSegmentData
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class LoadSegmentData extends AbstractFixture implements FixtureInterface,OrderedFixtureInterface
{   public function getOrder() {
        return 1;
    }
    public function load(ObjectManager $manager) {
        $segment = new Segment();
        $segment
                ->setDescription('Alimentos')
                ->setNote('Envases y tapas para agua, leche, jugos y condimentos, empaques para cereales, granos, café, pastas, harinas , pollo, queso, pan, envases y tapas para margarina');
            $this->addReference('segment-alimentos', $segment);
            $manager->persist($segment);
            
            
        $manager->flush();
    }
}
