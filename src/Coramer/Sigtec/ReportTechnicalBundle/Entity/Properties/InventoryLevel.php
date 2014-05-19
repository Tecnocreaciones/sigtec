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
 * Nivel de inventario
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 * @ORM\Table()
 * @ORM\Entity
 */
class InventoryLevel 
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
     * Dias de inventario de materia prima
     * 
     * @var integer 
     * @ORM\Column(name="daysOfInventoryOfRawMaterials",type="integer")
     */
    private $daysOfInventoryOfRawMaterials = 0;
    
    /**
     * Dias de inventario de producto terminado
     * 
     * @var integer
     * @ORM\Column(name="daysOfFinishedProductInventory",type="integer")
     */
    private $daysOfFinishedProductInventory = 0;
    
    /**
     * Reporte tecnico
     * 
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\ReportTechnical
     * @ORM\OneToOne(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\ReportTechnical",mappedBy="inventoryLevel")
     */
    private $reportTechnical;

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
     * Set daysOfInventoryOfRawMaterials
     *
     * @param integer $daysOfInventoryOfRawMaterials
     * @return InventoryLevel
     */
    public function setDaysOfInventoryOfRawMaterials($daysOfInventoryOfRawMaterials)
    {
        $this->daysOfInventoryOfRawMaterials = $daysOfInventoryOfRawMaterials;

        return $this;
    }

    /**
     * Get daysOfInventoryOfRawMaterials
     *
     * @return integer 
     */
    public function getDaysOfInventoryOfRawMaterials()
    {
        return $this->daysOfInventoryOfRawMaterials;
    }

    /**
     * Set daysOfFinishedProductInventory
     *
     * @param integer $daysOfFinishedProductInventory
     * @return InventoryLevel
     */
    public function setDaysOfFinishedProductInventory($daysOfFinishedProductInventory)
    {
        $this->daysOfFinishedProductInventory = $daysOfFinishedProductInventory;

        return $this;
    }

    /**
     * Get daysOfFinishedProductInventory
     *
     * @return integer 
     */
    public function getDaysOfFinishedProductInventory()
    {
        return $this->daysOfFinishedProductInventory;
    }

    /**
     * Set reportTechnical
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\ReportTechnical $reportTechnical
     * @return InventoryLevel
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
