<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Coramer\Sigtec\FixturesBundle\DataFixtures\ORM;

use Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\FeatureMachinery;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\NotNull;

/**
 * Data de las caracteristicas de las maquinarias
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class LoadFeatureMachineryData extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface, ContainerAwareInterface
{
    /**
     *
     * @var \Symfony\Component\DependencyInjection\ContainerInterface
     */
    private $container;
    
    public function load(ObjectManager $manager) {
        //Numero
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Numero de maquinarias con las mismas caracteristicas y uso')
                ->setHelp('sigtec.help.feature_machinery.nro')
                ->setName('number')
                ->setFieldType('integer')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.nro',
                    'constraints' => array(
                       new NotBlank(),
                       new NotNull(),
                   ),
                   'attr' => array(
                       'class' => 'input small-margin-right validate[required,integer]',
                   ),
                ));
            $manager->persist($featureMachinery);
            $this->addReference('nro', $featureMachinery);
        
        //Marca
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Marca del equipo')
                ->setHelp('sigtec.help.feature_machinery.mark')
                ->setName('mark')
                ->setFieldType('text')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.mark',
                    'constraints' => array(
                       new NotBlank(),
                       new NotNull(),
                   ),
                   'attr' => array(
                       'class' => 'input small-margin-right validate[required]',
                   ),
                ));
            $manager->persist($featureMachinery);
            $this->addReference('mark', $featureMachinery);
        
        //Tipo
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Tipo de equipo(monocapa o multicapa)')
                ->setHelp('sigtec.help.feature_machinery.type')
                ->setName('type')
                ->setFieldType('choice')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.type',
                    'constraints' => array(
                       new NotBlank(),
                       new NotNull(),
                   ),
                    'choices' => array(
                        'MC' => 'MC (Monocapa)',
                        'CE' => 'CE (Multicapa)',
                    ),
                    'attr' => array(
                       'class' => 'select small-margin-right validate[required]',
                   ),
                ));
            $manager->persist($featureMachinery);
            $this->addReference('type', $featureMachinery);
        
        //Capacidad maxima
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Capacidad maxima de procesamiento de resina en k/h')
                ->setHelp('sigtec.help.feature_machinery.maximum_capacity')
                ->setName('maximum_capacity')
                ->setFieldType('integer')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.maximum_capacity',
                    'constraints' => array(
                       new NotBlank(),
                       new NotNull(),
                   ),
                  'attr' => array(
                       'class' => 'input small-margin-right validate[required,integer]',
                   ),
                ));
            $manager->persist($featureMachinery);
            $this->addReference('maximum_capacity', $featureMachinery);
        
        //Año de fabricacion
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Año de fabricacion del producto')
                ->setHelp('sigtec.help.feature_machinery.year_manufacture')
                ->setName('year_manufacture')
                ->setFieldType('integer')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.year_manufacture',
                    'constraints' => array(
                       new NotBlank(),
                       new NotNull(),
                   ),
                    'attr' => array(
                       'class' => 'input small-margin-right validate[required,integer]',
                   ),
                ));
            $manager->persist($featureMachinery);
            $this->addReference('year_manufacture', $featureMachinery);
        
        //Tipo de tornillo
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Tipo de tornillo')
                ->setHelp('sigtec.help.feature_machinery.screw_type')
                ->setName('screw_type')
                ->setFieldType('choice')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.screw_type',
                    'constraints' => array(
                       new NotBlank(),
                       new NotNull(),
                   ),
                   'choices' => array(
                       'ES' => 'Tornillo estandar',
                       'PM' => 'Punta mezcladora',
                       'TB' => 'Posee barrera',
                       'DT' => 'Doble Tornillo',
                   ),
                    'attr' => array(
                       'class' => 'select small-margin-right validate[required]',
                   ),
                ));
            $manager->persist($featureMachinery);
            $this->addReference('screw_type', $featureMachinery);
        
        //Diámetro de tornillo
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Diametro de tornillo en milimetros')
                ->setHelp('sigtec.help.feature_machinery.screw_diameter')
                ->setName('screw_diameter')
                ->setFieldType('number')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.screw_diameter',
                    'constraints' => array(
                       new NotBlank(),
                       new NotNull(),
                   ),
                   'precision' => 2,
                   'attr' => array(
                       'class' => 'input small-margin-right validate[required]',
                   ),
                ));
            $manager->persist($featureMachinery);
            $this->addReference('screw_diameter', $featureMachinery);
        
        //Tipo de corte
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Tipo de corte')
                ->setHelp('sigtec.help.feature_machinery.type_cut')
                ->setName('type_cut')
                ->setFieldType('choice')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.type_cut',
                    'constraints' => array(
                       new NotBlank(),
                       new NotNull(),
                   ),
                   'choices' => array(
                       'CA' => 'Bajo agua',
                       'CN' => 'Normal',
                   ),
                   'attr' => array(
                       'class' => 'select small-margin-right validate[required]',
                   ),
                ));
            $manager->persist($featureMachinery);
            $this->addReference('type_cut', $featureMachinery);
        
        //Tiempo de operación
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Numeros de dias al mes que trabaja el equipo')
                ->setHelp('sigtec.help.feature_machinery.operating_time')
                ->setName('operating_time')
                ->setFieldType('integer')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.operating_time',
                    'constraints' => array(
                       new NotBlank(),
                       new NotNull(),
                   ),
                   'attr' => array(
                       'class' => 'select small-margin-right validate[required]',
                   ),
                ));
            $manager->persist($featureMachinery);
            $this->addReference('operating_time', $featureMachinery);
            $getProductActive ='function (\Coramer\Sigtec\ReportTechnicalBundle\Repository\Master\ProductRepository $er){
                 return $er->getQueryAllActive();
            };';
            
            $getPlantActive = 'function(\Coramer\Sigtec\CompanyBundle\Repository\PlantRepository $er) use ($company){
                return $er->getQueryBuilderAllActiveByCompany($company);
            };';
            
        //Producto principal
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Numeros de dias al mes que trabaja el equipo')
                ->setHelp('sigtec.help.feature_machinery.main_product')
                ->setName('main_product')
                ->setFieldType('entity')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.main_product',
                    'constraints' => array(
                       new NotBlank(),
                       new NotNull(),
                   ),
                   'class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Product',
                   'property' => 'description',
                   'attr' => array(
                       'class' => 'select small-margin-right validate[required]',
                   ),
                ))
                ->setEvalParameters(array(
                   'query_builder' => $getProductActive
                ))
                ;
            $manager->persist($featureMachinery);
            $this->addReference('main_product', $featureMachinery);
        
        //Planta
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Lugar de ubicacion del equipo')
                ->setHelp('sigtec.help.feature_machinery.plant')
                ->setName('plant')
                ->setFieldType('entity')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.plant',
                    'constraints' => array(
                       new NotBlank(),
                       new NotNull(),
                   ),
                   'class' => 'Coramer\Sigtec\CompanyBundle\Entity\Plant',
                   'property' => 'name',
                   'attr' => array(
                       'class' => 'select small-margin-right validate[required]',
                   ),
                ))
                ->setEvalParameters(array(
                   'query_builder' => $getPlantActive,
                ))
                ;
            $manager->persist($featureMachinery);
            $this->addReference('plant', $featureMachinery);
        
        $manager->flush();
    }

    public function getOrder() {
        return 1;
    }

    public function setContainer(\Symfony\Component\DependencyInjection\ContainerInterface $container = null) {
        $this->container = $container;
    }

}
