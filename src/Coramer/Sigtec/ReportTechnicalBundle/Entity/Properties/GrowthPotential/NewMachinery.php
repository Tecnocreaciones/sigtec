<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\GrowthPotential;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nueva maquinaria
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 * @ORM\Table()
 * @ORM\Entity
 */
class NewMachinery 
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
     * Cantidad
     * 
     * @var integet
     * @ORM\Column(name="quantity",type="integer")
     */
    private $quantity = 0;
    
    /**
     * Tipo de proceso
     *
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\TypeProcess
     * @ORM\ManyToOne(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\TypeProcess")
     */
    private $typeProcess;
    
    /**
     * Proceso
     *
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Process
     * @ORM\ManyToOne(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Process")
     */
    private $process;
    
    /**
     * Capacidad
     * 
     * @var integet
     * @ORM\Column(name="capacity",type="integer")
     */
    private $capacity = 0;
    
    /**
     * Resina
     * 
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Resin
     * @ORM\ManyToOne(targetEntity="\Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Resin")
     */
    private $resin;
    
    
    /**
     * Producto
     * 
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Product
     * @ORM\ManyToOne(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Product")
     */
    private $product;
    
    /**
     * Razon de compra
     * 
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\ReasonPurchase
     * @ORM\ManyToOne(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\ReasonPurchase")
     */
    private $reasonPurchase;
    
    /**
     * Potencial de crecimiento
     * 
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\GrowthPotential
     * @ORM\ManyToOne(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\GrowthPotential",inversedBy="newMachineries")
     */
    private $growthPotential;

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
     * Set quantity
     *
     * @param integer $quantity
     * @return NewMachinery
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set capacity
     *
     * @param integer $capacity
     * @return NewMachinery
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }

    /**
     * Get capacity
     *
     * @return integer 
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * Set typeProcess
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\TypeProcess $typeProcess
     * @return NewMachinery
     */
    public function setTypeProcess(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\TypeProcess $typeProcess = null)
    {
        $this->typeProcess = $typeProcess;

        return $this;
    }

    /**
     * Get typeProcess
     *
     * @return \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\TypeProcess 
     */
    public function getTypeProcess()
    {
        return $this->typeProcess;
    }

    /**
     * Set process
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Process $process
     * @return NewMachinery
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
     * Set resin
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Resin $resin
     * @return NewMachinery
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
     * Set product
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Product $product
     * @return NewMachinery
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
     * Set reasonPurchase
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\ReasonPurchase $reasonPurchase
     * @return NewMachinery
     */
    public function setReasonPurchase(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\ReasonPurchase $reasonPurchase = null)
    {
        $this->reasonPurchase = $reasonPurchase;

        return $this;
    }

    /**
     * Get reasonPurchase
     *
     * @return \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\ReasonPurchase 
     */
    public function getReasonPurchase()
    {
        return $this->reasonPurchase;
    }

    /**
     * Set growthPotential
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\GrowthPotential $growthPotential
     * @return NewMachinery
     */
    public function setGrowthPotential(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\GrowthPotential $growthPotential = null)
    {
        $this->growthPotential = $growthPotential;

        return $this;
    }

    /**
     * Get growthPotential
     *
     * @return \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\GrowthPotential 
     */
    public function getGrowthPotential()
    {
        return $this->growthPotential;
    }
}
