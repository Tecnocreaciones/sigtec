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

use Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Process;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Description of LoadProcessData
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class LoadProcessData extends AbstractFixture implements FixtureInterface,OrderedFixtureInterface
{
    public function getOrder() {
        return 2;
    }

    public function load(ObjectManager $manager) {
        $process = new Process();
        $process->setDescription('CALANDRADO');
        $process->setTypeProcess($this->getReference('typeProcess-Primario'));
            $manager->persist($process);
            
        $manager->flush();
    }
}
