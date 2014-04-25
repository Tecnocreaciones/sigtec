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
use Tecnocreaciones\Vzla\EntityBundle\Entity\City;

/**
 * Data de las ciudades
 *
 * @see https://github.com/marydn/venezuela-sql/blob/master/venezuela.sql
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class LoadCityData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager) {
        $city = new City();
        $city
                ->setDescription('Maroa')
                ->setCapital(false)
                ->setState($this->getReference('State-Amazonas'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Puerto Ayacucho')
                ->setCapital(true)
                ->setState($this->getReference('State-Amazonas'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('San Fernando de Atabapo')
                ->setCapital(false)
                ->setState($this->getReference('State-Amazonas'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Anaco')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Aragua de Barcelona')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Barcelona')
                ->setCapital(true)
                ->setState($this->getReference('State-Anzoategui'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Boca de Uchire')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Cantaura')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Clarines')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('El Chaparro')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('El Pao Anzoátegui')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('El Tigre')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('El Tigrito')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Guanape')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Guanta')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Lechería')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ;
            $manager->persist($city);
            
        $city = new City();
        $city
                ->setDescription('Onoto')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ;
            $manager->persist($city);
            
        $city = new City();
        $city
                ->setDescription('Pariaguán')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ;
            $manager->persist($city);
            
        $city = new City();
        $city
                ->setDescription('Píritu')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ;
            $manager->persist($city);
            
        $city = new City();
        $city
                ->setDescription('Puerto La Cruz')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ;
            $manager->persist($city);
            
        $city = new City();
        $city
                ->setDescription('Puerto Píritu')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ;
            $manager->persist($city);
            
        $city = new City();
        $city
                ->setDescription('Sabana de Uchire')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ;
            $manager->persist($city);
            
        $city = new City();
        $city
                ->setDescription('San Mateo Anzoátegui')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ;
            $manager->persist($city);
            
        $city = new City();
        $city
                ->setDescription('San Pablo Anzoátegui')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ;
            $manager->persist($city);
            
        $city = new City();
        $city
                ->setDescription('San Tomé')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ;
            $manager->persist($city);
            
        $city = new City();
        $city
                ->setDescription('Santa Ana de Anzoátegui')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ;
            $manager->persist($city);
            
        $city = new City();
        $city
                ->setDescription('Santa Fe Anzoátegui')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ;
            $manager->persist($city);
            
        $city = new City();
        $city
                ->setDescription('Santa Rosa')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ;
            $manager->persist($city);
            
        $city = new City();
        $city
                ->setDescription('Soledad')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ;
            $manager->persist($city);
            
        $city = new City();
        $city
                ->setDescription('Urica')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ;
            $manager->persist($city);
            
        $city = new City();
        $city
                ->setDescription('Valle de Guanape')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ;
            $manager->persist($city);
            
        $city = new City();
        $city
                ->setDescription('Achaguas')
                ->setCapital(false)
                ->setState($this->getReference('State-Apure'))
                ;
            $manager->persist($city);
            
        $city = new City();
        $city
                ->setDescription('Biruaca')
                ->setCapital(false)
                ->setState($this->getReference('State-Apure'))
                ;
            $manager->persist($city);
            
        $city = new City();
        $city
                ->setDescription('Bruzual')
                ->setCapital(false)
                ->setState($this->getReference('State-Apure'))
                ;
            $manager->persist($city);
            
        $city = new City();
        $city
                ->setDescription('El Amparo')
                ->setCapital(false)
                ->setState($this->getReference('State-Apure'))
                ;
            $manager->persist($city);
            
        $city = new City();
        $city
                ->setDescription('El Nula')
                ->setCapital(false)
                ->setState($this->getReference('State-Apure'))
                ;
            $manager->persist($city);
            
        $city = new City();
        $city
                ->setDescription('Elorza')
                ->setCapital(false)
                ->setState($this->getReference('State-Apure'))
                ;
            $manager->persist($city);
            
        $city = new City();
        $city
                ->setDescription('Guasdualito')
                ->setCapital(false)
                ->setState($this->getReference('State-Apure'))
                ;
            $manager->persist($city);
            
        $city = new City();
        $city
                ->setDescription('Mantecal')
                ->setCapital(false)
                ->setState($this->getReference('State-Apure'))
                ;
            $manager->persist($city);
            
        $city = new City();
        $city
                ->setDescription('Puerto Páez')
                ->setCapital(false)
                ->setState($this->getReference('State-Apure'))
                ;
            $manager->persist($city);
            
        $city = new City();
        $city
                ->setDescription('San Fernando de Apure')
                ->setCapital(true)
                ->setState($this->getReference('State-Apure'))
                ;
            $manager->persist($city);
            
        $city = new City();
        $city
                ->setDescription('San Juan de Payara')
                ->setCapital(false)
                ->setState($this->getReference('State-Apure'))
                ;
            $manager->persist($city);
            
        $city = new City();
        $city
                ->setDescription('Barbacoas')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ;
            $manager->persist($city);
            
        $city = new City();
        $city
                ->setDescription('Cagua')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ;
            $manager->persist($city);
            
        $city = new City();
        $city
                ->setDescription('Camatagua')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ;
            $manager->persist($city);
            
        $city = new City();
        $city
                ->setDescription('Choroní')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ;
            $manager->persist($city);
            
        $city = new City();
        $city
                ->setDescription('Colonia Tovar')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ;
            $manager->persist($city);
            
        $city = new City();
        $city
                ->setDescription('El Consejo')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ;
            $manager->persist($city);
            
        $city = new City();
        $city
                ->setDescription('La Victoria')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ;
            $manager->persist($city);
            
        $city = new City();
        $city
                ->setDescription('Las Tejerías')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ;
            $manager->persist($city);
            
        $city = new City();
        $city
                ->setDescription('Magdaleno')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ;
            $manager->persist($city);
            
        $city = new City();
        $city
                ->setDescription('Maracay')
                ->setCapital(true)
                ->setState($this->getReference('State-Aragua'))
                ;
            $manager->persist($city);
            
        $city = new City();
        $city
                ->setDescription('Ocumare de La Costa')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ;
            $manager->persist($city);
            
        $city = new City();
        $city
                ->setDescription('Palo Negro')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ;
            $manager->persist($city);
            
        $city = new City();
        $city
                ->setDescription('San Casimiro')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ;
            $manager->persist($city);
            
        $city = new City();
        $city
                ->setDescription('San Mateo')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ;
            $manager->persist($city);
            
        $city = new City();
        $city
                ->setDescription('San Sebastián')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ;
            $manager->persist($city);
            
        $city = new City();
        $city
                ->setDescription('Santa Cruz de Aragua')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ;
            $manager->persist($city);
            
        $city = new City();
        $city
                ->setDescription('Tocorón')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ;
            $manager->persist($city);
            
        $city = new City();
        $city
                ->setDescription('Turmero')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ;
            $manager->persist($city);
            
        $city = new City();
        $city
                ->setDescription('Villa de Cura')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ;
            $manager->persist($city);
            
        $city = new City();
        $city
                ->setDescription('Zuata')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ;
            $manager->persist($city);
            
        $city = new City();
        $city
                ->setDescription('Barinas')
                ->setCapital(true)
                ->setState($this->getReference('State-Barinas'))
                ;
            $manager->persist($city);
            
        $city = new City();
        $city
                ->setDescription('Barinitas')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ;
            $manager->persist($city);
            
        $city = new City();
        $city
                ->setDescription('Barrancas')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ;
            $manager->persist($city);
            
        $city = new City();
        $city
                ->setDescription('Calderas')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ;
            $manager->persist($city);
            
        $city = new City();
        $city
                ->setDescription('Capitanejo')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ;
            $manager->persist($city);
            
        $city = new City();
        $city
                ->setDescription('Ciudad Bolivia')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ;
            $manager->persist($city);
            
        $city = new City();
        $city
                ->setDescription('El Cantón')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ;
            $manager->persist($city);
            
        $city = new City();
        $city
                ->setDescription('Las Veguitas')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ;
            $manager->persist($city);
            
        $city = new City();
        $city
                ->setDescription('Libertad de Barinas')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ;
            $manager->persist($city);
            
        $city = new City();
        $city
                ->setDescription('Sabaneta')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Socopó')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Caicara del Orinoco')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Canaima')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Ciudad Bolívar')
                ->setCapital(true)
                ->setState($this->getReference('State-Bolivar'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Ciudad Piar')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('El Callao')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('El Dorado')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('El Manteco')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('El Palmar')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('El Pao')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Guasipati')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Guri')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('La Paragua')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Matanzas')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Puerto Ordaz')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('San Félix')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Santa Elena de Uairén')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Tumeremo')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Unare')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Upata')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Bejuma')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Bejuma')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Belén')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Campo de Carabobo')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Canoabo')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Central Tacarigua')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Chirgua')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Ciudad Alianza')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('El Palito')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Guacara')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Guigue')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Las Trincheras')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Los Guayos')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Mariara')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Miranda')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Montalbán')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Morón')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Naguanagua')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Puerto Cabello')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('San Joaquín')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Tocuyito')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Urama')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Valencia')
                ->setCapital(true)
                ->setState($this->getReference('State-Carabobo'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Vigirimita')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Aguirre')
                ->setCapital(false)
                ->setState($this->getReference('State-Cojedes'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Apartaderos Cojedes')
                ->setCapital(false)
                ->setState($this->getReference('State-Cojedes'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Arismendi')
                ->setCapital(false)
                ->setState($this->getReference('State-Cojedes'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Camuriquito')
                ->setCapital(false)
                ->setState($this->getReference('State-Cojedes'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('El Baúl')
                ->setCapital(false)
                ->setState($this->getReference('State-Cojedes'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('El Limón')
                ->setCapital(false)
                ->setState($this->getReference('State-Cojedes'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('El Pao Cojedes')
                ->setCapital(false)
                ->setState($this->getReference('State-Cojedes'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('El Socorro')
                ->setCapital(false)
                ->setState($this->getReference('State-Cojedes'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('La Aguadita')
                ->setCapital(false)
                ->setState($this->getReference('State-Cojedes'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Las Vegas')
                ->setCapital(false)
                ->setState($this->getReference('State-Cojedes'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Libertad de Cojedes')
                ->setCapital(false)
                ->setState($this->getReference('State-Cojedes'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Mapuey')
                ->setCapital(false)
                ->setState($this->getReference('State-Cojedes'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Piñedo')
                ->setCapital(false)
                ->setState($this->getReference('State-Cojedes'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Samancito')
                ->setCapital(false)
                ->setState($this->getReference('State-Cojedes'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('San Carlos')
                ->setCapital(true)
                ->setState($this->getReference('State-Cojedes'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Sucre')
                ->setCapital(false)
                ->setState($this->getReference('State-Cojedes'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Tinaco')
                ->setCapital(false)
                ->setState($this->getReference('State-Cojedes'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Tinaquillo')
                ->setCapital(false)
                ->setState($this->getReference('State-Cojedes'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Vallecito')
                ->setCapital(false)
                ->setState($this->getReference('State-Cojedes'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Tucupita')
                ->setCapital(true)
                ->setState($this->getReference('State-Delta-Amacuro'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Adícora')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Boca de Aroa')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Cabure')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Capadare')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Capatárida')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Chichiriviche')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Churuguara')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Coro')
                ->setCapital(true)
                ->setState($this->getReference('State-Falcon'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Cumarebo')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Dabajuro')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Judibana')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('La Cruz de Taratara')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('La Vela de Coro')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Los Taques')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Maparari')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Mene de Mauroa')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Mirimire')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Pedregal')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Píritu Falcón')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Pueblo Nuevo Falcón')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Puerto Cumarebo')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Punta Cardón')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Punto Fijo')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('San Juan de Los Cayos')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('San Luis')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Santa Ana Falcón')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Santa Cruz De Bucaral')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Tocopero')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Tocuyo de La Costa')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Tucacas')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Yaracal')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Altagracia de Orituco')
                ->setCapital(false)
                ->setState($this->getReference('State-Guarico'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Cabruta')
                ->setCapital(false)
                ->setState($this->getReference('State-Guarico'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Calabozo')
                ->setCapital(false)
                ->setState($this->getReference('State-Guarico'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Camaguán')
                ->setCapital(false)
                ->setState($this->getReference('State-Guarico'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Chaguaramas Guárico')
                ->setCapital(false)
                ->setState($this->getReference('State-Guarico'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('El Socorro')
                ->setCapital(false)
                ->setState($this->getReference('State-Guarico'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('El Sombrero')
                ->setCapital(false)
                ->setState($this->getReference('State-Guarico'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Las Mercedes de Los Llanos')
                ->setCapital(false)
                ->setState($this->getReference('State-Guarico'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Lezama')
                ->setCapital(false)
                ->setState($this->getReference('State-Guarico'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Onoto')
                ->setCapital(false)
                ->setState($this->getReference('State-Guarico'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Ortíz')
                ->setCapital(false)
                ->setState($this->getReference('State-Guarico'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('San José de Guaribe')
                ->setCapital(false)
                ->setState($this->getReference('State-Guarico'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('San Juan de Los Morros')
                ->setCapital(true)
                ->setState($this->getReference('State-Guarico'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('San Rafael de Laya')
                ->setCapital(false)
                ->setState($this->getReference('State-Guarico'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Santa María de Ipire')
                ->setCapital(false)
                ->setState($this->getReference('State-Guarico'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Tucupido')
                ->setCapital(false)
                ->setState($this->getReference('State-Guarico'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Valle de La Pascua')
                ->setCapital(false)
                ->setState($this->getReference('State-Guarico'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Zaraza')
                ->setCapital(false)
                ->setState($this->getReference('State-Guarico'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Aguada Grande')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Atarigua')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Barquisimeto')
                ->setCapital(true)
                ->setState($this->getReference('State-Lara'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Bobare')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Cabudare')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Carora')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Cubiro')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Cují')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Duaca')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('El Manzano')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('El Tocuyo')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Guaríco')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Humocaro Alto')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Humocaro Bajo')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('La Miel')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Moroturo')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Quíbor')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Río Claro')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Sanare')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Santa Inés')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Sarare')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Siquisique')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Tintorero')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Apartaderos Mérida')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Arapuey')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Bailadores')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Caja Seca')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Canaguá')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Chachopo')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Chiguara')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Ejido')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('El Vigía')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('La Azulita')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('La Playa')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Lagunillas Mérida')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Mérida')
                ->setCapital(true)
                ->setState($this->getReference('State-Merida'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Mesa de Bolívar')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Mucuchíes')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Mucujepe')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Mucuruba')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Nueva Bolivia')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Palmarito')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Pueblo Llano')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Santa Cruz de Mora')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Santa Elena de Arenales')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Santo Domingo')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Tabáy')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Timotes')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Torondoy')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Tovar')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Tucani')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Zea')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Araguita')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Carrizal')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Caucagua')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Chaguaramas Miranda')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Chaguaramas Miranda')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Charallave')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Chirimena')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Chuspa')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Cúa')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Cupira')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Curiepe')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('El Guapo')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('El Jarillo')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Filas de Mariche')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Guarenas')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Guatire')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Higuerote')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Los Anaucos')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Los Teques')
                ->setCapital(true)
                ->setState($this->getReference('State-Miranda'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Ocumare del Tuy')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Panaquire')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Paracotos')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Río Chico')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('San Antonio de Los Altos')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('San Diego de Los Altos')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('San Fernando del Guapo')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('San Francisco de Yare')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('San José de Los Altos')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('San José de Río Chico')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('San Pedro de Los Altos')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Santa Lucía')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Santa Teresa')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Tacarigua de La Laguna')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Tacarigua de Mamporal')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Tácata')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Turumo')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Aguasay')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Aragua de Maturín')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Barrancas del Orinoco')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Caicara de Maturín')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Caripe')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Caripito')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Caripito')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Chaguaramal')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Chaguaramas Monagas')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('El Furrial')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('El Tejero')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Jusepín')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('La Toscana')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Maturín')
                ->setCapital(true)
                ->setState($this->getReference('State-Monagas'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Miraflores')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Punta de Mata')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Quiriquire')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('San Antonio de Maturín')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('San Vicente Monagas')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Santa Bárbara')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Temblador')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Teresen')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Uracoa')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Altagracia')
                ->setCapital(false)
                ->setState($this->getReference('State-Nueva-Esparta'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Boca de Pozo')
                ->setCapital(false)
                ->setState($this->getReference('State-Nueva-Esparta'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Boca de Río')
                ->setCapital(false)
                ->setState($this->getReference('State-Nueva-Esparta'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('El Espinal')
                ->setCapital(false)
                ->setState($this->getReference('State-Nueva-Esparta'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('El Valle del Espíritu Santo')
                ->setCapital(false)
                ->setState($this->getReference('State-Nueva-Esparta'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('El Yaque')
                ->setCapital(false)
                ->setState($this->getReference('State-Nueva-Esparta'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Juangriego')
                ->setCapital(false)
                ->setState($this->getReference('State-Nueva-Esparta'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('La Asunción')
                ->setCapital(true)
                ->setState($this->getReference('State-Nueva-Esparta'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('La Guardia')
                ->setCapital(false)
                ->setState($this->getReference('State-Nueva-Esparta'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Pampatar')
                ->setCapital(false)
                ->setState($this->getReference('State-Nueva-Esparta'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Porlamar')
                ->setCapital(false)
                ->setState($this->getReference('State-Nueva-Esparta'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Puerto Fermín')
                ->setCapital(false)
                ->setState($this->getReference('State-Nueva-Esparta'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Punta de Piedras')
                ->setCapital(false)
                ->setState($this->getReference('State-Nueva-Esparta'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('San Francisco de Macanao')
                ->setCapital(false)
                ->setState($this->getReference('State-Nueva-Esparta'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('San Juan Bautista')
                ->setCapital(false)
                ->setState($this->getReference('State-Nueva-Esparta'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('San Pedro de Coche')
                ->setCapital(false)
                ->setState($this->getReference('State-Nueva-Esparta'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Santa Ana de Nueva Esparta')
                ->setCapital(false)
                ->setState($this->getReference('State-Nueva-Esparta'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Villa Rosa')
                ->setCapital(false)
                ->setState($this->getReference('State-Nueva-Esparta'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Acarigua')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Agua Blanca')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Araure')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Biscucuy')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Biscucuy')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Boconoito')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Campo Elías')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Chabasquén')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Guanare')
                ->setCapital(true)
                ->setState($this->getReference('State-Portuguesa'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Guanarito')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('La Aparición')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('La Misión')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Mesa de Cavacas')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Ospino')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Papelón')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Payara')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Pimpinela')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Píritu de Portuguesa')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('San Rafael de Onoto')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Santa Rosalía')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Turén')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Altos de Sucre')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Araya')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Cariaco')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Carúpano')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Casanay')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Cumaná')
                ->setCapital(true)
                ->setState($this->getReference('State-Sucre'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Cumanacoa')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('El Morro Puerto Santo')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('El Pilar')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('El Poblado')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Guaca')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Guiria')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Irapa')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Manicuare')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Mariguitar')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Río Caribe')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('San Antonio del Golfo')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('San José de Aerocuar')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('San Vicente de Sucre')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Santa Fe de Sucre')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Tunapuy')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Yaguaraparo')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Yoco')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Abejales')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Borota')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Bramon')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Capacho')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Colón')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Coloncito')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Cordero')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('El Cobre')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('El Pinal')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Independencia')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('La Fría')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('La Grita')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('La Pedrera')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('La Tendida')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Las Delicias')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Las Hernández')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Lobatera')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Michelena')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Palmira')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Pregonero')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Queniquea')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Rubio')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('San Antonio del Tachira')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('San Cristobal')
                ->setCapital(true)
                ->setState($this->getReference('State-Tachira'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('San José de Bolívar')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('San Josecito')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('San Pedro del Río')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Santa Ana Táchira')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Seboruco')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Táriba')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Umuquena')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Ureña')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Batatal')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Betijoque')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Boconó')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Carache')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Chejende')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Cuicas')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('El Dividive')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('El Jaguito')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Escuque')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Isnotú')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Jajó')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('La Ceiba')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('La Concepción de Trujllo')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('La Concepción de Trujllo')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('La Mesa de Esnujaque')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('La Puerta')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('La Quebrada')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Mendoza Fría')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Meseta de Chimpire')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Monay')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Motatán')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Pampán')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Pampanito')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Sabana de Mendoza')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('San Lázaro')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Santa Ana de Trujillo')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Tostós')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Trujillo')
                ->setCapital(true)
                ->setState($this->getReference('State-Trujillo'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Valera')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Carayaca')
                ->setCapital(false)
                ->setState($this->getReference('State-Vargas'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Litoral')
                ->setCapital(false)
                ->setState($this->getReference('State-Vargas'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('La Guaira')
                ->setCapital(true)
                ->setState($this->getReference('State-Vargas'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Catia La Mar')
                ->setCapital(false)
                ->setState($this->getReference('State-Vargas'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Macuto')
                ->setCapital(false)
                ->setState($this->getReference('State-Vargas'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Naiguatá')
                ->setCapital(false)
                ->setState($this->getReference('State-Vargas'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Aroa')
                ->setCapital(false)
                ->setState($this->getReference('State-Yaracuy'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Boraure')
                ->setCapital(false)
                ->setState($this->getReference('State-Yaracuy'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Campo Elías de Yaracuy')
                ->setCapital(false)
                ->setState($this->getReference('State-Yaracuy'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Chivacoa')
                ->setCapital(false)
                ->setState($this->getReference('State-Yaracuy'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Cocorote')
                ->setCapital(false)
                ->setState($this->getReference('State-Yaracuy'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Farriar')
                ->setCapital(false)
                ->setState($this->getReference('State-Yaracuy'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Guama')
                ->setCapital(false)
                ->setState($this->getReference('State-Yaracuy'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Marín')
                ->setCapital(false)
                ->setState($this->getReference('State-Yaracuy'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Nirgua')
                ->setCapital(false)
                ->setState($this->getReference('State-Yaracuy'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Sabana de Parra')
                ->setCapital(false)
                ->setState($this->getReference('State-Yaracuy'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Salom')
                ->setCapital(false)
                ->setState($this->getReference('State-Yaracuy'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('San Felipe')
                ->setCapital(true)
                ->setState($this->getReference('State-Yaracuy'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('San Pablo de Yaracuy')
                ->setCapital(false)
                ->setState($this->getReference('State-Yaracuy'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Urachiche')
                ->setCapital(false)
                ->setState($this->getReference('State-Yaracuy'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Yaritagua')
                ->setCapital(false)
                ->setState($this->getReference('State-Yaracuy'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Yumare')
                ->setCapital(false)
                ->setState($this->getReference('State-Yaracuy'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Bachaquero')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Bobures')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Cabimas')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Campo Concepción')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Campo Mara')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Campo Rojo')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Carrasquero')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Casigua')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Chiquinquirá')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Ciudad Ojeda')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('El Batey')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('El Carmelo')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('El Chivo')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('El Guayabo')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('El Mene')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('El Venado')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Encontrados')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Gibraltar')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Isla de Toas')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('La Concepción del Zulia')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('La Paz')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('La Sierrita')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Lagunillas del Zulia')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Las Piedras de Perijá')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Los Cortijos')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Machiques')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Maracaibo')
                ->setCapital(true)
                ->setState($this->getReference('State-Zulia'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Mene Grande')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Palmarejo')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Paraguaipoa')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Potrerito')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Pueblo Nuevo del Zulia')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Puertos de Altagracia')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Punta Gorda')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Sabaneta de Palma')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('San Francisco')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('San José de Perijá')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('San Rafael del Moján')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('San Timoteo')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Santa Bárbara Del Zulia')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Santa Cruz de Mara')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Santa Cruz del Zulia')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Santa Rita')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Sinamaica')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Tamare')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Tía Juana')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Villa del Rosario')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Caracas')
                ->setCapital(true)
                ->setState($this->getReference('State-Distrito-Capital'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('El Junquito')
                ->setCapital(false)
                ->setState($this->getReference('State-Distrito-Capital'))
                ;
            $manager->persist($city);
        
        $manager->flush();   
            
        $city = new City();
        $city
                ->setDescription('Archipiélago Los Roques')
                ->setCapital(false)
                ->setState($this->getReference('State-Dependencias-Federales'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Archipiélago Los Monjes')
                ->setCapital(false)
                ->setState($this->getReference('State-Dependencias-Federales'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Isla La Tortuga y Cayos adyacentes')
                ->setCapital(false)
                ->setState($this->getReference('State-Dependencias-Federales'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Isla La Sola')
                ->setCapital(false)
                ->setState($this->getReference('State-Dependencias-Federales'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Islas Los Testigos')
                ->setCapital(false)
                ->setState($this->getReference('State-Dependencias-Federales'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Islas Los Frailes')
                ->setCapital(false)
                ->setState($this->getReference('State-Dependencias-Federales'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Isla La Orchila')
                ->setCapital(false)
                ->setState($this->getReference('State-Dependencias-Federales'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Archipiélago Las Aves')
                ->setCapital(false)
                ->setState($this->getReference('State-Dependencias-Federales'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Isla de Aves')
                ->setCapital(false)
                ->setState($this->getReference('State-Dependencias-Federales'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Isla La Blanquilla')
                ->setCapital(false)
                ->setState($this->getReference('State-Dependencias-Federales'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Isla de Patos')
                ->setCapital(false)
                ->setState($this->getReference('State-Dependencias-Federales'))
                ;
            $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Islas Los Hermanos')
                ->setCapital(false)
                ->setState($this->getReference('State-Dependencias-Federales'))
                ;
            $manager->persist($city);
    }

    public function getOrder() {
        return 3;
    }
}
