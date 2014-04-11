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

use Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Product;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Description of LoadProductData
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class LoadProductData implements FixtureInterface
{
    public function load(ObjectManager $manager) {
        $product = new Product();
        $product->setDescription('Accesorios de plomería');
            $manager->persist($product);
            
        $manager->flush();
    }
}
