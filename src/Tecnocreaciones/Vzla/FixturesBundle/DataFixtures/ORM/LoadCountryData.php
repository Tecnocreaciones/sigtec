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
use Doctrine\Common\Persistence\ObjectManager;
use SIEMPRE\Core\Entity\C_Pays;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Description of PaysVE
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com.ve>
 */
class PaysFixture extends AbstractFixture implements ContainerAwareInterface {
    protected $container;
    
    public function load(ObjectManager $manager) {
        $entity = $this->container->get('entity');
        
        $c_PaysVE = new C_Pays();
        $c_PaysVE->setCode('VE');
        $c_PaysVE->setLibelle('República Bolivariana de Venezuela');
        $c_PaysVE->setEntity($entity);
        
        $this->addReference('C_Pays-VE', $c_PaysVE);
        
        $manager->persist($c_PaysVE);
        
        $manager->flush();
    }

    public function setContainer(ContainerInterface $container = null) {
        $this->container = $container;
    }

}
