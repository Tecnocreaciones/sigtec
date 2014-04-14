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

use Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\SubSegment;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Description of LoadSubSegmentData
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class LoadSubSegmentData extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface
{
    public function getOrder()
    {
        return 2;
    }

    public function load(ObjectManager $manager)
    {
        $subSegment = new SubSegment();
        $subSegment
                ->setDescription('Agua')
                ->setSegment($this->getReference('segment-alimentos'));
            $manager->persist($subSegment);
            
        $subSegment = new SubSegment();
        $subSegment
                ->setDescription('Azúcar')
                ->setSegment($this->getReference('segment-alimentos'));
            $manager->persist($subSegment);
            
        $subSegment = new SubSegment();
        $subSegment
                ->setDescription('Carnes')
                ->setSegment($this->getReference('segment-alimentos'));
            $manager->persist($subSegment);
            
        $subSegment = new SubSegment();
        $subSegment
                ->setDescription('Cereales')
                ->setSegment($this->getReference('segment-alimentos'));
            $manager->persist($subSegment);
            
        $subSegment = new SubSegment();
        $subSegment
                ->setDescription('Harina')
                ->setSegment($this->getReference('segment-alimentos'));
            $manager->persist($subSegment);
            
        $subSegment = new SubSegment();
        $subSegment
                ->setDescription('Hielo')
                ->setSegment($this->getReference('segment-alimentos'));
            $manager->persist($subSegment);
            
        $subSegment = new SubSegment();
        $subSegment
                ->setDescription('Lácteos')
                ->setSegment($this->getReference('segment-alimentos'));
            $manager->persist($subSegment);
            
        $subSegment = new SubSegment();
        $subSegment
                ->setDescription('Lácteos y jugos')
                ->setSegment($this->getReference('segment-alimentos'));
            $manager->persist($subSegment);
            
        $subSegment = new SubSegment();
        $subSegment
                ->setDescription('Leguminosas')
                ->setSegment($this->getReference('segment-alimentos'));
            $manager->persist($subSegment);
            
        $subSegment = new SubSegment();
        $subSegment
                ->setDescription('Maltas')
                ->setSegment($this->getReference('segment-alimentos'));
            $manager->persist($subSegment);
            
        $subSegment = new SubSegment();
        $subSegment
                ->setDescription('Margarina')
                ->setSegment($this->getReference('segment-alimentos'));
            $manager->persist($subSegment);
            
        $subSegment = new SubSegment();
        $subSegment
                ->setDescription('Pastas')
                ->setSegment($this->getReference('segment-alimentos'));
            $manager->persist($subSegment);
            
        $subSegment = new SubSegment();
        $subSegment
                ->setDescription('Pollo')
                ->setSegment($this->getReference('segment-alimentos'));
            $manager->persist($subSegment);
            
        $subSegment = new SubSegment();
        $subSegment
                ->setDescription('Quesos')
                ->setSegment($this->getReference('segment-alimentos'));
            $manager->persist($subSegment);
            
        $subSegment = new SubSegment();
        $subSegment
                ->setDescription('Sal')
                ->setSegment($this->getReference('segment-alimentos'));
            $manager->persist($subSegment);
        
        //segment-construccion
        $subSegment = new SubSegment();
        $subSegment
                ->setDescription('Aguas blancas')
                ->setSegment($this->getReference('segment-construccion'));
            $manager->persist($subSegment);
            
        $subSegment = new SubSegment();
        $subSegment
                ->setDescription('Aguas negras')
                ->setSegment($this->getReference('segment-construccion'));
            $manager->persist($subSegment);
            
        $subSegment = new SubSegment();
        $subSegment
                ->setDescription('Electricidad')
                ->setSegment($this->getReference('segment-construccion'));
            $manager->persist($subSegment);
            
        $subSegment = new SubSegment();
        $subSegment
                ->setDescription('Impermeabilizantes')
                ->setSegment($this->getReference('segment-construccion'));
            $manager->persist($subSegment);
            
        $subSegment = new SubSegment();
        $subSegment
                ->setDescription('Pinturas')
                ->setSegment($this->getReference('segment-construccion'));
            $manager->persist($subSegment);
            
        $subSegment = new SubSegment();
        $subSegment
                ->setDescription('Sistemas de tuberías')
                ->setSegment($this->getReference('segment-construccion'));
            $manager->persist($subSegment);
            
        $subSegment = new SubSegment();
        $subSegment
                ->setDescription('Sistemas sanitarios')
                ->setSegment($this->getReference('segment-construccion'));
            $manager->persist($subSegment);
        
        //segment-consumo-masivo
        $subSegment = new SubSegment();
        $subSegment
                ->setDescription('Ferretero')
                ->setSegment($this->getReference('segment-consumo-masivo'));
            $manager->persist($subSegment);
            
        $subSegment = new SubSegment();
        $subSegment
                ->setDescription('Productos escolares')
                ->setSegment($this->getReference('segment-consumo-masivo'));
            $manager->persist($subSegment);
            
        $subSegment = new SubSegment();
        $subSegment
                ->setDescription('Artículos para oficina')
                ->setSegment($this->getReference('segment-consumo-masivo'));
            $manager->persist($subSegment);
            
        $subSegment = new SubSegment();
        $subSegment
                ->setDescription('Decoración')
                ->setSegment($this->getReference('segment-consumo-masivo'));
            $manager->persist($subSegment);
            
        $subSegment = new SubSegment();
        $subSegment
                ->setDescription('Publicidad')
                ->setSegment($this->getReference('segment-consumo-masivo'));
            $manager->persist($subSegment);
            
        //segment-articulos-para-el-hogar
        $subSegment = new SubSegment();
        $subSegment
                ->setDescription('Mobiliario')
                ->setSegment($this->getReference('segment-articulos-para-el-hogar'));
            $manager->persist($subSegment);
            
        $subSegment = new SubSegment();
        $subSegment
                ->setDescription('Artículos para el hogar')
                ->setSegment($this->getReference('segment-articulos-para-el-hogar'));
            $manager->persist($subSegment);
            
        $subSegment = new SubSegment();
        $subSegment
                ->setDescription('Colchonería')
                ->setSegment($this->getReference('segment-articulos-para-el-hogar'));
            $manager->persist($subSegment);
            
        //segment-juguetes
        $subSegment = new SubSegment();
        $subSegment
                ->setDescription('Juguetería')
                ->setSegment($this->getReference('segment-juguetes'));
            $manager->persist($subSegment);
            
        $subSegment = new SubSegment();
        $subSegment
                ->setDescription('Piñateria')
                ->setSegment($this->getReference('segment-juguetes'));
            $manager->persist($subSegment);
            
        //segment-textil    
        $subSegment = new SubSegment();
        $subSegment
                ->setDescription('Textil')
                ->setSegment($this->getReference('segment-textil'));
            $manager->persist($subSegment);
            
        //segment-farmacosmeticos
        $subSegment = new SubSegment();
        $subSegment
                ->setDescription('Farmacéutico')
                ->setSegment($this->getReference('segment-farmacosmeticos'));
            $manager->persist($subSegment);
            
        $subSegment = new SubSegment();
        $subSegment
                ->setDescription('Cosméticos')
                ->setSegment($this->getReference('segment-farmacosmeticos'));
            $manager->persist($subSegment);
            
        $subSegment = new SubSegment();
        $subSegment
                ->setDescription('Médico')
                ->setSegment($this->getReference('segment-farmacosmeticos'));
            $manager->persist($subSegment);
            
        $subSegment = new SubSegment();
        $subSegment
                ->setDescription('Veterinario')
                ->setSegment($this->getReference('segment-farmacosmeticos'));
            $manager->persist($subSegment);
            
        //segment-automotriz
        $subSegment = new SubSegment();
        $subSegment
                ->setDescription('Lubricantes')
                ->setSegment($this->getReference('segment-automotriz'));
            $manager->persist($subSegment);
            
        $subSegment = new SubSegment();
        $subSegment
                ->setDescription('Accesorios')
                ->setSegment($this->getReference('segment-automotriz'));
            $manager->persist($subSegment);
            
        $subSegment = new SubSegment();
        $subSegment
                ->setDescription('Aditivos')
                ->setSegment($this->getReference('segment-automotriz'));
            $manager->persist($subSegment);
        //segment-bebidas
        $subSegment = new SubSegment();
        $subSegment
                ->setDescription('Licor')
                ->setSegment($this->getReference('segment-bebidas'));
            $manager->persist($subSegment);
            
        $subSegment = new SubSegment();
        $subSegment
                ->setDescription('Cerveza')
                ->setSegment($this->getReference('segment-bebidas'));
            $manager->persist($subSegment);
            
        $subSegment = new SubSegment();
        $subSegment
                ->setDescription('Bebidas carbonatadas')
                ->setSegment($this->getReference('segment-bebidas'));
            $manager->persist($subSegment);
        
        //segment-calzado
        $subSegment = new SubSegment();
        $subSegment
                ->setDescription('Deportivo')
                ->setSegment($this->getReference('segment-calzado'));
            $manager->persist($subSegment);
            
        $subSegment = new SubSegment();
        $subSegment
                ->setDescription('Seguridad')
                ->setSegment($this->getReference('segment-calzado'));
            $manager->persist($subSegment);
            
        //segment-industria
        $subSegment = new SubSegment();
        $subSegment
                ->setDescription('Químico')
                ->setSegment($this->getReference('segment-industria'));
            $manager->persist($subSegment);
            
        $subSegment = new SubSegment();
        $subSegment
                ->setDescription('Acueducto')
                ->setSegment($this->getReference('segment-industria'));
            $manager->persist($subSegment);
            
        $subSegment = new SubSegment();
        $subSegment
                ->setDescription('Telecomunicaciones')
                ->setSegment($this->getReference('segment-industria'));
            $manager->persist($subSegment);
            
        $subSegment = new SubSegment();
        $subSegment
                ->setDescription('Militar')
                ->setSegment($this->getReference('segment-industria'));
            $manager->persist($subSegment);
            
        $subSegment = new SubSegment();
        $subSegment
                ->setDescription('Gas')
                ->setSegment($this->getReference('segment-industria'));
            $manager->persist($subSegment);
            
        $subSegment = new SubSegment();
        $subSegment
                ->setDescription('Eléctrico')
                ->setSegment($this->getReference('segment-industria'));
            $manager->persist($subSegment);
            
        $subSegment = new SubSegment();
        $subSegment
                ->setDescription('Transformador')
                ->setSegment($this->getReference('segment-industria'));
            $manager->persist($subSegment);
            
        //segment-agroindustria
        $subSegment = new SubSegment();
        $subSegment
                ->setDescription('Avícola')
                ->setSegment($this->getReference('segment-agroindustria'));
            $manager->persist($subSegment);
            
        $subSegment = new SubSegment();
        $subSegment
                ->setDescription('Porcina')
                ->setSegment($this->getReference('segment-agroindustria'));
            $manager->persist($subSegment);
            
        $subSegment = new SubSegment();
        $subSegment
                ->setDescription('Ganadera')
                ->setSegment($this->getReference('segment-agroindustria'));
            $manager->persist($subSegment);
            
        $subSegment = new SubSegment();
        $subSegment
                ->setDescription('Agrícola')
                ->setSegment($this->getReference('segment-agroindustria'));
            $manager->persist($subSegment);
            
        $manager->flush();
    }
}
