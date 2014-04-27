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
 * Description of SubSegmentAdmin
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class SubSegmentAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('description', 'text', array('label' => 'Description'))
            ->add('segment', 'entity', array(
                'label' => 'segment',
                'class'=>'Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Segment',
                'property'=>'description'
            ))
            ->add('active', null, array('label' => 'Active'))
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('description')
            ->add('segment',null,array(),'entity',array(
                'label' => 'segment',
                'class'=>'Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Segment',
                'property'=>'description'
            ))
            ->add('active')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('description')
            ->add('segment','entity',array(
                'label' => 'segment',
                'class'=>'Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Segment',
                'associated_property'=>'description'
            ))
            ->add('createdAt')
            ->add('updatedAt')
            ->add('active')
        ;
    }
}
