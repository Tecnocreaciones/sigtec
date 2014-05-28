<?php

namespace Coramer\Sigtec\ReportTechnicalBundle\Form\Properties\DescriptionAreaCompany;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PlantDescriptionType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('plant',null,array(
                'class' => 'Coramer\Sigtec\CompanyBundle\Entity\Plant',
                'property' => 'name',
                'disabled' => true,
                'attr' => array(
                    'class' => 'input-unstyled'
                )
            ))
            ->add('area',new AreaType())
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\PlantDescription',
            'csrf_protection' => false,
            'cascade_validation' => true,
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'coramer_sigtec_reporttechnicalbundle_properties_descriptionareacompany_plantdescription';
    }
}
