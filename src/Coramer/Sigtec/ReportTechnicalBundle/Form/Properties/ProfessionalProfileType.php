<?php

namespace Coramer\Sigtec\ReportTechnicalBundle\Form\Properties;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProfessionalProfileType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('quantityProfessionals',null,array(
                'label' => 'sigtec.quantity_professionals',
                'attr' => array(
                    'class' => 'input small-margin-right input-mini validate[required,custom[onlyNumberSp]]',
                    'ng-model' => 'reportTechnical.professional_profile.quantity_professionals',
                    'ng-change' => 'reportTechnicalHelper.professional_profile.calculeTotal()',
                    'min' => '0',
                ),
            ))
            ->add('quantityTechnical',null,array(
                'label' => 'sigtec.quantity_technical',
                'attr' => array(
                    'class' => 'input small-margin-right input-mini validate[required,custom[onlyNumberSp]]',
                    'ng-model' => 'reportTechnical.professional_profile.quantity_technical',
                    'ng-change' => 'reportTechnicalHelper.professional_profile.calculeTotal()',
                    'min' => '0',
                ),
            ))
            ->add('quantityLaborers',null,array(
                'label' => 'sigtec.quantity_laborers',
                'attr' => array(
                    'class' => 'input small-margin-right input-mini validate[required,custom[onlyNumberSp]]',
                    'ng-model' => 'reportTechnical.professional_profile.quantity_laborers',
                    'ng-change' => 'reportTechnicalHelper.professional_profile.calculeTotal()',
                    'min' => '0',
                ),
            ))
            ->add('quantityOther',null,array(
                'label' => 'sigtec.quantity_other',
                'attr' => array(
                    'class' => 'input small-margin-right input-mini validate[required,custom[onlyNumberSp]]',
                    'ng-model' => 'reportTechnical.professional_profile.quantity_other',
                    'ng-change' => 'reportTechnicalHelper.professional_profile.calculeTotal()',
                    'min' => '0',
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
            'data_class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\ProfessionalProfile',
            'translation_domain' => 'CoramerSigtecReportTechnicalBundle'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'coramer_sigtec_reporttechnicalbundle_properties_professionalprofile';
    }
}
