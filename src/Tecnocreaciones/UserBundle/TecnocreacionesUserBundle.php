<?php

namespace Tecnocreaciones\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class TecnocreacionesUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
