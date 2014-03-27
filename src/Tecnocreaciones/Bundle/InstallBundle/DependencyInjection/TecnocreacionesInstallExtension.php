<?php

namespace Tecnocreaciones\Bundle\InstallBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class TecnocreacionesInstallExtension extends Extension
{
    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);
        
        $container->setParameter('tec_install.model.user.class', $config['user_class']);
        $container->setParameter('tec_install.credentials.username', $config['credentials']['username']);
        $container->setParameter('tec_install.credentials.password', $config['credentials']['password']);
        $container->setParameter('tec_install.credentials.email', $config['credentials']['email']);
        $container->setParameter('tec_install.credentials.role', $config['credentials']['role']);
        
        $loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');
    }
}
