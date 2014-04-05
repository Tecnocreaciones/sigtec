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
use SIEMPRE\Core\Entity\C_Parish;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Description of ParishData
 *
 * @author Jesus Zapata <programacion2@megabyteca.com>
 */
class ParishFixture extends AbstractFixture implements ContainerAwareInterface,  OrderedFixtureInterface {
    protected $container;
    
    public function load(ObjectManager $manager) {
        $entity = $this->container->get('entity');
        
        $c_Municipality = $this->getReference('Municipality-Alto-Orinoco');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Alto Orinoco');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
                
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Huachamacare Acanaña');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
                
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Marawaka Toky Shamanaña');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
                
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Mavaka Mavaka');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
                
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Sierra Parima Parimabé');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
             
        $c_Municipality = $this->getReference('Municipality-Atabapo');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Ucata Laja Lisa');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
                
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Yapacana Macuruco');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
                
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Caname Guarinuma');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
        $c_Municipality = $this->getReference('Municipality-Atures');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Fernando Girón Tovar');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
                
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Luis Alberto Gómez');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
                
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Pahueña Limón de Parhueña');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
                
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Platanillal Platanillal');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
                
        $c_Municipality = $this->getReference('Municipality-Autana');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Samariapo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
                
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Sipapo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
                
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Munduapo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
                
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Guayapo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
                
        $c_Municipality = $this->getReference('Municipality-Manapiare');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Alto Ventuari');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
                
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Medio Ventuari');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
                
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Bajo Ventuari');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
                
        $c_Municipality = $this->getReference('Municipality-Maroa');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Victorino');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
                
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Comunidad');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
                
        $c_Municipality = $this->getReference('Municipality-Rio-Negro');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Casiquiare');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Cocuy');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
                
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Carlos de Río Negro');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
                
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Solano');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
                
        $c_Municipality = $this->getReference('Municipality-Anaco');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Anaco');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
        
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Joaquín');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
        
        $c_Municipality = $this->getReference('Municipality-Aragua');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Cachipo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
              
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Aragua de Barcelona');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
                
        $c_Municipality = $this->getReference('Municipality-Manuel-Ezequiel-Bruzual');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Clarines');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
              
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Guanape');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Sabana de Uchire');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
              
        $c_Municipality = $this->getReference('Municipality-Diego-Bautista-Urbaneja');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Lechería');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
                
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Morro');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
                
        $c_Municipality = $this->getReference('Municipality-Fernando-Penalver');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Puerto Píritu');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
              
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Miguel');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
              
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Sucre');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
              
        $c_Municipality = $this->getReference('Municipality-Francisco-Del-Carmen-Carvajal');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Valle de Guanape');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
                
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Santa Bárbara');
            $c_parish->setC_Municipality($c_Municipality);
                 $manager->persist($c_parish);
           
        $c_Municipality = $this->getReference('Municipality-General-Sir-Arthur-McGregor');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Chaparro');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
             
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Tomás Alfaro');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
             
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Calatrava');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
        $c_Municipality = $this->getReference('Municipality-Guanta');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Guanta');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Chorrerón');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
        $c_Municipality = $this->getReference('Municipality-Independencia');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Mamo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Soledad');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
        $c_Municipality = $this->getReference('Municipality-Jose-Gregorio-Monagas');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Mapire');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Piar');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Santa Clara');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Diego de Cabrutica');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Uverito');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Zuata');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
        $c_Municipality = $this->getReference('Municipality-Juan-Antonio-Sotillo');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Puerto La Cruz');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Pozuelos');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
        $c_Municipality = $this->getReference('Municipality-Juan-Manuel-Cajigal');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Onoto');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Pablo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
        $c_Municipality = $this->getReference('Municipality-Libertad');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Mateo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Carito');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Santa Inés');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('La Romereña');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
        $c_Municipality = $this->getReference('Municipality-Francisco-de-Miranda');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Atapirire');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Boca del Pao');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Pao');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Pariaguán');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
        $c_Municipality = $this->getReference('Municipality-Pedro-Maria-Freites');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Cantaura');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Libertador');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Santa Rosa');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Urica');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
        $c_Municipality = $this->getReference('Municipality-Piritu');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Píritu');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Francisco');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
        $c_Municipality = $this->getReference('Municipality-San-Jose-de-Guanipa');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San José de Guanipa');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
        
        $c_Municipality = $this->getReference('Municipality-San-Juan-de-Capistrano');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Boca de Uchire');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Boca de Chávez');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
        $c_Municipality = $this->getReference('Municipality-Santa-Ana');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Pueblo Nuevo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Santa Ana');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
        $c_Municipality = $this->getReference('Municipality-Simon-Bolivar');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Bergatín');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);            

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Caigua');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Carmen');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Pilar');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Naricual');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Cristóbal');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
        $c_Municipality = $this->getReference('Municipality-Simon-Rodriguez');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Edmundo Barrios');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Miguel Otero Silva');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
        $c_Municipality = $this->getReference('Municipality-Achaguas');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Achaguas');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Apurito');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Yagual');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Guachara');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Mucuritas');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Queseras del medio');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

        $c_Municipality = $this->getReference('Municipality-Biruaca');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Biruaca');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
        $c_Municipality = $this->getReference('Municipality-Munoz');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Bruzual');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Mantecal');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Quintero');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Rincón Hondo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Vicente');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
        $c_Municipality = $this->getReference('Municipality-Paez');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Guasdualito');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Aramendi');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Amparo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Camilo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Urdaneta');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
        $c_Municipality = $this->getReference('Municipality-Pedro-Camejo');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Juan de Payara');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Codazzi');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Cunaviche');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
        $c_Municipality = $this->getReference('Municipality-Romulo-Gallegos');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Elorza');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('La Trinidad');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

        $c_Municipality = $this->getReference('Municipality-San-Fernando');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Fernando');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Recreo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Peñalver');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Rafael de Atamaica');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
        $c_Municipality = $this->getReference('Municipality-Atanasio-Girardot');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Pedro José Ovalles');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
   
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Joaquín Crespo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('José Casanova Godoy');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Madre María de San José');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Andrés Eloy Blanco');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Los Tacarigua');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Las Delicias');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Choroní');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

        $c_Municipality = $this->getReference('Municipality-Anzoategui-Bolivar');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Bolívar');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
        $c_Municipality = $this->getReference('Municipality-Camatagua');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Camatagua');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
   
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Carmen de Cura');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
        $c_Municipality = $this->getReference('Municipality-Francisco-Linares-Alcantara');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Santa Rita');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
   
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Francisco de Miranda');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Moseñor Feliciano González');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
        $c_Municipality = $this->getReference('Municipality-Jose-Angel-Lamas');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Santa Cruz');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
        $c_Municipality = $this->getReference('Municipality-Jose-Felix-Ribas');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('José Félix Ribas');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
   
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Castor Nieves Ríos');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Las Guacamayas');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Pao de Zárate');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Zuata');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
        $c_Municipality = $this->getReference('Municipality-Jose-Rafael-Revenga');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('José Rafael Revenga');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

        $c_Municipality = $this->getReference('Municipality-Aragua-Libertador');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Palo Negro');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
   
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Martín de Porres');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
        $c_Municipality = $this->getReference('Municipality-Mario-Briceno-Iragorry');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Limón');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
   
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Caña de Azúcar');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);            
        $c_Municipality = $this->getReference('Municipality-Ocumare-de-la-Costa-de-Oro');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Ocumare de la Costa');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
        $c_Municipality = $this->getReference('Municipality-San-Casimiro');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Casimiro');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
   
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Güiripa');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Ollas de Caramacate');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Valle Morín');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
        $c_Municipality = $this->getReference('Municipality-San-Sebastian');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Sebastían');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
        $c_Municipality = $this->getReference('Municipality-Santiago-Marino');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Turmero');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
   
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Arevalo Aponte');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Chuao');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Samán de Güere');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Alfredo Pacheco Miranda');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
          
        $c_Municipality = $this->getReference('Municipality-Santos-Michelena');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Santos Michelena');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
   
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Tiara');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
        $c_Municipality = $this->getReference('Municipality-Aragua-Sucre');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Cagua');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Bella Vista');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
        $c_Municipality = $this->getReference('Municipality-Tovar');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Tovar');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
        $c_Municipality = $this->getReference('Municipality-Urdaneta');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Urdaneta');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
   
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Las Peñitas');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Francisco de Cara');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
   
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Taguay');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
        $c_Municipality = $this->getReference('Municipality-Zamora');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Zamora');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
   
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Magdaleno');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Francisco de Asís');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
   
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Valles de Tucutunemo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Augusto Mijares');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

        $c_Municipality = $this->getReference('Municipality-Alberto-Arvelo-Torrealba');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Sabaneta');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
   
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Juan Antonio Rodríguez Domínguez');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
        $c_Municipality = $this->getReference('Municipality-Andres-Eloy-Blanco');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Cantón');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
   
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Santa Cruz de Guacas');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
   
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Puerto Vivas');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
        $c_Municipality = $this->getReference('Municipality-Antonio-Jose-de-Sucre');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Ticoporo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
   
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Nicolás Pulido');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
   
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Andrés Bello');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
          
        $c_Municipality = $this->getReference('Municipality-Arismendi');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Arismendi');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
   
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Guadarrama');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
   
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('La Unión');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
   
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Antonio');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
         $c_Municipality = $this->getReference('Municipality-Barinas');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Barinas');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
   
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Alberto Arvelo Larriva');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
 
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Silvestre');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
   
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Santa Inés');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Santa Lucía');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
   
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Torumos');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Carmen');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
   
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Rómulo Betancourt');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Corazón de Jesús');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
   
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Alto Barinas');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
   
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Manuel Palacio Fajardo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
   
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Juan Antonio Rodríguez Domínguez');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
   
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Dominga Ortiz de Páez');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
        $c_Municipality = $this->getReference('Municipality-Aragua-Bolivar');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Barinitas');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
   
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Altamira de Cáceres');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
 
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Calderas');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
   
        $c_Municipality = $this->getReference('Municipality-Cruz-Paredes');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Barrancas');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
   
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Socorro');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
 
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Mazparrito');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
        $c_Municipality = $this->getReference('Municipality-Ezequiel-Zamora');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Santa Bárbara');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
   
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Pedro Briceño Méndez');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Ramón Ignacio Méndez');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
 
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('José Ignacio del Pumar');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

        $c_Municipality = $this->getReference('Municipality-Obispos');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Obispos');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);   

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Guasimitos');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Real');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('La Luz');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
        $c_Municipality = $this->getReference('Municipality-Pedraza');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Ciudad Bolívia');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
   
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('José Ignacio Briceño');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('José Félix Ribas');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Páez');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
        $c_Municipality = $this->getReference('Municipality-Rojas');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Libertad');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
   
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Dolores');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Santa Rosa');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Palacio Fajardo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
        $c_Municipality = $this->getReference('Municipality-Sosa');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Ciudad de Nutrias');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Regalo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Puerto Nutrias');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Santa Catalina');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

        $c_Municipality = $this->getReference('Municipality-Caroni');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Cachamay');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Chirica');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Dalla Costa');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Once de Abril');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Simón Bolívar');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Unare');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Universidad');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Vista al Sol');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Pozo Verde');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Yocoima');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('5 de Julio');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
        $c_Municipality = $this->getReference('Municipality-Cedeno');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Cedeño');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Altagracia');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Ascensión Farreras');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Guaniamo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('La Urbana');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Pijiguaos');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

        $c_Municipality = $this->getReference('Municipality-El-Callao');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Callao');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

        $c_Municipality = $this->getReference('Municipality-Gran-Sabana');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Gran Sabana');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Ikabarú');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

        $c_Municipality = $this->getReference('Municipality-Heres');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Catedral');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Zea');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Orinoco');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('José Antonio Páez');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Marhuanta');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Agua Salada');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Vista Hermosa');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('La Sabanita');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Panapana');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

        $c_Municipality = $this->getReference('Municipality-Piar');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Andrés Eloy Blanco');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Pedro Cova');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

        $c_Municipality = $this->getReference('Municipality-Angostura-(Raul-Leoni)');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Raúl Leoni');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Barceloneta');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Santa Bárbara');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Francisco');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

        $c_Municipality = $this->getReference('Municipality-Roscio');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Roscio');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Salóm');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
        $c_Municipality = $this->getReference('Municipality-Sifontes');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Sifontes');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Dalla Costa');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Isidro');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
        $c_Municipality = $this->getReference('Municipality-Bolivar-Sucre');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Sucre');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Aripao');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Guarataro');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Las Majadas');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Moitaco');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
        $c_Municipality = $this->getReference('Municipality-Padre-Pedro-Chien');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Padre Pedro Chien');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Río Grande');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
        
        $c_Municipality = $this->getReference('Municipality-Bejuma');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Bejuma');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Canoabo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Simón Bolívar');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
        
        $c_Municipality = $this->getReference('Municipality-Carlos-Arvelo');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Güigüe');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Carabobo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Tacarigua');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
        
        $c_Municipality = $this->getReference('Municipality-Diego-Ibarra');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Mariara');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Aguas Calientes');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

        $c_Municipality = $this->getReference('Municipality-Guacara');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Ciudad Alianza');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Guacara');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Yagua');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

        $c_Municipality = $this->getReference('Municipality-Juan-Jose-Mora');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Morón');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Yagua');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
        $c_Municipality = $this->getReference('Municipality-Carabobo-Libertador');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Tocuyito');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Independencia');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

        $c_Municipality = $this->getReference('Municipality-Los-Guayos');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Los Guayos');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
        $c_Municipality = $this->getReference('Municipality-Miranda');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Miranda');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
        $c_Municipality = $this->getReference('Municipality-Montalban');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Montalbán');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
        $c_Municipality = $this->getReference('Municipality-Naguanagua');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Naguanagua');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
        $c_Municipality = $this->getReference('Municipality-Puerto-Cabello');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Bartolomé Salóm');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Democracia');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Fraternidad');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Goaigoaza');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Juan José Flores');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Unión');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Borburata');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
          
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Patanemo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-San-Diego');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Diego');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-San-Joaquin');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Joaquín');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Valencia');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Candelaria');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Socorro');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Miguel Peña');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Rafael Urdaneta');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Blas');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San José');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
          
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Santa Rosa');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Negro Primero');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Cojedes-Anzoategui');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Cojedes');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Juan de Mata Suárez');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Tinaquillo');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Tinaquillo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Girardot');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Baúl');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Sucre');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Lima-Blanco');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('La Aguadita');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Macapo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Pao-de-San-Juan-Bautista');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Pao');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Ricaurte');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Amparo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Libertad de Cojedes');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Romulo-Gallegos');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Rómulo Gallegos');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-San-Carlos');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Carlos de Austria');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Juan Ángel Bravo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Manuel Manrique');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Antonio-Diaz');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('General en Jefe José Laurencio Silva');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Tinaco');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Curiapo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Almirante Luis Brión');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Francisco Aniceto Lugo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Manuel Renaud');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Padre Barral');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Santos de Abelgas');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Casacoima');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Imataca');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Cinco de Julio');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Juan Bautista Arismendi');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Manuel Piar');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Rómulo Gallegos');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Perdenales');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Pedernales');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Luis Beltrán Prieto Figueroa');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Tucupita');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San José (Delta Amacuro)');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('José Vidal Marcano');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Juan Millán');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Leonardo Ruíz Pineda');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Mariscal Antonio José de Sucre');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Monseñor Argimiro García');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Rafael (Delta Amacuro)');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Virgen del Valle');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Acosta');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Capadare');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('La Pastora');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Libertador');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Juan de los Cayos');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Falcon-Bolivar');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Aracua');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('La Peña');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Luis');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Buchivacoa');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Bariro');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Borojó');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Capatárida');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Guajiro');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Seque');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Zazárida');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Valle de Eroa');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Cacique-Manaure');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Cacique Manaure');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Carirubana');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Norte');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Carirubana');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Santa Ana');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Urbana Punta Cardón');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Colina');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('La Vela de Coro');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Acurigua');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Guaibacoa');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Las Calderas');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Macoruca');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Dabajuro');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Dabajuro');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Falcon-Democracia');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Agua Clara');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Avaria');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Pedregal');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Piedra Grande');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Purureche');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Falcon');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Adaure');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Adícora');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Baraived');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Buena Vista');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Jadacaquiva');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Vínculo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Hato');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Moruy');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Pueblo Nuevo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Federacion');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Agua Larga');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Paují');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Independencia');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Mapararí');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Churuguara');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Jacura');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Agua Linda');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Araurima');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Jacura');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Jose-Laurencio-Silva');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Tucacas');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Boca de Aroa');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Los-Taques');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Los Taques');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Judibana');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Mauroa');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Mene de Mauroa');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Félix');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Casigua');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Falcon-Miranda');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Guzmán Guillermo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Mitare');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Río Seco');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Sabaneta');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Antonio');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Gabriel');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Santa Ana');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Monsenor-Iturriza');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Boca del Tocuyo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Chichiriviche');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Tocuyo de la Costa');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Palmasola');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Palmasola');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Petit');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Cabure');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Colina');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Curimagua');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Falcon-Piritu');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San José de la Costa');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Píritu');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-San-Francisco');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Francisco');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Falcon-Sucre');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Sucre');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Pecaya');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Tocopero');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Tocópero');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Union');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Charal');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Las Vegas del Tuy');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Santa Cruz de Bucaral');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Urumaco');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Bruzual');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Urumaco');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Falcon-Zamora');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Puerto Cumarebo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('La Ciénaga');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('La Soledad');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Pueblo Cumarebo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Zazárida');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Camaguan');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Camaguán');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Puerto Miranda');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Uverito');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Chaguaramas');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Camaguán');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-El-Socorro');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Socorro');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Guarico-Jose-Felix-Ribas');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Tucupido');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Rafael de Laya');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Jose-Tadeo-Monagas');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Altagracia de Orituco');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Rafael de Orituco');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Francisco Javier de Lezama');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Paso Real de Macaira');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Carlos Soublette');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Francisco de Macaira');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Libertad de Orituco');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Juan-German-Roscio');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Cantaclaro');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Juan de los Morros');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Parapara');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Julian-Mellado');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Sombrero');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Sosa');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Las-Mercedes');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Las Mercedes');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Cabruta');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Santa Rita de Manapire');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Leonardo-Infante');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Valle de la Pascua');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Espino');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Pedro-Zaraza');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San José de Unare');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Zaraza');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Ortiz');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San José de Tiznados');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Francisco de Tiznados');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Lorenzo de Tiznados');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Ortiz');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-San-Geronimo-de-Guayabal');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Guayabal');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Cazorla');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-San-Jose-de-Guaribe');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San José de Guaribe');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Uveral');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Santa-Maria-de-Ipire');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Santa María de Ipire');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Altamira');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Sebastian-Francisco-de-Miranda');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Calvario');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Rastro');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Guardatinajas');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Capital Urbana Calabozo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Lara-Andres-Eloy-Blanco');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Quebrada Honda de Guache');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Pío Tamayo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Yacambú');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Crespo');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Fréitez');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('José María Blanco');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Iribarren');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Catedral');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Concepción');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Cují');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Juan de Villegas');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Santa Rosa');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Tamaca');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Unión');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Aguedo Felipe Alvarado');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Buena Vista');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Juárez');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Jimenez');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Juan Bautista Rodríguez');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Cuara');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Diego de Lozada');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Paraíso de San José');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Miguel');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Tintorero');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('José Bernardo Dorante');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Coronel Mariano Peraza');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Moran');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Bolívar');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Anzoátegui');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Guarico');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Hilario Luna y Luna');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Humocaro Alto');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Humocaro Bajo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('La Candelaria');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Morán');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Palavecino');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Cabudare');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('José Gregorio Bastidas');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Agua Viva');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Simon-Planas');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Sarare');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Buría');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Gustavo Vegas León');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Torres');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Trinidad Samuel');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Antonio Díaz');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Camacaro');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Castañeda');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Cecilio Zubillaga');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Chiquinquirá');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Blanco');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Espinoza de los Monteros');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Lara');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Las Mercedes');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Manuel Morillo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Montaña Verde');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Montes de Oca');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Torres');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Heriberto Arroyo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Reyes Vargas');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Altagracia');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Lara-Urdaneta');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Siquisique');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Moroturo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Miguel');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Xaguas');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Alberto-Adriani');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Presidente Betancourt');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Presidente Páez');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Presidente Rómulo Gallegos');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Gabriel Picón González');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Héctor Amable Mora');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('José Nucete Sardi');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Pulido Méndez');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Merida-Andres-Bello');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('La Azulita');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Antonio-Pinto-Salinas');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Santa Cruz de Mora');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Mesa Bolívar');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Mesa de Las Palmas');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Aricagua');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Aricagua');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Antonio');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Arzobispo-Chacon');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Canagua');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Capurí');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Chacantá');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Molino');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Guaimaral');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Mucutuy');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Mucuchachí');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Campo-Elias');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Fernández Peña');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Matriz');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Montalbán');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Acequias');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Jají');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('La Mesa');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San José del Sur');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Caracciolo-Parra-Olmedo');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Tucaní');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Florencio Ramírez');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Cardenal-Quintero');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Santo Domingo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Las Piedras');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Guaraque');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Guaraque');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Mesa de Quintero');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Río Negro');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Julio-Cesar-Salas');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Arapuey');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Palmira');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Justo-Briceno');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Cristóbal de Torondoy');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Torondoy');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Merida-Libertador');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Cristóbal de Torondoy');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Antonio Spinetti Dini');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Arias');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Caracciolo Parra Pérez');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Domingo Peña');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Llano');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Gonzalo Picón Febres');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Jacinto Plaza');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Juan Rodríguez Suárez');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Lasso de la Vega');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Mariano Picón Salas');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Milla');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Osuna Rodríguez');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Sagrario');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Morro');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Los Nevados');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Merida-Miranda');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Andrés Eloy Blanco');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('La Venta');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Piñango');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Timotes');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Obispo-Ramos-de-Lora');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Eloy Paredes');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Rafael de Alcázar');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Santa Elena de Arenales');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Padre-Noguera');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Santa María de Caparo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Pueblo-Llano');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Pueblo Llano');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Rangel');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Cacute');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('La Toma');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Mucuchíes');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Mucurubá');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Rafael');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Rivas-Davila');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Gerónimo Maldonado');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Bailadores');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Santos-Marquina');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Tabay');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Merida-Sucre');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Chiguará');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Estánquez');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Lagunillas');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('La Trampa');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Pueblo Nuevo del Sur');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Juan');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Merida-Tovar');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Amparo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Llano');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Francisco');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Tovar');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Tulio-Febres-Cordero');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Independencia');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('María de la Concepción Palacios Blanco');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Nueva Bolivia');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Santa Apolonia');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Zea');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Caño El Tigre');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Zea');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Acevedo');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Aragüita');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Arévalo González');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Capaya');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Caucagua');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Panaquire');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Ribas');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Café');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Marizapa');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Miranda-Andres-Bello');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Cumbo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San José de Barlovento');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Baruta');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Cafetal');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Las Minas');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Nuestra Señora del Rosario');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Brion');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Higuerote');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Curiepe');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Tacarigua de Brión');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Buroz');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Mamporal');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Carrizal');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Carrizal');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Chacao');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Chacao');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Cristobal-Rojas');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Charallave');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Las Brisas');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-El-Hatillo');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Hatillo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Guaicaipuro');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Altagracia de la Montaña');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Cecilio Acosta');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Los Teques');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Jarillo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Pedro');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Tácata');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Paracotos');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Miranda-Independencia');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Cartanal');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Santa Teresa del Tuy');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Lander');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('La Democracia');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Ocumare del Tuy');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Santa Bárbara');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Los-Salias');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Antonio de los Altos');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Miranda-Paez');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Río Chico');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Guapo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Tacarigua de la Laguna');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Paparo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Fernando del Guapo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Paz-Castillo');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Santa Lucía del Tuy');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Pedro-Gual');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Cúpira');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Machurucuto');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Plaza');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Guarenas');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Miranda-Simon-Bolivar');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Antonio de Yare');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Francisco de Yare');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Miranda-Sucre');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Leoncio Martínez');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Petare');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Caucagüita');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Filas de Mariche');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('La Dolorita');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Miranda-Urdaneta');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Cúa');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Nueva Cúa');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Miranda-Zamora');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Guatire');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Bolívar');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Monagas-Acosta');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Antonio de Maturín');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Francisco de Maturín');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Aguasay');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Aguasay');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Monagas-Bolivar');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Caripito');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Caripe');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Guácharo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('La Guanota');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Sabana de Piedra');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Agustín');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Teresen');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Caripe');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Cedeno');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Areo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Capital Cedeño');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Félix de Cantalicio');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Viento Fresco');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Monagas-Ezequiel-Zamora');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Tejero');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Punta de Mata');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Libertador');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Chaguaramas');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Las Alhuacas');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Tabasca');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Temblador');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Maturin');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Alto de los Godos');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Boquerón');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Las Cocuizas');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('La Cruz');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Simón');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Corozo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Furrial');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Jusepín');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('La Pica');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Vicente');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Monagas-Piar');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Aparicio');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Aragua de Maturín');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Chaguamal');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Pinto');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Guanaguana');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('La Toscana');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Taguaya');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Punceres');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Cachipo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Quiriquire');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Santa-Barbara');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Santa Bárbara');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Sotillo');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Barrancas');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Los Barrancos de Fajardo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Uracoa');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Uracoa');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Antolin-del-Campo');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Antolín del Campo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Nueva-Esparta-Arismendi');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Arismendi');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Garcia');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('García');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Francisco Fajardo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Gomez');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Bolívar');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Guevara');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Matasiete');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Santa Ana');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Sucre');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
	
	$c_Municipality = $this->getReference('Municipality-Maneiro');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Aguirre');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Maneiro');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Peninsula-de-Macanao');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Adrián');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Juan Griego');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Yaguaraparo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Marino');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Porlamar');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Peninsula-de-Macanao');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Francisco de Macanao');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Boca de Río');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Tubores');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Tubores');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Los Baleales');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Villalba');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Vicente Fuentes');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Villalba');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Diaz');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Juan Bautista');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Zabala');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Araure');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Capital Araure');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Río Acarigua');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Esteller');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Capital Esteller');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Uveral');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Guanare');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Guanare');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Córdoba');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San José de la Montaña');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Juan de Guanaguanare');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Virgen de la Coromoto');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Guanarito');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Guanarito');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Trinidad de la Capilla');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Divina Pastora');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Monsenor-Jose-Vicente-de-Unda');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Monseñor José Vicente de Unda');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Peña Blanca');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Ospino');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Capital Ospino');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Aparición');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('La Estación');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Portuguesa-Paez');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Páez');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Payara');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Pimpinela');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Ramón Peraza');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Portuguesa-Papelon');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Papelón');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Caño Delgadito');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-San-Genaro-de-Boconoito');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Genaro de Boconoito');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Antolín Tovar');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-San-Rafael-de-Onoto');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Rafael de Onoto');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Santa Fe');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Thermo Morles');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Santa-Rosalia');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Santa Rosalía');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Florida');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Turen');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Sucre');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Concepción');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Rafael de Palo Alzado');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Uvencio Antonio Velásquez');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San José de Saguaz');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Villa Rosa');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Turen');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Turén');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Canelones');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Santa Cruz');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Isidro Labrador');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Miranda-Andres-Eloy-Blanco');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Mariño');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Rómulo Gallegos');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Andres-Mata');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San José de Aerocuar');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Tavera Acosta');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Sucre-Arismendi');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Río Caribe');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Antonio José de Sucre');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Morro de Puerto Santo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Puerto Santo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Juan de las Galdonas');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Benitez');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Pilar');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Rincón');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('General Francisco Antonio Váquez');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Guaraúnos');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Tunapuicito');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Unión');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Bermudez');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Santa Catalina');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Santa Rosa');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Santa Teresa');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Bolívar');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Maracapana');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Cajigal');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Libertad');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Paujil');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Yaguaraparo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Cruz-Salmeron-Acosta');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Cruz Salmerón Acosta');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Chacopata');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Manicuare');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Cruz-Salmeron-Acosta');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Cruz Salmerón Acosta');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Chacopata');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-edoSucre-Libertador');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Tunapuy');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Campo Elías');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Sucre-Marino');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Irapa');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Campo Claro');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Maraval');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Antonio de Irapa');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Soro');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Mejia');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Mejía');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Montes');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Cumanacoa');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Arenas');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Aricagua');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Cogollar');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Fernando');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Lorenzo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Ribero');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Villa Frontado (Muelle de Cariaco)');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Catuaro');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Rendón');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Cogollar');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Cruz');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Santa María');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Sucre-Sucre');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Altagracia');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Santa Inés');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Valentín Valiente');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Ayacucho');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Juan');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Raúl Leoni');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Gran Mariscal');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Valdez');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Cristóbal Colón');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Bideau');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Punta de Piedras');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Güiria');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Tachira-Andres-Bello');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Andrés Bello');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Antonio-Romulo-Costa');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Antonio Rómulo Costa');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Ayacucho');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Ayacucho');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Rivas Berti');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Pedro del Río');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Tachira-Bolivar');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Bolívar');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Palotal');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('General Juan Vicente Gómez');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Isaías Medina Angarita');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Cardenas');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Cárdenas');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Amenodoro Ángel Lamus');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('La Florida');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Cordoba');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Córdoba');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Fernandez-Feo');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Fernández Feo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Alberto Adriani');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Santo Domingo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Tachira-Francisco-de-Miranda');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Francisco de Miranda');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Garcia-de-Hevia');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('García de Hevia');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Boca de Grita');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('José Antonio Páez');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Guasimos');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Guásimos');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Tachira-Independencia');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Independencia');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Juan Germán Roscio');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Román Cárdenas');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Jauregui');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Jáuregui');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Emilio Constantino Guerrero');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Monseñor Miguel Antonio Salas');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Jose-Maria-Vargas');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('José María Vargas');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Junin');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Junín');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('La Petrólea');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Quinimarí');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Bramón');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Tachira-Libertad');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Libertad');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Cipriano Castro');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Manuel Felipe Rugeles');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Tachira-Libertador');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Libertador');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Doradas');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Emeterio Ochoa');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Joaquín de Navay');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Lobatera');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Lobatera');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Constitución');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Michelena');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Michelena');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Panamericano');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Panamericano');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('La Palmita');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Pedro-Maria-Urena');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Pedro María Ureña');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Nueva Arcadia');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Rafael-Urdaneta');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Delicias');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Pecaya');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Samuel-Dario-Maldonado');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Samuel Darío Maldonado');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Boconó');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Hernández');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-San-Cristobal');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('La Concordia');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Juan Bautista');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Pedro María Morantes');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Sebastián');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Dr. Francisco Romero Lobo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Seboruco');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Seboruco');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Tachira-Simon-Rodriguez');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Simón Rodríguez');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Tachira-Sucre');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Sucre');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Eleazar López Contreras');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Pablo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Torbes');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Torbes');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Tachira-Sucre');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Uribante');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Cárdenas');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Juan Pablo Peñalosa');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Potosí');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-San-Judas-Tadeo');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Judas Tadeo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Andres-Bello');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Araguaney');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Jaguito');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('La Esperanza');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Santa Isabel');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Bocono');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Boconó');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Carmen');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Mosquey');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Ayacucho');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Burbusay');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('General Ribas');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Guaramacal');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Vega de Guaramacal');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Monseñor Jáuregui');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Rafael Rangel');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Miguel');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San José');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Trujillo-Bolivar');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Sabana Grande');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Cheregüé');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Granados');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Candelaria');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Arnoldo Gabaldón');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Bolivia');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Carrillo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
	
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Cegarra');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Chejendé');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Manuel Salvador Ulloa');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San José');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Carache');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Carache');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('La Concepción');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Cuicas');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
	
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Panamericana');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Chejendé');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Santa Cruz');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Escuque');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Escuque');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('La Unión');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Santa Rita');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
	
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Sabana Libre');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Jose-Felipe-Marquez-Canizalez');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Socorro');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Los Caprichos');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Antonio José de Sucre');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Juan-Vicente-Campos-Elias');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Campo Elías');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Arnoldo Gabaldón');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-La-Ceiba');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Santa Apolonia');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Progreso');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('La Ceiba');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Tres de Febrero');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Trujillo-Miranda');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Dividive');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Agua Santa');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Agua Caliente');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Cenizo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Valerita');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Monte-Carmelo');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Monte Carmelo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Buena Vista');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Santa María del Horcón');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Motatan');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Motatán');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Baño');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Jalisco');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Pampan');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Pampán');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Flor de Patria');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('La Paz');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Santa Ana');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Pampanito');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Pampanito');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('La Concepción');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Pampanito II');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Rafael-Rangel');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Betijoque');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('José Gregorio Hernández');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('La Pueblita');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Los Cedros');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-San-Rafael-de-Carvajal');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Carvajal');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Campo Alegre');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Antonio Nicolás Briceño');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('José Leonardo Suárez');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Trujillo-Sucre');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Sabana de Mendoza');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Junín');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Valmore Rodríguez');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Paraíso');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Trujillo');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Andrés Linares');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Chiquinquirá');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Cristóbal Mendoza');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Cruz Carrillo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Matriz');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Monseñor Carrillo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Tres Esquinas');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Trujillo-Urdaneta');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Cabimbú');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Jajó');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('La Mesa de Esnujaque');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Santiago');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Tuñame');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('La Quebrada');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Valera');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Juan Ignacio Montilla');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('La Beatriz');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('La Puerta');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Mendoza del Valle de Momboy');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Mercedes Díaz');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Luis');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Vargas');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Caraballeda');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Carayaca');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Carlos Soublette');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Caruao Chuspa');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Catia La Mar');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Junko');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('La Guaira');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Macuto');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Maiquetía');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Naiguatá');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Urimare');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Aristides-Bastidas');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Arístides Bastidas');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Yaracuy-Bolivar');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Bolívar');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Bruzual');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Chivacoa');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Campo Elías');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Cocorote');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Cocorote');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Yaracuy-Independencia');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Independencia');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Jose-Antonio-Paez');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('José Antonio Páez');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-La-Trinidad');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('La Trinidad');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Manuel-Monge');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Manuel Monge');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Nirgua');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Salóm');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Temerla');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Nirgua');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Pena');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Andrés');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Yaritagua');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-San-Felipe');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Javier');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Albarico');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Felipe');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Yaracuy-Sucre');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Sucre');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Urachiche');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Urachiche');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Jose-Joaquin-Veroes');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Guayabo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Farriar');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Almirante-Padilla');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Isla de Toas');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Monagas');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Zulia-Baralt');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Timoteo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('General Urdaneta');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Libertador');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Marcelino Briceño');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Pueblo Nuevo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Manuel Guanipa Matos');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Zulia-Cabimas');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Ambrosio');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Carmen Herrera');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('La Rosa');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Germán Ríos Linares');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Benito');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Rómulo Betancourt');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Jorge Hernández');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Punta Gorda');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Arístides Calvani');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Zulia-Catatumbo');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Encontrados');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Udón Pérez');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Zulia-Colon');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Moralito');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Carlos del Zulia');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Santa Cruz del Zulia');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Santa Bárbara');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Urribarrí');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Francisco-Javier-Pulgar');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Carlos Quevedo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Francisco Javier Pulgar');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Simón Rodríguez');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Guamo-Gavilanes');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Zulia-Paez');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('La Concepción');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San José');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Mariano Parra León');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('José Ramón Yépez');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Sinamaica');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Alta Guajira');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Elías Sánchez Rubio');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Guajira');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Jesus-Enrique-Losada');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Jesús María Semprún');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Barí');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Jesus-Maria-Semprun');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Concepción');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Andrés Bello');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Chiquinquirá');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Carmelo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Potreritos');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Zulia-Lagunillas');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Libertad');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Alonso de Ojeda');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Venezuela');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Eleazar López Contreras');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Campo Lara');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Machiques-de-Perija');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Bartolomé de las Casas');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Libertad');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Río Negro');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San José de Perijá');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Zulia-Mara');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Rafael');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('La Sierrita');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Las Parcelas');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Luis de Vicente');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Monseñor Marcos Sergio Godoy');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Ricaurte');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Tamare');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Zulia-Maracaibo');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Antonio Borjas Romero');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Bolívar');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Cacique Mara');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Carracciolo Parra Pérez');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Cecilio Acosta');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Cristo de Aranza');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Coquivacoa');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Chiquinquirá');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Francisco Eugenio Bustamante');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Idelfonzo Vásquez');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Juana de Ávila');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Luis Hurtado Higuera');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Manuel Dagnino');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Olegario Villalobos');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Raúl Leoni');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Santa Lucía');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Venancio Pulgar');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Isidro');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Zulia-Miranda');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Altagracia');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Faría');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Ana María Campos');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Antonio');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San José');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Rosario-de-Perija');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Donaldo García');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Rosario');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Sixto Zambrano');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Zulia-San-Francisco');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Francisco');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Bajo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Domitila Flores');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Francisco Ochoa');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Los Cortijos');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Marcial Hernández');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Santa-Rita');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Santa Rita');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Mene');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Pedro Lucas Urribarrí');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('José Cenobio Urribarrí');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Zulia-Simon-Bolivar');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Rafael Maria Baralt');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Manuel Manrique');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Rafael Urdaneta');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Zulia-Sucre');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Bobures');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Gibraltar');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Heras');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Monseñor Arturo Álvarez');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Rómulo Gallegos');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Batey');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Valmore-Rodríguez');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Rafael Urdaneta');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('La Victoria');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Raúl Cuenca');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	$c_Municipality = $this->getReference('Municipality-Distrito-Capital-Libertador');
            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Altagracia');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Antímano');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Caricuao');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Catedral');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Coche');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Junquito');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Paraíso');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Recreo');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('El Valle');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('La Candelaria');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('La Pastora');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('La Vega');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Macarao');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Agustín');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Bernardino');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San José');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Juan');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('San Pedro');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Santa Rosalía');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Santa Teresa');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

            $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('Sucre (Catia)');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);

	    $c_parish = new C_Parish();
            $c_parish->setEntity($entity);
            $c_parish->setLabel('23 de enero');
            $c_parish->setC_Municipality($c_Municipality);
                $manager->persist($c_parish);
            
        $manager->flush();
    }

    public function setContainer(ContainerInterface $container = null) {
        $this->container = $container;
    }
    
    public function getOrder() {
        return 6;
    }
}
