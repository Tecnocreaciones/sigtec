<?php

namespace Coramer\Sigtec\CompanyBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PlantType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $data = $options['data'];
        $builder
            ->add('email')
            ->add('phones','collection',array(
                'type' => new PhoneType(),
                'allow_add'    => true,
                'allow_delete' => true,
                'by_reference' => false,
            ))
            ->add('usePlant')
            ->add('address')
            ->add('state','entity',array(
                'class' => 'Tecnocreaciones\Vzla\FixturesBundle\Entity\State',
                'property' => 'description',
                'empty_value' => 'sigtec.select',
                'query_builder' => function(\Tecnocreaciones\Vzla\FixturesBundle\Repository\EntityRepository $er){
                    return $er->getQueryAllActive();
                },
            ))
            ->add('city','entity',array(
                'class' => 'Tecnocreaciones\Vzla\FixturesBundle\Entity\City',
                'property' => 'description',
                'empty_value' => 'sigtec.select',
                'query_builder' => function(\Tecnocreaciones\Vzla\FixturesBundle\Repository\EntityRepository $er) use ($data){
                    
                    return $er->getQueryByState($data->getState());
                },
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Coramer\Sigtec\CompanyBundle\Entity\Plant'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'coramer_sigtec_companybundle_plant';
    }
}
