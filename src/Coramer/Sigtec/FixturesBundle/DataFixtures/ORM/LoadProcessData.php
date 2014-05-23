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

use Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Process;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Description of LoadProcessData
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class LoadProcessData extends AbstractFixture implements FixtureInterface,OrderedFixtureInterface
{
    public function getOrder() {
        return 3;
    }

    public function load(ObjectManager $manager)
    {
        //typeProcess-primario
        $process = new Process();
        $process->setDescription('Calandrado');
        $process->setTypeProcess($this->getReference('typeProcess-primario'));
            $manager->persist($process);
            
        $process = new Process();
        $process
                ->setDescription('Extrusión compresión')
                ->setTypeProcess($this->getReference('typeProcess-primario'))
                ->setModelMachinery($this->getReference('extrusion_compression'));
                ;
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Extrusión de compuestos')
                ->setTypeProcess($this->getReference('typeProcess-primario'))
                ->setModelMachinery($this->getReference('extrusion_compound'))
                ;
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Extrusión de fibras')
                ->setTypeProcess($this->getReference('typeProcess-primario'))
                ->setModelMachinery($this->getReference('fiber_extrusion'));
                ;
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Extrusión de flejes')
                ->setTypeProcess($this->getReference('typeProcess-primario'))
                ->setModelMachinery($this->getReference('strapping_extrusion'))
                ;
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Extrusión de lamina')
                ->setTypeProcess($this->getReference('typeProcess-primario'))
                ->setModelMachinery($this->getReference('sheet_extrusion'))
                ;
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Extrusión de monofilamentos');
        $process->setTypeProcess($this->getReference('typeProcess-primario'));
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Extrusión de película plana')
                ->setTypeProcess($this->getReference('typeProcess-primario'))
                ->setModelMachinery($this->getReference('flat_film_extrusion'))
                ;
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Extrusión de película tubular')
                ->setTypeProcess($this->getReference('typeProcess-primario'))
                ->setModelMachinery($this->getReference('tubular_film_extrusion'))
                ;
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Extrusión de perfiles grandes')
                ->setTypeProcess($this->getReference('typeProcess-primario'))
                ->setModelMachinery($this->getReference('large_extrusion_profiles'))
                ;
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Extrusión de perfiles pequeños')
                ->setTypeProcess($this->getReference('typeProcess-primario'))
                ->setModelMachinery($this->getReference('small_annular_extrusion_profiles'))
                ;
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Extrusión de rafia')
                ->setTypeProcess($this->getReference('typeProcess-primario'))
                ->setModelMachinery($this->getReference('extrusion_raffia'))
                ;
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Extrusión de tuberías')
                ->setTypeProcess($this->getReference('typeProcess-primario'))
                ->setModelMachinery($this->getReference('pipe_extrusion'))
                ;
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Extrusión otros');
        $process->setTypeProcess($this->getReference('typeProcess-primario'));
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Extrusión soplado');
        $process->setTypeProcess($this->getReference('typeProcess-primario'));
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Extrusión termoformado');
        $process->setTypeProcess($this->getReference('typeProcess-primario'));
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Formulado');
        $process->setTypeProcess($this->getReference('typeProcess-primario'));
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Inyección');
        $process->setTypeProcess($this->getReference('typeProcess-primario'));
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Inyección soplado');
        $process->setTypeProcess($this->getReference('typeProcess-primario'));
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Recubrimiento de perfiles');
        $process->setTypeProcess($this->getReference('typeProcess-primario'));
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Recubrimiento por Extrusión');
        $process->setTypeProcess($this->getReference('typeProcess-primario'));
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Rotomoldeo');
        $process->setTypeProcess($this->getReference('typeProcess-primario'));
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Soplado');
        $process->setTypeProcess($this->getReference('typeProcess-primario'));
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Termoformado');
        $process->setTypeProcess($this->getReference('typeProcess-primario'));
            $manager->persist($process);
            
        //typeProcess-secundario
        $process = new Process();
        $process->setDescription('Corte o refilado');
        $process->setTypeProcess($this->getReference('typeProcess-secundario'));
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Etiquetado');
        $process->setTypeProcess($this->getReference('typeProcess-secundario'));
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Impresión');
        $process->setTypeProcess($this->getReference('typeProcess-secundario'));
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Laminación');
        $process->setTypeProcess($this->getReference('typeProcess-secundario'));
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Sellado');
        $process->setTypeProcess($this->getReference('typeProcess-secundario'));
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Tejeduría');
        $process->setTypeProcess($this->getReference('typeProcess-secundario'));
            $manager->persist($process);
            
        //typeProcess-preparacion
        $process = new Process();
        $process->setDescription('Mezclado');
        $process->setTypeProcess($this->getReference('typeProcess-preparacion'));
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Peletizado');
        $process->setTypeProcess($this->getReference('typeProcess-preparacion'));
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Pulverizado');
        $process->setTypeProcess($this->getReference('typeProcess-preparacion'));
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Recuperado');
        $process->setTypeProcess($this->getReference('typeProcess-preparacion'));
            $manager->persist($process);


        $manager->flush();
    }
}
