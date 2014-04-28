<?php

namespace Coramer\Sigtec\CoreBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Sonata\UserBundle\Entity\BaseUser as BaseUser;

/**
 * User model
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 * @Gedmo\SoftDeleteable(fieldName="deletedAt")
 */
class User extends BaseUser
{
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @var type 
     */
    protected $id;
    
    /**
     * Grupos de usuarios
     * @var \FOS\UserBundle\Model\GroupInterface Description
     * @ORM\ManyToMany(targetEntity="\Coramer\Sigtec\CoreBundle\Entity\Group")
     */
    protected $groups;
    
    /**
     * Date delete
     * 
     * @var type 
     * @ORM\Column(name="deleted_at",type="datetime",nullable=true)
     */
    protected $deletedAt;
    
    /**
     * @ORM\Column(name="first_name",type="string",length=100,nullable=true)
     * @var type 
     */
    protected $firstName;
    
    /**
     * @ORM\Column(name="last_name",type="string",length=100,nullable=true)
     * @var type 
     */
    protected $lastName;

    /**
     * @var \Coramer\Sigtec\CompanyBundle\Entity\Company
     *
     * @ORM\OneToMany(targetEntity="Coramer\Sigtec\CompanyBundle\Entity\Company", mappedBy="user")
     */
    protected $companies;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->groups = new ArrayCollection();
        $this->companies = new ArrayCollection();
        parent::__construct();
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
     * Set deletedAt
     *
     * @param \DateTime $deletedAt
     * @return User
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    /**
     * Get deletedAt
     *
     * @return \DateTime 
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }

    /**
     * Add groups
     *
     * @param \Coramer\Sigtec\CoreBundle\Entity\Group $groups
     * @return User
     */
    public function addGroup(\FOS\UserBundle\Model\GroupInterface $groups)
    {
        $this->groups[] = $groups;

        return $this;
    }

    /**
     * Remove groups
     *
     * @param \Coramer\Sigtec\CoreBundle\Entity\Group $groups
     */
    public function removeGroup(\FOS\UserBundle\Model\GroupInterface $groups)
    {
        $this->groups->removeElement($groups);
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Add companies
     *
     * @param \Coramer\Sigtec\CompanyBundle\Entity\Company $companies
     * @return User
     */
    public function addCompany(\Coramer\Sigtec\CompanyBundle\Entity\Company $companies)
    {
        $this->companies[] = $companies;

        return $this;
    }

    /**
     * Remove companies
     *
     * @param \Coramer\Sigtec\CompanyBundle\Entity\Company $companies
     */
    public function removeCompany(\Coramer\Sigtec\CompanyBundle\Entity\Company $companies)
    {
        $this->companies->removeElement($companies);
    }

    /**
     * Get companies
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCompanies()
    {
        return $this->companies;
    }
}
