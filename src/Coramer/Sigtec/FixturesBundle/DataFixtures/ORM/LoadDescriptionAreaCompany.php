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

use Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\DescriptionArea;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Description of LoadDescriptionAreaCompany
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class LoadDescriptionAreaCompany implements FixtureInterface
{
    public function load(ObjectManager $manager) {
        $descriptionAreaTotal = new DescriptionArea();
        $descriptionAreaTotal
                ->setDescription('Área total de la empresa')
                ->setHelp('Superficie total que dispone la empresa para sus actividades,expresada en metros cuadrados (m<sup>2</sup>). Se considera como la sumatoria de las áreas de producción, almacén, control de calidad, matricería, patios, estacionamientos, entre otras.')
                ;
        $manager->persist($descriptionAreaTotal);
        
        $descriptionArea = new DescriptionArea();
        $descriptionArea
                ->setDescription('Área destinada a producción')
                ->setHelp('Área indicada en metros cuadrados (m<sup>2</sup>) donde se ubican las máquinas de transformación de la empresa.')
                ->setParent($descriptionAreaTotal)
                ;
        
        $descriptionArea = new DescriptionArea();
        $descriptionArea
                ->setDescription('Área destinada almacenaje de resina')
                ->setHelp('Área indicada en metros cuadrados (m<sup>2</sup>) donde se almacenan las resinas.')
                ->setParent($descriptionAreaTotal)
                ;
        $manager->persist($descriptionArea);
        
        $descriptionArea = new DescriptionArea();
        $descriptionArea
                ->setDescription('Área destinada almacenaje de aditivo')
                ->setHelp('Área indicada en metros cuadrados (m<sup>2</sup>) donde se almacenan los aditivos.')
                ->setParent($descriptionAreaTotal)
                ;
        $manager->persist($descriptionArea);
        
        $descriptionArea = new DescriptionArea();
        $descriptionArea
                ->setDescription('Área destinada almacenaje de producto recuperado')
                ->setHelp('Área indicada en metros cuadrados (m<sup>2</sup>) donde se almacenan los productos recuperados.')
                ->setParent($descriptionAreaTotal)
                ;
        
        $descriptionArea = new DescriptionArea();
        $descriptionArea
                ->setDescription('Área destinada almacenaje de producto terminado')
                ->setHelp('Área indicada en metros cuadrados (m<sup>2</sup>) donde se almacenan los productos terminados.')
                ->setParent($descriptionAreaTotal)
                ;
        $manager->persist($descriptionArea);
        
        $manager->flush();
    }
}
