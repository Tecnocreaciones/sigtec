<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com.ve
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Coramer\Sigtec\CoreBundle\EventListener;

use FOS\UserBundle\Event\FormEvent;
//use FOS\UserBundle\FOSUserEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;


/**
 * Description of RegistrationListerner
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class RegistrationListerner implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return array(
            //FOSUserEvents::REGISTRATION_SUCCESS => 'onRegistrationSuccess',
        );
    }
    
    function onRegistrationSuccess(FormEvent $event) {
        /** @var $user \FOS\UserBundle\Model\UserInterface */
        $user = $event->getForm()->getData();
        $role = $event->getRequest()->get('role');
        if($role == 'client'){
            $user->addRole('ROLE_CLIENT');
        }
    }
}
