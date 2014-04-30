<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of DetailProductStorage
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 * 
 * @ORM\Table()
 * @ORM\Entity
 */
class DetailProductStorage
{
    const SEPARATED_RESIN_NOT_APPLY = 0;
    
    const SEPARATED_RESIN_YES = 1;
    
    const SEPARATED_RESIN_NO = 2;
    /**
     * Almacenamiento intemperie
     */
    const STORAGE_OUTDOOR = 0;
    
    /**
     * Almacenamiento confinado
     */
    const STORAGE_CONFINED = 1;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\Material
     * 
     * @ORM\ManyToOne(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\DetailProductStorage\Material")
     */
    protected $material;
    
    /**
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\DetailProductStorage\Storage
     * 
     * @ORM\Column(name="storage", type="integer")
     */
    protected $storage;

    /**
     * @var integer
     *  
     * @ORM\Column(name="separatedResin", type="integer")
     */
    protected $separatedResin;

    /**
     * @var double
     * 
     * @ORM\Column(name="totalArea", type="float")
     * 
     */
    protected $totalArea = self::SEPARATED_RESIN_NOT_APPLY;
    
    /**
     * @var double
     * 
     * @ORM\Column(name="coveredArea", type="float")
     */
    protected $coveredArea = 0;
    
    /**
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany
     * 
     * @ORM\ManyToOne(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany", inversedBy="detailProductStorages")
     */
    protected $descriptionAreaCompany;

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
     * Set material
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\Material $material
     * @return DetailProductStorage
     */
    public function setMaterial(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\Material $material = null)
    {
        $this->material = $material;

        return $this;
    }

    /**
     * Get material
     *
     * @return \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\Material 
     */
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * Set separatedResin
     *
     * @param boolean $separatedResin
     * @return DetailProductStorage
     */
    public function setSeparatedResin($separatedResin)
    {
        $this->separatedResin = $separatedResin;

        return $this;
    }

    /**
     * Get separatedResin
     *
     * @return boolean 
     */
    public function getSeparatedResin()
    {
        return $this->separatedResin;
    }

    /**
     * Set totalArea
     *
     * @param float $totalArea
     * @return DetailProductStorage
     */
    public function setTotalArea($totalArea)
    {
        $this->totalArea = $totalArea;

        return $this;
    }

    /**
     * Get totalArea
     *
     * @return float 
     */
    public function getTotalArea()
    {
        return $this->totalArea;
    }

    /**
     * Set coveredArea
     *
     * @param float $coveredArea
     * @return DetailProductStorage
     */
    public function setCoveredArea($coveredArea)
    {
        $this->coveredArea = $coveredArea;

        return $this;
    }

    /**
     * Get coveredArea
     *
     * @return float 
     */
    public function getCoveredArea()
    {
        return $this->coveredArea;
    }

    /**
     * Set descriptionAreaCompany
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany $descriptionAreaCompany
     * @return DetailProductStorage
     */
    public function setDescriptionAreaCompany(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany $descriptionAreaCompany = null)
    {
        $this->descriptionAreaCompany = $descriptionAreaCompany;

        return $this;
    }

    /**
     * Get descriptionAreaCompany
     *
     * @return \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany 
     */
    public function getDescriptionAreaCompany()
    {
        return $this->descriptionAreaCompany;
    }

    /**
     * Set storage
     *
     * @param integer $storage
     * @return DetailProductStorage
     */
    public function setStorage($storage)
    {
        $this->storage = $storage;

        return $this;
    }

    /**
     * Get storage
     *
     * @return integer 
     */
    public function getStorage()
    {
        return $this->storage;
    }
}
