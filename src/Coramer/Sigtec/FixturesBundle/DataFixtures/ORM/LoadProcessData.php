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
        $process->setDescription('Extrusión compresión');
        $process->setTypeProcess($this->getReference('typeProcess-primario'));
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Extrusión de compuestos')
                ->setTypeProcess($this->getReference('typeProcess-primario'))
                ->setModelMachinery($this->getReference('extrusion_compound'))
                ;
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Extrusión de fibras');
        $process->setTypeProcess($this->getReference('typeProcess-primario'));
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Extrusión de flejes');
        $process->setTypeProcess($this->getReference('typeProcess-primario'));
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Extrusión de lamina');
        $process->setTypeProcess($this->getReference('typeProcess-primario'));
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Extrusión de monofilamentos');
        $process->setTypeProcess($this->getReference('typeProcess-primario'));
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Extrusión de película plana');
        $process->setTypeProcess($this->getReference('typeProcess-primario'));
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Extrusión de película tubular');
        $process->setTypeProcess($this->getReference('typeProcess-primario'));
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Extrusión de perfiles grandes');
        $process->setTypeProcess($this->getReference('typeProcess-primario'));
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Extrusión de perfiles pequeños');
        $process->setTypeProcess($this->getReference('typeProcess-primario'));
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Extrusión de rafia');
        $process->setTypeProcess($this->getReference('typeProcess-primario'));
            $manager->persist($process);
            
        $process = new Process();
        $process->setDescription('Extrusión de tuberias');
        $process->setTypeProcess($this->getReference('typeProcess-primario'));
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
