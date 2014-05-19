<?php

namespace Coramer\Sigtec\ReportTechnicalBundle\Form\Properties;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class InventoryLevelType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('daysOfInventoryOfRawMaterials',null,array(
                'label' => 'sigtec.inventory_level.days_of_inventory_of_raw_materials',
                'attr' => array(
                    'class' => 'input small-margin-right input-mini validate[required,custom[onlyNumberSp]]',
                    'ng-model' => 'reportTechnical.inventory_level.days_of_inventory_of_raw_materials',
                    'min' => '0',
                ),
            ))
            ->add('daysOfFinishedProductInventory',null,array(
                'label' => 'sigtec.inventory_level.days_of_finished_product_inventory',
                'attr' => array(
                    'class' => 'input small-margin-right input-mini validate[required,custom[onlyNumberSp]]',
                    'ng-model' => 'reportTechnical.inventory_level.days_of_finished_product_inventory',
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
            'data_class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\InventoryLevel',
            'translation_domain' => 'CoramerSigtecReportTechnicalBundle',
            'csrf_protection' => false,
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'coramer_sigtec_reporttechnicalbundle_properties_inventorylevel';
    }
}
