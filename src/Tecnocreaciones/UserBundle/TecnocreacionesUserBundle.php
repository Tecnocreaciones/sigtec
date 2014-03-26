<?php

namespace Tecnocreaciones\UserBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Tecnocreaciones\UserBundle\DependencyInjection\Compiler\ValidationPass;

class TecnocreacionesUserBundle extends Bundle
{
    public function build(ContainerBuilder $container) {
        parent::build($container);
        $container->addCompilerPass(new ValidationPass());
    }
    
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
