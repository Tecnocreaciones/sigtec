<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tecnocreaciones\Vzla\EntityBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

/**
 * Description of RegionAdmin
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class RegionAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('description')
            ->add('code')
            ->add('country', 'entity', array(
                'property' => 'description',
                'class' => 'Tecnocreaciones\Vzla\EntityBundle\Entity\Country',
            ))
            ->add('active')
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('description')
            ->add('country',null,array(),'entity', array(
                'property' => 'description',
                'class' => 'Tecnocreaciones\Vzla\EntityBundle\Entity\Country',
            ))
            ->add('active')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('description')
            ->add('code')
            ->add('country', 'entity', array(
                'associated_property' => 'description',
                'class' => 'Tecnocreaciones\Vzla\EntityBundle\Entity\Country',
            ))
            ->add('createdAt')
            ->add('updatedAt')
            ->add('active')
        ;
    }
}
