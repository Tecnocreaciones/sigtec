<?php

/*
 * This file is part of the TecnocreacionesVzlaFixturesBundle package.
 * 
 * (c) www.tecnocreaciones.com.ve
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tecnocreaciones\Vzla\FixturesBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Tecnocreaciones\Vzla\EntityBundle\Entity\Municipality;

/**
 * Data de municipios
 * 
 * @see https://github.com/marydn/venezuela-sql/blob/master/venezuela.sql
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class LoadMunicipalityData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        
        $state = $this->getReference('State-Amazonas');
            $municipality = new Municipality();
            $municipality->setState($state);
            $municipality->setDescription('Alto Orinoco');
                $manager->persist($municipality);
            $this->addReference('Municipality-Alto-Orinoco', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Atabapo');
                $manager->persist($municipality);
            $this->addReference('Municipality-Atabapo', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Atures');
                $manager->persist($municipality);
            $this->addReference('Municipality-Atures', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Autana');
                $manager->persist($municipality);
            $this->addReference('Municipality-Autana', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Manapiare');
                $manager->persist($municipality);
            $this->addReference('Municipality-Manapiare', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Maroa');
                $manager->persist($municipality);
            $this->addReference('Municipality-Maroa', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Río Negro');
                $manager->persist($municipality);
            $this->addReference('Municipality-Rio-Negro', $municipality);
        
        $state = $this->getReference('State-Anzoategui');
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Anaco');
                $manager->persist($municipality);
            $this->addReference('Municipality-Anaco', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Aragua');
                $manager->persist($municipality);
            $this->addReference('Municipality-Aragua', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Manuel Ezequiel Bruzual');
                $manager->persist($municipality);
            $this->addReference('Municipality-Manuel-Ezequiel-Bruzual', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Diego Bautista Urbaneja');
                $manager->persist($municipality);
            $this->addReference('Municipality-Diego-Bautista-Urbaneja', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Fernando Peñalver');
                $manager->persist($municipality);
            $this->addReference('Municipality-Fernando-Penalver', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Francisco Del Carmen Carvajal');
                $manager->persist($municipality);
            $this->addReference('Municipality-Francisco-Del-Carmen-Carvajal', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('General Sir Arthur McGregor');
                $manager->persist($municipality);
            $this->addReference('Municipality-General-Sir-Arthur-McGregor', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Guanta');
                $manager->persist($municipality);
            $this->addReference('Municipality-Guanta', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Independencia');
                $manager->persist($municipality);
            $this->addReference('Municipality-Independencia', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('José Gregorio Monagas');
                $manager->persist($municipality);
            $this->addReference('Municipality-Jose-Gregorio-Monagas', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Juan Antonio Sotillo');
                $manager->persist($municipality);
            $this->addReference('Municipality-Juan-Antonio-Sotillo', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Juan Manuel Cajigal');
                $manager->persist($municipality);
            $this->addReference('Municipality-Juan-Manuel-Cajigal', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Libertad');
                $manager->persist($municipality);
            $this->addReference('Municipality-Libertad', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Francisco de Miranda');
                $manager->persist($municipality);
            $this->addReference('Municipality-Francisco-de-Miranda', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Pedro María Freites');
                $manager->persist($municipality);
            $this->addReference('Municipality-Pedro-Maria-Freites', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Píritu');
                $manager->persist($municipality);
            $this->addReference('Municipality-Piritu', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('San José de Guanipa');
                $manager->persist($municipality);
            $this->addReference('Municipality-San-Jose-de-Guanipa', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('San Juan de Capistrano');
                $manager->persist($municipality);
            $this->addReference('Municipality-San-Juan-de-Capistrano', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Santa Ana');
                $manager->persist($municipality);
            $this->addReference('Municipality-Santa-Ana', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Simón Bolívar');
                $manager->persist($municipality);
            $this->addReference('Municipality-Simon-Bolivar', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Simón Rodríguez');
                $manager->persist($municipality);
            $this->addReference('Municipality-Simon-Rodriguez', $municipality);
                
        $state = $this->getReference('State-Apure');
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Achaguas');
                $manager->persist($municipality);
            $this->addReference('Municipality-Achaguas', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Biruaca');
                $manager->persist($municipality);
            $this->addReference('Municipality-Biruaca', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Muñóz');
                $manager->persist($municipality);
            $this->addReference('Municipality-Munoz', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Páez');
                $manager->persist($municipality);
            $this->addReference('Municipality-Paez', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Pedro Camejo');
                $manager->persist($municipality);
            $this->addReference('Municipality-Pedro-Camejo', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Rómulo Gallegos');
                $manager->persist($municipality);
            $this->addReference('Municipality-Apure-Romulo-Gallegos', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('San Fernando');
                $manager->persist($municipality);
            $this->addReference('Municipality-San-Fernando', $municipality);
        
        $state = $this->getReference('State-Aragua');
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Atanasio Girardot');
                $manager->persist($municipality);
            $this->addReference('Municipality-Atanasio-Girardot', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Bolívar');
                $manager->persist($municipality);
            $this->addReference('Municipality-Anzoategui-Bolivar', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Camatagua');
                $manager->persist($municipality);
            $this->addReference('Municipality-Camatagua', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Francisco Linares Alcántara');
                $manager->persist($municipality);
            $this->addReference('Municipality-Francisco-Linares-Alcantara', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('José Ángel Lamas');
                $manager->persist($municipality);
            $this->addReference('Municipality-Jose-Angel-Lamas', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('José Félix Ribas');
                $manager->persist($municipality);
            $this->addReference('Municipality-Jose-Felix-Ribas', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('José Rafael Revenga');
                $manager->persist($municipality);
            $this->addReference('Municipality-Jose-Rafael-Revenga', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Libertador');
                $manager->persist($municipality);
            $this->addReference('Municipality-Aragua-Libertador', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Mario Briceño Iragorry');
                $manager->persist($municipality);
            $this->addReference('Municipality-Mario-Briceno-Iragorry', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Ocumare de la Costa de Oro');
                $manager->persist($municipality);
            $this->addReference('Municipality-Ocumare-de-la-Costa-de-Oro', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('San Casimiro');
                $manager->persist($municipality);
            $this->addReference('Municipality-San-Casimiro', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('San Sebastián');
                $manager->persist($municipality);
            $this->addReference('Municipality-San-Sebastian', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Santiago Mariño');
                $manager->persist($municipality);
            $this->addReference('Municipality-Santiago-Marino', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Santos Michelena');
                $manager->persist($municipality);
            $this->addReference('Municipality-Santos-Michelena', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Sucre');
                $manager->persist($municipality);
            $this->addReference('Municipality-Aragua-Sucre', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Tovar');
                $manager->persist($municipality);
            $this->addReference('Municipality-Tovar', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Urdaneta');
                $manager->persist($municipality);
            $this->addReference('Municipality-Urdaneta', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Zamora');
                $manager->persist($municipality);
            $this->addReference('Municipality-Zamora', $municipality);
                
        $state = $this->getReference('State-Barinas');
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Alberto Arvelo Torrealba');
                $manager->persist($municipality);
            $this->addReference('Municipality-Alberto-Arvelo-Torrealba', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Andrés Eloy Blanco');
                $manager->persist($municipality);
            $this->addReference('Municipality-Andres-Eloy-Blanco', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Antonio José de Sucre');
                $manager->persist($municipality);
            $this->addReference('Municipality-Antonio-Jose-de-Sucre', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Arismendi');
                $manager->persist($municipality);
            $this->addReference('Municipality-Arismendi', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Barinas');
                $manager->persist($municipality);
            $this->addReference('Municipality-Barinas', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Bolívar');
                $manager->persist($municipality);
            $this->addReference('Municipality-Aragua-Bolivar', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Cruz Paredes');
                $manager->persist($municipality);
            $this->addReference('Municipality-Cruz-Paredes', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Ezequiel Zamora');
                $manager->persist($municipality);
            $this->addReference('Municipality-Ezequiel-Zamora', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Obispos');
                $manager->persist($municipality);
            $this->addReference('Municipality-Obispos', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Pedraza');
                $manager->persist($municipality);
            $this->addReference('Municipality-Pedraza', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Rojas');
                $manager->persist($municipality);
            $this->addReference('Municipality-Rojas', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Sosa');
                $manager->persist($municipality);
            $this->addReference('Municipality-Sosa', $municipality);
                
        $state = $this->getReference('State-Bolivar');
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Caroní');
                $manager->persist($municipality);
            $this->addReference('Municipality-Caroni', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Cedeño');
                $manager->persist($municipality);
            $this->addReference('Municipality-Bolivar-Cedeno', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('El Callao');
                $manager->persist($municipality);
            $this->addReference('Municipality-El-Callao', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Gran Sabana');
                $manager->persist($municipality);
            $this->addReference('Municipality-Gran-Sabana', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Heres');
                $manager->persist($municipality);
            $this->addReference('Municipality-Heres', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Piar');
                $manager->persist($municipality);
            $this->addReference('Municipality-Piar', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Angostura (Raúl Leoni)');
                $manager->persist($municipality);
            $this->addReference('Municipality-Angostura-(Raul-Leoni)', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Roscio');
                $manager->persist($municipality);
            $this->addReference('Municipality-Roscio', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Sifontes');
                $manager->persist($municipality);
            $this->addReference('Municipality-Sifontes', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Sucre');
                $manager->persist($municipality);
            $this->addReference('Municipality-Bolivar-Sucre', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Padre Pedro Chien');
                $manager->persist($municipality);
            $this->addReference('Municipality-Padre-Pedro-Chien', $municipality);
                
        $state = $this->getReference('State-Carabobo');
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Bejuma');
                $manager->persist($municipality);
            $this->addReference('Municipality-Bejuma', $municipality);
                
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Carlos Arvelo');
                $manager->persist($municipality);
            $this->addReference('Municipality-Carlos-Arvelo', $municipality);
                
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Diego Ibarra');
                $manager->persist($municipality);
            $this->addReference('Municipality-Diego-Ibarra', $municipality);
                
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Guacara');
                $manager->persist($municipality);
            $this->addReference('Municipality-Guacara', $municipality);
                
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Juan José Mora');
                $manager->persist($municipality);
            $this->addReference('Municipality-Juan-Jose-Mora', $municipality);
                
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Libertador');
                $manager->persist($municipality);
            $this->addReference('Municipality-Carabobo-Libertador', $municipality);
                
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Los Guayos');
                $manager->persist($municipality);
            $this->addReference('Municipality-Los-Guayos', $municipality);
                
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Miranda');
                $manager->persist($municipality);
            $this->addReference('Municipality-Miranda', $municipality);
                
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Montalbán');
                $manager->persist($municipality);
            $this->addReference('Municipality-Montalban', $municipality);
                
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Naguanagua');
                $manager->persist($municipality);
            $this->addReference('Municipality-Naguanagua', $municipality);
                
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Puerto Cabello');
                $manager->persist($municipality);
            $this->addReference('Municipality-Puerto-Cabello', $municipality);
                
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('San Diego');
                $manager->persist($municipality);
            $this->addReference('Municipality-San-Diego', $municipality);
                
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('San Joaquín');
                $manager->persist($municipality);
            $this->addReference('Municipality-San-Joaquin', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Valencia');
                $manager->persist($municipality);
            $this->addReference('Municipality-Valencia', $municipality);
            
        $state = $this->getReference('State-Cojedes');
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Anzoátegui');
                $manager->persist($municipality);
            $this->addReference('Municipality-Cojedes-Anzoategui', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Tinaquillo');
                $manager->persist($municipality);
            $this->addReference('Municipality-Tinaquillo', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Girardot');
                $manager->persist($municipality);
            $this->addReference('Municipality-Girardot', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Lima Blanco');
                $manager->persist($municipality);
            $this->addReference('Municipality-Lima-Blanco', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Pao de San Juan Bautista');
                $manager->persist($municipality);
            $this->addReference('Municipality-Pao-de-San-Juan-Bautista', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Ricaurte');
                $manager->persist($municipality);
            $this->addReference('Municipality-Ricaurte', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Rómulo Gallegos');
                $manager->persist($municipality);
            $this->addReference('Municipality-Romulo-Gallegos', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('San Carlos');
                $manager->persist($municipality);
            $this->addReference('Municipality-San-Carlos', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Tinaco');
                $manager->persist($municipality);
            $this->addReference('Municipality-Tinaco', $municipality);
            
        $state = $this->getReference('State-Delta-Amacuro');
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Antonio Díaz');
                $manager->persist($municipality);
            $this->addReference('Municipality-Antonio-Diaz', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Casacoima');
                $manager->persist($municipality);
            $this->addReference('Municipality-Casacoima', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Pedernales');
                $manager->persist($municipality);
            $this->addReference('Municipality-Perdenales', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Tucupita');
                $manager->persist($municipality);
            $this->addReference('Municipality-Tucupita', $municipality);
            
        $state = $this->getReference('State-Falcon');
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Acosta');
                $manager->persist($municipality);
            $this->addReference('Municipality-Acosta', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Bolívar');
                $manager->persist($municipality);
            $this->addReference('Municipality-Falcon-Bolivar', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Buchivacoa');
                $manager->persist($municipality);
            $this->addReference('Municipality-Buchivacoa', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Cacique Manaure');
                $manager->persist($municipality);
            $this->addReference('Municipality-Cacique-Manaure', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Carirubana');
                $manager->persist($municipality);
            $this->addReference('Municipality-Carirubana', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Colina');
                $manager->persist($municipality);
            $this->addReference('Municipality-Colina', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Dabajuro');
                $manager->persist($municipality);
            $this->addReference('Municipality-Dabajuro', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Democracia');
                $manager->persist($municipality);
            $this->addReference('Municipality-Falcon-Democracia', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Falcón');
                $manager->persist($municipality);
            $this->addReference('Municipality-Falcon', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Federación');
                $manager->persist($municipality);
            $this->addReference('Municipality-Federacion', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Jacura');
                $manager->persist($municipality);
            $this->addReference('Municipality-Jacura', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('José Laurencio Silva');
                $manager->persist($municipality);
            $this->addReference('Municipality-Jose-Laurencio-Silva', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Los Taques');
                $manager->persist($municipality);
            $this->addReference('Municipality-Los-Taques', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Mauroa');
                $manager->persist($municipality);
            $this->addReference('Municipality-Mauroa', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Miranda');
                $manager->persist($municipality);
            $this->addReference('Municipality-Falcon-Miranda', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Monseñor Iturriza');
                $manager->persist($municipality);
            $this->addReference('Municipality-Monsenor-Iturriza', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Palmasola');
                $manager->persist($municipality);
            $this->addReference('Municipality-Palmasola', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Petit');
                $manager->persist($municipality);
            $this->addReference('Municipality-Petit', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Píritu');
                $manager->persist($municipality);
            $this->addReference('Municipality-Falcon-Piritu', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('San Francisco');
                $manager->persist($municipality);
            $this->addReference('Municipality-San-Francisco', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Sucre');
                $manager->persist($municipality);
            $this->addReference('Municipality-Falcon-Sucre', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Tocópero');
                $manager->persist($municipality);
            $this->addReference('Municipality-Tocopero', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Unión');
                $manager->persist($municipality);
            $this->addReference('Municipality-Union', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Urumaco');
                $manager->persist($municipality);
            $this->addReference('Municipality-Urumaco', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Zamora');
                $manager->persist($municipality);
            $this->addReference('Municipality-Falcon-Zamora', $municipality);
            
        $state = $this->getReference('State-Guarico');
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Camaguán');
                $manager->persist($municipality);
            $this->addReference('Municipality-Camaguan', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Chaguaramas');
                $manager->persist($municipality);
            $this->addReference('Municipality-Chaguaramas', $municipality);  
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('El Socorro');
                $manager->persist($municipality);
            $this->addReference('Municipality-El-Socorro', $municipality);  
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('José Félix Ribas');
                $manager->persist($municipality);
            $this->addReference('Municipality-Guarico-Jose-Felix-Ribas', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('José Tadeo Monagas');
                $manager->persist($municipality);
            $this->addReference('Municipality-Jose-Tadeo-Monagas', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Juan Germán Roscio');
                $manager->persist($municipality);
            $this->addReference('Municipality-Juan-German-Roscio', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Julián Mellado');
                $manager->persist($municipality);
            $this->addReference('Municipality-Julian-Mellado', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Las Mercedes');
                $manager->persist($municipality);
            $this->addReference('Municipality-Las-Mercedes', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Leonardo Infante');
                $manager->persist($municipality);
            $this->addReference('Municipality-Leonardo-Infante', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Pedro Zaraza');
                $manager->persist($municipality);
            $this->addReference('Municipality-Pedro-Zaraza', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Ortíz');
                $manager->persist($municipality);
            $this->addReference('Municipality-Ortiz', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('San Gerónimo de Guayabal');
                $manager->persist($municipality);
            $this->addReference('Municipality-San-Geronimo-de-Guayabal', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('San José de Guaribe');
                $manager->persist($municipality);
            $this->addReference('Municipality-San-Jose-de-Guaribe', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Santa María de Ipire');
                $manager->persist($municipality);
            $this->addReference('Municipality-Santa-Maria-de-Ipire', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Sebastián Francisco de Miranda');
                $manager->persist($municipality);
            $this->addReference('Municipality-Sebastian-Francisco-de-Miranda', $municipality);
            
        $state = $this->getReference('State-Lara');
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Andrés Eloy Blanco');
                $manager->persist($municipality);
            $this->addReference('Municipality-Lara-Andres-Eloy-Blanco', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Crespo');
                $manager->persist($municipality);
            $this->addReference('Municipality-Crespo', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Iribarren');
                $manager->persist($municipality);
            $this->addReference('Municipality-Iribarren', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Jiménez');
                $manager->persist($municipality);
            $this->addReference('Municipality-Jimenez', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Morán');
                $manager->persist($municipality);
            $this->addReference('Municipality-Moran', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Palavecino');
                $manager->persist($municipality);
            $this->addReference('Municipality-Palavecino', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Simón Planas');
                $manager->persist($municipality);
            $this->addReference('Municipality-Simon-Planas', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Torres');
                $manager->persist($municipality);
            $this->addReference('Municipality-Torres', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Urdaneta');
                $manager->persist($municipality);
            $this->addReference('Municipality-Lara-Urdaneta', $municipality);
            
        $state = $this->getReference('State-Merida');
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Alberto Adriani');
                $manager->persist($municipality);
            $this->addReference('Municipality-Alberto-Adriani', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Andrés Bello');
                $manager->persist($municipality);
            $this->addReference('Municipality-Merida-Andres-Bello', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Antonio Pinto Salinas');
                $manager->persist($municipality);
            $this->addReference('Municipality-Antonio-Pinto-Salinas', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Aricagua');
                $manager->persist($municipality);
            $this->addReference('Municipality-Aricagua', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Arzobispo Chacón');
                $manager->persist($municipality);
            $this->addReference('Municipality-Arzobispo-Chacon', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Campo Elías');
                $manager->persist($municipality);
            $this->addReference('Municipality-Campo-Elias', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Caracciolo Parra Olmedo');
                $manager->persist($municipality);
            $this->addReference('Municipality-Caracciolo-Parra-Olmedo', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Cardenal Quintero');
                $manager->persist($municipality);
            $this->addReference('Municipality-Cardenal-Quintero', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Guaraque');
                $manager->persist($municipality);
            $this->addReference('Municipality-Guaraque', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Julio César Salas');
                $manager->persist($municipality);
            $this->addReference('Municipality-Julio-Cesar-Salas', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Justo Briceño');
                $manager->persist($municipality);
            $this->addReference('Municipality-Justo-Briceno', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Libertador');
                $manager->persist($municipality);
            $this->addReference('Municipality-Merida-Libertador', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Miranda');
                $manager->persist($municipality);
            $this->addReference('Municipality-Merida-Miranda', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Obispo Ramos de Lora');
                $manager->persist($municipality);
            $this->addReference('Municipality-Obispo-Ramos-de-Lora', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Padre Noguera');
                $manager->persist($municipality);
            $this->addReference('Municipality-Padre-Noguera', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Pueblo Llano');
                $manager->persist($municipality);
            $this->addReference('Municipality-Pueblo-Llano', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Rangel');
                $manager->persist($municipality);
            $this->addReference('Municipality-Rangel', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Rivas Dávila');
                $manager->persist($municipality);
            $this->addReference('Municipality-Rivas-Davila', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Santos Marquina');
                $manager->persist($municipality);
            $this->addReference('Municipality-Santos-Marquina', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Sucre');
                $manager->persist($municipality);
            $this->addReference('Municipality-Merida-Sucre', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Tovar');
                $manager->persist($municipality);
            $this->addReference('Municipality-Merida-Tovar', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Tulio Febres Cordero');
                $manager->persist($municipality);
            $this->addReference('Municipality-Tulio-Febres-Cordero', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Zea');
                $manager->persist($municipality);
            $this->addReference('Municipality-Zea', $municipality);
            
        $state = $this->getReference('State-Miranda');
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Acevedo');
                $manager->persist($municipality);
            $this->addReference('Municipality-Acevedo', $municipality);
            
            
            $municipality->setState($state);
            $municipality->setDescription('Andrés Bello');
                $manager->persist($municipality);
            $this->addReference('Municipality-Miranda-Andres-Bello', $municipality);
            
            
            $municipality->setState($state);
            $municipality->setDescription('Baruta');
                $manager->persist($municipality);
            $this->addReference('Municipality-Baruta', $municipality);
            
            
            $municipality->setState($state);
            $municipality->setDescription('Brión');
                $manager->persist($municipality);
            $this->addReference('Municipality-Brion', $municipality);
            
            
            $municipality->setState($state);
            $municipality->setDescription('Buroz');
                $manager->persist($municipality);
            $this->addReference('Municipality-Buroz', $municipality);
            
            
            $municipality->setState($state);
            $municipality->setDescription('Carrizal');
                $manager->persist($municipality);
            $this->addReference('Municipality-Carrizal', $municipality);
            
            
            $municipality->setState($state);
            $municipality->setDescription('Chacao');
                $manager->persist($municipality);
            $this->addReference('Municipality-Chacao', $municipality);
            
            
            $municipality->setState($state);
            $municipality->setDescription('Cristóbal Rojas');
                $manager->persist($municipality);
            $this->addReference('Municipality-Cristobal-Rojas', $municipality);
            
            
            $municipality->setState($state);
            $municipality->setDescription('El Hatillo');
                $manager->persist($municipality);
            $this->addReference('Municipality-El-Hatillo', $municipality);
            
            
            $municipality->setState($state);
            $municipality->setDescription('Guaicaipuro');
                $manager->persist($municipality);
            $this->addReference('Municipality-Guaicaipuro', $municipality);
            
            
            $municipality->setState($state);
            $municipality->setDescription('Independencia');
                $manager->persist($municipality);
            $this->addReference('Municipality-Miranda-Independencia', $municipality);
            
            
            $municipality->setState($state);
            $municipality->setDescription('Lander');
                $manager->persist($municipality);
            $this->addReference('Municipality-Lander', $municipality);
            
            
            $municipality->setState($state);
            $municipality->setDescription('Los Salias');
                $manager->persist($municipality);
            $this->addReference('Municipality-Los-Salias', $municipality); 
            
            
            $municipality->setState($state);
            $municipality->setDescription('Páez');
                $manager->persist($municipality);
            $this->addReference('Municipality-Miranda-Paez', $municipality);
            
            
            $municipality->setState($state);
            $municipality->setDescription('Paz Castillo');
                $manager->persist($municipality);
            $this->addReference('Municipality-Paz-Castillo', $municipality);
            
            
            $municipality->setState($state);
            $municipality->setDescription('Pedro Gual');
                $manager->persist($municipality);
            $this->addReference('Municipality-Pedro-Gual', $municipality);
            
            
            $municipality->setState($state);
            $municipality->setDescription('Plaza');
                $manager->persist($municipality);
            $this->addReference('Municipality-Plaza', $municipality);
            
            
            $municipality->setState($state);
            $municipality->setDescription('Simón Bolívar');
                $manager->persist($municipality);
            $this->addReference('Municipality-Miranda-Simon-Bolivar', $municipality);
            
            
            $municipality->setState($state);
            $municipality->setDescription('Sucre');
                $manager->persist($municipality);
            $this->addReference('Municipality-Miranda-Sucre', $municipality);
            
            
            $municipality->setState($state);
            $municipality->setDescription('Urdaneta');
                $manager->persist($municipality);
            $this->addReference('Municipality-Miranda-Urdaneta', $municipality);
            
            
            $municipality->setState($state);
            $municipality->setDescription('Zamora');
                $manager->persist($municipality);
            $this->addReference('Municipality-Miranda-Zamora', $municipality);
            
        $state = $this->getReference('State-Monagas');
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Acosta');
                $manager->persist($municipality);
            $this->addReference('Municipality-Monagas-Acosta', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Aguasay');
                $manager->persist($municipality);
            $this->addReference('Municipality-Aguasay', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Bolívar');
                $manager->persist($municipality);
            $this->addReference('Municipality-Monagas-Bolivar', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Caripe');
                $manager->persist($municipality);
            $this->addReference('Municipality-Caripe', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Cedeño');
                $manager->persist($municipality);
            $this->addReference('Municipality-Cedeno', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Ezequiel Zamora');
                $manager->persist($municipality);
            $this->addReference('Municipality-Monagas-Ezequiel-Zamora', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Libertador');
                $manager->persist($municipality);
            $this->addReference('Municipality-Libertador', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Maturín');
                $manager->persist($municipality);
            $this->addReference('Municipality-Maturin', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Piar');
                $manager->persist($municipality);
            $this->addReference('Municipality-Monagas-Piar', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Punceres');
                $manager->persist($municipality);
            $this->addReference('Municipality-Punceres', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Santa Bárbara');
                $manager->persist($municipality);
            $this->addReference('Municipality-Santa-Barbara', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Sotillo');
                $manager->persist($municipality);
            $this->addReference('Municipality-Sotillo', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Uracoa');
                $manager->persist($municipality);
            $this->addReference('Municipality-Uracoa', $municipality);
            
        $state = $this->getReference('State-Nueva-Esparta');
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Antolín del Campo');
                $manager->persist($municipality);
            $this->addReference('Municipality-Antolin-del-Campo', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Arismendi');
                $manager->persist($municipality);
            $this->addReference('Municipality-Nueva-Esparta-Arismendi', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('García');
                $manager->persist($municipality);
            $this->addReference('Municipality-Garcia', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Gómez');
                $manager->persist($municipality);
            $this->addReference('Municipality-Gomez', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Maneiro');
                $manager->persist($municipality);
            $this->addReference('Municipality-Maneiro', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Marcano');
                $manager->persist($municipality);
            $this->addReference('Municipality-Marcano', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Mariño');
                $manager->persist($municipality);
            $this->addReference('Municipality-Marino', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Península de Macanao');
                $manager->persist($municipality);
            $this->addReference('Municipality-Peninsula-de-Macanao', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Tubores');
                $manager->persist($municipality);
            $this->addReference('Municipality-Tubores', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Villalba');
                $manager->persist($municipality);
            $this->addReference('Municipality-Villalba', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Díaz');
                $manager->persist($municipality);
            $this->addReference('Municipality-Diaz', $municipality);
            
        $state = $this->getReference('State-Portuguesa');
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Agua Blanca');
                $manager->persist($municipality);
            $this->addReference('Municipality-Agua-Blanca', $municipality);
           
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Araure');
                $manager->persist($municipality);
            $this->addReference('Municipality-Araure', $municipality);
           
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Esteller');
                $manager->persist($municipality);
            $this->addReference('Municipality-Esteller', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Guanare');
                $manager->persist($municipality);
            $this->addReference('Municipality-Guanare', $municipality);
           
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Guanarito');
                $manager->persist($municipality);
            $this->addReference('Municipality-Guanarito', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Monseñor José Vicente de Unda');
                $manager->persist($municipality);
            $this->addReference('Municipality-Monsenor-Jose-Vicente-de-Unda', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Ospino');
                $manager->persist($municipality);
            $this->addReference('Municipality-Ospino', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Páez');
                $manager->persist($municipality);
            $this->addReference('Municipality-Portuguesa-Paez', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Papelón');
                $manager->persist($municipality);
            $this->addReference('Municipality-Portuguesa-Papelon', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('San Genaro de Boconoíto');
                $manager->persist($municipality);
            $this->addReference('Municipality-San-Genaro-de-Boconoito', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('San Rafael de Onoto');
                $manager->persist($municipality);
            $this->addReference('Municipality-San-Rafael-de-Onoto', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Santa Rosalía');
                $manager->persist($municipality);
            $this->addReference('Municipality-Santa-Rosalia', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Sucre');
                $manager->persist($municipality);
            $this->addReference('Municipality-Portuguesa-Sucre', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Turén');
                $manager->persist($municipality);
            $this->addReference('Municipality-Turen', $municipality);
            
            $state = $this->getReference('State-Sucre');
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Andrés Eloy Blanco');
                $manager->persist($municipality);
            $this->addReference('Municipality-Miranda-Andres-Eloy-Blanco', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Andrés Mata');
                $manager->persist($municipality);
            $this->addReference('Municipality-Andres-Mata', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Arismendi');
                $manager->persist($municipality);
            $this->addReference('Municipality-Sucre-Arismendi', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Benítez');
                $manager->persist($municipality);
            $this->addReference('Municipality-Benitez', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Bermúdez');
                $manager->persist($municipality);
	    $this->addReference('Municipality-Bermudez', $municipality);
                
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Bolívar');
                $manager->persist($municipality);
            $this->addReference('Municipality-Sucre-Bolivar', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Cajigal');
                $manager->persist($municipality);
            $this->addReference('Municipality-Cajigal', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Cruz Salmerón Acosta');
                $manager->persist($municipality);
            $this->addReference('Municipality-Cruz-Salmeron-Acosta', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Libertador');
                $manager->persist($municipality);
            $this->addReference('Municipality-edoSucre-Libertador', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Mariño');
                $manager->persist($municipality);
            $this->addReference('Municipality-Sucre-Marino', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Mejía');
                $manager->persist($municipality);
            $this->addReference('Municipality-Mejia', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Montes');
                $manager->persist($municipality);
            $this->addReference('Municipality-Montes', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Ribero');
                $manager->persist($municipality);
            $this->addReference('Municipality-Ribero', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Sucre');
                $manager->persist($municipality);
            $this->addReference('Municipality-Sucre-Sucre', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Valdéz');
                $manager->persist($municipality);
            $this->addReference('Municipality-Valdez', $municipality);
            
        $state = $this->getReference('State-Tachira');
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Andrés Bello');
                $manager->persist($municipality);
            $this->addReference('Municipality-Tachira-Andres-Bello', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Antonio Rómulo Costa');
                $manager->persist($municipality);
            $this->addReference('Municipality-Antonio-Romulo-Costa', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Ayacucho');
                $manager->persist($municipality);
            $this->addReference('Municipality-Ayacucho', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Bolívar');
                $manager->persist($municipality);
            $this->addReference('Municipality-Tachira-Bolivar', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Cárdenas');
                $manager->persist($municipality);
            $this->addReference('Municipality-Cardenas', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Córdoba');
                $manager->persist($municipality);
            $this->addReference('Municipality-Cordoba', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Fernández Feo');
                $manager->persist($municipality);
            $this->addReference('Municipality-Fernandez-Feo', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Francisco de Miranda');
                $manager->persist($municipality);
            $this->addReference('Municipality-Tachira-Francisco-de-Miranda', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('García de Hevia');
                $manager->persist($municipality);
            $this->addReference('Municipality-Garcia-de-Hevia', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Guásimos');
                $manager->persist($municipality);
            $this->addReference('Municipality-Guasimos', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Independencia');
                $manager->persist($municipality);
            $this->addReference('Municipality-Tachira-Independencia', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Jáuregui');
                $manager->persist($municipality);
            $this->addReference('Municipality-Jauregui', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('José María Vargas');
                $manager->persist($municipality);
            $this->addReference('Municipality-Jose-Maria-Vargas', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Junín');
                $manager->persist($municipality);
            $this->addReference('Municipality-Junin', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Libertad');
                $manager->persist($municipality);
            $this->addReference('Municipality-Tachira-Libertad', $municipality);

            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Libertador');
                $manager->persist($municipality);
            $this->addReference('Municipality-Tachira-Libertador', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Lobatera');
                $manager->persist($municipality);
            $this->addReference('Municipality-Lobatera', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Michelena');
                $manager->persist($municipality);
            $this->addReference('Municipality-Michelena', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Panamericano');
                $manager->persist($municipality);
            $this->addReference('Municipality-Panamericano', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Pedro María Ureña');
                $manager->persist($municipality);
            $this->addReference('Municipality-Pedro-Maria-Urena', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Rafael Urdaneta');
                $manager->persist($municipality);
            $this->addReference('Municipality-Rafael-Urdaneta', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Samuel Darío Maldonado');
                $manager->persist($municipality);
            $this->addReference('Municipality-Samuel-Dario-Maldonado', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('San Cristóbal');
                $manager->persist($municipality);
            $this->addReference('Municipality-San-Cristobal', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Seboruco');
                $manager->persist($municipality);
            $this->addReference('Municipality-Seboruco', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Simón Rodríguez');
                $manager->persist($municipality);
            $this->addReference('Municipality-Tachira-Simon-Rodriguez', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Sucre');
                $manager->persist($municipality);
            $this->addReference('Municipality-Tachira-Sucre', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Torbes');
                $manager->persist($municipality);
            $this->addReference('Municipality-Torbes', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Uribante');
                $manager->persist($municipality);
            $this->addReference('Municipality-Uribante', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('San Judas Tadeo');
                $manager->persist($municipality);
            $this->addReference('Municipality-San-Judas-Tadeo', $municipality);
            
        $state = $this->getReference('State-Trujillo');
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Andrés Bello');
                $manager->persist($municipality);
            $this->addReference('Municipality-Andres-Bello', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Boconó');
                $manager->persist($municipality);
            $this->addReference('Municipality-Bocono', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Bolívar');
                $manager->persist($municipality);
            $this->addReference('Municipality-Trujillo-Bolivar', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Candelaria');
                $manager->persist($municipality);
            $this->addReference('Municipality-Candelaria', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Carache');
                $manager->persist($municipality);
            $this->addReference('Municipality-Carache', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Escuque');
                $manager->persist($municipality);
            $this->addReference('Municipality-Escuque', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('José Felipe Márquez Cañizalez');
                $manager->persist($municipality);
            $this->addReference('Municipality-Jose-Felipe-Marquez-Canizalez', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Juan Vicente Campos Elías');
                $manager->persist($municipality);
            $this->addReference('Municipality-Juan-Vicente-Campos-Elias', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('La Ceiba');
                $manager->persist($municipality);
            $this->addReference('Municipality-La-Ceiba', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Miranda');
                $manager->persist($municipality);
            $this->addReference('Municipality-Trujillo-Miranda', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Monte Carmelo');
                $manager->persist($municipality);
            $this->addReference('Municipality-Monte-Carmelo', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Motatán');
                $manager->persist($municipality);
            $this->addReference('Municipality-Motatan', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Pampán');
                $manager->persist($municipality);
            $this->addReference('Municipality-Pampan', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Pampanito');
                $manager->persist($municipality);
            $this->addReference('Municipality-Pampanito', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Rafael Rangel');
                $manager->persist($municipality);
            $this->addReference('Municipality-Rafael-Rangel', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('San Rafael de Carvajal');
                $manager->persist($municipality);
            $this->addReference('Municipality-San-Rafael-de-Carvajal', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Sucre');
                $manager->persist($municipality);
            $this->addReference('Municipality-Trujillo-Sucre', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Trujillo');
                $manager->persist($municipality);
            $this->addReference('Municipality-Trujillo', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Urdaneta');
                $manager->persist($municipality);
            $this->addReference('Municipality-Trujillo-Urdaneta', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Valera');
                $manager->persist($municipality);
            $this->addReference('Municipality-Valera', $municipality);
            
        $state = $this->getReference('State-Vargas');
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Vargas');
                $manager->persist($municipality);
            $this->addReference('Municipality-Vargas', $municipality);
            
        $state = $this->getReference('State-Yaracuy');
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Arístides Bastidas');
                $manager->persist($municipality);
            $this->addReference('Municipality-Aristides-Bastidas', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Bolívar');
                $manager->persist($municipality);
            $this->addReference('Municipality-Yaracuy-Bolivar', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Bruzual');
                $manager->persist($municipality);
            $this->addReference('Municipality-Bruzual', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Cocorote');
                $manager->persist($municipality);
            $this->addReference('Municipality-Cocorote', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Independencia');
                $manager->persist($municipality);
            $this->addReference('Municipality-Yaracuy-Independencia', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('José Antonio Páez');
                $manager->persist($municipality);
            $this->addReference('Municipality-Jose-Antonio-Paez', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('La Trinidad');
                $manager->persist($municipality);
            $this->addReference('Municipality-La-Trinidad', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Manuel Monge');
                $manager->persist($municipality);
            $this->addReference('Municipality-Manuel-Monge', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Nirgua');
                $manager->persist($municipality);
            $this->addReference('Municipality-Nirgua', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Peña');
                $manager->persist($municipality);
            $this->addReference('Municipality-Pena', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('San Felipe');
                $manager->persist($municipality);
            $this->addReference('Municipality-San-Felipe', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Sucre');
                $manager->persist($municipality);
            $this->addReference('Municipality-Yaracuy-Sucre', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Urachiche');
                $manager->persist($municipality);
            $this->addReference('Municipality-Urachiche', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('José Joaquín Veroes');
                $manager->persist($municipality);
            $this->addReference('Municipality-Jose-Joaquin-Veroes', $municipality);
            
        $state = $this->getReference('State-Zulia');
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Almirante Padilla');
                $manager->persist($municipality);
            $this->addReference('Municipality-Almirante-Padilla', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Baralt');
                $manager->persist($municipality);
            $this->addReference('Municipality-Zulia-Baralt', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Cabimas');
                $manager->persist($municipality);
            $this->addReference('Municipality-Zulia-Cabimas', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Catatumbo');
                $manager->persist($municipality);
            $this->addReference('Municipality-Zulia-Catatumbo', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Colón');
                $manager->persist($municipality);
            $this->addReference('Municipality-Zulia-Colon', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Francisco Javier Pulgar');
                $manager->persist($municipality);
            $this->addReference('Municipality-Francisco-Javier-Pulgar', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Páez');
                $manager->persist($municipality);
            $this->addReference('Municipality-Zulia-Paez', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Jesús Enrique Losada');
                $manager->persist($municipality);
            $this->addReference('Municipality-Jesus-Enrique-Losada', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Jesús María Semprún');
                $manager->persist($municipality);
            $this->addReference('Municipality-Jesus-Maria-Semprun', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('La Cañada de Urdaneta');
                $manager->persist($municipality);
            $this->addReference('Municipality-La-Canada-de-Urdaneta', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Lagunillas');
                $manager->persist($municipality);
            $this->addReference('Municipality-Zulia-Lagunillas', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Machiques de Perijá');
                $manager->persist($municipality);
            $this->addReference('Municipality-Machiques-de-Perija', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Mara');
                $manager->persist($municipality);
            $this->addReference('Municipality-Zulia-Mara', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Maracaibo');
                $manager->persist($municipality);
            $this->addReference('Municipality-Zulia-Maracaibo', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Miranda');
                $manager->persist($municipality);
            $this->addReference('Municipality-Zulia-Miranda', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Rosario de Perijá');
                $manager->persist($municipality);
            $this->addReference('Municipality-Rosario-de-Perija', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('San Francisco');
                $manager->persist($municipality);
            $this->addReference('Municipality-Zulia-San-Francisco', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Santa Rita');
                $manager->persist($municipality);
            $this->addReference('Municipality-Santa-Rita', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Simón Bolívar');
                $manager->persist($municipality);
            $this->addReference('Municipality-Zulia-Simon-Bolivar', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Sucre');
                $manager->persist($municipality);
            $this->addReference('Municipality-Zulia-Sucre', $municipality);
            
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Valmore Rodríguez');
                $manager->persist($municipality);
            $this->addReference('Municipality-Valmore-Rodríguez', $municipality);
            
                
        $state = $this->getReference('State-Distrito-Capital');
            $municipality = new Municipality();
            
            $municipality->setState($state);
            $municipality->setDescription('Libertador');
                $manager->persist($municipality);
            $this->addReference('Municipality-Distrito-Capital-Libertador', $municipality);
            
       $manager->flush();
        
    }
    public function getOrder() {
        return 3;
    }
}
