<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com.ve
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Coramer\Sigtec\CoreBundle\Form\Type;

use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

/**
 * Description of RegistrationFormType
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com.ve>
 */
class RegistrationFormType extends BaseType
{
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options) {
        parent::buildForm($builder, $options);
        $builder->add('firstName');
        $builder->add('lastName');
    }
    
    public function getName() {
        return 'sigtec_user_registration';
    }
}
