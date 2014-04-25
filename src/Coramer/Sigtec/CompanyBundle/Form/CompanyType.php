<?php

namespace Coramer\Sigtec\CompanyBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CompanyType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $company = $builder->getData();
        $disabled = false; 
        if($company->isRifValidated()){
           $disabled = true; 
        }
        $builder
            ->add('rif',null,array(
                'label' => 'sigtec.rif',
                'attr' => array(
                    'class' => 'input small-margin-right',
                    'title' => '(X-12345678-9)'
                    ),
                'disabled' => $disabled,
            ))
            ->add('name',null,array(
                'label' => 'sigtec.name',
                'attr' => array('class' => 'input small-margin-right'),
                'disabled' => $disabled,
            ))
            ->add('email',null,array(
                'label' => 'sigtec.email',
                'attr' => array('class' => 'input small-margin-right'),
            ))
            ->add('status',null,array(
                'label' => 'sigtec.status',
                'attr' => array('class' => 'switch medium wider mid-margin-right'),
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
            'data_class' => 'Coramer\Sigtec\CompanyBundle\Entity\Company'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'coramer_sigtec_companybundle_company';
    }
}
