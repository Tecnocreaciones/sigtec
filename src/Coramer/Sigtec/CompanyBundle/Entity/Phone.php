<?php

namespace Coramer\Sigtec\CompanyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Phone
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Phone
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
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="number", type="string", length=20)
     */
    private $number;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updatedAt", type="datetime")
     */
    private $updatedAt;
    
    /**
     * @var \Coramer\Sigtec\CompanyBundle\Entity\Plant
     *
     * @ORM\ManyToMany(targetEntity="Coramer\Sigtec\CompanyBundle\Entity\Plant", inversedBy="phones")
     */
    private $plants;

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
     * Set name
     *
     * @param string $name
     * @return Phone
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set number
     *
     * @param string $number
     * @return Phone
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return string 
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Phone
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
     * @return Phone
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
        $this->plants = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add plants
     *
     * @param \Coramer\Sigtec\CompanyBundle\Entity\Plant $plants
     * @return Phone
     */
    public function addPlant(\Coramer\Sigtec\CompanyBundle\Entity\Plant $plants)
    {
        if (!$this->plants->contains($plants)) {
            $this->plants->add($plants);
        }
        return $this;
    }

    /**
     * Remove plants
     *
     * @param \Coramer\Sigtec\CompanyBundle\Entity\Plant $plants
     */
    public function removePlant(\Coramer\Sigtec\CompanyBundle\Entity\Plant $plants)
    {
        $this->plants->removeElement($plants);
    }

    /**
     * Get plants
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPlants()
    {
        return $this->plants;
    }
}
