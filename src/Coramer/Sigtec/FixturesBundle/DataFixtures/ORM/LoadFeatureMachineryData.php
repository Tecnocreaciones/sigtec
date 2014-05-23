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
        
        $validationNotBlank = new NotBlank();
        $validationNotNull = new NotNull();
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
                       $validationNotBlank,
                       $validationNotNull,
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
                       $validationNotBlank,
                       $validationNotNull,
                   ),
                   'attr' => array(
                       'class' => 'input small-margin-right validate[required]',
                   ),
                ));
            $manager->persist($featureMachinery);
            $this->addReference('mark', $featureMachinery);
        
        //Tipo de extrusión
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Tipo de equipo(monocapa o multicapa)')
                ->setHelp('sigtec.help.feature_machinery.extrusion_type')
                ->setName('extrusion_type')
                ->setFieldType('choice')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.extrusion_type',
                    'constraints' => array(
                       $validationNotBlank,
                       $validationNotNull,
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
            $this->addReference('extrusion_type', $featureMachinery);
        
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
                       $validationNotBlank,
                       $validationNotNull,
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
                       $validationNotBlank,
                       $validationNotNull,
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
                       $validationNotBlank,
                       $validationNotNull,
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
                       $validationNotBlank,
                       $validationNotNull,
                   ),
                   'precision' => 2,
                   'attr' => array(
                       'class' => 'input small-margin-right validate[required]',
                   ),
                ));
            $manager->persist($featureMachinery);
            $this->addReference('screw_diameter', $featureMachinery);
        
        //Tipo de corte (Bajo agua, Normal)
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Tipo de corte(Bajo agua, Normal)')
                ->setHelp('sigtec.help.feature_machinery.type_cut')
                ->setName('type_cut')
                ->setFieldType('choice')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.type_cut',
                    'constraints' => array(
                       $validationNotBlank,
                       $validationNotNull,
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
                       $validationNotBlank,
                       $validationNotNull,
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
            
            $getResinActive = 'function(\Coramer\Sigtec\ReportTechnicalBundle\Repository\Master\ResinRepository $er) {
                return $er->getQueryBuilderMarketedByCoramer();
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
                       $validationNotBlank,
                       $validationNotNull,
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
                       $validationNotBlank,
                       $validationNotNull,
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
        
        //Resina
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Resina que utiliza')
                ->setHelp('sigtec.help.feature_machinery.resin')
                ->setName('resin')
                ->setFieldType('entity')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.resin',
                    'constraints' => array(
                       $validationNotBlank,
                       $validationNotNull,
                   ),
                   'class' => 'Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Resin',
                   'property' => 'name',
                   'attr' => array(
                       'class' => 'select small-margin-right validate[required]',
                   ),
                ))
                ->setEvalParameters(array(
                   'query_builder' => $getResinActive,
                ))
                ;
            $manager->persist($featureMachinery);
            $this->addReference('resin', $featureMachinery);
        
        //Peso
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Peso del producto que fabrica con este equipo')
                ->setHelp('sigtec.help.feature_machinery.weight')
                ->setName('weight')
                ->setFieldType('number')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.weight',
                    'constraints' => array(
                       $validationNotBlank,
                       $validationNotNull,
                   ),
                   'attr' => array(
                       'class' => 'input input-small small-margin-right validate[required]',
                   ),
                ))
                ;
            $manager->persist($featureMachinery);
            $this->addReference('weight', $featureMachinery);
        
        //Cavidad
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Numero de cavidades del molde')
                ->setHelp('sigtec.help.feature_machinery.cavity')
                ->setName('cavity')
                ->setFieldType('integer')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.cavity',
                    'constraints' => array(
                       $validationNotBlank,
                       $validationNotNull,
                   ),
                   'attr' => array(
                       'class' => 'input input-mini small-margin-right validate[required,integer]',
                   ),
                ))
                ;
            $manager->persist($featureMachinery);
            $this->addReference('cavity', $featureMachinery);
        
        //Piezas por minuto
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Velocidad del equipo en numero de piezas por minuto')
                ->setHelp('sigtec.help.feature_machinery.pieces_min')
                ->setName('pieces_min')
                ->setFieldType('integer')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.pieces_min',
                    'constraints' => array(
                       $validationNotBlank,
                       $validationNotNull,
                   ),
                   'attr' => array(
                       'class' => 'input input-mini small-margin-right validate[required,integer]',
                   ),
                ))
                ;
            $manager->persist($featureMachinery);
            $this->addReference('pieces_min', $featureMachinery);
        
        //Número de hileras
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Número de hileras del equipo')
                ->setHelp('sigtec.help.feature_machinery.number_rows')
                ->setName('number_rows')
                ->setFieldType('integer')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.number_rows',
                    'constraints' => array(
                       $validationNotBlank,
                       $validationNotNull,
                   ),
                   'attr' => array(
                       'class' => 'input input-mini small-margin-right validate[required,integer]',
                   ),
                ))
                ;
            $manager->persist($featureMachinery);
            $this->addReference('number_rows', $featureMachinery);
        
        //Número de orificios
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Número de orificios del equipo')
                ->setHelp('sigtec.help.feature_machinery.number_orifices')
                ->setName('number_orifices')
                ->setFieldType('integer')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.number_orifices',
                    'constraints' => array(
                       $validationNotBlank,
                       $validationNotNull,
                   ),
                   'attr' => array(
                       'class' => 'input input-mini small-margin-right validate[required,integer]',
                   ),
                ))
                ;
            $manager->persist($featureMachinery);
            $this->addReference('number_orifices', $featureMachinery);
        
        //Titulo maximo
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Titulo (denier) máximo que se fabrica con el equipo')
                ->setHelp('sigtec.help.feature_machinery.title_max')
                ->setName('title_max')
                ->setFieldType('number')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.title_max',
                    'constraints' => array(
                       $validationNotBlank,
                       $validationNotNull,
                   ),
                   'attr' => array(
                       'class' => 'input input-mini small-margin-right validate[required,integer]',
                   ),
                ))
                ;
            $manager->persist($featureMachinery);
            $this->addReference('title_max', $featureMachinery);
        
        //Numero de flejes
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Número de flejes que fabrica el equipo')
                ->setHelp('sigtec.help.feature_machinery.number_strips')
                ->setName('number_strips')
                ->setFieldType('integer')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.number_strips',
                    'constraints' => array(
                       $validationNotBlank,
                       $validationNotNull,
                   ),
                   'attr' => array(
                       'class' => 'input input-mini small-margin-right validate[required,integer]',
                   ),
                ))
                ;
            $manager->persist($featureMachinery);
            $this->addReference('number_strips', $featureMachinery);
        
        //Ancho de flejes mm
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Ancho de flejes en milimetro')
                ->setHelp('sigtec.help.feature_machinery.width_strips')
                ->setName('width_strips')
                ->setFieldType('number')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.width_strips',
                    'constraints' => array(
                       $validationNotBlank,
                       $validationNotNull,
                   ),
                   'attr' => array(
                       'class' => 'input input-mini small-margin-right validate[required]',
                   ),
                ))
                ;
            $manager->persist($featureMachinery);
            $this->addReference('width_strips', $featureMachinery);
        
        //Ancho de cabezal mm
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Ancho del cabezal en milimetro. Si tiene varios cabezales indidar el ancho de cada uno.')
                ->setHelp('sigtec.help.feature_machinery.head_width')
                ->setName('head_width')
                ->setFieldType('string')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.head_width',
                    'constraints' => array(
                       $validationNotBlank,
                       $validationNotNull,
                   ),
                   'attr' => array(
                       'class' => 'input input-mini small-margin-right validate[required]',
                   ),
                ))
                ;
            $manager->persist($featureMachinery);
            $this->addReference('head_width', $featureMachinery);
        
        //Ancho máximo mm
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Ancho máximo de lámina que se fabrica con el equipo en milimetros')
                ->setHelp('sigtec.help.feature_machinery.lamina_maximum_width')
                ->setName('lamina_maximum_width')
                ->setFieldType('number')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.lamina_maximum_width',
                    'constraints' => array(
                       $validationNotBlank,
                       $validationNotNull,
                   ),
                   'attr' => array(
                       'class' => 'input input-mini small-margin-right validate[required]',
                   ),
                ))
                ;
            $manager->persist($featureMachinery);
            $this->addReference('lamina_maximum_width', $featureMachinery);
        
        //Espesor máximo mm
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Espesor maximo de lamina que se fabrica con el equipo en milimetros')
                ->setHelp('sigtec.help.feature_machinery.lamina_maximum_thickness')
                ->setName('lamina_maximum_thickness')
                ->setFieldType('number')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.lamina_maximum_thickness',
                    'constraints' => array(
                       $validationNotBlank,
                       $validationNotNull,
                   ),
                   'attr' => array(
                       'class' => 'input input-mini small-margin-right validate[required]',
                   ),
                ))
                ;
            $manager->persist($featureMachinery);
            $this->addReference('lamina_maximum_thickness', $featureMachinery);
        
        //Peso del producto (kg)
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Peso del perfil en kilogramo')
                ->setHelp('sigtec.help.feature_machinery.product_weight')
                ->setName('product_weight')
                ->setFieldType('number')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.product_weight',
                    'constraints' => array(
                       $validationNotBlank,
                       $validationNotNull,
                   ),
                   'attr' => array(
                       'class' => 'input input-mini small-margin-right validate[required]',
                   ),
                ))
                ;
            $manager->persist($featureMachinery);
            $this->addReference('product_weight', $featureMachinery);
        
        //Cortes por minuto
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Velocidad de equipo en número de cortes por minuto')
                ->setHelp('sigtec.help.feature_machinery.court_min')
                ->setName('court_min')
                ->setFieldType('integer')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.court_min',
                    'constraints' => array(
                       $validationNotBlank,
                       $validationNotNull,
                   ),
                   'attr' => array(
                       'class' => 'input input-mini small-margin-right validate[required]',
                   ),
                ))
                ;
            $manager->persist($featureMachinery);
            $this->addReference('court_min', $featureMachinery);
        
        //Rango diametro (mm)
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Rango de diámetros de tubos (mín-máx) que se fabrica con el equipo en milimetros')
                ->setHelp('sigtec.help.feature_machinery.diameter_range')
                ->setName('diameter_range')
                ->setFieldType('string')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.diameter_range',
                    'constraints' => array(
                       $validationNotBlank,
                       $validationNotNull,
                   ),
                   'attr' => array(
                       'class' => 'input input-mini small-margin-right validate[required]',
                   ),
                ))
                ;
            $manager->persist($featureMachinery);
            $this->addReference('diameter_range', $featureMachinery);
        
        //Rango espesor (mm)
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Rango de espesores de tubos (mín-máx) que se fabrica con el equipo en milimetros')
                ->setHelp('sigtec.help.feature_machinery.thickness_range')
                ->setName('thickness_range')
                ->setFieldType('string')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.thickness_range',
                    'constraints' => array(
                       $validationNotBlank,
                       $validationNotNull,
                   ),
                   'attr' => array(
                       'class' => 'input input-mini small-margin-right validate[required]',
                   ),
                ))
                ;
            $manager->persist($featureMachinery);
            $this->addReference('thickness_range', $featureMachinery);
        
        //Tipo de cabezal
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('"AC" si es acumulador o "EC" si es de extrusión continua')
                ->setHelp('sigtec.help.feature_machinery.head_type')
                ->setName('head_type')
                ->setFieldType('choice')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.head_type',
                    'constraints' => array(
                       $validationNotBlank,
                       $validationNotNull,
                   ),
                   'attr' => array(
                       'class' => 'select input-small small-margin-right validate[required]',
                   ),
                   'choices' => array(
                       'AC' => 'Acumulador',
                       'EC' => 'Extrusión continua',
                   )
                ))
                ;
            $manager->persist($featureMachinery);
            $this->addReference('head_type', $featureMachinery);
        
        //Estaciones
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Numero de estaciones')
                ->setHelp('sigtec.help.feature_machinery.station')
                ->setName('station')
                ->setFieldType('integer')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.station',
                    'constraints' => array(
                       $validationNotBlank,
                       $validationNotNull,
                   ),
                   'attr' => array(
                       'class' => 'input input-mini small-margin-right validate[required]',
                   ),
                ))
                ;
            $manager->persist($featureMachinery);
            $this->addReference('station', $featureMachinery);
        
        //Capacidad de envase (Litros)
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Capacidad del envase (Litros)')
                ->setHelp('sigtec.help.feature_machinery.container_capacity')
                ->setName('container_capacity')
                ->setFieldType('integer')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.container_capacity',
                    'constraints' => array(
                       $validationNotBlank,
                       $validationNotNull,
                   ),
                   'attr' => array(
                       'class' => 'input input-mini small-margin-right validate[required]',
                   ),
                ))
                ;
            $manager->persist($featureMachinery);
            $this->addReference('container_capacity', $featureMachinery);
        
        //Tipo de corte de parison
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Capacidad del envase (Litros)')
                ->setHelp('sigtec.help.feature_machinery.type_cut_parison')
                ->setName('type_cut_parison')
                ->setFieldType('choice')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.type_cut_parison',
                    'constraints' => array(
                       $validationNotBlank,
                       $validationNotNull,
                   ),
                   'attr' => array(
                       'class' => 'select input-small small-margin-right validate[required]',
                   ),
                    'choices' => array(
                       'CC' => 'Cuchilla caliente',
                       'CF' => 'Cuchilla fria',
                       'CB' => 'Corte con cabezal',
                   )
                ))
                ;
            $manager->persist($featureMachinery);
            $this->addReference('type_cut_parison', $featureMachinery);
        
        //Ciclos (segundos)
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Tiempo total de ciclos (segundos)')
                ->setHelp('sigtec.help.feature_machinery.cycle')
                ->setName('cycle')
                ->setFieldType('integer')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.cycle',
                    'constraints' => array(
                       $validationNotBlank,
                       $validationNotNull,
                   ),
                   'attr' => array(
                       'class' => 'input input-small small-margin-right validate[required]',
                   ),
                ))
                ;
            $manager->persist($featureMachinery);
            $this->addReference('cycle', $featureMachinery);
        
        //Peso(gramo) / Ciclo(segundos)
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Peso del envase en gramos y el tiempo total del ciclo en segundos')
                ->setHelp('sigtec.help.feature_machinery.weight_cycle')
                ->setName('weight_cycle')
                ->setFieldType('integer')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.weight_cycle',
                    'constraints' => array(
                       $validationNotBlank,
                       $validationNotNull,
                   ),
                   'attr' => array(
                       'class' => 'input input-small small-margin-right validate[required]',
                   ),
                ))
                ;
            $manager->persist($featureMachinery);
            $this->addReference('weight_cycle', $featureMachinery);
        
            //nro (Numero)
            //mark (Marca)
            //extrusion_type (Tipo de extrusión)
            //maximum_capacity (Capacidad maxima)
            //year_manufacture (Año de fabricacion)
            //screw_type (Tipo de tornillo)
            //screw_diameter (Diámetro de tornillo)
            //type_cut (Tipo de corte (Bajo agua, Normal))
            //operating_time (Tiempo de operación)
            //main_product (Producto principal)
            //plant (Planta)
            //weight (Peso g)
            //cavity (Cavidad)
            //pieces_min (Piezas por minuto)
            //number_rows (Número de hileras)
            //number_orifices (Número de orificios)
            //title_max (Titulo maximo)
            //number_strips (Numero de flejes)
            //width_strips (Ancho de flejes (mm))
            //head_width (Ancho de cabezal (mm))
            //lamina_maximum_width (Ancho máximo de lamina (mm))
            //lamina_maximum_thickness (Espesor máximo de lamina (mm))
            //product_weight (Peso del producto (kg))
            //court_min (Cortes por minuto)
            //diameter_range (Rango diametro (mm))
            //thickness_range (Rango espesor (mm))
            //head_type (Tipo de cabezal)
            //station (Estaciones)
            //container_capacity (Capacidad de envase (Litros))
            //resin (Resina)
            //type_cut_parison (Tipo de corte de parison)
            //cycle (Ciclos (segundos))
            //weight_cycle (Peso(gramo) / Ciclo(segundos))
            
        $manager->flush();
    }

    public function getOrder() {
        return 1;
    }

    public function setContainer(\Symfony\Component\DependencyInjection\ContainerInterface $container = null) {
        $this->container = $container;
    }

}
