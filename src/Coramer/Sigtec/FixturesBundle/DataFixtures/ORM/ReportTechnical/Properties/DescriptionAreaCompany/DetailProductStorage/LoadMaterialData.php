<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Coramer\Sigtec\FixturesBundle\DataFixtures\ORM\ReportTechnical\Properties\DescriptionAreaCompany\DetailProductStorage;

use Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\DetailProductStorage\Material;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Description of LoadMaterialData
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class LoadMaterialData implements FixtureInterface 
{
    public function load(ObjectManager $manager) {
        $material = new Material();
        $material
                ->setDescription('Resina')
                ->setRequired(true)
                ;
            $manager->persist($material);
            
        $material = new Material();
        $material
                ->setDescription('Aditivo sólido')
                ;
            $manager->persist($material);
            
        $material = new Material();
        $material
                ->setDescription('Aditivo liquido')
                ;
            $manager->persist($material);
            
        $material = new Material();
        $material
                ->setDescription('Producto terminado')
                ->setRequired(true)
                ;
            $manager->persist($material);
            
        $material = new Material();
        $material
                ->setDescription('Material recuperado o por recuperar')
                ;
            $manager->persist($material);
            
        $manager->flush();
    }
}
