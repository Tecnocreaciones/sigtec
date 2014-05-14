<?php

namespace Coramer\Sigtec\ReportTechnicalBundle\Form\Properties;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProductionLevelType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('typeProcess','entity',array(
                'label' => 'sigtec.table.header.type_process',
                'class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\TypeProcess',
                'property' => 'description',
                'mapped' => false,
                'attr' => array(
                    'class' => 'select input-large auto-refesh expandable-list small-margin-right validate[required]',
                    'ng-options' => 'value as value for (key,value) in data.type_process',
                    'ng-model' => 'model.production_level.type_process',
                    'ng-change' => 'reportTechnicalManager.getData().getProcess(model.production_level.type_process)',
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
                    'ng-options' => 'value as value for (key,value) in data.process',
                    'ng-model' => 'model.production_level.process',
                ),
                'query_builder' => function(\Coramer\Sigtec\CoreBundle\Repository\Model\MasterEntityRepository $er){
                    return $er->getQueryAllActive();
                }
            ))
            ->add('shifts',null,array(
                'label' => 'sigtec.table.header.shifts',
                'attr' => array(
                    'class' => 'input small-margin-right input-mini validate[required,integer]',
                    'ng-model' => 'model.production_level.shifts',
                ),
            ))
            ->add('hours',null,array(
                'label' => 'sigtec.table.header.hours',
                'attr' => array(
                    'class' => 'input small-margin-right input-mini validate[required,integer]',
                    'ng-model' => 'model.production_level.hours',
                ),
            ))
            ->add('daysMonth',null,array(
                'label' => 'sigtec.table.header.days_month',
                'attr' => array(
                    'class' => 'input small-margin-right input-mini validate[required,integer]',
                    'ng-model' => 'model.production_level.days_month',
                ),
            ))
            ->add('theoretical',null,array(
                'label' => 'sigtec.table.header.theoretical',
                'attr' => array(
                    'class' => 'input small-margin-right input-mini validate[required,integer]',
                    'ng-model' => 'model.production_level.theoretical',
                ),
            ))
            ->add('installed',null,array(
                'label' => 'sigtec.table.header.installed',
                'attr' => array(
                    'class' => 'input small-margin-right input-mini validate[required,integer]',
                    'ng-model' => 'model.production_level.installed',
                ),
            ))
            ->add('busy',null,array(
                'label' => 'sigtec.table.header.busy',
                'attr' => array(
                    'class' => 'input small-margin-right input-mini validate[required,integer]',
                    'ng-model' => 'model.production_level.busy',
                ),
            ))
            ->add('idle',null,array(
                'label' => 'sigtec.table.header.idle',
                'attr' => array(
                    'class' => 'input small-margin-right input-mini validate[required,integer]',
                    'ng-model' => 'model.production_level.idle',
                ),
            ))
            ->add('percentage',null,array(
                'label' => 'sigtec.production_level.percentage',
                'attr' => array(
                    'class' => 'input small-margin-right input-mini validate[required,integer]',
                    'ng-model' => 'model.production_level.percentage',
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
            'data_class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\ProductionLevel',
            'translation_domain' => 'CoramerSigtecReportTechnicalBundle',
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'coramer_sigtec_reporttechnicalbundle_properties_productionlevel';
    }
}
