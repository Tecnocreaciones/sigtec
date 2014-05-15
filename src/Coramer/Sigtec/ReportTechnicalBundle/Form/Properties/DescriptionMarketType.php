<?php

namespace Coramer\Sigtec\ReportTechnicalBundle\Form\Properties;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DescriptionMarketType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $reportTechnical = $builder->getData()->getReportTechnical();
        $builder
            ->add('product','entity',array(
                'label' => 'sigtec.description_of_the_market.product',
                'class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Product',
                'property' => 'description',
                'attr' => array(
                    'class' => 'select small-margin-right validate[required]',
                    'ng-model' => 'model.description_market.product',
                    'ng-options' => 'value as value.description for (key,value) in data.additive.products',
                ),
                'query_builder' => function(\Coramer\Sigtec\ReportTechnicalBundle\Repository\Master\ProductRepository $er) use ($reportTechnical){
                    return $er->getQueryBuilderByReportTechnical($reportTechnical);
                }
            ))
            ->add('segment','entity',array(
                'label' => 'sigtec.description_of_the_market.segment',
                'class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Segment',
                'property' => 'description',
                'attr' => array(
                    'class' => 'select expandable-list small-margin-right input-large validate[required]',
                    'ng-model' => 'model.description_market.segment',
                    'ng-options' => 'value as value.description for (key,value) in data.segments',
                    'ng-change' => 'reportTechnicalManager.getData().getSubSegments(model.description_market.segment)'
                ),
                'query_builder' => function(\Coramer\Sigtec\CoreBundle\Repository\Model\MasterEntityRepository $er){
                    return $er->getQueryAllActive();
                }
            ))
            ->add('subSegment','entity',array(
                'label' => 'sigtec.description_of_the_market.sub_segment',
                'class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\SubSegment',
                'property' => 'description',
                'attr' => array(
                    'class' => 'select auto-refesh expandable-list small-margin-right input-large validate[required]',
                    'ng-model' => 'model.description_market.sub_segment',
                    'ng-options' => 'value as value.description for (key,value) in data.sub_segments',
                ),
                'query_builder' => function(\Coramer\Sigtec\CoreBundle\Repository\Model\MasterEntityRepository $er){
                    return $er->getQueryAllActive();
                }
            ))
            ->add('participationRate',null,array(
                'label' => 'sigtec.description_of_the_market.participation_rate',
                'attr' => array(
                    'class' => 'input input-mini small-margin-right validate[required]',
                    'ng-model' => 'model.description_market.participation_rate',
                ),
            ))
            ->add('requirement',null,array(
                'label' => 'sigtec.description_of_the_market.requirement',
                'attr' => array(
                    'class' => 'input input-mini small-margin-right validate[required]',
                    'ng-model' => 'model.description_market.requirement',
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
            'data_class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionMarket',
            'translation_domain' => 'CoramerSigtecReportTechnicalBundle',
            'csrf_protection' => false,
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'coramer_sigtec_reporttechnicalbundle_properties_descriptionmarket';
    }
}
