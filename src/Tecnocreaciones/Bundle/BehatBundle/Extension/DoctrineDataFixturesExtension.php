<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com.ve
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tecnocreaciones\Bundle\BehatBundle\Extension;

use Behat\Behat\Extension\ExtensionInterface;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;

/**
 * Description of DoctrineDataFixturesExtension
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class DoctrineDataFixturesExtension implements ExtensionInterface
{
    public function getCompilerPasses() {
        return array();
    }

    public function getConfig(\Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition $builder) {
        
    }

    public function load(array $config, \Symfony\Component\DependencyInjection\ContainerBuilder $container) {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');
    }

}
