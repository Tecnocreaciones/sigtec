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

use Doctrine\ORM\Mapping as ORM;

/**
 * Descripcion de las areas de la compañia
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 * @ORM\Table()
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class DescriptionAreaCompany
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
     * Descripcion de las plantas
     * 
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\PlantDescription
     * @ORM\OneToMany(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\PlantDescription", mappedBy="descriptionAreaCompany")
     */
    protected $plantsDescription;
    
    /**
     * Detalles de almacenaje del producto
     * 
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\DetailProductStorage
     * @ORM\OneToMany(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\DetailProductStorage", mappedBy="descriptionAreaCompany")
     */
    protected $detailProductStorages;
    
    /**
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\ReportTechnical
     * 
     * @ORM\OneToOne(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\ReportTechnical",mappedBy="descriptionAreaCompany")
     */
    private $reportTechnical;
    
    public function __construct() {
        $this->plantsDescription = new \Doctrine\Common\Collections\ArrayCollection();
        $this->detailProductStorages = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add plantsDescription
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\PlantDescription $plantsDescription
     * @return DescriptionAreaCompany
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

    /**
     * Add detailProductStorages
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\DetailProductStorage $detailProductStorages
     * @return DescriptionAreaCompany
     */
    public function addDetailProductStorage(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\DetailProductStorage $detailProductStorages)
    {
        $this->detailProductStorages[] = $detailProductStorages;

        return $this;
    }

    /**
     * Remove detailProductStorages
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\DetailProductStorage $detailProductStorages
     */
    public function removeDetailProductStorage(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\DetailProductStorage $detailProductStorages)
    {
        $this->detailProductStorages->removeElement($detailProductStorages);
    }

    /**
     * Get detailProductStorages
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDetailProductStorages()
    {
        return $this->detailProductStorages;
    }

    /**
     * Set reportTechnical
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\ReportTechnical $reportTechnical
     * @return DescriptionAreaCompany
     */
    public function setReportTechnical(\Coramer\Sigtec\ReportTechnicalBundle\Entity\ReportTechnical $reportTechnical = null)
    {
        $this->reportTechnical = $reportTechnical;

        return $this;
    }

    /**
     * Get reportTechnical
     *
     * @return \Coramer\Sigtec\ReportTechnicalBundle\Entity\ReportTechnical 
     */
    public function getReportTechnical()
    {
        return $this->reportTechnical;
    }
}
