<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com.ve
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Coramer\Sigtec\CoreBundle\Twig\Extension;

/**
 * Description of CoreExtension
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com.ve>
 */
class CoreExtension extends \Twig_Extension
{
    
    public function getFilters() {
        return array(
            new \Twig_SimpleFilter('hash', array($this, 'generateHash'), array('is_safe' => array('html'))),
        );
    }
    
    function generateHash($str) {
        return md5($str);
    }
    
    public function getName() {
        return 'sigtec_core_extension';
    }
}
