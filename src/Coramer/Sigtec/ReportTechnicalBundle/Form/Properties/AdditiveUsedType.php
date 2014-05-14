<?php

namespace Coramer\Sigtec\ReportTechnicalBundle\Form\Properties;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AdditiveUsedType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('additive','entity',array(
                'label' => 'sigtec.additive_used.additive',
                'class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Additive',
                'property' => 'description',
                'attr' => array(
                    'class' => 'select small-margin-right validate[required]',
                    'ng-model' => 'model.additive_used.additive',
                ),
            ))
            ->add('product','entity',array(
                'label' => 'sigtec.additive_used.product',
                'class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Product',
                'property' => 'description',
                'attr' => array(
                    'class' => 'select small-margin-right validate[required]',
                    'ng-model' => 'model.additive_used.product',
                ),
            ))
            ->add('basePolymer',null,array(
                'label' => 'sigtec.additive_used.base_polymer',
                'attr' => array(
                    'class' => 'input small-margin-right validate[required,integer]',
                    'ng-model' => 'model.additive_used.base_polymer',
                ),
            ))
            ->add('mark',null,array(
                'label' => 'sigtec.additive_used.mark',
                'attr' => array(
                    'class' => 'input small-margin-right validate[required]',
                    'ng-model' => 'model.additive_used.mark',
                ),
            ))
            ->add('additiveSupplier','entity',array(
                'label' => 'sigtec.additive_used.additive_supplier',
                'class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Supplier',
                'property' => 'description',
                'attr' => array(
                    'class' => 'select small-margin-right validate[required]',
                    'ng-model' => 'model.additive_used.additive_supplier',
                ),
            ))
            ->add('concentration',null,array(
                'label' => 'sigtec.additive_used.concentration',
                'attr' => array(
                    'class' => 'input small-margin-right input-mini validate[required,integer]',
                    'ng-model' => 'model.additive_used.concentration',
                ),
            ))
            ->add('typeConcentration',null,array(
                'label' => 'sigtec.additive_used.type_concentration',
                'attr' => array(
                    'class' => 'input small-margin-right input-mini validate[required]',
                    'ng-model' => 'model.additive_used.type_concentration',
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
            'data_class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\AdditiveUsed',
            'translation_domain' => 'CoramerSigtecReportTechnicalBundle',
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'coramer_sigtec_reporttechnicalbundle_properties_additiveused';
    }
}
