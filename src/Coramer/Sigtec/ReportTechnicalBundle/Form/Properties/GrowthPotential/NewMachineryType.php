<?php

namespace Coramer\Sigtec\ReportTechnicalBundle\Form\Properties\GrowthPotential;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class NewMachineryType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('quantity',null,array(
                'label' => 'sigtec.table.header.quantity',
                'attr' => array(
                    'class' => 'input input-mini small-margin-right validate[required,integer]',
                    'ng-model' => 'model.growth_potential.new_machinery.quantity',
                ),
            ))
            ->add('capacity',null,array(
                'label' => 'sigtec.table.header.capacity',
                'attr' => array(
                    'class' => 'input small-margin-right validate[required,integer]',
                    'ng-model' => 'model.growth_potential.new_machinery.capacity',
                ),
            ))
            ->add('typeProcess','entity',array(
                'label' => 'sigtec.table.header.type_process',
                'class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\TypeProcess',
                'property' => 'description',
                'attr' => array(
                    'class' => 'select input-large auto-refesh expandable-list small-margin-right validate[required]',
                    'ng-options' => 'value as value.description for (key,value) in data.type_process.all',
                    'ng-model' => 'model.growth_potential.new_machinery.type_process',
                    'ng-change' => 'reportTechnicalManager.getData().getProcessOfNewMachinery(model.growth_potential.new_machinery.type_process)',
                ),
                'query_builder' => function(\Coramer\Sigtec\CoreBundle\Repository\Model\MasterEntityRepository $er){
                    return $er->getQueryAllActive();
                }
            ))
            ->add('process','entity',array(
                'label' => 'sigtec.table.header.process',
                'class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Process',
                'property' => 'description',
                'attr' => array(
                    'class' => 'select replacement input-large auto-refesh expandable-list small-margin-right validate[required]',
                    'ng-options' => 'value as value.description for (key,value) in data.process',
                    'ng-model' => 'model.growth_potential.new_machinery.process',
                ),
                'query_builder' => function(\Coramer\Sigtec\CoreBundle\Repository\Model\MasterEntityRepository $er){
                    return $er->getQueryAllActive();
                }
            ))
            ->add('resin','entity',array(
                'label' => 'sigtec.table.header.resin',
                'class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Resin',
                'property' => 'description',
                'attr' => array(
                    'class' => 'select small-margin-right  input-small validate[required]',
                    'ng-model' => 'model.growth_potential.new_machinery.resin',
                    'ng-options' => 'value as value.description for (key,value) in data.resins.all',
                ),
                'query_builder' => function(\Coramer\Sigtec\CoreBundle\Repository\Model\MasterEntityRepository $er){
                    return $er->getQueryAllActive();
                }
            ))
            ->add('product','entity',array(
                'label' => 'sigtec.table.header.product',
                'class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Product',
                'property' => 'description',
                'attr' => array(
                    'class' => 'select small-margin-right validate[required]',
                    'ng-model' => 'model.growth_potential.new_machinery.product',
                    'ng-options' => 'value as value.description for (key,value) in data.products',
                ),
                'query_builder' => function(\Coramer\Sigtec\ReportTechnicalBundle\Repository\Master\ProductRepository $er){
                    return $er->getQueryAllActive();
                }
            ))
            ->add('reasonPurchase','entity',array(
                'label' => 'sigtec.table.header.reason_purchase',
                'class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\ReasonPurchase',
                'property' => 'description',
                'attr' => array(
                    'class' => 'select small-margin-right validate[required]',
                    'ng-model' => 'model.growth_potential.new_machinery.reason_purchase',
                    'ng-options' => 'value as value.description for (key,value) in data.new_machinery.reason_purchases',
                ),
                'query_builder' => function(\Coramer\Sigtec\CoreBundle\Repository\Model\MasterEntityRepository $er){
                    return $er->getQueryAllActive();
                }
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\GrowthPotential\NewMachinery',
            'translation_domain' => 'CoramerSigtecReportTechnicalBundle',
            'csrf_protection' => false,
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'coramer_sigtec_reporttechnicalbundle_properties_growthpotential_newmachinery';
    }
}
