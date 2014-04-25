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
use Tecnocreaciones\Vzla\EntityBundle\Entity\Parish;

/**
 * Data de parroquias
 *
 * @see https://github.com/marydn/venezuela-sql/blob/master/venezuela.sql
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class LoadParishData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $municipality = $this->getReference('Municipality-Alto-Orinoco');
            $parish = new Parish();
            
            $parish->setDescription('Alto Orinoco');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
                
            $parish = new Parish();
            
            $parish->setDescription('Huachamacare Acanaña');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
                
            $parish = new Parish();
            
            $parish->setDescription('Marawaka Toky Shamanaña');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
                
            $parish = new Parish();
            
            $parish->setDescription('Mavaka Mavaka');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
                
            $parish = new Parish();
            
            $parish->setDescription('Sierra Parima Parimabé');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
             
        $municipality = $this->getReference('Municipality-Atabapo');
            $parish = new Parish();
            
            $parish->setDescription('Ucata Laja Lisa');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
                
            $parish = new Parish();
            
            $parish->setDescription('Yapacana Macuruco');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
                
            $parish = new Parish();
            
            $parish->setDescription('Caname Guarinuma');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
        $municipality = $this->getReference('Municipality-Atures');
            $parish = new Parish();
            
            $parish->setDescription('Fernando Girón Tovar');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
                
            $parish = new Parish();
            
            $parish->setDescription('Luis Alberto Gómez');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
                
            $parish = new Parish();
            
            $parish->setDescription('Pahueña Limón de Parhueña');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
                
            $parish = new Parish();
            
            $parish->setDescription('Platanillal Platanillal');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
                
        $municipality = $this->getReference('Municipality-Autana');
            $parish = new Parish();
            
            $parish->setDescription('Samariapo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
                
            $parish = new Parish();
            
            $parish->setDescription('Sipapo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
                
            $parish = new Parish();
            
            $parish->setDescription('Munduapo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
                
            $parish = new Parish();
            
            $parish->setDescription('Guayapo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
                
        $municipality = $this->getReference('Municipality-Manapiare');
            $parish = new Parish();
            
            $parish->setDescription('Alto Ventuari');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
                
            $parish = new Parish();
            
            $parish->setDescription('Medio Ventuari');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
                
            $parish = new Parish();
            
            $parish->setDescription('Bajo Ventuari');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
                
        $municipality = $this->getReference('Municipality-Maroa');
            $parish = new Parish();
            
            $parish->setDescription('Victorino');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
                
            $parish = new Parish();
            
            $parish->setDescription('Comunidad');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
                
        $municipality = $this->getReference('Municipality-Rio-Negro');
            $parish = new Parish();
            
            $parish->setDescription('Casiquiare');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Cocuy');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
                
            $parish = new Parish();
            
            $parish->setDescription('San Carlos de Río Negro');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
                
            $parish = new Parish();
            
            $parish->setDescription('Solano');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
                
        $municipality = $this->getReference('Municipality-Anaco');
            $parish = new Parish();
            
            $parish->setDescription('Anaco');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
        
            $parish = new Parish();
            
            $parish->setDescription('San Joaquín');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
        
        $municipality = $this->getReference('Municipality-Aragua');
            $parish = new Parish();
            
            $parish->setDescription('Cachipo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
              
            $parish = new Parish();
            
            $parish->setDescription('Aragua de Barcelona');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
                
        $municipality = $this->getReference('Municipality-Manuel-Ezequiel-Bruzual');
            $parish = new Parish();
            
            $parish->setDescription('Clarines');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
              
            $parish = new Parish();
            
            $parish->setDescription('Guanape');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Sabana de Uchire');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
              
        $municipality = $this->getReference('Municipality-Diego-Bautista-Urbaneja');
            $parish = new Parish();
            
            $parish->setDescription('Lechería');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
                
            $parish = new Parish();
            
            $parish->setDescription('El Morro');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
                
        $municipality = $this->getReference('Municipality-Fernando-Penalver');
            $parish = new Parish();
            
            $parish->setDescription('Puerto Píritu');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
              
            $parish = new Parish();
            
            $parish->setDescription('San Miguel');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
              
            $parish = new Parish();
            
            $parish->setDescription('Sucre');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
              
        $municipality = $this->getReference('Municipality-Francisco-Del-Carmen-Carvajal');
            $parish = new Parish();
            
            $parish->setDescription('Valle de Guanape');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
                
            $parish = new Parish();
            
            $parish->setDescription('Santa Bárbara');
            $parish->setMunicipality($municipality);
                 $manager->persist($parish);
           
        $municipality = $this->getReference('Municipality-General-Sir-Arthur-McGregor');
            $parish = new Parish();
            
            $parish->setDescription('El Chaparro');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
             
            $parish = new Parish();
            
            $parish->setDescription('Tomás Alfaro');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
             
            $parish = new Parish();
            
            $parish->setDescription('Calatrava');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
        $municipality = $this->getReference('Municipality-Guanta');
            $parish = new Parish();
            
            $parish->setDescription('Guanta');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Chorrerón');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
        $municipality = $this->getReference('Municipality-Independencia');
            $parish = new Parish();
            
            $parish->setDescription('Mamo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('Soledad');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
        $municipality = $this->getReference('Municipality-Jose-Gregorio-Monagas');
            $parish = new Parish();
            
            $parish->setDescription('Mapire');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('Piar');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('Santa Clara');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('San Diego de Cabrutica');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('Uverito');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('Zuata');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
        $municipality = $this->getReference('Municipality-Juan-Antonio-Sotillo');
            $parish = new Parish();
            
            $parish->setDescription('Puerto La Cruz');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('Pozuelos');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
        $municipality = $this->getReference('Municipality-Juan-Manuel-Cajigal');
            $parish = new Parish();
            
            $parish->setDescription('Onoto');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('San Pablo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
        $municipality = $this->getReference('Municipality-Libertad');
            $parish = new Parish();
            
            $parish->setDescription('San Mateo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('El Carito');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('Santa Inés');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('La Romereña');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
        $municipality = $this->getReference('Municipality-Francisco-de-Miranda');
            $parish = new Parish();
            
            $parish->setDescription('Atapirire');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('Boca del Pao');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('El Pao');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('Pariaguán');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
        $municipality = $this->getReference('Municipality-Pedro-Maria-Freites');
            $parish = new Parish();
            
            $parish->setDescription('Cantaura');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('Libertador');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('Santa Rosa');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('Urica');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
        $municipality = $this->getReference('Municipality-Piritu');
            $parish = new Parish();
            
            $parish->setDescription('Píritu');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('San Francisco');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
        $municipality = $this->getReference('Municipality-San-Jose-de-Guanipa');
            $parish = new Parish();
            
            $parish->setDescription('San José de Guanipa');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
        
        $municipality = $this->getReference('Municipality-San-Juan-de-Capistrano');
            $parish = new Parish();
            
            $parish->setDescription('Boca de Uchire');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('Boca de Chávez');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
        $municipality = $this->getReference('Municipality-Santa-Ana');
            $parish = new Parish();
            
            $parish->setDescription('Pueblo Nuevo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('Santa Ana');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
        $municipality = $this->getReference('Municipality-Simon-Bolivar');
            $parish = new Parish();
            
            $parish->setDescription('Bergatín');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);            

            $parish = new Parish();
            
            $parish->setDescription('Caigua');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('El Carmen');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('El Pilar');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('Naricual');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('San Cristóbal');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
        $municipality = $this->getReference('Municipality-Simon-Rodriguez');
            $parish = new Parish();
            
            $parish->setDescription('Edmundo Barrios');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('Miguel Otero Silva');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
        $municipality = $this->getReference('Municipality-Achaguas');
            $parish = new Parish();
            
            $parish->setDescription('Achaguas');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('Apurito');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('El Yagual');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('Guachara');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('Mucuritas');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('Queseras del medio');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

        $municipality = $this->getReference('Municipality-Biruaca');
            $parish = new Parish();
            
            $parish->setDescription('Biruaca');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
        $municipality = $this->getReference('Municipality-Munoz');
            $parish = new Parish();
            
            $parish->setDescription('Bruzual');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('Mantecal');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('Quintero');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('Rincón Hondo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('San Vicente');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
        $municipality = $this->getReference('Municipality-Paez');
            $parish = new Parish();
            
            $parish->setDescription('Guasdualito');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('Aramendi');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('El Amparo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('San Camilo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Urdaneta');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
        $municipality = $this->getReference('Municipality-Pedro-Camejo');
            $parish = new Parish();
            
            $parish->setDescription('San Juan de Payara');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('Codazzi');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('Cunaviche');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
        $municipality = $this->getReference('Municipality-Romulo-Gallegos');
            $parish = new Parish();
            
            $parish->setDescription('Elorza');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('La Trinidad');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

        $municipality = $this->getReference('Municipality-San-Fernando');
            $parish = new Parish();
            
            $parish->setDescription('San Fernando');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('El Recreo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('Peñalver');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('San Rafael de Atamaica');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
        $municipality = $this->getReference('Municipality-Atanasio-Girardot');
            $parish = new Parish();
            
            $parish->setDescription('Pedro José Ovalles');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
   
            $parish = new Parish();
            
            $parish->setDescription('Joaquín Crespo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('José Casanova Godoy');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Madre María de San José');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Andrés Eloy Blanco');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('Los Tacarigua');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Las Delicias');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('Choroní');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

        $municipality = $this->getReference('Municipality-Anzoategui-Bolivar');
            $parish = new Parish();
            
            $parish->setDescription('Bolívar');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
        $municipality = $this->getReference('Municipality-Camatagua');
            $parish = new Parish();
            
            $parish->setDescription('Camatagua');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
   
            $parish = new Parish();
            
            $parish->setDescription('Carmen de Cura');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
        $municipality = $this->getReference('Municipality-Francisco-Linares-Alcantara');
            $parish = new Parish();
            
            $parish->setDescription('Santa Rita');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
   
            $parish = new Parish();
            
            $parish->setDescription('Francisco de Miranda');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('Moseñor Feliciano González');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
        $municipality = $this->getReference('Municipality-Jose-Angel-Lamas');
            $parish = new Parish();
            
            $parish->setDescription('Santa Cruz');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
        $municipality = $this->getReference('Municipality-Jose-Felix-Ribas');
            $parish = new Parish();
            
            $parish->setDescription('José Félix Ribas');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
   
            $parish = new Parish();
            
            $parish->setDescription('Castor Nieves Ríos');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('Las Guacamayas');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Pao de Zárate');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Zuata');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
        $municipality = $this->getReference('Municipality-Jose-Rafael-Revenga');
            $parish = new Parish();
            
            $parish->setDescription('José Rafael Revenga');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

        $municipality = $this->getReference('Municipality-Aragua-Libertador');
            $parish = new Parish();
            
            $parish->setDescription('Palo Negro');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
   
            $parish = new Parish();
            
            $parish->setDescription('San Martín de Porres');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
        $municipality = $this->getReference('Municipality-Mario-Briceno-Iragorry');
            $parish = new Parish();
            
            $parish->setDescription('El Limón');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
   
            $parish = new Parish();
            
            $parish->setDescription('Caña de Azúcar');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);            
        $municipality = $this->getReference('Municipality-Ocumare-de-la-Costa-de-Oro');
            $parish = new Parish();
            
            $parish->setDescription('Ocumare de la Costa');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
        $municipality = $this->getReference('Municipality-San-Casimiro');
            $parish = new Parish();
            
            $parish->setDescription('San Casimiro');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
   
            $parish = new Parish();
            
            $parish->setDescription('Güiripa');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('Ollas de Caramacate');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Valle Morín');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
        $municipality = $this->getReference('Municipality-San-Sebastian');
            $parish = new Parish();
            
            $parish->setDescription('San Sebastían');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
        $municipality = $this->getReference('Municipality-Santiago-Marino');
            $parish = new Parish();
            
            $parish->setDescription('Turmero');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
   
            $parish = new Parish();
            
            $parish->setDescription('Arevalo Aponte');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('Chuao');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Samán de Güere');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Alfredo Pacheco Miranda');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
          
        $municipality = $this->getReference('Municipality-Santos-Michelena');
            $parish = new Parish();
            
            $parish->setDescription('Santos Michelena');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
   
            $parish = new Parish();
            
            $parish->setDescription('Tiara');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
        $municipality = $this->getReference('Municipality-Aragua-Sucre');
            $parish = new Parish();
            
            $parish->setDescription('Cagua');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Bella Vista');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
        $municipality = $this->getReference('Municipality-Tovar');
            $parish = new Parish();
            
            $parish->setDescription('Tovar');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
        $municipality = $this->getReference('Municipality-Urdaneta');
            $parish = new Parish();
            
            $parish->setDescription('Urdaneta');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
   
            $parish = new Parish();
            
            $parish->setDescription('Las Peñitas');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('San Francisco de Cara');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
   
            $parish = new Parish();
            
            $parish->setDescription('Taguay');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
        $municipality = $this->getReference('Municipality-Zamora');
            $parish = new Parish();
            
            $parish->setDescription('Zamora');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
   
            $parish = new Parish();
            
            $parish->setDescription('Magdaleno');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('San Francisco de Asís');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
   
            $parish = new Parish();
            
            $parish->setDescription('Valles de Tucutunemo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Augusto Mijares');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

        $municipality = $this->getReference('Municipality-Alberto-Arvelo-Torrealba');
            $parish = new Parish();
            
            $parish->setDescription('Sabaneta');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
   
            $parish = new Parish();
            
            $parish->setDescription('Juan Antonio Rodríguez Domínguez');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
        $municipality = $this->getReference('Municipality-Andres-Eloy-Blanco');
            $parish = new Parish();
            
            $parish->setDescription('El Cantón');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
   
            $parish = new Parish();
            
            $parish->setDescription('Santa Cruz de Guacas');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
   
            $parish = new Parish();
            
            $parish->setDescription('Puerto Vivas');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
        $municipality = $this->getReference('Municipality-Antonio-Jose-de-Sucre');
            $parish = new Parish();
            
            $parish->setDescription('Ticoporo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
   
            $parish = new Parish();
            
            $parish->setDescription('Nicolás Pulido');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
   
            $parish = new Parish();
            
            $parish->setDescription('Andrés Bello');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
          
        $municipality = $this->getReference('Municipality-Arismendi');
            $parish = new Parish();
            
            $parish->setDescription('Arismendi');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
   
            $parish = new Parish();
            
            $parish->setDescription('Guadarrama');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
   
            $parish = new Parish();
            
            $parish->setDescription('La Unión');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
   
            $parish = new Parish();
            
            $parish->setDescription('San Antonio');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
         $municipality = $this->getReference('Municipality-Barinas');
            $parish = new Parish();
            
            $parish->setDescription('Barinas');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
   
            $parish = new Parish();
            
            $parish->setDescription('Alberto Arvelo Larriva');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
 
            $parish = new Parish();
            
            $parish->setDescription('San Silvestre');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
   
            $parish = new Parish();
            
            $parish->setDescription('Santa Inés');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('Santa Lucía');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
   
            $parish = new Parish();
            
            $parish->setDescription('Torumos');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('El Carmen');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
   
            $parish = new Parish();
            
            $parish->setDescription('Rómulo Betancourt');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('Corazón de Jesús');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
   
            $parish = new Parish();
            
            $parish->setDescription('Alto Barinas');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
   
            $parish = new Parish();
            
            $parish->setDescription('Manuel Palacio Fajardo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
   
            $parish = new Parish();
            
            $parish->setDescription('Juan Antonio Rodríguez Domínguez');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
   
            $parish = new Parish();
            
            $parish->setDescription('Dominga Ortiz de Páez');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
        $municipality = $this->getReference('Municipality-Aragua-Bolivar');
            $parish = new Parish();
            
            $parish->setDescription('Barinitas');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
   
            $parish = new Parish();
            
            $parish->setDescription('Altamira de Cáceres');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
 
            $parish = new Parish();
            
            $parish->setDescription('Calderas');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
   
        $municipality = $this->getReference('Municipality-Cruz-Paredes');
            $parish = new Parish();
            
            $parish->setDescription('Barrancas');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
   
            $parish = new Parish();
            
            $parish->setDescription('El Socorro');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
 
            $parish = new Parish();
            
            $parish->setDescription('Mazparrito');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
        $municipality = $this->getReference('Municipality-Ezequiel-Zamora');
            $parish = new Parish();
            
            $parish->setDescription('Santa Bárbara');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
   
            $parish = new Parish();
            
            $parish->setDescription('Pedro Briceño Méndez');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Ramón Ignacio Méndez');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
 
            $parish = new Parish();
            
            $parish->setDescription('José Ignacio del Pumar');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

        $municipality = $this->getReference('Municipality-Obispos');
            $parish = new Parish();
            
            $parish->setDescription('Obispos');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);   

            $parish = new Parish();
            
            $parish->setDescription('Guasimitos');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('El Real');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('La Luz');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
        $municipality = $this->getReference('Municipality-Pedraza');
            $parish = new Parish();
            
            $parish->setDescription('Ciudad Bolívia');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
   
            $parish = new Parish();
            
            $parish->setDescription('José Ignacio Briceño');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('José Félix Ribas');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Páez');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
        $municipality = $this->getReference('Municipality-Rojas');
            $parish = new Parish();
            
            $parish->setDescription('Libertad');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
   
            $parish = new Parish();
            
            $parish->setDescription('Dolores');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Santa Rosa');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Palacio Fajardo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
        $municipality = $this->getReference('Municipality-Sosa');
            $parish = new Parish();
            
            $parish->setDescription('Ciudad de Nutrias');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('El Regalo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Puerto Nutrias');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Santa Catalina');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

        $municipality = $this->getReference('Municipality-Caroni');
            $parish = new Parish();
            
            $parish->setDescription('Cachamay');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Chirica');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Dalla Costa');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Once de Abril');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Simón Bolívar');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Unare');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Universidad');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Vista al Sol');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Pozo Verde');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Yocoima');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('5 de Julio');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
        $municipality = $this->getReference('Municipality-Cedeno');
            $parish = new Parish();
            
            $parish->setDescription('Cedeño');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Altagracia');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Ascensión Farreras');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Guaniamo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('La Urbana');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Pijiguaos');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

        $municipality = $this->getReference('Municipality-El-Callao');
            $parish = new Parish();
            
            $parish->setDescription('El Callao');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

        $municipality = $this->getReference('Municipality-Gran-Sabana');
            $parish = new Parish();
            
            $parish->setDescription('Gran Sabana');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Ikabarú');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

        $municipality = $this->getReference('Municipality-Heres');
            $parish = new Parish();
            
            $parish->setDescription('Catedral');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Zea');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('Orinoco');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('José Antonio Páez');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Marhuanta');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('Agua Salada');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Vista Hermosa');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('La Sabanita');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Panapana');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

        $municipality = $this->getReference('Municipality-Piar');
            $parish = new Parish();
            
            $parish->setDescription('Andrés Eloy Blanco');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Pedro Cova');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

        $municipality = $this->getReference('Municipality-Angostura-(Raul-Leoni)');
            $parish = new Parish();
            
            $parish->setDescription('Raúl Leoni');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Barceloneta');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('Santa Bárbara');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('San Francisco');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

        $municipality = $this->getReference('Municipality-Roscio');
            $parish = new Parish();
            
            $parish->setDescription('Roscio');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Salóm');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
        $municipality = $this->getReference('Municipality-Sifontes');
            $parish = new Parish();
            
            $parish->setDescription('Sifontes');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Dalla Costa');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('San Isidro');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
        $municipality = $this->getReference('Municipality-Bolivar-Sucre');
            $parish = new Parish();
            
            $parish->setDescription('Sucre');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Aripao');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Guarataro');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Las Majadas');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Moitaco');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
        $municipality = $this->getReference('Municipality-Padre-Pedro-Chien');
            $parish = new Parish();
            
            $parish->setDescription('Padre Pedro Chien');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Río Grande');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
        
        $municipality = $this->getReference('Municipality-Bejuma');
            $parish = new Parish();
            
            $parish->setDescription('Bejuma');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Canoabo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Simón Bolívar');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
        
        $municipality = $this->getReference('Municipality-Carlos-Arvelo');
            $parish = new Parish();
            
            $parish->setDescription('Güigüe');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Carabobo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Tacarigua');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
        
        $municipality = $this->getReference('Municipality-Diego-Ibarra');
            $parish = new Parish();
            
            $parish->setDescription('Mariara');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Aguas Calientes');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

        $municipality = $this->getReference('Municipality-Guacara');
            $parish = new Parish();
            
            $parish->setDescription('Ciudad Alianza');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Guacara');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Yagua');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

        $municipality = $this->getReference('Municipality-Juan-Jose-Mora');
            $parish = new Parish();
            
            $parish->setDescription('Morón');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Yagua');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
        $municipality = $this->getReference('Municipality-Carabobo-Libertador');
            $parish = new Parish();
            
            $parish->setDescription('Tocuyito');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Independencia');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

        $municipality = $this->getReference('Municipality-Los-Guayos');
            $parish = new Parish();
            
            $parish->setDescription('Los Guayos');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
        $municipality = $this->getReference('Municipality-Miranda');
            $parish = new Parish();
            
            $parish->setDescription('Miranda');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
        $municipality = $this->getReference('Municipality-Montalban');
            $parish = new Parish();
            
            $parish->setDescription('Montalbán');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
        $municipality = $this->getReference('Municipality-Naguanagua');
            $parish = new Parish();
            
            $parish->setDescription('Naguanagua');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
        $municipality = $this->getReference('Municipality-Puerto-Cabello');
            $parish = new Parish();
            
            $parish->setDescription('Bartolomé Salóm');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('Democracia');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('Fraternidad');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('Goaigoaza');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('Juan José Flores');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('Unión');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('Borburata');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
          
            $parish = new Parish();
            
            $parish->setDescription('Patanemo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-San-Diego');
            $parish = new Parish();
            
            $parish->setDescription('San Diego');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-San-Joaquin');
            $parish = new Parish();
            
            $parish->setDescription('San Joaquín');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Valencia');
            $parish = new Parish();
            
            $parish->setDescription('Candelaria');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('El Socorro');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Miguel Peña');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('Rafael Urdaneta');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('San Blas');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
            $parish = new Parish();
            
            $parish->setDescription('San José');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
          
            $parish = new Parish();
            
            $parish->setDescription('Santa Rosa');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Negro Primero');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Cojedes-Anzoategui');
            $parish = new Parish();
            
            $parish->setDescription('Cojedes');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Juan de Mata Suárez');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Tinaquillo');
            $parish = new Parish();
            
            $parish->setDescription('Tinaquillo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Girardot');
            $parish = new Parish();
            
            $parish->setDescription('El Baúl');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Sucre');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Lima-Blanco');
            $parish = new Parish();
            
            $parish->setDescription('La Aguadita');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Macapo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Pao-de-San-Juan-Bautista');
            $parish = new Parish();
            
            $parish->setDescription('El Pao');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Ricaurte');
            $parish = new Parish();
            
            $parish->setDescription('El Amparo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Libertad de Cojedes');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Romulo-Gallegos');
            $parish = new Parish();
            
            $parish->setDescription('Rómulo Gallegos');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-San-Carlos');
            $parish = new Parish();
            
            $parish->setDescription('San Carlos de Austria');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Juan Ángel Bravo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Manuel Manrique');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Antonio-Diaz');
            $parish = new Parish();
            
            $parish->setDescription('General en Jefe José Laurencio Silva');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Tinaco');
            $parish = new Parish();
            
            $parish->setDescription('Curiapo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Almirante Luis Brión');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Francisco Aniceto Lugo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Manuel Renaud');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Padre Barral');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Santos de Abelgas');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Casacoima');
            $parish = new Parish();
            
            $parish->setDescription('Imataca');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Cinco de Julio');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Juan Bautista Arismendi');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Manuel Piar');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Rómulo Gallegos');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Perdenales');
            $parish = new Parish();
            
            $parish->setDescription('Pedernales');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Luis Beltrán Prieto Figueroa');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Tucupita');
            $parish = new Parish();
            
            $parish->setDescription('San José (Delta Amacuro)');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('José Vidal Marcano');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Juan Millán');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Leonardo Ruíz Pineda');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Mariscal Antonio José de Sucre');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Monseñor Argimiro García');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('San Rafael (Delta Amacuro)');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Virgen del Valle');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Acosta');
            $parish = new Parish();
            
            $parish->setDescription('Capadare');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('La Pastora');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Libertador');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('San Juan de los Cayos');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Falcon-Bolivar');
            $parish = new Parish();
            
            $parish->setDescription('Aracua');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('La Peña');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('San Luis');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Buchivacoa');
            $parish = new Parish();
            
            $parish->setDescription('Bariro');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Borojó');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Capatárida');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Guajiro');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Seque');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Zazárida');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Valle de Eroa');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Cacique-Manaure');
            $parish = new Parish();
            
            $parish->setDescription('Cacique Manaure');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Carirubana');
            $parish = new Parish();
            
            $parish->setDescription('Norte');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Carirubana');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Santa Ana');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Urbana Punta Cardón');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Colina');
            $parish = new Parish();
            
            $parish->setDescription('La Vela de Coro');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Acurigua');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Guaibacoa');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Las Calderas');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Macoruca');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Dabajuro');
            $parish = new Parish();
            
            $parish->setDescription('Dabajuro');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Falcon-Democracia');
            $parish = new Parish();
            
            $parish->setDescription('Agua Clara');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Avaria');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Pedregal');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Piedra Grande');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Purureche');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Falcon');
            $parish = new Parish();
            
            $parish->setDescription('Adaure');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Adícora');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Baraived');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Buena Vista');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Jadacaquiva');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('El Vínculo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('El Hato');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Moruy');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Pueblo Nuevo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Federacion');
            $parish = new Parish();
            
            $parish->setDescription('Agua Larga');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('El Paují');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Independencia');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Mapararí');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Churuguara');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Jacura');
            $parish = new Parish();
            
            $parish->setDescription('Agua Linda');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Araurima');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Jacura');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Jose-Laurencio-Silva');
            $parish = new Parish();
            
            $parish->setDescription('Tucacas');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Boca de Aroa');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Los-Taques');
            $parish = new Parish();
            
            $parish->setDescription('Los Taques');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Judibana');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Mauroa');
            $parish = new Parish();
            
            $parish->setDescription('Mene de Mauroa');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('San Félix');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Casigua');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Falcon-Miranda');
            $parish = new Parish();
            
            $parish->setDescription('Guzmán Guillermo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Mitare');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Río Seco');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Sabaneta');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('San Antonio');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('San Gabriel');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Santa Ana');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Monsenor-Iturriza');
            $parish = new Parish();
            
            $parish->setDescription('Boca del Tocuyo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Chichiriviche');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Tocuyo de la Costa');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Palmasola');
            $parish = new Parish();
            
            $parish->setDescription('Palmasola');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Petit');
            $parish = new Parish();
            
            $parish->setDescription('Cabure');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Colina');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Curimagua');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Falcon-Piritu');
            $parish = new Parish();
            
            $parish->setDescription('San José de la Costa');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Píritu');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-San-Francisco');
            $parish = new Parish();
            
            $parish->setDescription('San Francisco');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Falcon-Sucre');
            $parish = new Parish();
            
            $parish->setDescription('Sucre');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Pecaya');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Tocopero');
            $parish = new Parish();
            
            $parish->setDescription('Tocópero');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Union');
            $parish = new Parish();
            
            $parish->setDescription('El Charal');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Las Vegas del Tuy');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Santa Cruz de Bucaral');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Urumaco');
            $parish = new Parish();
            
            $parish->setDescription('Bruzual');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Urumaco');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Falcon-Zamora');
            $parish = new Parish();
            
            $parish->setDescription('Puerto Cumarebo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('La Ciénaga');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('La Soledad');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Pueblo Cumarebo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Zazárida');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Camaguan');
            $parish = new Parish();
            
            $parish->setDescription('Camaguán');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Puerto Miranda');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Uverito');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Chaguaramas');
            $parish = new Parish();
            
            $parish->setDescription('Camaguán');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-El-Socorro');
            $parish = new Parish();
            
            $parish->setDescription('El Socorro');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Guarico-Jose-Felix-Ribas');
            $parish = new Parish();
            
            $parish->setDescription('Tucupido');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('San Rafael de Laya');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Jose-Tadeo-Monagas');
            $parish = new Parish();
            
            $parish->setDescription('Altagracia de Orituco');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('San Rafael de Orituco');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('San Francisco Javier de Lezama');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Paso Real de Macaira');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Carlos Soublette');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('San Francisco de Macaira');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Libertad de Orituco');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Juan-German-Roscio');
            $parish = new Parish();
            
            $parish->setDescription('Cantaclaro');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('San Juan de los Morros');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Parapara');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Julian-Mellado');
            $parish = new Parish();
            
            $parish->setDescription('El Sombrero');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Sosa');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Las-Mercedes');
            $parish = new Parish();
            
            $parish->setDescription('Las Mercedes');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Cabruta');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Santa Rita de Manapire');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Leonardo-Infante');
            $parish = new Parish();
            
            $parish->setDescription('Valle de la Pascua');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Espino');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Pedro-Zaraza');
            $parish = new Parish();
            
            $parish->setDescription('San José de Unare');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Zaraza');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Ortiz');
            $parish = new Parish();
            
            $parish->setDescription('San José de Tiznados');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('San Francisco de Tiznados');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('San Lorenzo de Tiznados');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Ortiz');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-San-Geronimo-de-Guayabal');
            $parish = new Parish();
            
            $parish->setDescription('Guayabal');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Cazorla');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-San-Jose-de-Guaribe');
            $parish = new Parish();
            
            $parish->setDescription('San José de Guaribe');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Uveral');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Santa-Maria-de-Ipire');
            $parish = new Parish();
            
            $parish->setDescription('Santa María de Ipire');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Altamira');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Sebastian-Francisco-de-Miranda');
            $parish = new Parish();
            
            $parish->setDescription('El Calvario');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('El Rastro');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Guardatinajas');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Capital Urbana Calabozo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Lara-Andres-Eloy-Blanco');
            $parish = new Parish();
            
            $parish->setDescription('Quebrada Honda de Guache');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Pío Tamayo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Yacambú');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Crespo');
            $parish = new Parish();
            
            $parish->setDescription('Fréitez');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('José María Blanco');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Iribarren');
            $parish = new Parish();
            
            $parish->setDescription('Catedral');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Concepción');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('El Cují');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Juan de Villegas');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Santa Rosa');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Tamaca');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Unión');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Aguedo Felipe Alvarado');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Buena Vista');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Juárez');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Jimenez');
            $parish = new Parish();
            
            $parish->setDescription('Juan Bautista Rodríguez');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Cuara');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Diego de Lozada');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Paraíso de San José');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('San Miguel');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Tintorero');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('José Bernardo Dorante');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Coronel Mariano Peraza');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Moran');
            $parish = new Parish();
            
            $parish->setDescription('Bolívar');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Anzoátegui');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Guarico');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Hilario Luna y Luna');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Humocaro Alto');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Humocaro Bajo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('La Candelaria');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Morán');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Palavecino');
            $parish = new Parish();
            
            $parish->setDescription('Cabudare');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('José Gregorio Bastidas');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Agua Viva');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Simon-Planas');
            $parish = new Parish();
            
            $parish->setDescription('Sarare');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Buría');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Gustavo Vegas León');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Torres');
            $parish = new Parish();
            
            $parish->setDescription('Trinidad Samuel');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Antonio Díaz');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Camacaro');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Castañeda');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Cecilio Zubillaga');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Chiquinquirá');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('El Blanco');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Espinoza de los Monteros');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Lara');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Las Mercedes');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Manuel Morillo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Montaña Verde');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Montes de Oca');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Torres');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Heriberto Arroyo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Reyes Vargas');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Altagracia');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Lara-Urdaneta');
            $parish = new Parish();
            
            $parish->setDescription('Siquisique');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Moroturo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('San Miguel');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Xaguas');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Alberto-Adriani');
            $parish = new Parish();
            
            $parish->setDescription('Presidente Betancourt');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Presidente Páez');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Presidente Rómulo Gallegos');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Gabriel Picón González');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Héctor Amable Mora');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('José Nucete Sardi');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Pulido Méndez');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Merida-Andres-Bello');
            $parish = new Parish();
            
            $parish->setDescription('La Azulita');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Antonio-Pinto-Salinas');
            $parish = new Parish();
            
            $parish->setDescription('Santa Cruz de Mora');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Mesa Bolívar');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Mesa de Las Palmas');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Aricagua');
            $parish = new Parish();
            
            $parish->setDescription('Aricagua');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('San Antonio');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Arzobispo-Chacon');
            $parish = new Parish();
            
            $parish->setDescription('Canagua');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Capurí');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Chacantá');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('El Molino');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Guaimaral');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Mucutuy');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Mucuchachí');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Campo-Elias');
            $parish = new Parish();
            
            $parish->setDescription('Fernández Peña');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Matriz');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Montalbán');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Acequias');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Jají');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('La Mesa');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('San José del Sur');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Caracciolo-Parra-Olmedo');
            $parish = new Parish();
            
            $parish->setDescription('Tucaní');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Florencio Ramírez');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Cardenal-Quintero');
            $parish = new Parish();
            
            $parish->setDescription('Santo Domingo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Las Piedras');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Guaraque');
            $parish = new Parish();
            
            $parish->setDescription('Guaraque');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Mesa de Quintero');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Río Negro');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Julio-Cesar-Salas');
            $parish = new Parish();
            
            $parish->setDescription('Arapuey');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Palmira');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Justo-Briceno');
            $parish = new Parish();
            
            $parish->setDescription('San Cristóbal de Torondoy');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Torondoy');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Merida-Libertador');
            $parish = new Parish();
            
            $parish->setDescription('San Cristóbal de Torondoy');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Antonio Spinetti Dini');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Arias');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Caracciolo Parra Pérez');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Domingo Peña');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('El Llano');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Gonzalo Picón Febres');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Jacinto Plaza');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Juan Rodríguez Suárez');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Lasso de la Vega');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Mariano Picón Salas');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Milla');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Osuna Rodríguez');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Sagrario');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('El Morro');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Los Nevados');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Merida-Miranda');
            $parish = new Parish();
            
            $parish->setDescription('Andrés Eloy Blanco');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('La Venta');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Piñango');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Timotes');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Obispo-Ramos-de-Lora');
            $parish = new Parish();
            
            $parish->setDescription('Eloy Paredes');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('San Rafael de Alcázar');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Santa Elena de Arenales');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Padre-Noguera');
            $parish = new Parish();
            
            $parish->setDescription('Santa María de Caparo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Pueblo-Llano');
            $parish = new Parish();
            
            $parish->setDescription('Pueblo Llano');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Rangel');
            $parish = new Parish();
            
            $parish->setDescription('Cacute');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('La Toma');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Mucuchíes');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Mucurubá');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('San Rafael');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Rivas-Davila');
            $parish = new Parish();
            
            $parish->setDescription('Gerónimo Maldonado');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Bailadores');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Santos-Marquina');
            $parish = new Parish();
            
            $parish->setDescription('Tabay');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Merida-Sucre');
            $parish = new Parish();
            
            $parish->setDescription('Chiguará');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Estánquez');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Lagunillas');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('La Trampa');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Pueblo Nuevo del Sur');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('San Juan');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Merida-Tovar');
            $parish = new Parish();
            
            $parish->setDescription('El Amparo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('El Llano');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('San Francisco');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Tovar');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Tulio-Febres-Cordero');
            $parish = new Parish();
            
            $parish->setDescription('Independencia');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('María de la Concepción Palacios Blanco');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Nueva Bolivia');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Santa Apolonia');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Zea');
            $parish = new Parish();
            
            $parish->setDescription('Caño El Tigre');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Zea');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Acevedo');
            $parish = new Parish();
            
            $parish->setDescription('Aragüita');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Arévalo González');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Capaya');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Caucagua');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Panaquire');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Ribas');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('El Café');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Marizapa');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Miranda-Andres-Bello');
            $parish = new Parish();
            
            $parish->setDescription('Cumbo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('San José de Barlovento');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Baruta');
            $parish = new Parish();
            
            $parish->setDescription('El Cafetal');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Las Minas');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Nuestra Señora del Rosario');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Brion');
            $parish = new Parish();
            
            $parish->setDescription('Higuerote');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Curiepe');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Tacarigua de Brión');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Buroz');
            $parish = new Parish();
            
            $parish->setDescription('Mamporal');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Carrizal');
            $parish = new Parish();
            
            $parish->setDescription('Carrizal');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Chacao');
            $parish = new Parish();
            
            $parish->setDescription('Chacao');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Cristobal-Rojas');
            $parish = new Parish();
            
            $parish->setDescription('Charallave');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Las Brisas');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-El-Hatillo');
            $parish = new Parish();
            
            $parish->setDescription('El Hatillo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Guaicaipuro');
            $parish = new Parish();
            
            $parish->setDescription('Altagracia de la Montaña');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Cecilio Acosta');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Los Teques');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('El Jarillo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('San Pedro');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Tácata');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Paracotos');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Miranda-Independencia');
            $parish = new Parish();
            
            $parish->setDescription('Cartanal');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Santa Teresa del Tuy');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Lander');
            $parish = new Parish();
            
            $parish->setDescription('La Democracia');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Ocumare del Tuy');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Santa Bárbara');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Los-Salias');
            $parish = new Parish();
            
            $parish->setDescription('San Antonio de los Altos');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Miranda-Paez');
            $parish = new Parish();
            
            $parish->setDescription('Río Chico');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('El Guapo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Tacarigua de la Laguna');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Paparo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('San Fernando del Guapo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Paz-Castillo');
            $parish = new Parish();
            
            $parish->setDescription('Santa Lucía del Tuy');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Pedro-Gual');
            $parish = new Parish();
            
            $parish->setDescription('Cúpira');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Machurucuto');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Plaza');
            $parish = new Parish();
            
            $parish->setDescription('Guarenas');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Miranda-Simon-Bolivar');
            $parish = new Parish();
            
            $parish->setDescription('San Antonio de Yare');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('San Francisco de Yare');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Miranda-Sucre');
            $parish = new Parish();
            
            $parish->setDescription('Leoncio Martínez');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Petare');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Caucagüita');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Filas de Mariche');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('La Dolorita');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Miranda-Urdaneta');
            $parish = new Parish();
            
            $parish->setDescription('Cúa');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Nueva Cúa');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Miranda-Zamora');
            $parish = new Parish();
            
            $parish->setDescription('Guatire');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Bolívar');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Monagas-Acosta');
            $parish = new Parish();
            
            $parish->setDescription('San Antonio de Maturín');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('San Francisco de Maturín');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Aguasay');
            $parish = new Parish();
            
            $parish->setDescription('Aguasay');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Monagas-Bolivar');
            $parish = new Parish();
            
            $parish->setDescription('Caripito');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Caripe');
            $parish = new Parish();
            
            $parish->setDescription('El Guácharo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('La Guanota');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Sabana de Piedra');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('San Agustín');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Teresen');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Caripe');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Cedeno');
            $parish = new Parish();
            
            $parish->setDescription('Areo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Capital Cedeño');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('San Félix de Cantalicio');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Viento Fresco');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Monagas-Ezequiel-Zamora');
            $parish = new Parish();
            
            $parish->setDescription('El Tejero');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Punta de Mata');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Libertador');
            $parish = new Parish();
            
            $parish->setDescription('Chaguaramas');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Las Alhuacas');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Tabasca');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Temblador');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Maturin');
            $parish = new Parish();
            
            $parish->setDescription('Alto de los Godos');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Boquerón');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Las Cocuizas');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('La Cruz');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('San Simón');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('El Corozo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('El Furrial');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Jusepín');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('La Pica');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('San Vicente');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Monagas-Piar');
            $parish = new Parish();
            
            $parish->setDescription('Aparicio');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Aragua de Maturín');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Chaguamal');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('El Pinto');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Guanaguana');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('La Toscana');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Taguaya');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Punceres');
            $parish = new Parish();
            
            $parish->setDescription('Cachipo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Quiriquire');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Santa-Barbara');
            $parish = new Parish();
            
            $parish->setDescription('Santa Bárbara');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Sotillo');
            $parish = new Parish();
            
            $parish->setDescription('Barrancas');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Los Barrancos de Fajardo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Uracoa');
            $parish = new Parish();
            
            $parish->setDescription('Uracoa');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Antolin-del-Campo');
            $parish = new Parish();
            
            $parish->setDescription('Antolín del Campo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Nueva-Esparta-Arismendi');
            $parish = new Parish();
            
            $parish->setDescription('Arismendi');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Garcia');
            $parish = new Parish();
            
            $parish->setDescription('García');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Francisco Fajardo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Gomez');
            $parish = new Parish();
            
            $parish->setDescription('Bolívar');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Guevara');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Matasiete');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Santa Ana');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Sucre');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
	
	$municipality = $this->getReference('Municipality-Maneiro');
            $parish = new Parish();
            
            $parish->setDescription('Aguirre');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Maneiro');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Peninsula-de-Macanao');
            $parish = new Parish();
            
            $parish->setDescription('Adrián');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Juan Griego');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Yaguaraparo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Marino');
            $parish = new Parish();
            
            $parish->setDescription('Porlamar');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Peninsula-de-Macanao');
            $parish = new Parish();
            
            $parish->setDescription('San Francisco de Macanao');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Boca de Río');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Tubores');
            $parish = new Parish();
            
            $parish->setDescription('Tubores');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Los Baleales');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Villalba');
            $parish = new Parish();
            
            $parish->setDescription('Vicente Fuentes');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Villalba');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Diaz');
            $parish = new Parish();
            
            $parish->setDescription('San Juan Bautista');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Zabala');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Araure');
            $parish = new Parish();
            
            $parish->setDescription('Capital Araure');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Río Acarigua');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Esteller');
            $parish = new Parish();
            
            $parish->setDescription('Capital Esteller');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Uveral');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Guanare');
            $parish = new Parish();
            
            $parish->setDescription('Guanare');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Córdoba');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('San José de la Montaña');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('San Juan de Guanaguanare');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Virgen de la Coromoto');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Guanarito');
            $parish = new Parish();
            
            $parish->setDescription('Guanarito');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Trinidad de la Capilla');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Divina Pastora');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Monsenor-Jose-Vicente-de-Unda');
            $parish = new Parish();
            
            $parish->setDescription('Monseñor José Vicente de Unda');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Peña Blanca');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Ospino');
            $parish = new Parish();
            
            $parish->setDescription('Capital Ospino');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Aparición');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('La Estación');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Portuguesa-Paez');
            $parish = new Parish();
            
            $parish->setDescription('Páez');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Payara');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Pimpinela');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Ramón Peraza');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Portuguesa-Papelon');
            $parish = new Parish();
            
            $parish->setDescription('Papelón');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Caño Delgadito');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-San-Genaro-de-Boconoito');
            $parish = new Parish();
            
            $parish->setDescription('San Genaro de Boconoito');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Antolín Tovar');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-San-Rafael-de-Onoto');
            $parish = new Parish();
            
            $parish->setDescription('San Rafael de Onoto');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Santa Fe');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Thermo Morles');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Santa-Rosalia');
            $parish = new Parish();
            
            $parish->setDescription('Santa Rosalía');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Florida');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Turen');
            $parish = new Parish();
            
            $parish->setDescription('Sucre');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Concepción');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('San Rafael de Palo Alzado');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Uvencio Antonio Velásquez');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('San José de Saguaz');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Villa Rosa');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Turen');
            $parish = new Parish();
            
            $parish->setDescription('Turén');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Canelones');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Santa Cruz');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('San Isidro Labrador');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Miranda-Andres-Eloy-Blanco');
            $parish = new Parish();
            
            $parish->setDescription('Mariño');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Rómulo Gallegos');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Andres-Mata');
            $parish = new Parish();
            
            $parish->setDescription('San José de Aerocuar');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Tavera Acosta');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Sucre-Arismendi');
            $parish = new Parish();
            
            $parish->setDescription('Río Caribe');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Antonio José de Sucre');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('El Morro de Puerto Santo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Puerto Santo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('San Juan de las Galdonas');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Benitez');
            $parish = new Parish();
            
            $parish->setDescription('El Pilar');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('El Rincón');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('General Francisco Antonio Váquez');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Guaraúnos');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Tunapuicito');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Unión');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Bermudez');
            $parish = new Parish();
            
            $parish->setDescription('Santa Catalina');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Santa Rosa');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Santa Teresa');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Bolívar');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Maracapana');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Cajigal');
            $parish = new Parish();
            
            $parish->setDescription('Libertad');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('El Paujil');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Yaguaraparo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Cruz-Salmeron-Acosta');
            $parish = new Parish();
            
            $parish->setDescription('Cruz Salmerón Acosta');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Chacopata');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Manicuare');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Cruz-Salmeron-Acosta');
            $parish = new Parish();
            
            $parish->setDescription('Cruz Salmerón Acosta');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Chacopata');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-edoSucre-Libertador');
            $parish = new Parish();
            
            $parish->setDescription('Tunapuy');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Campo Elías');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Sucre-Marino');
            $parish = new Parish();
            
            $parish->setDescription('Irapa');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Campo Claro');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Maraval');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('San Antonio de Irapa');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Soro');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Mejia');
            $parish = new Parish();
            
            $parish->setDescription('Mejía');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Montes');
            $parish = new Parish();
            
            $parish->setDescription('Cumanacoa');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Arenas');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Aricagua');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Cogollar');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('San Fernando');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('San Lorenzo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Ribero');
            $parish = new Parish();
            
            $parish->setDescription('Villa Frontado (Muelle de Cariaco)');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Catuaro');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Rendón');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Cogollar');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('San Cruz');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Santa María');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Sucre-Sucre');
            $parish = new Parish();
            
            $parish->setDescription('Altagracia');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Santa Inés');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Valentín Valiente');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Ayacucho');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('San Juan');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Raúl Leoni');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Gran Mariscal');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Valdez');
            $parish = new Parish();
            
            $parish->setDescription('Cristóbal Colón');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Bideau');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Punta de Piedras');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Güiria');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Tachira-Andres-Bello');
            $parish = new Parish();
            
            $parish->setDescription('Andrés Bello');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Antonio-Romulo-Costa');
            $parish = new Parish();
            
            $parish->setDescription('Antonio Rómulo Costa');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Ayacucho');
            $parish = new Parish();
            
            $parish->setDescription('Ayacucho');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Rivas Berti');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('San Pedro del Río');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Tachira-Bolivar');
            $parish = new Parish();
            
            $parish->setDescription('Bolívar');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Palotal');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('General Juan Vicente Gómez');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Isaías Medina Angarita');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Cardenas');
            $parish = new Parish();
            
            $parish->setDescription('Cárdenas');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Amenodoro Ángel Lamus');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('La Florida');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Cordoba');
            $parish = new Parish();
            
            $parish->setDescription('Córdoba');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Fernandez-Feo');
            $parish = new Parish();
            
            $parish->setDescription('Fernández Feo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Alberto Adriani');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Santo Domingo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Tachira-Francisco-de-Miranda');
            $parish = new Parish();
            
            $parish->setDescription('Francisco de Miranda');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Garcia-de-Hevia');
            $parish = new Parish();
            
            $parish->setDescription('García de Hevia');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Boca de Grita');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('José Antonio Páez');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Guasimos');
            $parish = new Parish();
            
            $parish->setDescription('Guásimos');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Tachira-Independencia');
            $parish = new Parish();
            
            $parish->setDescription('Independencia');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Juan Germán Roscio');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Román Cárdenas');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Jauregui');
            $parish = new Parish();
            
            $parish->setDescription('Jáuregui');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Emilio Constantino Guerrero');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Monseñor Miguel Antonio Salas');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Jose-Maria-Vargas');
            $parish = new Parish();
            
            $parish->setDescription('José María Vargas');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Junin');
            $parish = new Parish();
            
            $parish->setDescription('Junín');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('La Petrólea');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Quinimarí');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Bramón');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Tachira-Libertad');
            $parish = new Parish();
            
            $parish->setDescription('Libertad');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Cipriano Castro');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Manuel Felipe Rugeles');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Tachira-Libertador');
            $parish = new Parish();
            
            $parish->setDescription('Libertador');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Doradas');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Emeterio Ochoa');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('San Joaquín de Navay');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Lobatera');
            $parish = new Parish();
            
            $parish->setDescription('Lobatera');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Constitución');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Michelena');
            $parish = new Parish();
            
            $parish->setDescription('Michelena');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Panamericano');
            $parish = new Parish();
            
            $parish->setDescription('Panamericano');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('La Palmita');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Pedro-Maria-Urena');
            $parish = new Parish();
            
            $parish->setDescription('Pedro María Ureña');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Nueva Arcadia');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Rafael-Urdaneta');
            $parish = new Parish();
            
            $parish->setDescription('Delicias');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Pecaya');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Samuel-Dario-Maldonado');
            $parish = new Parish();
            
            $parish->setDescription('Samuel Darío Maldonado');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Boconó');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Hernández');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-San-Cristobal');
            $parish = new Parish();
            
            $parish->setDescription('La Concordia');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('San Juan Bautista');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Pedro María Morantes');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('San Sebastián');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Dr. Francisco Romero Lobo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Seboruco');
            $parish = new Parish();
            
            $parish->setDescription('Seboruco');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Tachira-Simon-Rodriguez');
            $parish = new Parish();
            
            $parish->setDescription('Simón Rodríguez');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Tachira-Sucre');
            $parish = new Parish();
            
            $parish->setDescription('Sucre');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Eleazar López Contreras');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('San Pablo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Torbes');
            $parish = new Parish();
            
            $parish->setDescription('Torbes');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Tachira-Sucre');
            $parish = new Parish();
            
            $parish->setDescription('Uribante');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Cárdenas');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Juan Pablo Peñalosa');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Potosí');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-San-Judas-Tadeo');
            $parish = new Parish();
            
            $parish->setDescription('San Judas Tadeo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Andres-Bello');
            $parish = new Parish();
            
            $parish->setDescription('Araguaney');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('El Jaguito');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('La Esperanza');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Santa Isabel');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Bocono');
            $parish = new Parish();
            
            $parish->setDescription('Boconó');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('El Carmen');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Mosquey');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Ayacucho');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Burbusay');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('General Ribas');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Guaramacal');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Vega de Guaramacal');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Monseñor Jáuregui');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Rafael Rangel');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('San Miguel');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('San José');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Trujillo-Bolivar');
            $parish = new Parish();
            
            $parish->setDescription('Sabana Grande');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Cheregüé');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Granados');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Candelaria');
            $parish = new Parish();
            
            $parish->setDescription('Arnoldo Gabaldón');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Bolivia');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Carrillo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
	
            $parish = new Parish();
            
            $parish->setDescription('Cegarra');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Chejendé');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Manuel Salvador Ulloa');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('San José');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Carache');
            $parish = new Parish();
            
            $parish->setDescription('Carache');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('La Concepción');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Cuicas');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
	
            $parish = new Parish();
            
            $parish->setDescription('Panamericana');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Chejendé');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Santa Cruz');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Escuque');
            $parish = new Parish();
            
            $parish->setDescription('Escuque');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('La Unión');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Santa Rita');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
	
            $parish = new Parish();
            
            $parish->setDescription('Sabana Libre');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Jose-Felipe-Marquez-Canizalez');
            $parish = new Parish();
            
            $parish->setDescription('El Socorro');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Los Caprichos');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Antonio José de Sucre');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Juan-Vicente-Campos-Elias');
            $parish = new Parish();
            
            $parish->setDescription('Campo Elías');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Arnoldo Gabaldón');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-La-Ceiba');
            $parish = new Parish();
            
            $parish->setDescription('Santa Apolonia');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('El Progreso');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('La Ceiba');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Tres de Febrero');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Trujillo-Miranda');
            $parish = new Parish();
            
            $parish->setDescription('El Dividive');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Agua Santa');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Agua Caliente');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('El Cenizo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Valerita');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Monte-Carmelo');
            $parish = new Parish();
            
            $parish->setDescription('Monte Carmelo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Buena Vista');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Santa María del Horcón');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Motatan');
            $parish = new Parish();
            
            $parish->setDescription('Motatán');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('El Baño');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Jalisco');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Pampan');
            $parish = new Parish();
            
            $parish->setDescription('Pampán');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Flor de Patria');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('La Paz');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Santa Ana');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Pampanito');
            $parish = new Parish();
            
            $parish->setDescription('Pampanito');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('La Concepción');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Pampanito II');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Rafael-Rangel');
            $parish = new Parish();
            
            $parish->setDescription('Betijoque');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('José Gregorio Hernández');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('La Pueblita');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Los Cedros');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-San-Rafael-de-Carvajal');
            $parish = new Parish();
            
            $parish->setDescription('Carvajal');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Campo Alegre');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Antonio Nicolás Briceño');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('José Leonardo Suárez');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Trujillo-Sucre');
            $parish = new Parish();
            
            $parish->setDescription('Sabana de Mendoza');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Junín');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Valmore Rodríguez');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('El Paraíso');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Trujillo');
            $parish = new Parish();
            
            $parish->setDescription('Andrés Linares');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Chiquinquirá');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Cristóbal Mendoza');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Cruz Carrillo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Matriz');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Monseñor Carrillo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Tres Esquinas');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Trujillo-Urdaneta');
            $parish = new Parish();
            
            $parish->setDescription('Cabimbú');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Jajó');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('La Mesa de Esnujaque');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Santiago');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Tuñame');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('La Quebrada');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Valera');
            $parish = new Parish();
            
            $parish->setDescription('Juan Ignacio Montilla');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('La Beatriz');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('La Puerta');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Mendoza del Valle de Momboy');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Mercedes Díaz');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('San Luis');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Vargas');
            $parish = new Parish();
            
            $parish->setDescription('Caraballeda');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Carayaca');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Carlos Soublette');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Caruao Chuspa');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Catia La Mar');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('El Junko');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('La Guaira');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Macuto');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Maiquetía');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Naiguatá');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Urimare');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Aristides-Bastidas');
            $parish = new Parish();
            
            $parish->setDescription('Arístides Bastidas');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Yaracuy-Bolivar');
            $parish = new Parish();
            
            $parish->setDescription('Bolívar');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Bruzual');
            $parish = new Parish();
            
            $parish->setDescription('Chivacoa');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Campo Elías');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Cocorote');
            $parish = new Parish();
            
            $parish->setDescription('Cocorote');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Yaracuy-Independencia');
            $parish = new Parish();
            
            $parish->setDescription('Independencia');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Jose-Antonio-Paez');
            $parish = new Parish();
            
            $parish->setDescription('José Antonio Páez');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-La-Trinidad');
            $parish = new Parish();
            
            $parish->setDescription('La Trinidad');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Manuel-Monge');
            $parish = new Parish();
            
            $parish->setDescription('Manuel Monge');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Nirgua');
            $parish = new Parish();
            
            $parish->setDescription('Salóm');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Temerla');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Nirgua');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Pena');
            $parish = new Parish();
            
            $parish->setDescription('San Andrés');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Yaritagua');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-San-Felipe');
            $parish = new Parish();
            
            $parish->setDescription('San Javier');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Albarico');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('San Felipe');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Yaracuy-Sucre');
            $parish = new Parish();
            
            $parish->setDescription('Sucre');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Urachiche');
            $parish = new Parish();
            
            $parish->setDescription('Urachiche');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Jose-Joaquin-Veroes');
            $parish = new Parish();
            
            $parish->setDescription('El Guayabo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Farriar');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Almirante-Padilla');
            $parish = new Parish();
            
            $parish->setDescription('Isla de Toas');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Monagas');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Zulia-Baralt');
            $parish = new Parish();
            
            $parish->setDescription('San Timoteo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('General Urdaneta');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Libertador');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Marcelino Briceño');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Pueblo Nuevo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Manuel Guanipa Matos');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Zulia-Cabimas');
            $parish = new Parish();
            
            $parish->setDescription('Ambrosio');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Carmen Herrera');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('La Rosa');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Germán Ríos Linares');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('San Benito');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Rómulo Betancourt');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Jorge Hernández');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Punta Gorda');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Arístides Calvani');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Zulia-Catatumbo');
            $parish = new Parish();
            
            $parish->setDescription('Encontrados');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Udón Pérez');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Zulia-Colon');
            $parish = new Parish();
            
            $parish->setDescription('Moralito');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('San Carlos del Zulia');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Santa Cruz del Zulia');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Santa Bárbara');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Urribarrí');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Francisco-Javier-Pulgar');
            $parish = new Parish();
            
            $parish->setDescription('Carlos Quevedo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Francisco Javier Pulgar');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Simón Rodríguez');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Guamo-Gavilanes');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Zulia-Paez');
            $parish = new Parish();
            
            $parish->setDescription('La Concepción');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('San José');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Mariano Parra León');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('José Ramón Yépez');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Sinamaica');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Alta Guajira');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Elías Sánchez Rubio');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Guajira');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Jesus-Enrique-Losada');
            $parish = new Parish();
            
            $parish->setDescription('Jesús María Semprún');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Barí');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Jesus-Maria-Semprun');
            $parish = new Parish();
            
            $parish->setDescription('Concepción');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Andrés Bello');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Chiquinquirá');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('El Carmelo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Potreritos');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Zulia-Lagunillas');
            $parish = new Parish();
            
            $parish->setDescription('Libertad');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Alonso de Ojeda');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Venezuela');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Eleazar López Contreras');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Campo Lara');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Machiques-de-Perija');
            $parish = new Parish();
            
            $parish->setDescription('Bartolomé de las Casas');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Libertad');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Río Negro');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('San José de Perijá');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Zulia-Mara');
            $parish = new Parish();
            
            $parish->setDescription('San Rafael');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('La Sierrita');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Las Parcelas');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Luis de Vicente');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Monseñor Marcos Sergio Godoy');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Ricaurte');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Tamare');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Zulia-Maracaibo');
            $parish = new Parish();
            
            $parish->setDescription('Antonio Borjas Romero');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Bolívar');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Cacique Mara');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Carracciolo Parra Pérez');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Cecilio Acosta');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Cristo de Aranza');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Coquivacoa');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Chiquinquirá');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Francisco Eugenio Bustamante');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Idelfonzo Vásquez');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Juana de Ávila');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Luis Hurtado Higuera');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Manuel Dagnino');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Olegario Villalobos');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Raúl Leoni');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Santa Lucía');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Venancio Pulgar');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('San Isidro');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Zulia-Miranda');
            $parish = new Parish();
            
            $parish->setDescription('Altagracia');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Faría');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Ana María Campos');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('San Antonio');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('San José');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Rosario-de-Perija');
            $parish = new Parish();
            
            $parish->setDescription('Donaldo García');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('El Rosario');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Sixto Zambrano');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Zulia-San-Francisco');
            $parish = new Parish();
            
            $parish->setDescription('San Francisco');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('El Bajo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Domitila Flores');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Francisco Ochoa');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Los Cortijos');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Marcial Hernández');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Santa-Rita');
            $parish = new Parish();
            
            $parish->setDescription('Santa Rita');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('El Mene');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Pedro Lucas Urribarrí');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('José Cenobio Urribarrí');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Zulia-Simon-Bolivar');
            $parish = new Parish();
            
            $parish->setDescription('Rafael Maria Baralt');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Manuel Manrique');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Rafael Urdaneta');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Zulia-Sucre');
            $parish = new Parish();
            
            $parish->setDescription('Bobures');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Gibraltar');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Heras');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Monseñor Arturo Álvarez');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Rómulo Gallegos');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('El Batey');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Valmore-Rodríguez');
            $parish = new Parish();
            
            $parish->setDescription('Rafael Urdaneta');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('La Victoria');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Raúl Cuenca');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	$municipality = $this->getReference('Municipality-Distrito-Capital-Libertador');
            $parish = new Parish();
            
            $parish->setDescription('Altagracia');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Antímano');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Caricuao');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Catedral');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Coche');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('El Junquito');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('El Paraíso');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('El Recreo');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('El Valle');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('La Candelaria');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('La Pastora');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('La Vega');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Macarao');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('San Agustín');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('San Bernardino');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('San José');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('San Juan');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('San Pedro');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('Santa Rosalía');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Santa Teresa');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

            $parish = new Parish();
            
            $parish->setDescription('Sucre (Catia)');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);

	    $parish = new Parish();
            
            $parish->setDescription('23 de enero');
            $parish->setMunicipality($municipality);
                $manager->persist($parish);
            
        $manager->flush();
    }
    
    public function getOrder() {
        return 4;
    }
}