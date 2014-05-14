<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Coramer\Sigtec\CompanyBundle\EventListener;

/**
 * Description of Events
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
final class Events
{
    const PLANT_ADD = 'sigtec.company.plant.add';
    const PLANT_UPDATE = 'sigtec.company.plant.update';
    const PLANT_REMOVE = 'sigtec.company.plant.remove';
    
    const CONTACT_ADD = 'sigtec.company.contact.add';
    const CONTACT_UPDATE = 'sigtec.company.contact.update';
    const CONTACT_REMOVE = 'sigtec.company.contact.remove';
}
