<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Coramer\Sigtec\FixturesBundle\DataFixtures\ORM\ReportTechnical\Properties\DescriptionAreaCompany\DetailProductStorage;

use Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\DetailProductStorage\Storage;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Description of LoadStorageData
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class LoadStorageData implements FixtureInterface 
{
    public function load(ObjectManager $manager) {
        
        $storage = new Storage();
        $storage
                ->setDescription('Intemperie')
                ->setHelp('En caso que el material esté a la imtemperie o en un almacén techado sin paredes laterales.')
                ;
            $manager->persist($storage);
            
        $storage = new Storage();
        $storage
                ->setDescription('Confinado')
                ->setHelp('El material está localizado en un almacén con techo y paredes.')
                ;
            $manager->persist($storage);
        
        $manager->flush();
    }
}