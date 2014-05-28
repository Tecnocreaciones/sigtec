<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Coramer\Sigtec\CompanyBundle\Event;

use Symfony\Component\EventDispatcher\Event;

/**
 * Evento de compañia
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class CompanyEvent extends Event
{
    /**
     * @var \Coramer\Sigtec\CompanyBundle\Entity\Company
     */
    private $company;
    
    function __construct(\Coramer\Sigtec\CompanyBundle\Entity\Company $company)
    {
        $this->company = $company;
    }
    
    /**
     * @return \Coramer\Sigtec\CompanyBundle\Entity\Company
     */
    public function getCompany() {
        return $this->company;
    }
}
