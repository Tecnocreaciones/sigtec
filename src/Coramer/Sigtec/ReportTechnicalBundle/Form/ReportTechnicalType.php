<?php

namespace Coramer\Sigtec\ReportTechnicalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ReportTechnicalType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('professionalProfile',new Properties\ProfessionalProfileType())
            ->add('descriptionAreaCompany',new Properties\DescriptionAreaCompanyType())
            ->add('exportation',new Properties\ExportationType())
            ->add('growthPotential',new Properties\GrowthPotentialType())
            ->add('inventoryLevel',new Properties\InventoryLevelType())
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\ReportTechnical',
            'csrf_protection' => false,
            'cascade_validation' => true,
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'coramer_sigtec_reporttechnicalbundle_reporttechnical';
    }
}
