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
 * Aditivo usado en el proceso
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 * @ORM\Table()
 * @ORM\Entity
 */
class AdditiveUsed
{
    /**
     * Tipo de concentracion por porcentaje
     */
    const TYPE_CONCENTRATION_PERCENTAGE = 0;
    /**
     * Tipo de concentracion partes por cien
     */
    const TYPE_CONCENTRATION_PPC = 1;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     *
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Additive
     * @ORM\ManyToOne(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Additive")
     */
    private $additive;
    
    /**
     *
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Product
     * @ORM\ManyToOne(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Product")
     */
    private $product;
    
    /**
     * Base polimerica
     * 
     * @var string
     * @ORM\Column(name="basePolymer",type="string",length=100)
     */
    private $basePolymer;
    
    /**
     * Marca
     * 
     * @var string
     * @ORM\Column(name="mark",type="string",length=100)
     */
    private $mark;
    
    /**
     * Proveedor de aditivo
     * 
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Supplier
     * @ORM\ManyToOne(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Supplier")
     */
    private $additiveSupplier;
    
    /**
     * Concentracion
     * 
     * @var integer
     * @ORM\Column(name="concentration",type="integer")
     */
    private $concentration;
    
    /**
     * Tipo de concentracion(Porcentaje|Partes por cien)
     * 
     * @var integer
     * @ORM\Column(name="typeConcentration",type="integer")
     */
    private $typeConcentration;
    
    /**
     * Reporte tecnico
     * 
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\ReportTechnical 
     * @ORM\ManyToOne(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\ReportTechnical",inversedBy="additivesUsed")
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
     * Set basePolymer
     *
     * @param string $basePolymer
     * @return AdditiveUsed
     */
    public function setBasePolymer($basePolymer)
    {
        $this->basePolymer = $basePolymer;

        return $this;
    }

    /**
     * Get basePolymer
     *
     * @return string 
     */
    public function getBasePolymer()
    {
        return $this->basePolymer;
    }

    /**
     * Set mark
     *
     * @param string $mark
     * @return AdditiveUsed
     */
    public function setMark($mark)
    {
        $this->mark = $mark;

        return $this;
    }

    /**
     * Get mark
     *
     * @return string 
     */
    public function getMark()
    {
        return $this->mark;
    }

    /**
     * Set concentration
     *
     * @param integer $concentration
     * @return AdditiveUsed
     */
    public function setConcentration($concentration)
    {
        $this->concentration = $concentration;

        return $this;
    }

    /**
     * Get concentration
     *
     * @return integer 
     */
    public function getConcentration()
    {
        return $this->concentration;
    }

    /**
     * Set typeConcentration
     *
     * @param integer $typeConcentration
     * @return AdditiveUsed
     */
    public function setTypeConcentration($typeConcentration)
    {
        $this->typeConcentration = $typeConcentration;

        return $this;
    }

    /**
     * Get typeConcentration
     *
     * @return integer 
     */
    public function getTypeConcentration()
    {
        return $this->typeConcentration;
    }

    /**
     * Set additive
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Additive $additive
     * @return AdditiveUsed
     */
    public function setAdditive(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Additive $additive = null)
    {
        $this->additive = $additive;

        return $this;
    }

    /**
     * Get additive
     *
     * @return \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Additive 
     */
    public function getAdditive()
    {
        return $this->additive;
    }

    /**
     * Set product
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Product $product
     * @return AdditiveUsed
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
     * Set additiveSupplier
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Supplier $additiveSupplier
     * @return AdditiveUsed
     */
    public function setAdditiveSupplier(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Supplier $additiveSupplier = null)
    {
        $this->additiveSupplier = $additiveSupplier;

        return $this;
    }

    /**
     * Get additiveSupplier
     *
     * @return \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Supplier 
     */
    public function getAdditiveSupplier()
    {
        return $this->additiveSupplier;
    }

    /**
     * Set reportTechnical
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\ReportTechnical $reportTechnical
     * @return AdditiveUsed
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
     * Valida que el valor de la concentracion sea valido de acuerdo al tipo de concentracion
     */
    function isValidConcentration()
    {
        if(($this->typeConcentration == self::TYPE_CONCENTRATION_PERCENTAGE) && ($this->concentration > 0 && $this->concentration <= 100)){
            return true;
        }elseif(($this->typeConcentration == self::TYPE_CONCENTRATION_PPC) && ($this->concentration > 0)){
            return true;
        }
        
        return false;
    }
}
