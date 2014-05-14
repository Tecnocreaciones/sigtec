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
 * Producto fabricado
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 * 
 * @ORM\Table()
 * @ORM\Entity
 */
class ProductManufactured 
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
     * Producto
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Product
     *
     * @ORM\ManyToOne(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Product")
     */
    private $product;
    
    /**
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Grade
     * 
     * @ORM\ManyToOne(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Grade")
     */
    private $grade;
    
    /**
     * Turnos
     * @var integer
     *
     * @ORM\Column(name="requirement", type="integer")
     */
    private $requirement = 0;
    
    /**
     * Reporte tecnico
     * 
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\ReportTechnical 
     * @ORM\ManyToOne(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\ReportTechnical",inversedBy="productionLevels")
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
     * Set requirement
     *
     * @param integer $requirement
     * @return ProductManufactured
     */
    public function setRequirement($requirement)
    {
        $this->requirement = $requirement;

        return $this;
    }

    /**
     * Get requirement
     *
     * @return integer 
     */
    public function getRequirement()
    {
        return $this->requirement;
    }

    /**
     * Set process
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Process $process
     * @return ProductManufactured
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
     * Set product
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Product $product
     * @return ProductManufactured
     */
    public function setProduct(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Product $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Product 
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set grade
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Grade $grade
     * @return ProductManufactured
     */
    public function setGrade(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Grade $grade = null)
    {
        $this->grade = $grade;

        return $this;
    }

    /**
     * Get grade
     *
     * @return \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Grade 
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set reportTechnical
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\ReportTechnical $reportTechnical
     * @return ProductManufactured
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
