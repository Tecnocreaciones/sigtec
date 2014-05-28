<?php

namespace Coramer\Sigtec\ReportTechnicalBundle\Form\Properties\DescriptionAreaCompany;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AreaType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('descriptionArea',new DescriptionAreaType(),array(
                'disabled' => true,
                'attr' => array(
                    'class' => 'input-unstyled'
                ),
            ))
            ->add('totalArea',null,array(
                'attr' => array(
                    'class' => 'input small-margin-right input-mini validate[required,custom[number]]',
                    'min' => '0',
                ),
            ))
            ->add('coveredArea',null,array(
                'attr' => array(
                    'class' => 'input small-margin-right input-mini validate[required,custom[number]]',
                    'min' => '0',
                ),
            ))
            ->add('areas','collection',array(
                'type' => new AreaType(),
                'cascade_validation' => true,
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\Area',
            'csrf_protection' => false,
            'cascade_validation' => true,
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'coramer_sigtec_reporttechnicalbundle_properties_descriptionareacompany_area';
    }
}
