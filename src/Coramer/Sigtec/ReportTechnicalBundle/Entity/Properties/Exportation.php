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
 * Exportacion de productos
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 * @ORM\Table()
 * @ORM\Entity
 */
class Exportation 
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
     * ¿Ha exportado alguno de sus productos?}
     * 
     * @var boolean
     * @ORM\Column(name="hasExportedProducts",type="boolean") 
     */
    private $hasExportedProducts = false;
    
    /**
     * ¿Tiene planes de exportar sus productos?
     * 
     * @var boolean
     * @ORM\Column(name="itPlansToExport",type="boolean") 
     */
    private $itPlansToExport = false;
    
    /**
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\ReportTechnical
     * 
     * @ORM\OneToOne(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\ReportTechnical",mappedBy="exportation")
     */
    private $reportTechnical;
    
    /**
     * Productos a exportar
     * 
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\Exportation\ExportationProduct
     * @ORM\OneToMany(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\Exportation\ExportationProduct",mappedBy="exportation")
     */
    private $productsExport;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->productsExport = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set hasExportedProducts
     *
     * @param boolean $hasExportedProducts
     * @return Exportation
     */
    public function setHasExportedProducts($hasExportedProducts)
    {
        $this->hasExportedProducts = $hasExportedProducts;

        return $this;
    }

    /**
     * Get hasExportedProducts
     *
     * @return boolean 
     */
    public function getHasExportedProducts()
    {
        return $this->hasExportedProducts;
    }

    /**
     * Get hasExportedProducts
     *
     * @return boolean 
     */
    public function hasExportedProducts()
    {
        return $this->hasExportedProducts;
    }

    /**
     * Set itPlansToExport
     *
     * @param boolean $itPlansToExport
     * @return Exportation
     */
    public function setItPlansToExport($itPlansToExport)
    {
        $this->itPlansToExport = $itPlansToExport;

        return $this;
    }

    /**
     * Get itPlansToExport
     *
     * @return boolean 
     */
    public function getItPlansToExport()
    {
        return $this->itPlansToExport;
    }

    /**
     * Set reportTechnical
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\ReportTechnical $reportTechnical
     * @return Exportation
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
     * Add productsExport
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\Exportation\ExportationProduct $productsExport
     * @return Exportation
     */
    public function addProductsExport(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\Exportation\ExportationProduct $productsExport)
    {
        $this->productsExport[] = $productsExport;

        return $this;
    }

    /**
     * Remove productsExport
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\Exportation\ExportationProduct $productsExport
     */
    public function removeProductsExport(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\Exportation\ExportationProduct $productsExport)
    {
        $this->productsExport->removeElement($productsExport);
    }

    /**
     * Get productsExport
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProductsExport()
    {
        return $this->productsExport;
    }
}
