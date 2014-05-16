<?php

namespace Coramer\Sigtec\ReportTechnicalBundle\Form\Properties;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class GrowthPotentialType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('lastInvestmentMachinery','date',array(
                'label' => 'sigtec.growth_potential.last_investment_machinery',
                'attr' => array(
//                    'ng-model' => 'reportTechnical.growth_potential.last_investment_machinery',
                ),
                'widget' => 'single_text'
            ))
            ->add('doYouConsiderEnteringOtherMarkets',null,array(
                'label' => 'sigtec.growth_potential.do_you_consider_entering_other_markets',
                'attr' => array(
                    'ng-model' => 'reportTechnical.growth_potential.do_you_consider_entering_other_markets',
                ),
                'required' => false,
            ))
            ->add('doYouPlanToPurchaseNewMachineries',null,array(
                'label' => 'sigtec.growth_potential.do_you_plan_to_purchase_new_machineries',
                'attr' => array(
                    'ng-model' => 'reportTechnical.growth_potential.do_you_plan_to_purchase_new_machineries',
                ),
                'required' => false,
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\GrowthPotential',
            'translation_domain' => 'CoramerSigtecReportTechnicalBundle',
            'csrf_protection' => false,
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'coramer_sigtec_reporttechnicalbundle_properties_growthpotential';
    }
}
