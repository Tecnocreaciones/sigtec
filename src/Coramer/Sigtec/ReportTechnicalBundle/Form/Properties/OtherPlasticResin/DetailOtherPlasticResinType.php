<?php

namespace Coramer\Sigtec\ReportTechnicalBundle\Form\Properties\OtherPlasticResin;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DetailOtherPlasticResinType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('grade',null,array(
                'label' => 'sigtec.detail_other_plastic_resin.grade',
                'attr' => array(
                    'class' => 'input small-margin-right input-small validate[required,integer]',
                    'ng-model' => 'model.other_plastic_resin.detail_other_plastic_resin.grade',
                ),
            ))
            ->add('process','entity',array(
                'label' => 'sigtec.detail_other_plastic_resin.process',
                'class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Process',
                'property' => 'description',
                'attr' => array(
                    'class' => 'select small-margin-right validate[required]',
                    'ng-model' => 'model.other_plastic_resin.detail_other_plastic_resin.process',
                    'ng-options' => 'value as value.description for (key,value) in data.product_manufactured.process',
                ),
                'query_builder' => function(\Coramer\Sigtec\CoreBundle\Repository\Model\MasterEntityRepository $er){
                    return $er->getQueryAllActive();
                }
            ))
            ->add('product','entity',array(
                'label' => 'sigtec.detail_other_plastic_resin.product',
                'class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Product',
                'property' => 'description',
                'attr' => array(
                    'class' => 'select small-margin-right validate[required]',
                    'ng-model' => 'model.other_plastic_resin.detail_other_plastic_resin.product',
                    'ng-options' => 'value as value.description for (key,value) in data.products',
                ),
                'query_builder' => function(\Coramer\Sigtec\CoreBundle\Repository\Model\MasterEntityRepository $er){
                    return $er->getQueryAllActive();
                }
            ))
            ->add('resin','entity',array(
                'label' => 'sigtec.detail_other_plastic_resin.resin',
                'class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Resin',
                'property' => 'description',
                'attr' => array(
                    'class' => 'select small-margin-right  input-small validate[required]',
                    'ng-model' => 'model.other_plastic_resin.detail_other_plastic_resin.resin',
                    'ng-options' => 'value as value.description for (key,value) in data.resins.not_by_coramer',
                ),
                'query_builder' => function(\Coramer\Sigtec\CoreBundle\Repository\Model\MasterEntityRepository $er){
                    return $er->getQueryBuilderNotMarketedByCoramer();
                }
            ))
            ->add('requirement',null,array(
                'label' => 'sigtec.detail_other_plastic_resin.requirement',
                'attr' => array(
                    'class' => 'input small-margin-right input-mini validate[required,integer]',
                    'ng-model' => 'model.other_plastic_resin.detail_other_plastic_resin.requirement',
                ),
            ))
            ->add('supplier',null,array(
                'label' => 'sigtec.detail_other_plastic_resin.supplier',
                'attr' => array(
                    'class' => 'input small-margin-right validate[required,integer]',
                    'ng-model' => 'model.other_plastic_resin.detail_other_plastic_resin.supplier',
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
            'data_class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\OtherPlasticResin\DetailOtherPlasticResin',
            'translation_domain' => 'CoramerSigtecReportTechnicalBundle',
            'csrf_protection' => false,
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'coramer_sigtec_reporttechnicalbundle_properties_otherplasticresin_detailotherplasticresin';
    }
}
