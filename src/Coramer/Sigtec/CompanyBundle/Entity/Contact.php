<?php

namespace Coramer\Sigtec\CompanyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contact
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Contact extends \Coramer\Sigtec\CoreBundle\Entity\Person
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
     * @ORM\Column(name="charge", type="string", length=100)
     */
    private $charge;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=80)
     */
    private $email;
    
    /**
     * @var \Coramer\Sigtec\CompanyBundle\Entity\Phone
     *
     * @ORM\OneToMany(targetEntity="Coramer\Sigtec\CompanyBundle\Entity\Phone", mappedBy="contact", cascade={"persist","remove"})
     */
    private $phones;
    
    /**
     * @var \Coramer\Sigtec\CompanyBundle\Entity\Company
     * 
     * @ORM\ManyToOne(targetEntity="Coramer\Sigtec\CompanyBundle\Entity\Company", inversedBy="contacts")
     */
    private $company;
    
    public function __construct() {
        $this->phones = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set charge
     *
     * @param string $charge
     * @return Contact
     */
    public function setCharge($charge)
    {
        $this->charge = $charge;

        return $this;
    }

    /**
     * Get charge
     *
     * @return string 
     */
    public function getCharge()
    {
        return $this->charge;
    }

    /**
     * Set company
     *
     * @param \Coramer\Sigtec\CompanyBundle\Entity\Company $company
     * @return Contact
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
     * Set email
     *
     * @param string $email
     * @return Contact
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
     * Add phones
     *
     * @param \Coramer\Sigtec\CompanyBundle\Entity\Phone $phones
     * @return Contact
     */
    public function addPhone(\Coramer\Sigtec\CompanyBundle\Entity\Phone $phones)
    {
        $phones->setContact($this);
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
}
