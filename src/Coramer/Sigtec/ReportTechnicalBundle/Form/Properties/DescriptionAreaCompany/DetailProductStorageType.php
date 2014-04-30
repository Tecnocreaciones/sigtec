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
                'translation_domain' => 'CoramerSigtecReportTechnicalBundle',
            ))
            ->add('storage',null,array(
                'label' => 'sigtec.table.header.storage',
                'class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\DetailProductStorage\Storage',
                'property' => 'description',
                'translation_domain' => 'CoramerSigtecReportTechnicalBundle',
            ))
            ->add('separatedResin','choice',array(
                'label' => 'sigtec.table.header.separated_resin',
                'choices' => array(
                    DetailProductStorage::SEPARATED_RESIN_NOT_APPLY => 'N/A' ,
                    DetailProductStorage::SEPARATED_RESIN_YES => 'yes' ,
                    DetailProductStorage::SEPARATED_RESIN_NO => 'no' ,
                ),
                'translation_domain' => 'CoramerSigtecReportTechnicalBundle',
            ))
            ->add('totalArea',null,array(
                'label' => 'sigtec.total',
                'translation_domain' => 'CoramerSigtecReportTechnicalBundle',
            ))
            ->add('coveredArea',null,array(
                'label' => 'sigtec.covered',
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
