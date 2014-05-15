<?php

namespace Coramer\Sigtec\ReportTechnicalBundle\Form\Properties\OtherPlasticResin;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DetailOtherPlasticResinType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('requirement')
            ->add('grade')
            ->add('supplier')
            ->add('process')
            ->add('product')
            ->add('resin')
            ->add('otherPlasticResin')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\OtherPlasticResin\DetailOtherPlasticResin'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'coramer_sigtec_reporttechnicalbundle_properties_otherplasticresin_detailotherplasticresin';
    }
}
