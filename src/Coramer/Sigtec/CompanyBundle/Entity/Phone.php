<?php

namespace Coramer\Sigtec\CompanyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

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
     * @ORM\Column(name="name", type="string", length=100, nullable=true)
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
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(name="updated_at", type="datetime")
     */
    private $updatedAt;
    
    /**
     * @var \Coramer\Sigtec\CompanyBundle\Entity\Plant
     *
     * @ORM\ManyToOne(targetEntity="Coramer\Sigtec\CompanyBundle\Entity\Plant", inversedBy="phones")
     */
    private $plant;
    
    /**
     * @var \Coramer\Sigtec\CompanyBundle\Entity\Contact
     *
     * @ORM\ManyToOne(targetEntity="Coramer\Sigtec\CompanyBundle\Entity\Contact", inversedBy="phones")
     */
    private $contact;
    
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

    /**
     * Set plant
     *
     * @param \Coramer\Sigtec\CompanyBundle\Entity\Plant $plant
     * @return Phone
     */
    public function setPlant(\Coramer\Sigtec\CompanyBundle\Entity\Plant $plant = null)
    {
        $this->plant = $plant;

        return $this;
    }

    /**
     * Get plant
     *
     * @return \Coramer\Sigtec\CompanyBundle\Entity\Plant 
     */
    public function getPlant()
    {
        return $this->plant;
    }

    /**
     * Set contact
     *
     * @param \Coramer\Sigtec\CompanyBundle\Entity\Contact $contact
     * @return Phone
     */
    public function setContact(\Coramer\Sigtec\CompanyBundle\Entity\Contact $contact = null)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return \Coramer\Sigtec\CompanyBundle\Entity\Contact 
     */
    public function getContact()
    {
        return $this->contact;
    }
}
