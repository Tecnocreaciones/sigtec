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
use Tecnocreaciones\Vzla\EntityBundle\Entity\State;

/**
 * Data de los estados
 *
 * @see https://github.com/marydn/venezuela-sql/blob/master/venezuela.sql
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class StateFixture extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager) {
            $countryVe = $this->getReference('Country-VE');
            $state = new State();
            
            $state
                    ->setDescription('Amazonas')
                    ->setCode('VE-X')
                    ->setRegion($this->getReference('Region-Guayana'))
                    ->setCountry($countryVe);
                $manager->persist($state);
            $this->addReference('State-Amazonas', $state);

            $state = new State();
            
            $state->setDescription('Anzoátegui')
                  ->setRegion($this->getReference('Region-Nor-Oriental'))
                  ->setCode('VE-B')
                  ->setCountry($countryVe);
                $manager->persist($state);
            $this->addReference('State-Anzoategui', $state);

            $state = new State();
            
            $state->setDescription('Apure')
                  ->setRegion($this->getReference('Region-Nor-Oriental'))
                  ->setCode('VE-C')
                  ->setCountry($countryVe);
                $manager->persist($state);
            $this->addReference('State-Apure', $state);

            $state = new State();
            
            $state->setDescription('Aragua')
                  ->setCode('VE-D')
                  ->setRegion($this->getReference('Region-Los-Llanos'))
                  ->setCountry($countryVe);
                $manager->persist($state);
            $this->addReference('State-Aragua', $state);

            $state = new State();
            
            $state->setDescription('Barinas')
                  ->setCode('VE-E')
                  ->setRegion($this->getReference('Region-Los-Llanos'))
                  ->setCountry($countryVe);
                $manager->persist($state);
            $this->addReference('State-Barinas', $state);

            $state = new State();
            
            $state->setDescription('Bolívar')
                  ->setCode('VE-F')
                  ->setRegion($this->getReference('Region-Guayana'))
                  ->setCountry($countryVe);
                $manager->persist($state);
            $this->addReference('State-Bolivar', $state);

            $state = new State();
            
            $state->setDescription('Carabobo')
                  ->setCode('VE-G')
                  ->setRegion($this->getReference('Region-Central'))
                  ->setCountry($countryVe);
                $manager->persist($state);
            $this->addReference('State-Carabobo', $state);

            $state = new State();
            
            $state->setDescription('Cojedes')
                  ->setCode('VE-H')
                  ->setRegion($this->getReference('Region-Central'))
                  ->setCountry($countryVe);
                $manager->persist($state);
            $this->addReference('State-Cojedes', $state);

            $state = new State();
            
            $state->setDescription('Delta Amacuro')
                  ->setCode('VE-Y')
                  ->setRegion($this->getReference('Region-Guayana'))
                  ->setCountry($countryVe);
                $manager->persist($state);
            $this->addReference('State-Delta-Amacuro', $state);

            $state = new State();
            
            $state->setDescription('Falcón')
                  ->setCode('VE-I')
                  ->setRegion($this->getReference('Region-Centro-Occidental'))
                  ->setCountry($countryVe);
                $manager->persist($state);
            $this->addReference('State-Falcon', $state);

            $state = new State();
            
            $state->setDescription('Guárico')
                  ->setCode('VE-J')
                  ->setRegion($this->getReference('Region-Los-Llanos'))
                  ->setCountry($countryVe);
                $manager->persist($state);
            $this->addReference('State-Guarico', $state);

            $state = new State();
            
            $state->setDescription('Lara')
                  ->setCode('VE-K')
                  ->setRegion($this->getReference('Region-Centro-Occidental'))
                  ->setCountry($countryVe);
                $manager->persist($state);
            $this->addReference('State-Lara', $state);

            $state = new State();
            
            $state->setDescription('Mérida')
                  ->setCode('VE-L')
                  ->setRegion($this->getReference('Region-Los-Andes'))
                  ->setCountry($countryVe);
                $manager->persist($state);
            $this->addReference('State-Merida', $state);

            $state = new State();
            
            $state->setDescription('Miranda')
                  ->setCode('VE-M')
                  ->setRegion($this->getReference('Region-Capital'))
                  ->setCountry($countryVe);
                $manager->persist($state);
            $this->addReference('State-Miranda', $state);

            $state = new State();
            
            $state->setDescription('Monagas')
                  ->setCode('VE-N')
                  ->setRegion($this->getReference('Region-Nor-Oriental'))
                  ->setCountry($countryVe);
                $manager->persist($state);
            $this->addReference('State-Monagas', $state);

            $state = new State();
            
            $state->setDescription('Nueva Esparta')
                  ->setCode('VE-O')
                  ->setRegion($this->getReference('Region-Insular'))
                  ->setCountry($countryVe);
                $manager->persist($state);
            $this->addReference('State-Nueva-Esparta', $state);

            $state = new State();
            
            $state->setDescription('Portuguesa')
                  ->setCode('VE-P')
                  ->setRegion($this->getReference('Region-Los-Llanos'))
                  ->setCountry($countryVe);
                $manager->persist($state);
            $this->addReference('State-Portuguesa', $state);

            $state = new State();
            
            $state->setDescription('Sucre')
                  ->setCode('VE-R')
                  ->setRegion($this->getReference('Region-Nor-Oriental'))
                  ->setCountry($countryVe);
                $manager->persist($state);
            $this->addReference('State-Sucre', $state);

            $state = new State();
            
            $state->setDescription('Táchira')
                  ->setCode('VE-S')
                  ->setRegion($this->getReference('Region-Los-Andes'))
                  ->setCountry($countryVe);
                $manager->persist($state);
            $this->addReference('State-Tachira', $state);

            $state = new State();
            
            $state->setDescription('Trujillo')
                  ->setCode('VE-T')
                  ->setRegion($this->getReference('Region-Los-Andes'))
                  ->setCountry($countryVe);
                $manager->persist($state);
            $this->addReference('State-Trujillo', $state);

            $state = new State();
            
            $state->setDescription('Vargas')
                  ->setCode('VE-W')
                  ->setRegion($this->getReference('Region-Capital'))
                  ->setCountry($countryVe);
                $manager->persist($state);
            $this->addReference('State-Vargas', $state);

            $state = new State();
            
            $state->setDescription('Yaracuy')
                  ->setCode('VE-U')
                  ->setRegion($this->getReference('Region-Centro-Occidental'))
                  ->setCountry($countryVe);
                $manager->persist($state);
            $this->addReference('State-Yaracuy', $state);

            $state = new State();
            
            $state->setDescription('Zulia')
                  ->setCode('VE-V')
                  ->setRegion($this->getReference('Region-Zuliana'))
                  ->setCountry($countryVe);
                $manager->persist($state);
            $this->addReference('State-Zulia', $state);

            $state = new State();
            
            $state->setDescription('Distrito Capital')
                  ->setCode('VE-A')
                  ->setRegion($this->getReference('Region-Capital'))
                  ->setCountry($countryVe); 
                $manager->persist($state);
            $this->addReference('State-Distrito-Capital', $state);

            $state = new State();
            
            $state->setDescription('Dependencias Federales')
                  ->setCode('VE-Z')
                  ->setCountry($countryVe);
                $manager->persist($state);
            $this->addReference('State-Dependencias-Federales', $state);
                
        $manager->flush();
    }
    
    public function getOrder() {
        return 2;
    }
}