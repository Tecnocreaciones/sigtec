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
     * @var \Coramer\Sigtec\CompanyBundle\Entity\Company
     * 
     * @ORM\ManyToOne(targetEntity="Coramer\Sigtec\CompanyBundle\Entity\Company", inversedBy="contacts")
     */
    private $company;
    
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
}
