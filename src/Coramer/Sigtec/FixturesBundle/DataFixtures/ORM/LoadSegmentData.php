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
class LoadSegmentData extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface
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
            
        $segment = new Segment();
        $segment
                ->setDescription('Construcción')
                ->setNote('Tubos y conexiones que se venden directamente a las constructoras, pailas y cuñetes para pintura, perfiles, sistemas sanitarios, Tanques de agua, Sistemas de Impermeabilización');
            $this->addReference('segment-construccion', $segment);
            $manager->persist($segment);
            
        $segment = new Segment();
        $segment
                ->setDescription('Consumo masivo')
                ->setNote('Bolsas en general (camisetas,basura, boutique) , artículos para ferretería, empaques para colchones, artículos para oficinas, decoración, productos escolares, publicidad, artículos desechables y promoción');
            $this->addReference('segment-consumo-masivo', $segment);
            $manager->persist($segment);
            
        $segment = new Segment();
        $segment
                ->setDescription('Artículos para el hogar')
                ->setNote('Mobiliario, utensilios para el hogar, tapicería, contenedores, colchonería');
            $this->addReference('segment-articulos-para-el-hogar', $segment);
            $manager->persist($segment);
            
        $segment = new Segment();
        $segment
                ->setDescription('Juguetes')
                ->setNote('Juguetes y artículos para piraterías');
            $this->addReference('segment-juguetes', $segment);
            $manager->persist($segment);
            
        $segment = new Segment();
        $segment
                ->setDescription('Textil')
                ->setNote('Filamentos, embalajes para textiles, bolsas para textiles');
            $this->addReference('segment-textil', $segment);
            $manager->persist($segment);
            
        $segment = new Segment();
        $segment
                ->setDescription('Farmacosmeticos')
                ->setNote('Envases, tapas, artículos médicos, pañales, toallas sanitarias, material médico descartable');
            $this->addReference('segment-farmacosmeticos', $segment);
            $manager->persist($segment);
            
        $segment = new Segment();
        $segment
                ->setDescription('Automotriz')
                ->setNote('Lubricantes, alfombras, aire acondicionado de vehículos, liga de frenos, aditivos');
            $this->addReference('segment-automotriz', $segment);
            $manager->persist($segment);
            
        $segment = new Segment();
        $segment
                ->setDescription('Bebidas')
                ->setNote('Tapas para licor y bebidas carbonatadas, gaveras para cerveza y bebidas carbonatadas');
            $this->addReference('segment-bebidas', $segment);
            $manager->persist($segment);
            
        $segment = new Segment();
        $segment
                ->setDescription('Calzado')
                ->setNote('Suelas, formas, sandalias');
            $this->addReference('segment-calzado', $segment);
            $manager->persist($segment);
            
        $segment = new Segment();
        $segment
                ->setDescription('Industria')
                ->setNote('Sector Químico, tubos para acueductos, gas, electricidad, concentrados de aditivos,sacos industriales Consorcios y Distribuidores');
            $this->addReference('segment-industria', $segment);
            $manager->persist($segment);
            
        $segment = new Segment();
        $segment
                ->setDescription('Agroindustria')
                ->setNote('Cestas, guacales,sacos industriales, tuberías de riegos, pisos para granjas, mallas para frutas, comederos para animales, envases para insecticidas, películas para invernaderos, ensilajes, acolchados, materos, semilleros');
            $this->addReference('segment-agroindustria', $segment);
            $manager->persist($segment);
            
        $manager->flush();
    }
}
