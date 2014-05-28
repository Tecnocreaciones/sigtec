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
 * Descripcion de planta
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 * @ORM\Table()
 * @ORM\Entity
 */
class PlantDescription
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
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany
     * 
     * @ORM\ManyToOne(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany", inversedBy="plantsDescription")
     */
    private $descriptionAreaCompany;

    /**
     * @var \Coramer\Sigtec\CompanyBundle\Entity\Plant
     * 
     * @ORM\ManyToOne(targetEntity="Coramer\Sigtec\CompanyBundle\Entity\Plant")
     */
    private $plant;

    /**
     * Area de la planta 
     * 
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\Area
     * @ORM\OneToOne(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\Area")
     */
    protected $area;
    
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
     * Set descriptionAreaCompany
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany $descriptionAreaCompany
     * @return PlantDescription
     */
    public function setDescriptionAreaCompany(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany $descriptionAreaCompany = null)
    {
        $this->descriptionAreaCompany = $descriptionAreaCompany;

        return $this;
    }

    /**
     * Get descriptionAreaCompany
     *
     * @return \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany 
     */
    public function getDescriptionAreaCompany()
    {
        return $this->descriptionAreaCompany;
    }

    /**
     * Set plant
     *
     * @param \Coramer\Sigtec\CompanyBundle\Entity\Plant $plant
     * @return PlantDescription
     */
    public function setPlant(\Coramer\Sigtec\CompanyBundle\Entity\Plant $plant = null)
    {
        $this->plant = $plant;

        return $this;
    }

    /**
     * Get plant
     *
     * @return \Coramer\Sigtec\CompanyBundle\Entity\Plant 
     */
    public function getPlant()
    {
        return $this->plant;
    }

    /**
     * Set area
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\Area $area
     * @return PlantDescription
     */
    public function setArea(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\Area $area = null)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Get area
     *
     * @return \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\Area 
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Add areas
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\Area $areas
     * @return PlantDescription
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
}
