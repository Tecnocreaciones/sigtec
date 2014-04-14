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

use Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Product;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Description of LoadProductData
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class LoadProductData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $product = new Product();
        $product->setDescription('Abrazadera');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Accesorios');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Accesorios de plomería');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Accesorios para baños');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Accesorios para cocina');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Accesorios para mobiliario');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Accesorios para plomería');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Accesorios para torres de enfriamiento');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Accesorios para ventanas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Adaptadores');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Adhesivos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Adornos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Aerosoles');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Afeitadoras');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Agroplasticos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Aisladores');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Aislamiento');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Alcancía');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Alfombras');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Almohadillas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Anaqueles');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Anillo partido');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Aplicadores');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Arboles de navidad');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Arneses');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Artículos de escritura');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Artículos de ferretería');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Artículos de menaje');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Artículos de mueblería');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Artículos eléctricos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Artículos industriales');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Artículos médicos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Artículos para avicultura');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Artículos para el hogar');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Artículos para oficina');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Artículos para sistemas de riego');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Asas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Asientos sanitarios');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Aspa');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Astas de bandera');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Autopartes');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Avisos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Bandas de seguridad');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Bandeja odontológica');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Bandejas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Bandejas para pintura');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Bandejas para restaurantes');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Banderines');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Banqueta');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Bañera portátil');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Base para organizador de cepillos dentales');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Base triangulo seguridad');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Bases');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Bases de cepillos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Bases para alfombra');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Bases para arreglos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Baterías de vehículos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Bebederos de animales');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Bidones');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Big bags');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Bisel');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Blisters');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Bloque de anime');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Bobinas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Bocinas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Boligrafos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Bolsas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Bolsas camiseta');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Bolsas con asas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Bolsas con cierre hermético');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Bolsas de PP');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Bolsas de seguridad');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Bolsas impresas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Bolsas Oxo-biodegradables (OBD)');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Bolsas para  productos congelados');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Bolsas para alimentos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Bolsas para arena');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Bolsas para basura');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Bolsas para boutique');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Bolsas para chupi');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Bolsas para condimentos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Bolsas para desechos hospitalarios');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Bolsas para hielo');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Bolsas para la construcción');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Bolsas para panadería');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Bolsas para pollo');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Bolsas para vivero');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Bolsas pequeñas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Bolsas pop');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Bolsas premarcadas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Bolsas rectas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Bolsas silo');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Bolsas transparente');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Bolsones');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Bolsones para panadería');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Bombona 1 L');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Bombona 1/2 L');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Bombona para gas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Boquillas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Bordes de escalera');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Borras');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Bosspart');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Botas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Botas de agroindustriales');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Botas de seguridad');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Botas industriales');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Botella 1/2 L');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Botellas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Botellas farmacosméticos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Botellas para detergentes');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Botellas para inhaladores');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Botellas para leche y jugos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Botellas para lubricantes');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Botellas Roll-On');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Botellones');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Botones');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Boyas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Broches de carnet');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Cabezal de tubos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Cables');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Cables para acometida');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Cables planta externa');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Cables planta interna');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Cabullas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Cajas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Cajas para creyones');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Cajas para equipos electrónicos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Cajetines');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Calzados');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Canaletas de agua');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Canaletas portacables');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Cántaros');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Cantimplora');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Capelladas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Carboyas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Carboyas 17 L');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Carboyas 20 L');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Carboyas 60 L');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Carcasa filtro de arena');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Carcazas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Carcazas de lavadoras');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Carcazas para faros');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Carcazas para foros stop');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Carcazas para triángulo');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Caretas esmeril');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Caretas soldar');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Carpa ferretera');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Carpetas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Carton');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Cartón plástico');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Cascos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Cauchos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Cavas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Cepillos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Cera parafínica');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Cestas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Cestas multiuso');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Cholas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Chupon de sopapo');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Cierre de llave');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Cilindro');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Cincho');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Cintas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Cintas adhesivas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Cintas de riego por goteo');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Cintas decorativas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Cintas para muebles');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Cirios');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Claraboya');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Clips');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Coextrusión de película tubular');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Colador de pasta');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Comederos de animales');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Compuestos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Compuestos atóxicos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Compuestos flexibles');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Compuestos para botellas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Compuestos para cables');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Compuestos para calzado');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Compuestos para conexiones');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Compuestos para tubos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Compuestos rígidos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Concentrado blanco');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Concentrado de Pigmento');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Concentrados');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Concentrados de aditivos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Concentrados de cargas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Concentrados de colores');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Conexiones');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Conos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Conos de hilandería');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Conservadores');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Construcción');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Contenedores');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Contenedores para alimentos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Contenedores para basura');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Contenedores para químicos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Coolers');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Copitas para globos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Corcetería');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Cordeles');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Cores');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Correderos de cortinas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Cortinas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Cosmeticos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Cubierta de tortera');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Cubiertas de cepillos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Cubiertos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Cubre-bornes');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Cucharas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Cuchillos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Cuerdas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Cuñetes');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Cúpulas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Difusores');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Duchas de mano');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Electricidad');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Electrodomésticos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Embalaje industrial');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Empacaduras');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Empaque automático');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Empaque laminado');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Empaque sin laminar');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Empaque uso interno');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Empaques');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Empaques de alimentos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Empaques especiales');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Empaques flexible');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Empaques flexibles congelados');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Envase para helados');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Envases');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Envases Agua Mineral');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Envases colapsibles');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Envases de 1 L');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Envases de 1/2 galón');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Envases de 1/2 L');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Envases de 1/3 L');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Envases de 1/4 L');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Envases de 2 L');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Envases de 800 cc');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Envases de 2 L');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Envases de galón');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Envases de paredes delgadas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Envases para alimentos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Envases para aplicaciones médicas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Envases para cloro');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Envases para cosméticos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Envases para desifectantes');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Envases para jugos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Envoltorio para flores');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Envoltorios');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Envolturas de caramelos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Escobas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Escurridor para latas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Esferas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Eslabones');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Espaciadores');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Espejos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Espumado');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Estantillos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Esterillas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Estirable');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Estuche porta huevos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Estuches');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Etiquetas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Extrusión');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Falda para lavadora');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Ferro');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Fibra cortada');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Film PP');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Film stretch');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Filtros');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Flejes');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Flex pound');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Florero');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Floristeria');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Flotador');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Flotantes');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Folder');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Folios');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Formaletas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Forro triangulo seguridad');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Fuelles');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Fundas para guayas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Fundas Protectoras');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Galones');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Ganchos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Ganchos de ropa');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Garrafones');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Gaveras');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Gaveras y cestas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Geomembranas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Geosientéticos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Geotextiles');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Gomas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Goteros');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Granulometria');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Grasinca');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Groundcover');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Guantes');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Guayas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Herrajes');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Hieleras');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Hilos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Hormas para calzado');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Implementos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Implementos de carpertas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Infraestructura');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Inseminadores pecuarios');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Insumos agricultura');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Interruptores');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Inyección');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Jabonera');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Jarras');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Jaula');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Jeringas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Juguetes');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Juguetes didácticos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Kit deportivo');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Kit hospitalario');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Lámina asfáltica');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Lámina espumada');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Lámina espumada tipo foamy');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Láminas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Láminas de anime');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Láminas flexibles');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Láminas recubiertas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Lamparas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Lavadero');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Legumbreros');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Lencería descartable');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Lentes de seguridad');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Liaza para muebles');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Ligas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Limpieza');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Linda soft');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Líneas petroleras');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Liners');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Llaveros');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Lonas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Loncheras');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Lubricantes');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Mallas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Mangas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Mango de brochas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Mangos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Mangos para cepillos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Mangueras');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Mangueras de baja presión');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Mangueras de PE');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Mangueras de presión');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Mangueras de vacío');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Mangueras transparentes');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Maniquíes');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Mantequillera');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Marcador');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Máscaras de soldar');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Materia prima');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Material aislante');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Material para encuadernación');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Material para identificación');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Material POP');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Material recuperado');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Materos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Mecates');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Membrana antiruido');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Meolo');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Mesas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Micas para faros');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Mimbre');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Mobiliario');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Moldeo');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Moldes para queso');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Molido');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Monofilamentos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Muebles');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Multicapa');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Multifilamentos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Muñecas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('No estandarizado');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Núcleos para mangueras');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Orejetas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Otros');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Pailas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Pailas aceites comestibles');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Pailas lubricantes');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Pailas pinturas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Palas para basura');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Paletas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Paletas médicas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Palustra');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Pañales');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Papel de encuadernación');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Papel plasticubierto');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Papel siliconado');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Papeleras');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Papeles recubiertos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Paquitas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Partes de cavas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Partes de electrodomésticos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Partes de lámpara');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('PE');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Peines');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Película');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Película barrera');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Película biorientada');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Película estirable');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Película biorientada');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Película impresa');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Película laminada');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Película monoorientada');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Película no laminada');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Película para enfardado');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Película para invernadero');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Película plana');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Película termoencogible');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Película tipo Airpack');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Película tubular');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Películas Técnicas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Pelotas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Perfil para tabiquería de oficina');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Perfiles');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Perfiles de muebles');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Perfiles de sillas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Perfiles de ventanas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Perillas para cocina');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Picos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Piezas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Piezas automotrices');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Piezas de ajedrez');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Piezas de baño');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Piezas de radiadores');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Piezas eléctricas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Piezas internas del refrigerador');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Piezas para árbol de navidad');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Piezas para electrodomésticos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Piezas para lavadoras');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Piezas para trofeos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Piezas para ventiladores');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Pinzas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Piñatería');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Pipotes');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Pipotes de basura');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Pisos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Pitillos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Planta externa');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Plasticos industriales');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Plastificante');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Plastos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Plateras');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Platos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Platinas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Polvos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Poncheras');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Porta - placas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Porta - espejo');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Porta - pie');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Porta - tubete');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Porta cd');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Porta tarjetas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Portacarnet');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Porta - champú');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Postes eléctricos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('PP');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Precintos de seguridad');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Preformas para botellas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Prensillas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Presión');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Producto de menaje');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Producto del hogar');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Producto terminado');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Productos avicolas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Productos de limpieza');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Productos electricos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Productos impresos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Productos médicos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Protector para cepillos dentales');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Protectores');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Protectores de roscas para tuberías');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Protectores guayas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('PS');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Publicidad');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Puertas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Pulverizado');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Pupitres');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Rafia');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Ramplugs');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Rastrillos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Reciclado');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Recolector de heces');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Recubiertas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Recubrimiento de lonas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Recubrimiento de tapiceria');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Recuperación');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Recuperado');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Reducciones');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Regatón');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Reglas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Remolido');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Removedores');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Repuestos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Resinas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Resinas en polvo');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Resinas recuperadas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Resto de productos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Retapas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Rines para bicicleta');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Rodapies');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Rodillos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Rollos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Rollos para textiles');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Saco de pego');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Sacos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Sacos de hielo');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Sacos industriales');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Sacos rafia alimentos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Sacos rafia fertilizantes');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Sacos tejidos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Sacos valvulados');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Sandalias');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Sanitarios');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Seda para muebles');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Seguridad industrial');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Sellos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Semicuero');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Separador de loza');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Separador de pantalla');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Separador de servicios');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Separadores');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Separadores para filtros');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Separadores viales');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Sillas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Sobretapas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Socates');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Socates para fluorecenes');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Solventes');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Soplado');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Soporte');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Soporte de esperas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Soporte llaves electrónicas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Soporte tomaccorriente');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Sorbeteras para hielo');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Sub-ductos telefónicos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Suelas de calzado');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tacones');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Talco');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tambores');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tanques');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tanques grandes');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tanques para aceite');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tanques para agua');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tanques para lubricantes');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tanques pequeños');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tanques sépticos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tapa botellón');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tapa con precinto de seguridad');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tapa grande');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tapa para organizador de cepillos dentales');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tapa para torteras');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tapa pequeña');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tapas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tapas a presión');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tapas contenedores');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tapas de botella');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tapas de cloro');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tapas de tarro');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tapas Flip Top');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tapas para botellones');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tapas para radiadores');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tapas para tinas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tapas Push Pull');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tapas Roll-On');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tapas roscadas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tapas transparentes');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tapiceria');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tapones');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tarros');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tazas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tazón');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Techo');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tela');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tela de rafia');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tela de tapicería');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tela no tejida');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tela recubierta');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tenedores');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Terminales para muebles');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Termoencogible');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Termoencogible agua mineral');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Termoencogible cervezas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Termoencogible industrial');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Termoencogible refrescos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Termoformado');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Termos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tetas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Teteros');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tiempo de flujo');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tinas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tintas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tiras');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tobos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tomas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tope');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Topes para amortiguadores');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tornillos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Torteras');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Triangulo de seguridad');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tripa');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tuberías');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tubetes');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tubos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tubos acueductos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tubos acueductos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tubos de presión');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tubos ductos eléctricos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tubos no colapsibles');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tubos para aguas blancas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tubos para aguas negras');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tubos para canalizaciones eléctricas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tubos para conexiones telefónicas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tubos para gas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tubos para riego');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Tubos pozos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Uniones rápidas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Vajilla');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Valvo sack');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Vasos');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Velas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Velones');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Viandas');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Viceras para gorras');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Vipack');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Viveros');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Zapatera');
            $manager->persist($product);
            
        $product = new Product();
        $product->setDescription('Zapato');
            $manager->persist($product);
            
        $manager->flush();
    }
}
