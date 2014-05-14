<?php

namespace Coramer\Sigtec\ReportTechnicalBundle\Entity\Master;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Producto
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Coramer\Sigtec\ReportTechnicalBundle\Repository\Master\ProductRepository")
 */
class Product
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
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=100)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean", nullable=true)
     */
    private $active = true;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime")
     * @Gedmo\Timestampable(on="create")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updatedAt", type="datetime", nullable=true)
     * @Gedmo\Timestampable(on="update")
     */
    private $updatedAt;
    
    /**
     * Descripcion de los productos fabricados
     * 
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\ProductManufactured
     * @ORM\OneToMany(targetEntity="\Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\ProductManufactured", mappedBy="product")
     */
    private $productsManufactured;
    
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
     * Set description
     *
     * @param string $description
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return Product
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Product
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Product
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->productsManufactured = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add productsManufactured
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\ProductManufactured $productsManufactured
     * @return Product
     */
    public function addProductsManufactured(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\ProductManufactured $productsManufactured)
    {
        $this->productsManufactured[] = $productsManufactured;

        return $this;
    }

    /**
     * Remove productsManufactured
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\ProductManufactured $productsManufactured
     */
    public function removeProductsManufactured(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\ProductManufactured $productsManufactured)
    {
        $this->productsManufactured->removeElement($productsManufactured);
    }

    /**
     * Get productsManufactured
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProductsManufactured()
    {
        return $this->productsManufactured;
    }
}
