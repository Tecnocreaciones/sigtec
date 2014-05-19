<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Coramer\Sigtec\FixturesBundle\DataFixtures\ORM;

use Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\ModelMachinery;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Carga la data de los modelos de maquinarias
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class LoadModelMachineryData extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface
{
    public function getOrder() {
        return 2;
    }

    public function load(ObjectManager $manager) {
        $modelMachinery = new ModelMachinery();
        $modelMachinery
                ->setName('Extrusión de compuesto')
                ->addFeaturesMachinery($this->getReference('nro'))
                ->addFeaturesMachinery($this->getReference('mark'))
                ->addFeaturesMachinery($this->getReference('type'))
                ->addFeaturesMachinery($this->getReference('maximum_capacity'))
                ->addFeaturesMachinery($this->getReference('year_manufacture'))
                ->addFeaturesMachinery($this->getReference('screw_type'))
                ->addFeaturesMachinery($this->getReference('screw_diameter'))
                ->addFeaturesMachinery($this->getReference('type_cut'))
                ->addFeaturesMachinery($this->getReference('operating_time'))
                ->addFeaturesMachinery($this->getReference('main_product'))
                ->addFeaturesMachinery($this->getReference('plant'))
                ;
            $manager->persist($modelMachinery);
            $this->addReference('extrusion_compound', $modelMachinery);
        $manager->flush();
    }

}
