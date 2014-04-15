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

use Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\TypeProcess;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Description of LoadTypeProcessData
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class LoadTypeProcessData extends AbstractFixture implements FixtureInterface,  OrderedFixtureInterface
{
    public function getOrder() {
        return 1;
    }

    public function load(ObjectManager $manager) {
        $typeProcess = new TypeProcess();
        $typeProcess->setDescription('Primario');
        $this->addReference('typeProcess-primario', $typeProcess);
            $manager->persist($typeProcess);
            
        $typeProcess = new TypeProcess();
        $typeProcess->setDescription('Secundario');
        $this->addReference('typeProcess-secundario', $typeProcess);
            $manager->persist($typeProcess);
            
        $typeProcess = new TypeProcess();
        $typeProcess->setDescription('Preparacion');
        $this->addReference('typeProcess-preparacion', $typeProcess);
            $manager->persist($typeProcess);
        
        $manager->flush();
    }
}
