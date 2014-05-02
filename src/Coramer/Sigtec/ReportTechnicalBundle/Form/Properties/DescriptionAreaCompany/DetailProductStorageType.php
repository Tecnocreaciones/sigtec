<?php

namespace Coramer\Sigtec\ReportTechnicalBundle\Form\Properties\DescriptionAreaCompany;

use Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\DetailProductStorage;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DetailProductStorageType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('material',null,array(
                'label' => 'sigtec.table.header.material',
                'class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\DetailProductStorage\Material',
                'property' => 'description',
                'attr' => array(
                    'class' => 'select input-large auto-refesh expandable-list small-margin-right validate[required]',
                    'ng-model' => 'model.detail_product_storage.material',
                    'ng-options' => 'value as value for (key,value) in data.materials',
                ),
                'translation_domain' => 'CoramerSigtecReportTechnicalBundle',
            ))
            ->add('storage','choice',array(
                'label' => 'sigtec.table.header.storage',
                'choices' => array(
                    DetailProductStorage::STORAGE_OUTDOOR => 'sigtec.storage.outdoor',
                    DetailProductStorage::STORAGE_CONFINED => 'sigtec.storage.confined',
                ),
                'attr' => array(
                    'class' => 'select auto-refesh input-small small-margin-right validate[required]',
                    'ng-model' => 'model.detail_product_storage.storage',
                    'ng-options' => 'value as value for (key,value) in data.storages',
                ),
                'translation_domain' => 'CoramerSigtecReportTechnicalBundle',
            ))
            ->add('separatedResin','choice',array(
                'label' => 'sigtec.table.header.separated_resin',
                'choices' => array(
                    DetailProductStorage::SEPARATED_RESIN_NOT_APPLY => 'N/A' ,
                    DetailProductStorage::SEPARATED_RESIN_YES => 'sigtec.yes' ,
                    DetailProductStorage::SEPARATED_RESIN_NO => 'sigtec.no' ,
                ),
                'attr' => array(
                    'class' => 'select auto-refesh replacement input-small small-margin-right validate[required]',
                    'ng-model' => 'model.detail_product_storage.separated_resin',
                    'ng-options' => 'value as value for (key,value) in data.separated_resins',
                ),
                'translation_domain' => 'CoramerSigtecReportTechnicalBundle',
            ))
            ->add('totalArea',null,array(
                'label' => 'sigtec.total',
                'attr' => array(
                    'class' => 'input small-margin-right input-mini validate[required,custom[onlyNumberSp]]',
                    'min' => '0',
                    'ng-model' => 'model.detail_product_storage.total_area',
                ),
                'translation_domain' => 'CoramerSigtecReportTechnicalBundle',
            ))
            ->add('coveredArea',null,array(
                'label' => 'sigtec.covered',
                'attr' => array(
                    'class' => 'input small-margin-right input-mini validate[required,custom[onlyNumberSp]]',
                    'min' => '0',
                    'ng-model' => 'model.detail_product_storage.covered_area',
                ),
                'translation_domain' => 'CoramerSigtecReportTechnicalBundle',
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\DetailProductStorage'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'coramer_sigtec_reporttechnicalbundle_properties_descriptionareacompany_detailproductstorage';
    }
}
