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

use Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Supplier;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Description of LoadSupplierData
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class LoadSupplierData implements FixtureInterface
{
    public function load(ObjectManager $manager) {
        $supplier = new Supplier();
        $supplier->setDescription('Accel Color');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Adelco');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('American Mineral');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Ampacet de Venezuela  C.A. (AMPVECA)');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Andes Plast');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Andina Plast');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Andiquímica');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Ataquim');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Baerlocher');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('C.A. Venezolana de Pigmentos, CAVENPI');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Carboquímica');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Carpa');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Cenco - Zotti S.A.');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Chemical Containment Andina');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Chempol C.A.');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Chemson');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Ciba SC (BASF)');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Clariant S.A.');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Colorquímica S.A.');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Colorflex C.A.');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Comai LTDA.');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Cromex');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Compañía Química S.A.');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Cromalast');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Disan Venezuela C.A.');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Distriquim C.A.');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Dow Chemical Company');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('DuPont');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('FACI');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Ferro de Venezuela');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Fertiquim C.A.');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('First Quality Chemicals');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Gemaquin');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Gomas Tufresa C.A.');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Gravinil S.A.');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Grupo Marzullo C.A.');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('H.O. Química Dh C.A.');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Henkel Venezolana S.A.');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Holanda Venezuela C.A.');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Honeywell C.A.');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Importadora Chromit C.A.');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Industrias Químicas Carabobo C.A.');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Interlink 18');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Distribuidora de Polímeros Venezolanos C.A., Dipolvenca');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Industrias Plásticas Unidas, IPUSA');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Kenfar');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Lehmann & Voss & Co.');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('M y M Plásticos C.A.');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Materias Primas Plásticas, Mapriplast 86');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Microcargas');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Micronizados Caribe C.A.');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Mitsui');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Multiceras Los Llanos');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Mundoplas C.A.');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Mymaica');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Negroven C.A.');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Tintaflex');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('OMYA');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('PDVSA');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Petco');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Petriquímica Sima');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Petroquimica Trasandina');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Pinturas Industriales Crepúsculo C.A., Pincreca');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Polimer C. A.');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('PolyOne');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Polytech Venezuela');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Distribuidora Prosequim C.A.');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Prochimica');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Promineral');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Proquim C.A.');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Quibarca');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Quideco C.A.');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Quimaca');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Quimagor');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Quimisol C.A.');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Quimitec C.A.');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Reagens');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Reinco C.A.');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Rohm and Haas');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Sandoz - Novartis');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Schill Seilacher');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('A. Schulman');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Seapex Fine Chemicals');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Sima Química');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Sinteticos Especiales C.A, Sinesca');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Solven C.A.');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Spectra Color C.A.');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Spray Química C.A.');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Standridge Color Corporation');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Suministros Químicos C.A.');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Disan');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Marivelca C.A.');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Sun Chemical');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Tianjin Zhongxin Chemtech Co., Ltd (ZXCHEM)');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Color Químicas S.A., Colquim');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Symphony Environmental Technologies plc (SYMPHONY)');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Tecniproyectos RG C.A.');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Tramaco GmbH');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Unión Intercontinental Gas C.A., UNIGAS');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Unimim Prominerales S.A. y Petrofert ');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Petrofert C.A.');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Vencomplast C.A.');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Plasquim C.A. (Venox)');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('VIBA');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Momentive Specialty Chemicals Inc');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Representaciones Wigoquim C.A.');
            $manager->persist($supplier);
            
        $supplier = new Supplier();
        $supplier->setDescription('Willow Ridge Plastics Inc.');
            $manager->persist($supplier);
            
        $manager->flush();
        
    }
}
