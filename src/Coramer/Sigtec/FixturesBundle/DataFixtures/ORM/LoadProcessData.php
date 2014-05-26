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
        $process->setDescription('Calandrado')
                ->setTypeProcess($this->getReference('typeProcess-primario'))
                ->setModelMachinery($this->getReference('calendering'))
                ;
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
        $process->setDescription('Extrusión otros')
                ->setTypeProcess($this->getReference('typeProcess-primario'))
                ->setModelMachinery($this->getReference('extrusion_other'))
                ;
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Extrusión soplado')
                ->setTypeProcess($this->getReference('typeProcess-primario'))
                ->setModelMachinery($this->getReference('extrusion_blow'))
                ;
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Extrusión termoformado')
                ->setTypeProcess($this->getReference('typeProcess-primario'))
                ->setModelMachinery($this->getReference('thermoforming_extrusion'))
                ;
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Formulado');
        $process->setTypeProcess($this->getReference('typeProcess-primario'));
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Inyección')
                ->setTypeProcess($this->getReference('typeProcess-primario'))
                ->setModelMachinery($this->getReference('injection'))
                ;
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Inyección soplado')
                ->setTypeProcess($this->getReference('typeProcess-primario'))
                ->setModelMachinery($this->getReference('injection_blow'))
                ;
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Recubrimiento de perfiles')
                ->setTypeProcess($this->getReference('typeProcess-primario'))
                ->setModelMachinery($this->getReference('coating_profiles'))
                ;
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Recubrimiento por Extrusión')
                ->setTypeProcess($this->getReference('typeProcess-primario'))
                ->setModelMachinery($this->getReference('coating_extrusion'))
                ;
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Rotomoldeo')
                ->setTypeProcess($this->getReference('typeProcess-primario'))
                ->setModelMachinery($this->getReference('rotomolding'))
                ;
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Soplado')
                ->setTypeProcess($this->getReference('typeProcess-primario'))
                ->setModelMachinery($this->getReference('blown'))
                ;
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Termoformado')
                ->setTypeProcess($this->getReference('typeProcess-primario'))
                ->setModelMachinery($this->getReference('thermoformed'))
                ;
            $manager->persist($process);
            
        //typeProcess-secundario
        $process = new Process();
        $process->setDescription('Corte o refilado')
                ->setTypeProcess($this->getReference('typeProcess-secundario'))
                ->setModelMachinery($this->getReference('cutting_or_trimming'))
                ;
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Etiquetado');
        $process->setTypeProcess($this->getReference('typeProcess-secundario'));
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Impresión')
                ->setTypeProcess($this->getReference('typeProcess-secundario'))
                ->setModelMachinery($this->getReference('print'))
                ;
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Laminación')
                ->setTypeProcess($this->getReference('typeProcess-secundario'))
                ->setModelMachinery($this->getReference('lamination'))
                ;
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Sellado')
                ->setTypeProcess($this->getReference('typeProcess-secundario'))
                ->setModelMachinery($this->getReference('sealing'))
                ;
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Tejeduría')
                ->setTypeProcess($this->getReference('typeProcess-secundario'))
                ->setModelMachinery($this->getReference('weaving'))
                ;
            $manager->persist($process);
            
        //typeProcess-preparacion
        $process = new Process();
        $process->setDescription('Mezclado')
                ->setTypeProcess($this->getReference('typeProcess-preparacion'))
                ->setModelMachinery($this->getReference('mixed'))
                ;
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Peletizado')
                ->setTypeProcess($this->getReference('typeProcess-preparacion'))
                ->setModelMachinery($this->getReference('pelleted'))
                ;
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Pulverizado')
                ->setTypeProcess($this->getReference('typeProcess-preparacion'))
                ->setModelMachinery($this->getReference('pulverized'))
                ;
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Recuperado');
        $process->setTypeProcess($this->getReference('typeProcess-preparacion'));
            $manager->persist($process);


        $manager->flush();
    }
}
