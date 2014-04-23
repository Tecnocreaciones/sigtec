<?php

namespace Tecnocreaciones\Vzla\GovernmentBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('tecnocreaciones_vzla_government');
        
        $rootNode
                ->children()
                    ->arrayNode('template')
                        ->addDefaultsIfNotSet()
                        ->children()
                            ->arrayNode('developer')
                                ->addDefaultsIfNotSet()
                                ->children()
                                    ->scalarNode('menu')->defaultValue('Tecnocreaciones\Vzla\GovernmentBundle\Menu\Template\Developer\BackendMenuBuilder')->cannotBeEmpty()->end()
                                    ->scalarNode('logo')->defaultValue('bundles/tecnocreacionesvzlagovernment/template/developer/img/favicons/logo.png')->cannotBeEmpty()->end()
                                ->end()
                        ->end()
                    ->end()
                ->end();

        return $treeBuilder;
    }
}
