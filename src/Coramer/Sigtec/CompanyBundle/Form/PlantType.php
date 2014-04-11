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
            ->add('name',null,array(
                'label' => 'sigtec.name',
                'attr' => array(
                    'class' => 'input'
                ),
                'disabled' => true,
            ))
            ->add('email','email',array(
                'label' => 'sigtec.email',
                'attr' => array(
                    'class' => 'input'
                ),
            ))
            ->add('phones','collection',array(
                'label' => 'sigtec.phone',
                'type' => new PhoneType(),
                'allow_add'    => true,
                'allow_delete' => true,
                'by_reference' => false,
            ))
            ->add('dedications',null,array(
                'label' => 'sigtec.use_plant',
                'attr' => array(
                    'class' => 'select multiple-as-single easy-multiple-selection expandable-list blue-gradient glossy check-list replacement reversed input-large small-margin-right'
                ),
                'multiple' => true,
                'property' => 'description',
                'empty_value' => 'sigtec.select',
            ))
            ->add('address',null,array(
                'label' => 'sigtec.address',
                'attr' => array(
                    'class' => 'input autoexpanding',
                    'cols' => '25',
                    'rows' => '8',
                ),
            ))
            ->add('state','entity',array(
                'label' => 'sigtec.state',
                'class' => 'Tecnocreaciones\Vzla\EntityBundle\Entity\State',
                'property' => 'description',
                'empty_value' => 'sigtec.select',
                'attr' => array(
                    'class' => 'select blue-gradient replacement glossy input-large',
                    'ng-model' => 'model.state',
                    'ng-change' => 'getCities()'
                ),
                'required' => true,
                'query_builder' => function(\Tecnocreaciones\Vzla\EntityBundle\Repository\EntityRepository $er){
                    return $er->getQueryAllActive();
                },
            ))
            ->add('city','entity',array(
                'label' => 'sigtec.city',
                'class' => 'Tecnocreaciones\Vzla\EntityBundle\Entity\City',
                'property' => 'description',
                'empty_value' => 'sigtec.select',
                'required' => true,
                'attr' => array(
                    'class' => 'select blue-gradient glossy replacement input-large auto-refesh',
                    'ng-model' => 'model.city',
                    'ng-options' => 'value as value for (key,value) in cities',
                ),
//                'query_builder' => function(\Tecnocreaciones\Vzla\EntityBundle\Repository\EntityRepository $er) use ($data){
//                    
//                    return $er->getQueryByState($data->getState());
//                },
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
