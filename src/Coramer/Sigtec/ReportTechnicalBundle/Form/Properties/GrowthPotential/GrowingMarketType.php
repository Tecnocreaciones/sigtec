<?php

namespace Coramer\Sigtec\ReportTechnicalBundle\Form\Properties\GrowthPotential;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class GrowingMarketType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $reportTechnical = $builder->getData()->getGrowthPotential()->getReportTechnical();
        $builder
                ->add('segment','entity',array(
                    'label' => 'sigtec.growth_potential.growth_market.segment',
                    'class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Segment',
                    'property' => 'description',
                    'attr' => array(
                        'class' => 'select expandable-list small-margin-right input-large validate[required]',
                        'ng-model' => 'model.growth_potential.growth_market.segment',
                        'ng-options' => 'value as value.description for (key,value) in data.growth_potential.segments',
                        'ng-change' => 'reportTechnicalManager.getData().getSubSegmentsGrowthMarket(model.growth_potential.growth_market.segment)'
                    ),
                    'query_builder' => function(\Coramer\Sigtec\CoreBundle\Repository\Model\MasterEntityRepository $er) use ($reportTechnical){
                        return $er->getQueryBuilderByReportTechnical($reportTechnical);
                    }
                ))
                ->add('subSegment','entity',array(
                    'label' => 'sigtec.growth_potential.growth_market.sub_segment',
                    'class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\SubSegment',
                    'property' => 'description',
                    'attr' => array(
                        'class' => 'select auto-refesh expandable-list small-margin-right input-large validate[required]',
                        'ng-model' => 'model.growth_potential.growth_market.sub_segment',
                        'ng-options' => 'value as value.description for (key,value) in data.sub_segments',
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
            'data_class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\GrowthPotential\GrowingMarket',
            'translation_domain' => 'CoramerSigtecReportTechnicalBundle',
            'csrf_protection' => false,
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'coramer_sigtec_reporttechnicalbundle_properties_growthpotential_growingmarket';
    }
}
