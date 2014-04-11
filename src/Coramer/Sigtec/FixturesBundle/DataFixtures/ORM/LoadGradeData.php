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

use Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Grade;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Description of LoadGradeData
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class LoadGradeData extends AbstractFixture implements FixtureInterface,  OrderedFixtureInterface
{
    public function getOrder() {
        return 2;
    }

    public function load(ObjectManager $manager) {
        $grade = new Grade();
        $grade->setDescription('115');
        $grade->setResin($this->getReference('resin-PVC'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('140');
        $grade->setResin($this->getReference('resin-PVC'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('145');
        $grade->setResin($this->getReference('resin-PVC'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('150');
        $grade->setResin($this->getReference('resin-PVC'));
            $manager->persist($grade);
        
        //resin-PP
        $grade = new Grade();
        $grade->setDescription('B325');
        $grade->setResin($this->getReference('resin-PP'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('B328');
        $grade->setResin($this->getReference('resin-PP'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('F402');
        $grade->setResin($this->getReference('resin-PP'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('F403');
        $grade->setResin($this->getReference('resin-PP'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('F404');
        $grade->setResin($this->getReference('resin-PP'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('F407');
        $grade->setResin($this->getReference('resin-PP'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('F409');
        $grade->setResin($this->getReference('resin-PP'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('F502');
        $grade->setResin($this->getReference('resin-PP'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('F600');
        $grade->setResin($this->getReference('resin-PP'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('F605');
        $grade->setResin($this->getReference('resin-PP'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('F651');
        $grade->setResin($this->getReference('resin-PP'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('J300');
        $grade->setResin($this->getReference('resin-PP'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('J400');
        $grade->setResin($this->getReference('resin-PP'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('J440');
        $grade->setResin($this->getReference('resin-PP'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('J442');
        $grade->setResin($this->getReference('resin-PP'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('J500');
        $grade->setResin($this->getReference('resin-PP'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('J600');
        $grade->setResin($this->getReference('resin-PP'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('J643');
        $grade->setResin($this->getReference('resin-PP'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('J700');
        $grade->setResin($this->getReference('resin-PP'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('J705');
        $grade->setResin($this->getReference('resin-PP'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('J744');
        $grade->setResin($this->getReference('resin-PP'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('J750');
        $grade->setResin($this->getReference('resin-PP'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('J758');
        $grade->setResin($this->getReference('resin-PP'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('J800');
        $grade->setResin($this->getReference('resin-PP'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('J808');
        $grade->setResin($this->getReference('resin-PP'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('J844');
        $grade->setResin($this->getReference('resin-PP'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('J846');
        $grade->setResin($this->getReference('resin-PP'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('J858');
        $grade->setResin($this->getReference('resin-PP'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('J901');
        $grade->setResin($this->getReference('resin-PP'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('J905');
        $grade->setResin($this->getReference('resin-PP'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('S701');
        $grade->setResin($this->getReference('resin-PP'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('S801');
        $grade->setResin($this->getReference('resin-PP'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('S900');
        $grade->setResin($this->getReference('resin-PP'));
            $manager->persist($grade);
        
        //resin-PE
        $grade = new Grade();
        $grade->setDescription('VENELENE 11E1');
        $grade->setResin($this->getReference('resin-PE'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('VENELENE 11PG1');
        $grade->setResin($this->getReference('resin-PE'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('VENELENE 11PG4');
        $grade->setResin($this->getReference('resin-PE'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('VENELENE 11U4');
        $grade->setResin($this->getReference('resin-PE'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('VENELENE 2111');
        $grade->setResin($this->getReference('resin-PE'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('VENELENE 2213');
        $grade->setResin($this->getReference('resin-PE'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('VENELENE 2706');
        $grade->setResin($this->getReference('resin-PE'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('VENELENE 2707AP');
        $grade->setResin($this->getReference('resin-PE'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('VENELENE 2710');
        $grade->setResin($this->getReference('resin-PE'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('VENELENE 2811');
        $grade->setResin($this->getReference('resin-PE'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('VENELENE 2815');
        $grade->setResin($this->getReference('resin-PE'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('VENELENE 2908APUV');
        $grade->setResin($this->getReference('resin-PE'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('VENELENE 3200B');
        $grade->setResin($this->getReference('resin-PE'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('VENELENE 6100M');
        $grade->setResin($this->getReference('resin-PE'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('VENELENE 6200B');
        $grade->setResin($this->getReference('resin-PE'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('VENELENE 7000F');
        $grade->setResin($this->getReference('resin-PE'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('VENELENE 7700B');
        $grade->setResin($this->getReference('resin-PE'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('VENELENE 7700M');
        $grade->setResin($this->getReference('resin-PE'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('VENELENE 8405UV8D');
        $grade->setResin($this->getReference('resin-PE'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('VENELENE 8407APUV');
        $grade->setResin($this->getReference('resin-PE'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('VENELENE 8504UV8D');
        $grade->setResin($this->getReference('resin-PE'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('VENELENE FA0238');
        $grade->setResin($this->getReference('resin-PE'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('VENELENE FA0240');
        $grade->setResin($this->getReference('resin-PE'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('VENELENE FB3003');
        $grade->setResin($this->getReference('resin-PE'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('VENELENE FB7000');
        $grade->setResin($this->getReference('resin-PE'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('VENELENE FD0325');
        $grade->setResin($this->getReference('resin-PE'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('VENELENE FD0348');
        $grade->setResin($this->getReference('resin-PE'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('VENELENE LA0903');
        $grade->setResin($this->getReference('resin-PE'));
            $manager->persist($grade);
            
        $grade = new Grade();
        $grade->setDescription('VENELENE MA7007');
        $grade->setResin($this->getReference('resin-PE'));
            $manager->persist($grade);
            
        $manager->flush();
    }

}
