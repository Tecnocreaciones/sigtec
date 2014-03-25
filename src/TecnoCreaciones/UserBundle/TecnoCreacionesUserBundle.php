<?php

namespace TecnoCreaciones\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class TecnoCreacionesUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
