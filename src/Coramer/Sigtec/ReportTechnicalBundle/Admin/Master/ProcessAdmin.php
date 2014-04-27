<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Coramer\Sigtec\ReportTechnicalBundle\Admin\Master;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

/**
 * Description of ProcessAdmin
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class ProcessAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('description', 'text', array('label' => 'Description'))
            ->add('typeProcess', 'entity', array(
                'property'=>'description',
                'class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\TypeProcess'
            ))
            ->add('active', null, array('label' => 'Active'))
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('description')
            ->add('typeProcess', null,array(),'entity', array(
                'property'=>'description',
                'class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\TypeProcess'
            ))
            ->add('active')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('description')
            ->add('typeProcess', 'entity', array(
                'associated_property'=>'description',
                'class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\TypeProcess'
            ))
            ->add('createdAt')
            ->add('updatedAt')
            ->add('active')
        ;
    }
}
