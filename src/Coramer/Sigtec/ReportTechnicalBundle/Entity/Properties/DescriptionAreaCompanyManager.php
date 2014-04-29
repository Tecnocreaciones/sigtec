<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties;

use Doctrine\ORM\EntityManager;

/**
 * Description of DescriptionAreaCompanyManager
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class DescriptionAreaCompanyManager
{
    /**
     *
     * @var \Doctrine\ORM\EntityManager
     */
    protected $em;
    
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }
    
    public function create()
    {
        return new DescriptionAreaCompany();
    }
    
    function build(\Coramer\Sigtec\CompanyBundle\Entity\Company $company, $andFlush = true) 
    {
        $descriptionAreaCompany = $this->create();
        $plants = $this->em->getRepository('Coramer\Sigtec\CompanyBundle\Entity\Plant')->getAllActiveByCompany($company);
        $descriptionAreas = $this->em->getRepository('Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\DescriptionArea')->getAllParentActive();
        
        foreach ($plants as $plant) {
            $plantDescription = $this->createNewPlantDescription();
            foreach ($descriptionAreas as $descriptionArea) {
                $area = $this->creatNewArea();
                $area->setDescriptionArea($descriptionArea);
                foreach ($descriptionArea->getDescriptionAreas() as $subDescriptionArea) {
                    $subArea = $this->creatNewArea();
                    $subArea->setDescriptionArea($subDescriptionArea);
                    $subArea->setParent($area);

                    $this->em->persist($subArea);
                }
                $this->em->persist($area);
            }
            
            $plantDescription
                    ->setPlant($plant)
                    ->setArea($area)
                    ->setDescriptionAreaCompany($descriptionAreaCompany)
                    ;
            $this->em->persist($plantDescription);
            
            $descriptionAreaCompany->addPlantsDescription($plantDescription);
        }
        $this->em->persist($descriptionAreaCompany);
        if($andFlush){
            $this->em->flush();
        }
        
        return $descriptionAreaCompany;
    }
    
    /**
     * 
     * @return \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\PlantDescription
     */
    function createNewPlantDescription()
    {
        return new DescriptionAreaCompany\PlantDescription();
    }
    
    /**
     * 
     * @return \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\Area
     */
    function creatNewArea()
    {
        return new \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\Area();
    }
}
