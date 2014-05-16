<?php

namespace Coramer\Sigtec\ReportTechnicalBundle\Form\Properties\Exportation;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ExportationProductType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $reportTechnical = $builder->getData()->getExportation()->getReportTechnical();
        $builder
            ->add('product','entity',array(
                'label' => 'sigtec.exportation_products.exportation_product.product',
                'class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Product',
                'property' => 'description',
                'attr' => array(
                    'class' => 'select small-margin-right validate[required]',
                    'ng-model' => 'model.exportation.exportation_product.product',
                    'ng-options' => 'value as value.description for (key,value) in data.exportation.products',
                ),
                'query_builder' => function(\Coramer\Sigtec\ReportTechnicalBundle\Repository\Master\ProductRepository $er) use ($reportTechnical){
                    return $er->getQueryBuilderByReportTechnical($reportTechnical);
                }
            ))
            ->add('requirement',null,array(
                'label' => 'sigtec.exportation_products.exportation_product.requirement',
                'attr' => array(
                    'class' => 'input small-margin-right input-mini validate[required,integer]',
                    'ng-model' => 'model.exportation.exportation_product.requirement',
                ),
            ))
            ->add('destiny',null,array(
                'label' => 'sigtec.exportation_products.exportation_product.destiny',
                'attr' => array(
                    'class' => 'input small-margin-right input-small validate[required,integer]',
                    'ng-model' => 'model.exportation.exportation_product.destiny',
                ),
            ))
            ->add('port','entity',array(
                'label' => 'sigtec.exportation_products.exportation_product.port',
                'class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Port',
                'property' => 'description',
                'attr' => array(
                    'class' => 'select input-small small-margin-right validate[required]',
                    'ng-model' => 'model.exportation.exportation_product.port',
                    'ng-options' => 'value as value.description for (key,value) in data.exportation.ports',
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
            'data_class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\Exportation\ExportationProduct',
            'translation_domain' => 'CoramerSigtecReportTechnicalBundle',
            'csrf_protection' => false,
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'coramer_sigtec_reporttechnicalbundle_properties_exportation_exportationproduct';
    }
}
