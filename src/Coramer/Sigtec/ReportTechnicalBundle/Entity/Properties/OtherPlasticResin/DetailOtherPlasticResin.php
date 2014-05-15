<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\OtherPlasticResin;

use Doctrine\ORM\Mapping as ORM;

/**
 * Detalles de otras resinas plasticas
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 * @ORM\Table()
 * @ORM\Entity
 */
class DetailOtherPlasticResin
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
     *
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Process
     * @ORM\ManyToOne(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Process")
     */
    private $process;
    
    /**
     * Producto
     * 
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Product
     * @ORM\ManyToOne(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Product")
     */
    private $product;
    
    /**
     * Resina
     * 
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Resin
     * @ORM\ManyToOne(targetEntity="\Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Resin")
     */
    private $resin;
    
    /**
     * Requerimiento
     * 
     * @var integer
     * @ORM\Column(name="requirement", type="integer")
     */
    private $requirement = 0;
    
    /**
     * Grado (Campo libre)
     * 
     * @var string
     * @ORM\Column(name="grade", type="string", length=100)
     */
    private $grade;
    
    /**
     * Proveedor (Campo libre)
     * 
     * @var string
     * @ORM\Column(name="supplier", type="string", length=100)
     */
    private $supplier;

    /**
     * Otras resinas plasticas
     * 
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\OtherPlasticResin
     * @ORM\ManyToOne(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\OtherPlasticResin", inversedBy="detailOthersPlasticResin")
     */
    private $otherPlasticResin;

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
     * @return DetailOtherPlasticResin
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
     * Set grade
     *
     * @param string $grade
     * @return DetailOtherPlasticResin
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }

    /**
     * Get grade
     *
     * @return string 
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set supplier
     *
     * @param string $supplier
     * @return DetailOtherPlasticResin
     */
    public function setSupplier($supplier)
    {
        $this->supplier = $supplier;

        return $this;
    }

    /**
     * Get supplier
     *
     * @return string 
     */
    public function getSupplier()
    {
        return $this->supplier;
    }

    /**
     * Set process
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Process $process
     * @return DetailOtherPlasticResin
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
     * @return DetailOtherPlasticResin
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
     * Set resin
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Resin $resin
     * @return DetailOtherPlasticResin
     */
    public function setResin(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Resin $resin = null)
    {
        $this->resin = $resin;

        return $this;
    }

    /**
     * Get resin
     *
     * @return \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Resin 
     */
    public function getResin()
    {
        return $this->resin;
    }

    /**
     * Set OtherPlasticResin
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\OtherPlasticResin $otherPlasticResin
     * @return DetailOtherPlasticResin
     */
    public function setOtherPlasticResin(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\OtherPlasticResin $otherPlasticResin = null)
    {
        $this->otherPlasticResin = $otherPlasticResin;

        return $this;
    }

    /**
     * Get OtherPlasticResin
     *
     * @return \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\OtherPlasticResin 
     */
    public function getOtherPlasticResin()
    {
        return $this->otherPlasticResin;
    }
}
