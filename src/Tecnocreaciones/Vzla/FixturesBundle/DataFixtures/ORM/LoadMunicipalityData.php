<?php

/*
 * This file is part of the TecnocreacionesVzlaFixturesBundle package.
 * 
 * (c) www.tecnocreaciones.com.ve
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SIEMPRE\Core\DataFixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use SIEMPRE\Core\Entity\C_Municipality;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Municipios
 * 
 * @see https://github.com/marydn/venezuela-sql/blob/master/venezuela.sql
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com.ve>
 */
class LoadMunicipalityData extends AbstractFixture implements ContainerAwareInterface,  OrderedFixtureInterface
{
    /**
     * Contenedor de dependencias
     * @var ContainerInterface 
     */
    protected $container;
    
    public function load(ObjectManager $manager) {
        $entity = $this->container->get('entity');
        
        $c_State = $this->getReference('State-Amazonas');
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Alto Orinoco');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Alto-Orinoco', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Atabapo');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Atabapo', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Atures');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Atures', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Autana');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Autana', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Manapiare');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Manapiare', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Maroa');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Maroa', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Río Negro');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Rio-Negro', $c_Municipality);
        
        $c_State = $this->getReference('State-Anzoategui');
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Anaco');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Anaco', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Aragua');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Aragua', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Manuel Ezequiel Bruzual');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Manuel-Ezequiel-Bruzual', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Diego Bautista Urbaneja');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Diego-Bautista-Urbaneja', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Fernando Peñalver');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Fernando-Penalver', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Francisco Del Carmen Carvajal');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Francisco-Del-Carmen-Carvajal', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('General Sir Arthur McGregor');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-General-Sir-Arthur-McGregor', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Guanta');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Guanta', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Independencia');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Independencia', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('José Gregorio Monagas');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Jose-Gregorio-Monagas', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Juan Antonio Sotillo');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Juan-Antonio-Sotillo', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Juan Manuel Cajigal');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Juan-Manuel-Cajigal', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Libertad');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Libertad', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Francisco de Miranda');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Francisco-de-Miranda', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Pedro María Freites');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Pedro-Maria-Freites', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Píritu');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Piritu', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('San José de Guanipa');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-San-Jose-de-Guanipa', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('San Juan de Capistrano');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-San-Juan-de-Capistrano', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Santa Ana');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Santa-Ana', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Simón Bolívar');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Simon-Bolivar', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Simón Rodríguez');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Simon-Rodriguez', $c_Municipality);
                
        $c_State = $this->getReference('State-Apure');
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Achaguas');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Achaguas', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Biruaca');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Biruaca', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Muñóz');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Munoz', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Páez');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Paez', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Pedro Camejo');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Pedro-Camejo', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Rómulo Gallegos');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Apure-Romulo-Gallegos', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('San Fernando');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-San-Fernando', $c_Municipality);
        
        $c_State = $this->getReference('State-Aragua');
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Atanasio Girardot');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Atanasio-Girardot', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Bolívar');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Anzoategui-Bolivar', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Camatagua');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Camatagua', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Francisco Linares Alcántara');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Francisco-Linares-Alcantara', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('José Ángel Lamas');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Jose-Angel-Lamas', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('José Félix Ribas');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Jose-Felix-Ribas', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('José Rafael Revenga');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Jose-Rafael-Revenga', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Libertador');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Aragua-Libertador', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Mario Briceño Iragorry');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Mario-Briceno-Iragorry', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Ocumare de la Costa de Oro');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Ocumare-de-la-Costa-de-Oro', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('San Casimiro');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-San-Casimiro', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('San Sebastián');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-San-Sebastian', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Santiago Mariño');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Santiago-Marino', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Santos Michelena');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Santos-Michelena', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Sucre');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Aragua-Sucre', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Tovar');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Tovar', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Urdaneta');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Urdaneta', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Zamora');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Zamora', $c_Municipality);
                
        $c_State = $this->getReference('State-Barinas');
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Alberto Arvelo Torrealba');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Alberto-Arvelo-Torrealba', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Andrés Eloy Blanco');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Andres-Eloy-Blanco', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Antonio José de Sucre');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Antonio-Jose-de-Sucre', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Arismendi');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Arismendi', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Barinas');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Barinas', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Bolívar');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Aragua-Bolivar', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Cruz Paredes');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Cruz-Paredes', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Ezequiel Zamora');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Ezequiel-Zamora', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Obispos');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Obispos', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Pedraza');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Pedraza', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Rojas');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Rojas', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Sosa');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Sosa', $c_Municipality);
                
        $c_State = $this->getReference('State-Bolivar');
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Caroní');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Caroni', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Cedeño');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Bolivar-Cedeno', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('El Callao');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-El-Callao', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Gran Sabana');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Gran-Sabana', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Heres');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Heres', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Piar');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Piar', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Angostura (Raúl Leoni)');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Angostura-(Raul-Leoni)', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Roscio');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Roscio', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Sifontes');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Sifontes', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Sucre');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Bolivar-Sucre', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Padre Pedro Chien');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Padre-Pedro-Chien', $c_Municipality);
                
        $c_State = $this->getReference('State-Carabobo');
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Bejuma');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Bejuma', $c_Municipality);
                
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Carlos Arvelo');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Carlos-Arvelo', $c_Municipality);
                
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Diego Ibarra');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Diego-Ibarra', $c_Municipality);
                
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Guacara');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Guacara', $c_Municipality);
                
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Juan José Mora');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Juan-Jose-Mora', $c_Municipality);
                
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Libertador');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Carabobo-Libertador', $c_Municipality);
                
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Los Guayos');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Los-Guayos', $c_Municipality);
                
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Miranda');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Miranda', $c_Municipality);
                
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Montalbán');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Montalban', $c_Municipality);
                
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Naguanagua');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Naguanagua', $c_Municipality);
                
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Puerto Cabello');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Puerto-Cabello', $c_Municipality);
                
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('San Diego');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-San-Diego', $c_Municipality);
                
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('San Joaquín');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-San-Joaquin', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Valencia');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Valencia', $c_Municipality);
            
        $c_State = $this->getReference('State-Cojedes');
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Anzoátegui');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Cojedes-Anzoategui', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Tinaquillo');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Tinaquillo', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Girardot');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Girardot', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Lima Blanco');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Lima-Blanco', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Pao de San Juan Bautista');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Pao-de-San-Juan-Bautista', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Ricaurte');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Ricaurte', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Rómulo Gallegos');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Romulo-Gallegos', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('San Carlos');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-San-Carlos', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Tinaco');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Tinaco', $c_Municipality);
            
        $c_State = $this->getReference('State-Delta-Amacuro');
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Antonio Díaz');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Antonio-Diaz', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Casacoima');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Casacoima', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Pedernales');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Perdenales', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Tucupita');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Tucupita', $c_Municipality);
            
        $c_State = $this->getReference('State-Falcon');
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Acosta');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Acosta', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Bolívar');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Falcon-Bolivar', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Buchivacoa');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Buchivacoa', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Cacique Manaure');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Cacique-Manaure', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Carirubana');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Carirubana', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Colina');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Colina', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Dabajuro');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Dabajuro', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Democracia');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Falcon-Democracia', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Falcón');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Falcon', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Federación');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Federacion', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Jacura');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Jacura', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('José Laurencio Silva');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Jose-Laurencio-Silva', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Los Taques');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Los-Taques', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Mauroa');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Mauroa', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Miranda');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Falcon-Miranda', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Monseñor Iturriza');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Monsenor-Iturriza', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Palmasola');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Palmasola', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Petit');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Petit', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Píritu');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Falcon-Piritu', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('San Francisco');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-San-Francisco', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Sucre');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Falcon-Sucre', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Tocópero');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Tocopero', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Unión');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Union', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Urumaco');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Urumaco', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Zamora');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Falcon-Zamora', $c_Municipality);
            
        $c_State = $this->getReference('State-Guarico');
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Camaguán');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Camaguan', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Chaguaramas');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Chaguaramas', $c_Municipality);  
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('El Socorro');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-El-Socorro', $c_Municipality);  
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('José Félix Ribas');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Guarico-Jose-Felix-Ribas', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('José Tadeo Monagas');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Jose-Tadeo-Monagas', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Juan Germán Roscio');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Juan-German-Roscio', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Julián Mellado');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Julian-Mellado', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Las Mercedes');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Las-Mercedes', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Leonardo Infante');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Leonardo-Infante', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Pedro Zaraza');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Pedro-Zaraza', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Ortíz');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Ortiz', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('San Gerónimo de Guayabal');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-San-Geronimo-de-Guayabal', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('San José de Guaribe');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-San-Jose-de-Guaribe', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Santa María de Ipire');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Santa-Maria-de-Ipire', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Sebastián Francisco de Miranda');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Sebastian-Francisco-de-Miranda', $c_Municipality);
            
        $c_State = $this->getReference('State-Lara');
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Andrés Eloy Blanco');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Lara-Andres-Eloy-Blanco', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Crespo');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Crespo', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Iribarren');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Iribarren', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Jiménez');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Jimenez', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Morán');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Moran', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Palavecino');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Palavecino', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Simón Planas');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Simon-Planas', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Torres');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Torres', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Urdaneta');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Lara-Urdaneta', $c_Municipality);
            
        $c_State = $this->getReference('State-Merida');
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Alberto Adriani');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Alberto-Adriani', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Andrés Bello');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Merida-Andres-Bello', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Antonio Pinto Salinas');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Antonio-Pinto-Salinas', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Aricagua');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Aricagua', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Arzobispo Chacón');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Arzobispo-Chacon', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Campo Elías');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Campo-Elias', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Caracciolo Parra Olmedo');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Caracciolo-Parra-Olmedo', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Cardenal Quintero');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Cardenal-Quintero', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Guaraque');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Guaraque', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Julio César Salas');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Julio-Cesar-Salas', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Justo Briceño');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Justo-Briceno', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Libertador');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Merida-Libertador', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Miranda');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Merida-Miranda', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Obispo Ramos de Lora');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Obispo-Ramos-de-Lora', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Padre Noguera');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Padre-Noguera', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Pueblo Llano');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Pueblo-Llano', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Rangel');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Rangel', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Rivas Dávila');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Rivas-Davila', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Santos Marquina');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Santos-Marquina', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Sucre');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Merida-Sucre', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Tovar');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Merida-Tovar', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Tulio Febres Cordero');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Tulio-Febres-Cordero', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Zea');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Zea', $c_Municipality);
            
        $c_State = $this->getReference('State-Miranda');
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Acevedo');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Acevedo', $c_Municipality);
            
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Andrés Bello');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Miranda-Andres-Bello', $c_Municipality);
            
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Baruta');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Baruta', $c_Municipality);
            
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Brión');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Brion', $c_Municipality);
            
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Buroz');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Buroz', $c_Municipality);
            
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Carrizal');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Carrizal', $c_Municipality);
            
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Chacao');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Chacao', $c_Municipality);
            
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Cristóbal Rojas');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Cristobal-Rojas', $c_Municipality);
            
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('El Hatillo');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-El-Hatillo', $c_Municipality);
            
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Guaicaipuro');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Guaicaipuro', $c_Municipality);
            
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Independencia');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Miranda-Independencia', $c_Municipality);
            
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Lander');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Lander', $c_Municipality);
            
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Los Salias');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Los-Salias', $c_Municipality); 
            
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Páez');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Miranda-Paez', $c_Municipality);
            
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Paz Castillo');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Paz-Castillo', $c_Municipality);
            
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Pedro Gual');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Pedro-Gual', $c_Municipality);
            
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Plaza');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Plaza', $c_Municipality);
            
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Simón Bolívar');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Miranda-Simon-Bolivar', $c_Municipality);
            
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Sucre');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Miranda-Sucre', $c_Municipality);
            
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Urdaneta');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Miranda-Urdaneta', $c_Municipality);
            
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Zamora');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Miranda-Zamora', $c_Municipality);
            
        $c_State = $this->getReference('State-Monagas');
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Acosta');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Monagas-Acosta', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Aguasay');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Aguasay', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Bolívar');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Monagas-Bolivar', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Caripe');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Caripe', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Cedeño');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Cedeno', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Ezequiel Zamora');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Monagas-Ezequiel-Zamora', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Libertador');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Libertador', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Maturín');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Maturin', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Piar');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Monagas-Piar', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Punceres');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Punceres', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Santa Bárbara');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Santa-Barbara', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Sotillo');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Sotillo', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Uracoa');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Uracoa', $c_Municipality);
            
        $c_State = $this->getReference('State-Nueva-Esparta');
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Antolín del Campo');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Antolin-del-Campo', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Arismendi');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Nueva-Esparta-Arismendi', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('García');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Garcia', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Gómez');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Gomez', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Maneiro');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Maneiro', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Marcano');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Marcano', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Mariño');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Marino', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Península de Macanao');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Peninsula-de-Macanao', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Tubores');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Tubores', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Villalba');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Villalba', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Díaz');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Diaz', $c_Municipality);
            
        $c_State = $this->getReference('State-Portuguesa');
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Agua Blanca');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Agua-Blanca', $c_Municipality);
           
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Araure');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Araure', $c_Municipality);
           
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Esteller');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Esteller', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Guanare');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Guanare', $c_Municipality);
           
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Guanarito');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Guanarito', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Monseñor José Vicente de Unda');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Monsenor-Jose-Vicente-de-Unda', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Ospino');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Ospino', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Páez');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Portuguesa-Paez', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Papelón');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Portuguesa-Papelon', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('San Genaro de Boconoíto');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-San-Genaro-de-Boconoito', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('San Rafael de Onoto');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-San-Rafael-de-Onoto', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Santa Rosalía');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Santa-Rosalia', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Sucre');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Portuguesa-Sucre', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Turén');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Turen', $c_Municipality);
            
        $c_State = $this->getReference('State-Sucre');
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Andrés Eloy Blanco');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Miranda-Andres-Eloy-Blanco', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Andrés Mata');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Andres-Mata', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Arismendi');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Sucre-Arismendi', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Benítez');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Benitez', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Bermúdez');
                $manager->persist($c_Municipality);
	    $this->addReference('Municipality-Bermudez', $c_Municipality);
                
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Bolívar');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Sucre-Bolivar', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Cajigal');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Cajigal', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Cruz Salmerón Acosta');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Cruz-Salmeron-Acosta', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Libertador');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-edoSucre-Libertador', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Mariño');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Sucre-Marino', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Mejía');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Mejia', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Montes');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Montes', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Ribero');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Ribero', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Sucre');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Sucre-Sucre', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Valdéz');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Valdez', $c_Municipality);
            
        $c_State = $this->getReference('State-Tachira');
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Andrés Bello');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Tachira-Andres-Bello', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Antonio Rómulo Costa');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Antonio-Romulo-Costa', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Ayacucho');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Ayacucho', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Bolívar');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Tachira-Bolivar', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Cárdenas');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Cardenas', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Córdoba');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Cordoba', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Fernández Feo');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Fernandez-Feo', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Francisco de Miranda');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Tachira-Francisco-de-Miranda', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('García de Hevia');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Garcia-de-Hevia', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Guásimos');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Guasimos', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Independencia');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Tachira-Independencia', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Jáuregui');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Jauregui', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('José María Vargas');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Jose-Maria-Vargas', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Junín');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Junin', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Libertad');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Tachira-Libertad', $c_Municipality);

            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Libertador');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Tachira-Libertador', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Lobatera');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Lobatera', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Michelena');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Michelena', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Panamericano');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Panamericano', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Pedro María Ureña');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Pedro-Maria-Urena', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Rafael Urdaneta');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Rafael-Urdaneta', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Samuel Darío Maldonado');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Samuel-Dario-Maldonado', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('San Cristóbal');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-San-Cristobal', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Seboruco');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Seboruco', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Simón Rodríguez');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Tachira-Simon-Rodriguez', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Sucre');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Tachira-Sucre', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Torbes');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Torbes', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Uribante');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Uribante', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('San Judas Tadeo');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-San-Judas-Tadeo', $c_Municipality);
            
        $c_State = $this->getReference('State-Trujillo');
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Andrés Bello');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Andres-Bello', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Boconó');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Bocono', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Bolívar');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Trujillo-Bolivar', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Candelaria');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Candelaria', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Carache');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Carache', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Escuque');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Escuque', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('José Felipe Márquez Cañizalez');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Jose-Felipe-Marquez-Canizalez', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Juan Vicente Campos Elías');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Juan-Vicente-Campos-Elias', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('La Ceiba');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-La-Ceiba', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Miranda');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Trujillo-Miranda', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Monte Carmelo');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Monte-Carmelo', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Motatán');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Motatan', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Pampán');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Pampan', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Pampanito');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Pampanito', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Rafael Rangel');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Rafael-Rangel', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('San Rafael de Carvajal');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-San-Rafael-de-Carvajal', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Sucre');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Trujillo-Sucre', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Trujillo');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Trujillo', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Urdaneta');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Trujillo-Urdaneta', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Valera');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Valera', $c_Municipality);
            
        $c_State = $this->getReference('State-Vargas');
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Vargas');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Vargas', $c_Municipality);
            
        $c_State = $this->getReference('State-Yaracuy');
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Arístides Bastidas');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Aristides-Bastidas', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Bolívar');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Yaracuy-Bolivar', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Bruzual');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Bruzual', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Cocorote');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Cocorote', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Independencia');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Yaracuy-Independencia', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('José Antonio Páez');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Jose-Antonio-Paez', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('La Trinidad');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-La-Trinidad', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Manuel Monge');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Manuel-Monge', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Nirgua');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Nirgua', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Peña');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Pena', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('San Felipe');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-San-Felipe', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Sucre');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Yaracuy-Sucre', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Urachiche');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Urachiche', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('José Joaquín Veroes');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Jose-Joaquin-Veroes', $c_Municipality);
            
        $c_State = $this->getReference('State-Zulia');
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Almirante Padilla');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Almirante-Padilla', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Baralt');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Zulia-Baralt', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Cabimas');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Zulia-Cabimas', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Catatumbo');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Zulia-Catatumbo', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Colón');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Zulia-Colon', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Francisco Javier Pulgar');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Francisco-Javier-Pulgar', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Páez');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Zulia-Paez', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Jesús Enrique Losada');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Jesus-Enrique-Losada', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Jesús María Semprún');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Jesus-Maria-Semprun', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('La Cañada de Urdaneta');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-La-Canada-de-Urdaneta', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Lagunillas');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Zulia-Lagunillas', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Machiques de Perijá');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Machiques-de-Perija', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Mara');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Zulia-Mara', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Maracaibo');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Zulia-Maracaibo', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Miranda');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Zulia-Miranda', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Rosario de Perijá');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Rosario-de-Perija', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('San Francisco');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Zulia-San-Francisco', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Santa Rita');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Santa-Rita', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Simón Bolívar');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Zulia-Simon-Bolivar', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Sucre');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Zulia-Sucre', $c_Municipality);
            
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Valmore Rodríguez');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Valmore-Rodríguez', $c_Municipality);
            
                
        $c_State = $this->getReference('State-Distrito-Capital');
            $c_Municipality = new C_Municipality();
            $c_Municipality->setEntity($entity);
            $c_Municipality->setC_State($c_State);
            $c_Municipality->setLabel('Libertador');
                $manager->persist($c_Municipality);
            $this->addReference('Municipality-Distrito-Capital-Libertador', $c_Municipality);
            
       $manager->flush();
        
    }

    public function setContainer(ContainerInterface $container = null) {
        $this->container = $container;
    }
    
    public function getOrder() {
        return 5;
    }

}
