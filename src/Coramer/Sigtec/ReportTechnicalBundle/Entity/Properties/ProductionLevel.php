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
 * Nivel de produccion
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 * @ORM\Table()
 * @ORM\Entity
 */
class ProductionLevel
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
     * Proceso
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Process
     *
     * @ORM\ManyToOne(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Process")
     */
    private $process;
    
    /**
     * Turnos
     * @var integer
     *
     * @ORM\Column(name="shifts", type="integer")
     */
    private $shifts = 0;
    
    /**
     * Horas
     * @var integer
     *
     * @ORM\Column(name="hours", type="integer")
     */
    private $hours = 0;
    
    /**
     * Dias al mes
     * @var integer
     *
     * @ORM\Column(name="daysMonth", type="integer")
     */
    private $daysMonth = 0;
    
    /**
     * Capacidad teorica
     * @var integer
     *
     * @ORM\Column(name="theoretical", type="integer")
     */
    private $theoretical = 0;
    
    /**
     * Capacidad instalada
     * @var integer
     *
     * @ORM\Column(name="installed", type="integer")
     */
    private $installed = 0;
    
    /**
     * Capacidad ocupada
     * @var integer
     *
     * @ORM\Column(name="busy", type="integer")
     */
    private $busy = 0;
    
    /**
     * Capacidad ociosa
     * @var integer
     *
     * @ORM\Column(name="idle", type="integer")
     */
    private $idle = 0;
    
    /**
     * Capacidad en porcentaje
     * @var integer
     *
     * @ORM\Column(name="percentage", type="integer")
     */
    private $percentage = 0;
    
    /**
     * Maquinarias
     * 
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\ProductionLevel\Machinery
     * @ORM\OneToMany(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\ProductionLevel\Machinery",mappedBy="productionLevel")
     */
    private $machineries;
    
    /**
     * Reporte tecnico
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\ReportTechnical 
     * 
     * @ORM\ManyToOne(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\ReportTechnical",inversedBy="productionLevels")
     */
    private $reportTechnical;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->machineries = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set shifts
     *
     * @param integer $shifts
     * @return ProductionLevel
     */
    public function setShifts($shifts)
    {
        $this->shifts = $shifts;

        return $this;
    }

    /**
     * Get shifts
     *
     * @return integer 
     */
    public function getShifts()
    {
        return $this->shifts;
    }

    /**
     * Set hours
     *
     * @param integer $hours
     * @return ProductionLevel
     */
    public function setHours($hours)
    {
        $this->hours = $hours;

        return $this;
    }

    /**
     * Get hours
     *
     * @return integer 
     */
    public function getHours()
    {
        return $this->hours;
    }

    /**
     * Set daysMonth
     *
     * @param integer $daysMonth
     * @return ProductionLevel
     */
    public function setDaysMonth($daysMonth)
    {
        $this->daysMonth = $daysMonth;

        return $this;
    }

    /**
     * Get daysMonth
     *
     * @return integer 
     */
    public function getDaysMonth()
    {
        return $this->daysMonth;
    }

    /**
     * Set theoretical
     *
     * @param integer $theoretical
     * @return ProductionLevel
     */
    public function setTheoretical($theoretical)
    {
        $this->theoretical = $theoretical;

        return $this;
    }

    /**
     * Get theoretical
     *
     * @return integer 
     */
    public function getTheoretical()
    {
        return $this->theoretical;
    }

    /**
     * Set installed
     *
     * @param integer $installed
     * @return ProductionLevel
     */
    public function setInstalled($installed)
    {
        $this->installed = $installed;

        return $this;
    }

    /**
     * Get installed
     *
     * @return integer 
     */
    public function getInstalled()
    {
        return $this->installed;
    }

    /**
     * Set busy
     *
     * @param integer $busy
     * @return ProductionLevel
     */
    public function setBusy($busy)
    {
        $this->busy = $busy;

        return $this;
    }

    /**
     * Get busy
     *
     * @return integer 
     */
    public function getBusy()
    {
        return $this->busy;
    }

    /**
     * Set idle
     *
     * @param integer $idle
     * @return ProductionLevel
     */
    public function setIdle($idle)
    {
        $this->idle = $idle;

        return $this;
    }

    /**
     * Get idle
     *
     * @return integer 
     */
    public function getIdle()
    {
        return $this->idle;
    }

    /**
     * Set percentage
     *
     * @param integer $percentage
     * @return ProductionLevel
     */
    public function setPercentage($percentage)
    {
        $this->percentage = $percentage;

        return $this;
    }

    /**
     * Get percentage
     *
     * @return integer 
     */
    public function getPercentage()
    {
        return $this->percentage;
    }

    /**
     * Set process
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Process $process
     * @return ProductionLevel
     */
    public function setProcess(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Process $process = null)
    {
        $this->process = $process;

        return $this;
    }

    /**
     * Get process
     *
     * @return \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Process 
     */
    public function getProcess()
    {
        return $this->process;
    }

    /**
     * Set reportTechnical
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\ReportTechnical $reportTechnical
     * @return ProductionLevel
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

    /**
     * Add machineries
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\ProductionLevel\Machinery $machineries
     * @return ProductionLevel
     */
    public function addMachinery(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\ProductionLevel\Machinery $machineries)
    {
        $this->machineries[] = $machineries;

        return $this;
    }

    /**
     * Remove machineries
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\ProductionLevel\Machinery $machineries
     */
    public function removeMachinery(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\ProductionLevel\Machinery $machineries)
    {
        $this->machineries->removeElement($machineries);
    }

    /**
     * Get machineries
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMachineries()
    {
        return $this->machineries;
    }
}
