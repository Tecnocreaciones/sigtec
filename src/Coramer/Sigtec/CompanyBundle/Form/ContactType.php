<?php

namespace Coramer\Sigtec\CompanyBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContactType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName',null,array(
                'label' => 'sigtec.first_name',
                'attr' => array(
                    'class' => 'input'
                ),
            ))
            ->add('lastName',null,array(
                'label' => 'sigtec.last_name',
                'attr' => array(
                    'class' => 'input'
                ),
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
            ->add('charge',null,array(
                'label' => 'sigtec.charge',
                'attr' => array(
                    'class' => 'input'
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
            'data_class' => 'Coramer\Sigtec\CompanyBundle\Entity\Contact'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'coramer_sigtec_companybundle_contact';
    }
}
