<?php

namespace Coramer\Sigtec\ReportTechnicalBundle\Form\Properties;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProductManufacturedType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('resin','entity',array(
                'label' => 'sigtec.table.header.resin',
                'class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Resin',
                'property' => 'description',
                'mapped' => false,
                'attr' => array(
                    'class' => 'select input-large auto-refesh expandable-list small-margin-right validate[required]',
                    'ng-options' => 'value as value.description for (key,value) in data.resins',
                    'ng-model' => 'model.product_manufactured.resin',
                    'ng-change' => 'reportTechnicalManager.getData().getGrade(model.product_manufactured.resin)',
                ),
                'query_builder' => function(\Coramer\Sigtec\CoreBundle\Repository\Model\MasterEntityRepository $er){
                    return $er->getQueryAllActive();
                }
            ))
            ->add('grade','entity',array(
                'label' => 'sigtec.table.header.grade',
                'class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Grade',
                'property' => 'description',
                'attr' => array(
                    'class' => 'select input-large auto-refesh expandable-list small-margin-right validate[required]',
                    'ng-options' => 'value as value.description for (key,value) in data.grades',
                    'ng-model' => 'model.product_manufactured.grade',
                    //'ng-change' => 'reportTechnicalManager.getData().getProcess(model.product_manufactured.type_process)',
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
                    'class' => 'select input-large auto-refesh expandable-list small-margin-right validate[required]',
                    'ng-options' => 'value as value.description for (key,value) in data.product_manufactured.process',
                    'ng-model' => 'model.product_manufactured.process',
                    //'ng-change' => 'reportTechnicalManager.getData().getProcess(model.product_manufactured.type_process)',
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
                    'class' => 'select input-large auto-refesh expandable-list small-margin-right validate[required]',
                    'ng-options' => 'value as value.description for (key,value) in data.products',
                    'ng-model' => 'model.product_manufactured.product',
                    //'ng-change' => 'reportTechnicalManager.getData().getProcess(model.product_manufactured.type_process)',
                ),
                'query_builder' => function(\Coramer\Sigtec\ReportTechnicalBundle\Repository\Master\ProductRepository $er){
                    return $er->getQueryAllActive();
                },
            ))
            ->add('requirement',null,array(
                'label' => 'sigtec.table.header.requirement',
                'attr' => array(
                    'class' => 'input small-margin-right input-mini validate[required,integer]',
                    'ng-model' => 'model.product_manufactured.requirement',
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
            'data_class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\ProductManufactured',
            'translation_domain' => 'CoramerSigtecReportTechnicalBundle',
            'csrf_protection' => false,
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'coramer_sigtec_reporttechnicalbundle_properties_productmanufactured';
    }
}
