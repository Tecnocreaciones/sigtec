<?php

namespace Coramer\Sigtec\ReportTechnicalBundle\Form\Properties;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ExportationType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('hasExportedProducts',null,array(
                'label' => 'sigtec.exportation_products.has_exported_products',
                'attr' => array(
                    'ng-model' => 'reportTechnical.exportation.has_exported_products',
                ),
                'required' => false,
            ))
            ->add('itPlansToExport',null,array(
                'label' => 'sigtec.exportation_products.it_plans_to_export',
                'attr' => array(
                    'ng-model' => 'reportTechnical.exportation.it_plans_to_export',
                ),
                'required' => false,
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\Exportation',
            'translation_domain' => 'CoramerSigtecReportTechnicalBundle',
            'csrf_protection' => false,
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'coramer_sigtec_reporttechnicalbundle_properties_exportation';
    }
}
