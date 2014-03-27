<?php

namespace Tecnocreaciones\Bundle\InstallBundle\DependencyInjection;

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
        $rootNode = $treeBuilder->root('tecnocreaciones_install');
        $rootNode
                ->children()
                    ->scalarNode('user_class')->isRequired()->cannotBeEmpty()->end()
                    ->arrayNode('credentials')
                        ->addDefaultsIfNotSet()
                        ->children()
                            ->scalarNode('username')->defaultValue('admin')->cannotBeEmpty()->end()
                            ->scalarNode('password')->defaultValue('12345')->cannotBeEmpty()->end()
                            ->scalarNode('email')->defaultValue('admin@example.local')->cannotBeEmpty()->end()
                            ->scalarNode('role')->defaultValue('ROLE_SUPER_ADMIN')->cannotBeEmpty()->end()
                        ->end()
                    ->end()
                ;
        return $treeBuilder;
    }
}
