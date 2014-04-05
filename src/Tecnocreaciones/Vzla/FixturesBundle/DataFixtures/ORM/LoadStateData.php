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
use SIEMPRE\Core\Entity\C_State;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Datos de los estados
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com.ve>
 */
class StateFixture extends AbstractFixture implements ContainerAwareInterface,  OrderedFixtureInterface {
    protected $container;

    public function load(ObjectManager $manager) {
        $entity = $this->container->get('entity');
        
            $c_State = new C_State();
            $c_State->setEntity($entity);
            $c_State->setNom('Amazonas');
            $c_State->setCodeDepartement('VE-X'); 
            $c_State->setC_Regions($this->getReference('Regions-Guayana'));
                $manager->persist($c_State);
            $this->addReference('State-Amazonas', $c_State);

            $c_State = new C_State();
            $c_State->setEntity($entity);
            $c_State->setNom('Anzoátegui');
            $c_State->setC_Regions($this->getReference('Regions-Nor-Oriental'));
            $c_State->setCodeDepartement('VE-B');
                $manager->persist($c_State);
            $this->addReference('State-Anzoategui', $c_State);

            $c_State = new C_State();
            $c_State->setEntity($entity);
            $c_State->setNom('Apure');
            $c_State->setC_Regions($this->getReference('Regions-Nor-Oriental'));
            $c_State->setCodeDepartement('VE-C');
                $manager->persist($c_State);
            $this->addReference('State-Apure', $c_State);

            $c_State = new C_State();
            $c_State->setEntity($entity);
            $c_State->setNom('Aragua');
            $c_State->setCodeDepartement('VE-D'); 
            $c_State->setC_Regions($this->getReference('Regions-Los-Llanos'));
                $manager->persist($c_State);
            $this->addReference('State-Aragua', $c_State);

            $c_State = new C_State();
            $c_State->setEntity($entity);
            $c_State->setNom('Barinas');
            $c_State->setCodeDepartement('VE-E'); 
            $c_State->setC_Regions($this->getReference('Regions-Los-Llanos'));
                $manager->persist($c_State);
            $this->addReference('State-Barinas', $c_State);

            $c_State = new C_State();
            $c_State->setEntity($entity);
            $c_State->setNom('Bolívar');
            $c_State->setCodeDepartement('VE-F'); 
            $c_State->setC_Regions($this->getReference('Regions-Guayana'));
                $manager->persist($c_State);
            $this->addReference('State-Bolivar', $c_State);

            $c_State = new C_State();
            $c_State->setEntity($entity);
            $c_State->setNom('Carabobo');
            $c_State->setCodeDepartement('VE-G'); 
            $c_State->setC_Regions($this->getReference('Regions-Central'));
                $manager->persist($c_State);
            $this->addReference('State-Carabobo', $c_State);

            $c_State = new C_State();
            $c_State->setEntity($entity);
            $c_State->setNom('Cojedes');
            $c_State->setCodeDepartement('VE-H'); 
            $c_State->setC_Regions($this->getReference('Regions-Central'));
                $manager->persist($c_State);
            $this->addReference('State-Cojedes', $c_State);

            $c_State = new C_State();
            $c_State->setEntity($entity);
            $c_State->setNom('Delta Amacuro');
            $c_State->setCodeDepartement('VE-Y'); 
            $c_State->setC_Regions($this->getReference('Regions-Guayana'));
                $manager->persist($c_State);
            $this->addReference('State-Delta-Amacuro', $c_State);

            $c_State = new C_State();
            $c_State->setEntity($entity);
            $c_State->setNom('Falcón');
            $c_State->setCodeDepartement('VE-I'); 
            $c_State->setC_Regions($this->getReference('Regions-Centro-Occidental'));
                $manager->persist($c_State);
            $this->addReference('State-Falcon', $c_State);

            $c_State = new C_State();
            $c_State->setEntity($entity);
            $c_State->setNom('Guárico');
            $c_State->setCodeDepartement('VE-J'); 
            $c_State->setC_Regions($this->getReference('Regions-Los-Llanos'));
                $manager->persist($c_State);
            $this->addReference('State-Guarico', $c_State);

            $c_State = new C_State();
            $c_State->setEntity($entity);
            $c_State->setNom('Lara');
            $c_State->setCodeDepartement('VE-K'); 
            $c_State->setC_Regions($this->getReference('Regions-Centro-Occidental'));
                $manager->persist($c_State);
            $this->addReference('State-Lara', $c_State);

            $c_State = new C_State();
            $c_State->setEntity($entity);
            $c_State->setNom('Mérida');
            $c_State->setCodeDepartement('VE-L'); 
            $c_State->setC_Regions($this->getReference('Regions-Los-Andes'));
                $manager->persist($c_State);
            $this->addReference('State-Merida', $c_State);

            $c_State = new C_State();
            $c_State->setEntity($entity);
            $c_State->setNom('Miranda');
            $c_State->setCodeDepartement('VE-M'); 
            $c_State->setC_Regions($this->getReference('Regions-Capital'));
                $manager->persist($c_State);
            $this->addReference('State-Miranda', $c_State);

            $c_State = new C_State();
            $c_State->setEntity($entity);
            $c_State->setNom('Monagas');
            $c_State->setCodeDepartement('VE-N'); 
            $c_State->setC_Regions($this->getReference('Regions-Nor-Oriental'));
                $manager->persist($c_State);
            $this->addReference('State-Monagas', $c_State);

            $c_State = new C_State();
            $c_State->setEntity($entity);
            $c_State->setNom('Nueva Esparta');
            $c_State->setCodeDepartement('VE-O'); 
            //  Región Insular
                $manager->persist($c_State);
            $this->addReference('State-Nueva-Esparta', $c_State);

            $c_State = new C_State();
            $c_State->setEntity($entity);
            $c_State->setNom('Portuguesa');
            $c_State->setCodeDepartement('VE-P'); 
            $c_State->setC_Regions($this->getReference('Regions-Los-Llanos'));
                $manager->persist($c_State);
            $this->addReference('State-Portuguesa', $c_State);

            $c_State = new C_State();
            $c_State->setEntity($entity);
            $c_State->setNom('Sucre');
            $c_State->setCodeDepartement('VE-R'); 
            $c_State->setC_Regions($this->getReference('Regions-Nor-Oriental'));
                $manager->persist($c_State);
            $this->addReference('State-Sucre', $c_State);

            $c_State = new C_State();
            $c_State->setEntity($entity);
            $c_State->setNom('Táchira');
            $c_State->setCodeDepartement('VE-S'); 
            $c_State->setC_Regions($this->getReference('Regions-Los-Andes'));
                $manager->persist($c_State);
            $this->addReference('State-Tachira', $c_State);

            $c_State = new C_State();
            $c_State->setEntity($entity);
            $c_State->setNom('Trujillo');
            $c_State->setCodeDepartement('VE-T'); 
            $c_State->setC_Regions($this->getReference('Regions-Los-Andes'));
                $manager->persist($c_State);
            $this->addReference('State-Trujillo', $c_State);

            $c_State = new C_State();
            $c_State->setEntity($entity);
            $c_State->setNom('Vargas');
            $c_State->setCodeDepartement('VE-W');
            $c_State->setC_Regions($this->getReference('Regions-Capital'));
                $manager->persist($c_State);
            $this->addReference('State-Vargas', $c_State);

            $c_State = new C_State();
            $c_State->setEntity($entity);
            $c_State->setNom('Yaracuy');
            $c_State->setCodeDepartement('VE-U'); 
            $c_State->setC_Regions($this->getReference('Regions-Centro-Occidental'));
                $manager->persist($c_State);
            $this->addReference('State-Yaracuy', $c_State);

            $c_State = new C_State();
            $c_State->setEntity($entity);
            $c_State->setNom('Zulia');
            $c_State->setCodeDepartement('VE-V'); 
            $c_State->setC_Regions($this->getReference('Regions-Zuliana'));
                $manager->persist($c_State);
            $this->addReference('State-Zulia', $c_State);

            $c_State = new C_State();
            $c_State->setEntity($entity);
            $c_State->setNom('Distrito Capital');
            $c_State->setCodeDepartement('VE-A'); 
            $c_State->setC_Regions($this->getReference('Regions-Capital'));
                $manager->persist($c_State);
            $this->addReference('State-Distrito-Capital', $c_State);

            $c_State = new C_State();
            $c_State->setEntity($entity);
            $c_State->setNom('Dependencias Federales');
            $c_State->setCodeDepartement('VE-Z');
                $manager->persist($c_State);
            $this->addReference('State-Dependencias-Federales', $c_State);
                
        $manager->flush();
    }
    
    public function getOrder() {
        return 4;
    }

    public function setContainer(ContainerInterface $container = null) {
        $this->container = $container;
    }

}