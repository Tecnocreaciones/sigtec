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
                ->addFeaturesMachinery($this->getReference('extrusion_type'))
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
            
        $modelMachinery = new ModelMachinery();
        $modelMachinery
                ->setName('Extrusión de compresión')
                ->addFeaturesMachinery($this->getReference('nro'))
                ->addFeaturesMachinery($this->getReference('mark'))
                ->addFeaturesMachinery($this->getReference('maximum_capacity'))
                ->addFeaturesMachinery($this->getReference('weight'))
                ->addFeaturesMachinery($this->getReference('cavity'))
                ->addFeaturesMachinery($this->getReference('pieces_min'))
                ->addFeaturesMachinery($this->getReference('year_manufacture'))
                ->addFeaturesMachinery($this->getReference('operating_time'))
                ->addFeaturesMachinery($this->getReference('main_product'))
                ->addFeaturesMachinery($this->getReference('plant'))
                ;
                $manager->persist($modelMachinery);
                $this->addReference('extrusion_compression', $modelMachinery);
            
        $modelMachinery = new ModelMachinery();
        $modelMachinery
                ->setName('Extrusión de fibras')
                ->addFeaturesMachinery($this->getReference('nro'))
                ->addFeaturesMachinery($this->getReference('mark'))
                ->addFeaturesMachinery($this->getReference('extrusion_type'))
                ->addFeaturesMachinery($this->getReference('maximum_capacity'))
                ->addFeaturesMachinery($this->getReference('year_manufacture'))
                ->addFeaturesMachinery($this->getReference('screw_type'))
                ->addFeaturesMachinery($this->getReference('screw_diameter'))
                ->addFeaturesMachinery($this->getReference('number_rows'))
                ->addFeaturesMachinery($this->getReference('number_orifices'))
                ->addFeaturesMachinery($this->getReference('title_max'))
                ->addFeaturesMachinery($this->getReference('operating_time'))
                ->addFeaturesMachinery($this->getReference('main_product'))
                ->addFeaturesMachinery($this->getReference('plant'))
                ;
                $manager->persist($modelMachinery);
                $this->addReference('fiber_extrusion', $modelMachinery);
            
        $modelMachinery = new ModelMachinery();
        $modelMachinery
                ->setName('Extrusión de flejes')
                ->addFeaturesMachinery($this->getReference('nro'))
                ->addFeaturesMachinery($this->getReference('mark'))
                ->addFeaturesMachinery($this->getReference('maximum_capacity'))
                ->addFeaturesMachinery($this->getReference('year_manufacture'))
                ->addFeaturesMachinery($this->getReference('extrusion_type'))
                ->addFeaturesMachinery($this->getReference('screw_type'))
                ->addFeaturesMachinery($this->getReference('screw_diameter'))
                ->addFeaturesMachinery($this->getReference('number_strips'))
                ->addFeaturesMachinery($this->getReference('width_strips'))
                ->addFeaturesMachinery($this->getReference('operating_time'))
                ->addFeaturesMachinery($this->getReference('main_product'))
                ->addFeaturesMachinery($this->getReference('plant'))
                ;
                $manager->persist($modelMachinery);
                $this->addReference('strapping_extrusion', $modelMachinery);
            
        $modelMachinery = new ModelMachinery();
        $modelMachinery
                ->setName('Extrusión de lámina')
                ->addFeaturesMachinery($this->getReference('nro'))
                ->addFeaturesMachinery($this->getReference('mark'))
                ->addFeaturesMachinery($this->getReference('extrusion_type'))
                ->addFeaturesMachinery($this->getReference('maximum_capacity'))
                ->addFeaturesMachinery($this->getReference('year_manufacture'))
                ->addFeaturesMachinery($this->getReference('screw_type'))
                ->addFeaturesMachinery($this->getReference('screw_diameter'))
                ->addFeaturesMachinery($this->getReference('head_width'))
                ->addFeaturesMachinery($this->getReference('lamina_maximum_width'))
                ->addFeaturesMachinery($this->getReference('lamina_maximum_thickness'))
                ->addFeaturesMachinery($this->getReference('operating_time'))
                ->addFeaturesMachinery($this->getReference('main_product'))
                ->addFeaturesMachinery($this->getReference('plant'))
                ;
                $manager->persist($modelMachinery);
                $this->addReference('sheet_extrusion', $modelMachinery);
            
        $modelMachinery = new ModelMachinery();
        $modelMachinery
                ->setName('Extrusión de película plana')
                ->addFeaturesMachinery($this->getReference('nro'))
                ->addFeaturesMachinery($this->getReference('mark'))
                ->addFeaturesMachinery($this->getReference('extrusion_type'))
                ->addFeaturesMachinery($this->getReference('maximum_capacity'))
                ->addFeaturesMachinery($this->getReference('year_manufacture'))
                ->addFeaturesMachinery($this->getReference('screw_type'))
                ->addFeaturesMachinery($this->getReference('screw_diameter'))
                ->addFeaturesMachinery($this->getReference('head_width'))
                ->addFeaturesMachinery($this->getReference('lamina_maximum_width'))
                ->addFeaturesMachinery($this->getReference('lamina_maximum_thickness'))
                ->addFeaturesMachinery($this->getReference('operating_time'))
                ->addFeaturesMachinery($this->getReference('main_product'))
                ->addFeaturesMachinery($this->getReference('plant'))
                ;
                $manager->persist($modelMachinery);
                $this->addReference('flat_film_extrusion', $modelMachinery);
            
        $modelMachinery = new ModelMachinery();
        $modelMachinery
                ->setName('Extrusión de película tubular')
                ->addFeaturesMachinery($this->getReference('nro'))
                ->addFeaturesMachinery($this->getReference('mark'))
                ->addFeaturesMachinery($this->getReference('extrusion_type'))
                ->addFeaturesMachinery($this->getReference('maximum_capacity'))
                ->addFeaturesMachinery($this->getReference('year_manufacture'))
                ->addFeaturesMachinery($this->getReference('screw_type'))
                ->addFeaturesMachinery($this->getReference('screw_diameter'))
                ->addFeaturesMachinery($this->getReference('head_width'))
                ->addFeaturesMachinery($this->getReference('lamina_maximum_width'))
                ->addFeaturesMachinery($this->getReference('lamina_maximum_thickness'))
                ->addFeaturesMachinery($this->getReference('operating_time'))
                ->addFeaturesMachinery($this->getReference('main_product'))
                ->addFeaturesMachinery($this->getReference('plant'))
                ;
                $manager->persist($modelMachinery);
                $this->addReference('tubular_film_extrusion', $modelMachinery);
            
        $modelMachinery = new ModelMachinery();
        $modelMachinery
                ->setName('Extrusión de perfiles grandes')
                ->addFeaturesMachinery($this->getReference('nro'))
                ->addFeaturesMachinery($this->getReference('mark'))
                ->addFeaturesMachinery($this->getReference('extrusion_type'))
                ->addFeaturesMachinery($this->getReference('maximum_capacity'))
                ->addFeaturesMachinery($this->getReference('year_manufacture'))
                ->addFeaturesMachinery($this->getReference('screw_type'))
                ->addFeaturesMachinery($this->getReference('screw_diameter'))
                ->addFeaturesMachinery($this->getReference('product_weight'))
                ->addFeaturesMachinery($this->getReference('court_min'))
                ->addFeaturesMachinery($this->getReference('operating_time'))
                ->addFeaturesMachinery($this->getReference('main_product'))
                ->addFeaturesMachinery($this->getReference('plant'))
                ;
                $manager->persist($modelMachinery);
                $this->addReference('large_extrusion_profiles', $modelMachinery);
            
        $modelMachinery = new ModelMachinery();
        $modelMachinery
                ->setName('Extrusión de perfiles anulares pequeños')
                ->addFeaturesMachinery($this->getReference('nro'))
                ->addFeaturesMachinery($this->getReference('mark'))
                ->addFeaturesMachinery($this->getReference('maximum_capacity'))
                ->addFeaturesMachinery($this->getReference('year_manufacture'))
                ->addFeaturesMachinery($this->getReference('extrusion_type'))
                ->addFeaturesMachinery($this->getReference('screw_type'))
                ->addFeaturesMachinery($this->getReference('screw_diameter'))
                ->addFeaturesMachinery($this->getReference('product_weight'))
                ->addFeaturesMachinery($this->getReference('court_min'))
                ->addFeaturesMachinery($this->getReference('operating_time'))
                ->addFeaturesMachinery($this->getReference('main_product'))
                ->addFeaturesMachinery($this->getReference('plant'))
                ;
                $manager->persist($modelMachinery);
                $this->addReference('small_annular_extrusion_profiles', $modelMachinery);
                
        $modelMachinery = new ModelMachinery();
        $modelMachinery
                ->setName('Extrusión de rafia')
                ->addFeaturesMachinery($this->getReference('nro'))
                ->addFeaturesMachinery($this->getReference('mark'))
                ->addFeaturesMachinery($this->getReference('extrusion_type'))
                ->addFeaturesMachinery($this->getReference('maximum_capacity'))
                ->addFeaturesMachinery($this->getReference('year_manufacture'))
                ->addFeaturesMachinery($this->getReference('screw_type'))
                ->addFeaturesMachinery($this->getReference('screw_diameter'))
                ->addFeaturesMachinery($this->getReference('head_width'))
                ->addFeaturesMachinery($this->getReference('lamina_maximum_width'))
                ->addFeaturesMachinery($this->getReference('title_max'))
                ->addFeaturesMachinery($this->getReference('operating_time'))
                ->addFeaturesMachinery($this->getReference('main_product'))
                ->addFeaturesMachinery($this->getReference('plant'))
                ;
                $manager->persist($modelMachinery);
                $this->addReference('extrusion_raffia', $modelMachinery);
            
        $modelMachinery = new ModelMachinery();
        $modelMachinery
                ->setName('Extrusión de tuberías')
                ->addFeaturesMachinery($this->getReference('nro'))
                ->addFeaturesMachinery($this->getReference('mark'))
                ->addFeaturesMachinery($this->getReference('extrusion_type'))
                ->addFeaturesMachinery($this->getReference('maximum_capacity'))
                ->addFeaturesMachinery($this->getReference('year_manufacture'))
                ->addFeaturesMachinery($this->getReference('screw_type'))
                ->addFeaturesMachinery($this->getReference('screw_diameter'))
                ->addFeaturesMachinery($this->getReference('head_width'))
                ->addFeaturesMachinery($this->getReference('diameter_range'))
                ->addFeaturesMachinery($this->getReference('thickness_range'))
                ->addFeaturesMachinery($this->getReference('operating_time'))
                ->addFeaturesMachinery($this->getReference('main_product'))
                ->addFeaturesMachinery($this->getReference('plant'))
                ;
                $manager->persist($modelMachinery);
                $this->addReference('pipe_extrusion', $modelMachinery);
            
        $modelMachinery = new ModelMachinery();
        $modelMachinery
                ->setName('Extrusión otros')
                ->addFeaturesMachinery($this->getReference('nro'))
                ->addFeaturesMachinery($this->getReference('mark'))
                ->addFeaturesMachinery($this->getReference('extrusion_type'))
                ->addFeaturesMachinery($this->getReference('maximum_capacity'))
                ->addFeaturesMachinery($this->getReference('year_manufacture'))
                ->addFeaturesMachinery($this->getReference('screw_type'))
                ->addFeaturesMachinery($this->getReference('screw_diameter'))
                ->addFeaturesMachinery($this->getReference('operating_time'))
                ->addFeaturesMachinery($this->getReference('main_product'))
                ->addFeaturesMachinery($this->getReference('plant'))
                ;
                $manager->persist($modelMachinery);
                $this->addReference('extrusion_other', $modelMachinery);
            
        $modelMachinery = new ModelMachinery();
        $modelMachinery
                ->setName('Extrusión soplado')
                ->addFeaturesMachinery($this->getReference('nro'))
                ->addFeaturesMachinery($this->getReference('mark'))
                ->addFeaturesMachinery($this->getReference('head_type'))
                ->addFeaturesMachinery($this->getReference('station'))
                ->addFeaturesMachinery($this->getReference('cavity'))
                ->addFeaturesMachinery($this->getReference('container_capacity'))
                ->addFeaturesMachinery($this->getReference('resin'))
                ->addFeaturesMachinery($this->getReference('weight_cycle'))
                ->addFeaturesMachinery($this->getReference('type_cut_parison'))
                ->addFeaturesMachinery($this->getReference('maximum_capacity'))
                ->addFeaturesMachinery($this->getReference('year_manufacture'))
                ->addFeaturesMachinery($this->getReference('operating_time'))
                ->addFeaturesMachinery($this->getReference('main_product'))
                ->addFeaturesMachinery($this->getReference('plant'))
                ;
                $manager->persist($modelMachinery);
                $this->addReference('extrusion_blow', $modelMachinery);
            
        $modelMachinery = new ModelMachinery();
        $modelMachinery
                ->setName('Extrusión termoformado')
                ->addFeaturesMachinery($this->getReference('nro'))
                ->addFeaturesMachinery($this->getReference('mark'))
                ->addFeaturesMachinery($this->getReference('maximum_capacity'))
                ->addFeaturesMachinery($this->getReference('weight'))
                ->addFeaturesMachinery($this->getReference('cavity'))
                ->addFeaturesMachinery($this->getReference('cycle'))
                ->addFeaturesMachinery($this->getReference('year_manufacture'))
                ->addFeaturesMachinery($this->getReference('operating_time'))
                ->addFeaturesMachinery($this->getReference('main_product'))
                ->addFeaturesMachinery($this->getReference('plant'))
                ;
                $manager->persist($modelMachinery);
                $this->addReference('thermoforming_extrusion', $modelMachinery);
                
                
        $manager->flush();
    }

}
