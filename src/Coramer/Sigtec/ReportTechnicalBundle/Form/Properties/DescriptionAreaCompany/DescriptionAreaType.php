<?php

namespace Coramer\Sigtec\ReportTechnicalBundle\Form\Properties\DescriptionAreaCompany;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DescriptionAreaType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('description',null,array(
                'attr' => array(
                    'class' => 'input-unstyled'
                ),
            ))
            ->add('help',null,array(
                'attr' => array(
                    'class' => 'input-unstyled'
                ),
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\DescriptionArea',
            'csrf_protection' => false,
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'coramer_sigtec_reporttechnicalbundle_properties_descriptionareacompany_descriptionarea';
    }
}
