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
        
        //Capacidad maxima (k/h)
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
        
        //Perfil recubierto (Producto)
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Producto que se recubre')
                ->setHelp('sigtec.help.feature_machinery.profile_coated')
                ->setName('profile_coated')
                ->setFieldType('entity')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.profile_coated',
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
            $this->addReference('profile_coated', $featureMachinery);
        
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
                ->setFieldType('text')
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
        
        //Espesor máximo (milimetro)
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Espesor maximo del producto que se fabrica con el equipo en milimetros')
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
                ->setFieldType('text')
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
                ->setFieldType('text')
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
        
        //Fuerza de cierre (Tonelada)
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Fuerza de cierre del equipo en toneladas')
                ->setHelp('sigtec.help.feature_machinery.closing_force')
                ->setName('closing_force')
                ->setFieldType('integer')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.closing_force',
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
            $this->addReference('closing_force', $featureMachinery);
        
        //Tipo de Mezclado
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Tipo de mezclado')
                ->setHelp('sigtec.help.feature_machinery.type_mixed')
                ->setName('type_mixed')
                ->setFieldType('choice')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.type_mixed',
                    'constraints' => array(
                       $validationNotBlank,
                       $validationNotNull,
                   ),
                   'attr' => array(
                       'class' => 'select input-small small-margin-right validate[required]',
                   ),
                    'choices' => array(
                       0 => 'Turbomezclador',
                       1 => 'Mezclador de baja velocidad',
                   )
                ))
                ;
            $manager->persist($featureMachinery);
            $this->addReference('type_mixed', $featureMachinery);
            
        //Tiempo de mezclado (minutos)
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Tiempo de mezclado en minutos')
                ->setHelp('sigtec.help.feature_machinery.mixing_time')
                ->setName('mixing_time')
                ->setFieldType('integer')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.mixing_time',
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
            $this->addReference('mixing_time', $featureMachinery);
            
        //Capacidad de carga de mezcla (kilogramo)
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Capacidad de carga de mezcla en kilogramos')
                ->setHelp('sigtec.help.feature_machinery.load_capacity')
                ->setName('load_capacity')
                ->setFieldType('integer')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.load_capacity',
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
            $this->addReference('load_capacity', $featureMachinery);
            
        //Espesor del recubrimiento (milimetros)
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Capacidad de carga de mezcla en kilogramos')
                ->setHelp('sigtec.help.feature_machinery.coating_thickness')
                ->setName('coating_thickness')
                ->setFieldType('integer')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.coating_thickness',
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
            $this->addReference('coating_thickness', $featureMachinery);
            
        //Ancho maximo de recubrimiento (milimetros)
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Ancho maximo de recubrimiento en milimetros')
                ->setHelp('sigtec.help.feature_machinery.maximum_width_coating')
                ->setName('maximum_width_coating')
                ->setFieldType('integer')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.maximum_width_coating',
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
            $this->addReference('maximum_width_coating', $featureMachinery);
            
        //Espesor maximo de recubrimiento (milimetros)
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Espesor maximo de recubrimiento en milimetros')
                ->setHelp('sigtec.help.feature_machinery.maximum_coating_thickness')
                ->setName('maximum_coating_thickness')
                ->setFieldType('integer')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.maximum_coating_thickness',
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
            $this->addReference('maximum_coating_thickness', $featureMachinery);
            
        //Sistema de calefaccion
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Sistema de calefacción que utiliza el equipo (flama, horno, etc)')
                ->setHelp('sigtec.help.feature_machinery.heating_system')
                ->setName('heating_system')
                ->setFieldType('text')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.heating_system',
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
            $this->addReference('heating_system', $featureMachinery);
            
        //Numero de moldes
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Número de moldes que tiene el equipo')
                ->setHelp('sigtec.help.feature_machinery.number_molds')
                ->setName('number_molds')
                ->setFieldType('integer')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.number_molds',
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
            $this->addReference('number_molds', $featureMachinery);
            
        //Potencia del motor(Caballo de potencia HP)
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Potencia del motor de corte en caballo de potencia(HP)')
                ->setHelp('sigtec.help.feature_machinery.motor_power')
                ->setName('motor_power')
                ->setFieldType('integer')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.motor_power',
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
            $this->addReference('motor_power', $featureMachinery);
            
        //Tamaño de particula
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Tamaño promedio de particula que se obtiene con el equipo')
                ->setHelp('sigtec.help.feature_machinery.particle_size')
                ->setName('particle_size')
                ->setFieldType('integer')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.particle_size',
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
            $this->addReference('particle_size', $featureMachinery);
            
        //Tipo de refrigeración
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Tipo de refrigeracion que utiliza el equipo')
                ->setHelp('sigtec.help.feature_machinery.refrigeration_type')
                ->setName('refrigeration_type')
                ->setFieldType('text')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.refrigeration_type',
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
            $this->addReference('refrigeration_type', $featureMachinery);
            
        //Diámetro de rodillos (milimetros)
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Diametro de los rodillos en milimetros')
                ->setHelp('sigtec.help.feature_machinery.roller_diameter')
                ->setName('roller_diameter')
                ->setFieldType('integer')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.roller_diameter',
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
            $this->addReference('roller_diameter', $featureMachinery);
            
        //Ancho calandra (milimetros)
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Ancho de la calandra en milimetros')
                ->setHelp('sigtec.help.feature_machinery.width_calender')
                ->setName('width_calender')
                ->setFieldType('integer')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.width_calender',
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
            $this->addReference('width_calender', $featureMachinery);
            
        //Ancho maximo (milimetros)
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Ancho maximo del producto fabricado en milimetros')
                ->setHelp('sigtec.help.feature_machinery.maximum_width')
                ->setName('maximum_width')
                ->setFieldType('integer')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.maximum_width',
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
            $this->addReference('maximum_width', $featureMachinery);
            
        //Espesor máximo (milimetros)
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Espesor maximo del producto fabricado en milimetros')
                ->setHelp('sigtec.help.feature_machinery.maximum_thickness')
                ->setName('maximum_thickness')
                ->setFieldType('integer')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.maximum_thickness',
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
            $this->addReference('maximum_thickness', $featureMachinery);
            
        //Ancho del equipo (milimetros)
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Ancho del equipo en milimetros')
                ->setHelp('sigtec.help.feature_machinery.width')
                ->setName('width')
                ->setFieldType('integer')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.width',
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
            $this->addReference('width', $featureMachinery);
            
        //Velocidad lineal (metros/minutos)
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Velocidad lineal promedio del equipo en metros por minutos')
                ->setHelp('sigtec.help.feature_machinery.linear_velocity')
                ->setName('linear_velocity')
                ->setFieldType('integer')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.linear_velocity',
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
            $this->addReference('linear_velocity', $featureMachinery);
            
        //Cantidad de colores
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Numero maximo de colores que se imprimen en el equipo')
                ->setHelp('sigtec.help.feature_machinery.number_colors')
                ->setName('number_colors')
                ->setFieldType('integer')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.number_colors',
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
            $this->addReference('number_colors', $featureMachinery);
            
        //Tipo de impresión
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Tipo de impresión')
                ->setHelp('sigtec.help.feature_machinery.type_printing')
                ->setName('type_printing')
                ->setFieldType('text')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.type_printing',
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
            $this->addReference('type_printing', $featureMachinery);
            
        //Caracteristicas
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Caracteristicas del equipo')
                ->setHelp('sigtec.help.feature_machinery.characteristics')
                ->setName('characteristics')
                ->setFieldType('textarea')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.characteristics',
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
            $this->addReference('characteristics', $featureMachinery);
            
        //Observaciones
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Observaciones del equipo')
                ->setHelp('sigtec.help.feature_machinery.observations')
                ->setName('observations')
                ->setFieldType('textarea')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.observations',
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
            $this->addReference('observations', $featureMachinery);
            
        //Velocidad de impresión (gmp, m/min)
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Velocidad de impresión en golpes por minutos (gpm) o en metros por minutos (m/min)')
                ->setHelp('sigtec.help.feature_machinery.printing_speed')
                ->setName('printing_speed')
                ->setFieldType('double')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.printing_speed',
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
            $this->addReference('printing_speed', $featureMachinery);

        //Tipo de adhesivo
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Tipo de adhesivo (Con solvente, Sin solvente)')
                ->setHelp('sigtec.help.feature_machinery.type_adhesive')
                ->setName('type_adhesive')
                ->setFieldType('choice')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.type_adhesive',
                    'constraints' => array(
                       $validationNotBlank,
                       $validationNotNull,
                   ),
                    'choices' => array(
                        0 => 'Con solvente',
                        1 => 'Sin solvente',
                    ),
                    'attr' => array(
                       'class' => 'select small-margin-right validate[required]',
                   ),
                ));
            $manager->persist($featureMachinery);
            $this->addReference('type_adhesive', $featureMachinery);
            
        //Numero de capas
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Número de capas')
                ->setHelp('sigtec.help.feature_machinery.number_layers')
                ->setName('number_layers')
                ->setFieldType('integer')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.number_layers',
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
            $this->addReference('number_layers', $featureMachinery);
            
        //Tipo de sellado
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Tipo de sellado')
                ->setHelp('sigtec.help.feature_machinery.sealing_type')
                ->setName('sealing_type')
                ->setFieldType('text')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.sealing_type',
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
            $this->addReference('sealing_type', $featureMachinery);
            
        //Pistas
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Número de pistas que posee el equipo')
                ->setHelp('sigtec.help.feature_machinery.tracks')
                ->setName('tracks')
                ->setFieldType('integer')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.tracks',
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
            $this->addReference('tracks', $featureMachinery);
            
        //Velocidad de sellado (gpm)
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Velocidad de sellado en golpes por minutos (gpm)')
                ->setHelp('sigtec.help.feature_machinery.sealing_velocity')
                ->setName('sealing_velocity')
                ->setFieldType('integer')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.sealing_velocity',
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
            $this->addReference('sealing_velocity', $featureMachinery);
            
        //Tipo de tejido (Tubular,Plano)
        $featureMachinery = new FeatureMachinery();
        $featureMachinery
                ->setDescription('Tipo de tejido')
                ->setHelp('sigtec.help.feature_machinery.type_tissue')
                ->setName('type_tissue')
                ->setFieldType('choice')
                ->setParameters(array(
                    'label' => 'sigtec.feature_machinery.type_tissue',
                    'constraints' => array(
                       $validationNotBlank,
                       $validationNotNull,
                   ),
                    'choices' => array(
                        0 => 'Tubular',
                        1 => 'Plano',
                    ),
                    'attr' => array(
                       'class' => 'select small-margin-right validate[required]',
                   ),
                ));
            $manager->persist($featureMachinery);
            $this->addReference('type_tissue', $featureMachinery);
            
            //nro (Numero)
            //mark (Marca)
            //extrusion_type (Tipo de extrusión)
            //maximum_capacity (Capacidad maxima (k/h))
            //year_manufacture (Año de fabricacion)
            //screw_type (Tipo de tornillo)
            //screw_diameter (Diámetro de tornillo)
            //type_cut (Tipo de corte (Bajo agua, Normal))
            //operating_time (Tiempo de operación)
            //main_product (Producto principal)
            //plant (Planta)
            //weight (Peso (gramo))
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
            //closing_force (Fuerza de cierre (Tonelada))
            //type_mixed (Tipo de Mezclado)
            //mixing_time (Tiempo de mezclado (minutos))
            //load_capacity (Capacidad de carga de mezcla (kilogramo))
            //profile_coated (Perfil recubierto (Producto))
            //coating_thickness (Espesor del recubrimiento (milimetros))
            //maximum_width_coating (Ancho maximo de recubrimiento (milimetros))
            //maximum_coating_thickness (Espesor maximo de recubrimiento (milimetros))
            //heating_system (Sistema de calefaccion)
            //number_molds (Numero de moldes)
            //motor_power (Potencia del motor(Caballo de potencia HP))
            //particle_size (Tamaño de particula)
            //refrigeration_type (Tipo de refrigeración)
            //roller_diameter (Diámetro de rodillos (milimetros))
            //width_calender (Ancho calandra (milimetros))
            //maximum_width (Ancho maximo (milimetros))
            //maximum_thickness (Espesor máximo (milimetros))
            //width (Ancho del equipo (milimetros))
            //linear_velocity (Velocidad lineal (metros/minutos))
            //number_colors (Cantidad de colores)
            //type_printing (Tipo de impresión)
            //characteristics (Caracteristicas)
            //observations (Observaciones)
            //printing_speed (Velocidad de impresión (gmp, m/min))
            //type_adhesive (Tipo de adhesivo)
            //number_layers (Número de capas)
            //sealing_type (Tipo de sellado)
            //tracks (Pistas)
            //sealing_velocity (Velocidad de sellado (gpm))
            //type_tissue (Tipo de tejido (Tubular,Plano))
            
        $manager->flush();
    }

    public function getOrder() {
        return 1;
    }

    public function setContainer(\Symfony\Component\DependencyInjection\ContainerInterface $container = null) {
        $this->container = $container;
    }

}
