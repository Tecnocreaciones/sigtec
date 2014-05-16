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
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\Exportation\ProductToExport
     * @ORM\OneToMany(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\Exportation\ProductToExport",mappedBy="exportation")
     */
    private $productsToExport;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->productsToExport = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add productsToExport
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\Exportation\ProductToExport $productsToExport
     * @return Exportation
     */
    public function addProductsToExport(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\Exportation\ProductToExport $productsToExport)
    {
        $this->productsToExport[] = $productsToExport;

        return $this;
    }

    /**
     * Remove productsToExport
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\Exportation\ProductToExport $productsToExport
     */
    public function removeProductsToExport(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\Exportation\ProductToExport $productsToExport)
    {
        $this->productsToExport->removeElement($productsToExport);
    }

    /**
     * Get productsToExport
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProductsToExport()
    {
        return $this->productsToExport;
    }
}
