<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany;

use Doctrine\ORM\Mapping as ORM;

/**
 * Area de la planta
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 * 
 * @ORM\Table()
 * @ORM\Entity
 */
class Area
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\DescriptionArea
     *
     * @ORM\ManyToOne(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\DescriptionArea", inversedBy="areas")
     */
    protected $descriptionArea;
    
    /**
     * @var Area
     *
     * @ORM\OneToMany(targetEntity="Area", mappedBy="parent")
     */
    protected $areas;
    
    /**
     * @var Area
     *
     * @ORM\ManyToOne(targetEntity="Area", inversedBy="areas")
     */
    protected $parent;
    
    /**
     * @var double
     * 
     * @ORM\Column(name="totalArea", type="float")
     * 
     */
    protected $totalArea = 0;
    
    /**
     * @var double
     * 
     * @ORM\Column(name="coveredArea", type="float")
     */
    protected $coveredArea = 0;
    
    public function __construct()
    {
        $this->areas = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set totalArea
     *
     * @param float $totalArea
     * @return Area
     */
    public function setTotalArea($totalArea)
    {
        $this->totalArea = $totalArea;

        return $this;
    }

    /**
     * Get totalArea
     *
     * @return float 
     */
    public function getTotalArea()
    {
        return $this->totalArea;
    }

    /**
     * Set coveredArea
     *
     * @param float $coveredArea
     * @return Area
     */
    public function setCoveredArea($coveredArea)
    {
        $this->coveredArea = $coveredArea;

        return $this;
    }

    /**
     * Get coveredArea
     *
     * @return float 
     */
    public function getCoveredArea()
    {
        return $this->coveredArea;
    }

    /**
     * Set descriptionArea
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\DescriptionArea $descriptionArea
     * @return Area
     */
    public function setDescriptionArea(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\DescriptionArea $descriptionArea = null)
    {
        $this->descriptionArea = $descriptionArea;

        return $this;
    }

    /**
     * Get descriptionArea
     *
     * @return \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\DescriptionArea 
     */
    public function getDescriptionArea()
    {
        return $this->descriptionArea;
    }

    /**
     * Add areas
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\Area $areas
     * @return Area
     */
    public function addArea(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\Area $areas)
    {
        $this->areas[] = $areas;

        return $this;
    }

    /**
     * Remove areas
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\Area $areas
     */
    public function removeArea(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\Area $areas)
    {
        $this->areas->removeElement($areas);
    }

    /**
     * Get areas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAreas()
    {
        return $this->areas;
    }

    /**
     * Set parent
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\Area $parent
     * @return Area
     */
    public function setParent(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\Area $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\Area 
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Add plantsDescription
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\PlantDescription $plantsDescription
     * @return Area
     */
    public function addPlantsDescription(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\PlantDescription $plantsDescription)
    {
        $this->plantsDescription[] = $plantsDescription;

        return $this;
    }

    /**
     * Remove plantsDescription
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\PlantDescription $plantsDescription
     */
    public function removePlantsDescription(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\PlantDescription $plantsDescription)
    {
        $this->plantsDescription->removeElement($plantsDescription);
    }

    /**
     * Get plantsDescription
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPlantsDescription()
    {
        return $this->plantsDescription;
    }
    
    public function isCoveredAreaValid()
    {
        return ($this->coveredArea <= $this->totalArea);
    }
    
    public function isAreasTotalValid()
    {
        if($this->getAreas()->isEmpty()){
            return true;
        }
        $totalChildrenArea = 0;
        foreach ($this->getAreas() as $area) {
            $totalChildrenArea += $area->getTotalArea();
        }
        
        return ($this->totalArea == $totalChildrenArea);
    }
    
    public function isAreasCoveredValid()
    {
        if($this->getAreas()->isEmpty()){
            return true;
        }
        $totalChildrenArea = 0;
        foreach ($this->getAreas() as $area) {
            $totalChildrenArea += $area->getCoveredArea();
        }
        
        return ($this->coveredArea == $totalChildrenArea);
    }
    
}
