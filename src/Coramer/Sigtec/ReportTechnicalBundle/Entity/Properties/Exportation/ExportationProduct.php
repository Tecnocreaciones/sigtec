<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\Exportation;

use Doctrine\ORM\Mapping as ORM;

/**
 * Producto a exportar
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 * @ORM\Table()
 * @ORM\Entity
 */
class ExportationProduct
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
     * Producto
     * 
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Product
     * @ORM\ManyToOne(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Product")
     */
    private $product;
    
    /**
     * Requerimiento a exportar
     * 
     * @var integer
     * @ORM\Column(name="requirement",type="integer")
     */
    private $requirement;
    
    /**
     * Destino
     * 
     * @var string
     * @ORM\Column(name="destiny",type="string")
     */
    private $destiny;
    
    /**
     * Puerto
     * 
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Port
     * @ORM\ManyToOne(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Port")
     */
    private $port;
    
    /**
     * Exportacion
     * 
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\Exportation
     * @ORM\ManyToOne(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\Exportation",inversedBy="productsExport")
     */
    private $exportation;
    

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
     * @return ExportationProduct
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
     * Set destiny
     *
     * @param string $destiny
     * @return ExportationProduct
     */
    public function setDestiny($destiny)
    {
        $this->destiny = $destiny;

        return $this;
    }

    /**
     * Get destiny
     *
     * @return string 
     */
    public function getDestiny()
    {
        return $this->destiny;
    }

    /**
     * Set product
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Product $product
     * @return ExportationProduct
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
     * Set port
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Port $port
     * @return ExportationProduct
     */
    public function setPort(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Port $port = null)
    {
        $this->port = $port;

        return $this;
    }

    /**
     * Get port
     *
     * @return \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Port 
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Set exportation
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\Exportation $exportation
     * @return ExportationProduct
     */
    public function setExportation(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\Exportation $exportation = null)
    {
        $this->exportation = $exportation;

        return $this;
    }

    /**
     * Get exportation
     *
     * @return \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\Exportation 
     */
    public function getExportation()
    {
        return $this->exportation;
    }
}
