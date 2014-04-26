<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Coramer\Sigtec\ReportTechnicalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Description of CompanyType
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class CompanyFieldType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('company','entity',array(
                'label' => 'sigtec.company',
                'class' => 'Coramer\Sigtec\CompanyBundle\Entity\Company',
                'property' => 'rif',
                'empty_value' => 'sigtec.select',
                'attr' => array(
                    'class' => 'select blue-gradient replacement glossy input-large',
                ),
                'required' => true,
                'query_builder' => function(\Tecnocreaciones\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository $er){
                    return $er->getQueryAllCompanyCurrentClient();
                },
            ))
        ;
    }
    
    /**
     * @return string
     */
    public function getName()
    {
        return 'coramer_sigtec_reporttechnicalbundle_reporttechnical_company';
    }
}
