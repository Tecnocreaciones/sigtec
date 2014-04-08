<?php

namespace Coramer\Sigtec\CompanyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Plant
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Plant
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
     * @ORM\Column(name="email", type="string", length=80)
     */
    private $email;

    /**
     * @var \Coramer\Sigtec\CompanyBundle\Entity\Phone
     *
     * @ORM\OneToMany(targetEntity="Coramer\Sigtec\CompanyBundle\Entity\Phone", mappedBy="plant", cascade={"persist"})
     */
    private $phones;

    /**
     * @var \Coramer\Sigtec\CompanyBundle\Entity\Dedication
     *
     * @ORM\ManyToMany(targetEntity="Coramer\Sigtec\CompanyBundle\Entity\Dedication", inversedBy="plants")
     */
    private $dedications;

    /**
     * @var \Tecnocreaciones\Vzla\EntityBundle\Entity\State
     *
     * @ORM\ManyToOne(targetEntity="Tecnocreaciones\Vzla\EntityBundle\Entity\State")
     */
    private $state;
    /**
     * @var \Tecnocreaciones\Vzla\EntityBundle\Entity\City
     *
     * @ORM\ManyToOne(targetEntity="Tecnocreaciones\Vzla\EntityBundle\Entity\City")
     */
    private $city;
    
    /**
     * @var string
     *
     * @ORM\Column(name="address", type="text")
     */
    private $address;

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
     * @ORM\Column(name="update_at", type="datetime", nullable=true)
     */
    private $updatedAt;
    
    /**
     * @var \Coramer\Sigtec\CompanyBundle\Entity\Company
     * 
     * @ORM\ManyToOne(targetEntity="Coramer\Sigtec\CompanyBundle\Entity\Company", inversedBy="plants")
     */
    private $company;

    public function __construct() {
        $this->phones = new \Doctrine\Common\Collections\ArrayCollection();
        $this->dedications = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set email
     *
     * @param string $email
     * @return Plant
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Plant
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Plant
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
     * @return Plant
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
     * Add phones
     *
     * @param \Coramer\Sigtec\CompanyBundle\Entity\Phone $phones
     * @return Plant
     */
    public function addPhone(\Coramer\Sigtec\CompanyBundle\Entity\Phone $phones)
    {
        $phones->setPlant($this);
        $this->phones->add($phones);
        return $this;
    }

    /**
     * Remove phones
     *
     * @param \Coramer\Sigtec\CompanyBundle\Entity\Phone $phones
     */
    public function removePhone(\Coramer\Sigtec\CompanyBundle\Entity\Phone $phones)
    {
        $this->phones->removeElement($phones);
    }

    /**
     * Get phones
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPhones()
    {
        return $this->phones;
    }

    /**
     * Set state
     *
     * @param \Tecnocreaciones\Vzla\EntityBundle\Entity\State $state
     * @return Plant
     */
    public function setState(\Tecnocreaciones\Vzla\EntityBundle\Entity\State $state = null)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return \Tecnocreaciones\Vzla\EntityBundle\Entity\State 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set city
     *
     * @param \Tecnocreaciones\Vzla\EntityBundle\Entity\City $city
     * @return Plant
     */
    public function setCity(\Tecnocreaciones\Vzla\EntityBundle\Entity\City $city = null)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return \Tecnocreaciones\Vzla\EntityBundle\Entity\City 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set company
     *
     * @param \Coramer\Sigtec\CompanyBundle\Entity\Company $company
     * @return Plant
     */
    public function setCompany(\Coramer\Sigtec\CompanyBundle\Entity\Company $company = null)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return \Coramer\Sigtec\CompanyBundle\Entity\Company 
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Add dedications
     *
     * @param \Coramer\Sigtec\CompanyBundle\Entity\Dedication $dedications
     * @return Plant
     */
    public function addDedication(\Coramer\Sigtec\CompanyBundle\Entity\Dedication $dedications)
    {
        $dedications->addPlant($this);
        $this->dedications->add($dedications);

        return $this;
    }

    /**
     * Remove dedications
     *
     * @param \Coramer\Sigtec\CompanyBundle\Entity\Dedication $dedications
     */
    public function removeDedication(\Coramer\Sigtec\CompanyBundle\Entity\Dedication $dedications)
    {
        $this->dedications->removeElement($dedications);
    }

    /**
     * Get dedications
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDedications()
    {
        return $this->dedications;
    }
}
