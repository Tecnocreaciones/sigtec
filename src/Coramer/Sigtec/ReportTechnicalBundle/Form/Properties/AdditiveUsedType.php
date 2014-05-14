<?php

namespace Coramer\Sigtec\ReportTechnicalBundle\Form\Properties;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\AdditiveUsed;

class AdditiveUsedType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $reportTechnical = $builder->getData()->getReportTechnical();
        $builder
            ->add('additive','entity',array(
                'label' => 'sigtec.additive_used.additive',
                'class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Additive',
                'property' => 'description',
                'attr' => array(
                    'class' => 'select small-margin-right validate[required]',
                    'ng-model' => 'model.additive_used.additive',
                ),
                'query_builder' => function(\Coramer\Sigtec\CoreBundle\Repository\Model\MasterEntityRepository $er){
                    return $er->getQueryAllActive();
                }
            ))
            ->add('product','entity',array(
                'label' => 'sigtec.additive_used.product',
                'class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Product',
                'property' => 'description',
                'attr' => array(
                    'class' => 'select small-margin-right validate[required]',
                    'ng-model' => 'model.additive_used.product',
                ),
                'query_builder' => function(\Coramer\Sigtec\ReportTechnicalBundle\Repository\Master\ProductRepository $er) use ($reportTechnical){
                    return $er->getQueryBuilderByReportTechnical($reportTechnical);
                }
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
                'query_builder' => function(\Coramer\Sigtec\CoreBundle\Repository\Model\MasterEntityRepository $er){
                    return $er->getQueryAllActive();
                }
            ))
            ->add('concentration',null,array(
                'label' => 'sigtec.additive_used.concentration',
                'attr' => array(
                    'class' => 'input small-margin-right input-mini validate[required,integer]',
                    'ng-model' => 'model.additive_used.concentration',
                ),
            ))
            ->add('typeConcentration','choice',array(
                'label' => 'sigtec.additive_used.type_concentration',
                'choices' => array(
                    AdditiveUsed::TYPE_CONCENTRATION_PERCENTAGE => '%',
                    AdditiveUsed::TYPE_CONCENTRATION_PPC => 'PPC',
                ),
                'attr' => array(
                    'class' => 'select auto-refesh small-margin-right input-mini validate[required]',
                    'ng-model' => 'model.additive_used.type_concentration',
                    'ng-options' => 'value as value.description for (key,value) in data.additive.type_concentration',
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
