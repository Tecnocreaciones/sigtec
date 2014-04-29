<?php

namespace Coramer\Sigtec\CompanyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Company
 *
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Coramer\Sigtec\CompanyBundle\Repository\CompanyRepository")
 */
class Company
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="rif", type="string", length=20)
     */
    private $rif;

    /**
     * @var boolean
     *
     * @ORM\Column(name="rif_validated", type="boolean")
     */
    private $rifValidated = false;
    
    /**
     * Date created
     * 
     * @var type 
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(name="created_at",type="datetime")
     */
    private $createdAt;
    
    /**
     * Date update
     * 
     * @var type 
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(name="updated_at",type="datetime",nullable=true)
     */
    private $updatedAt;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deletedAt", type="datetime", nullable=true)
     */
    private $deletedAt;
    
    /**
     * Estatus
     * 
     * @var boolean
     * @ORM\Column(name="status", type="boolean")
     */
    private $status = true;
    
    /**
     * Email
     * 
     * @var boolean
     * @ORM\Column(name="email", type="string", length=100)
     */
    private $email;
    
    /**
     * @var \Coramer\Sigtec\CompanyBundle\Entity\Plant
     * 
     * @ORM\OneToMany(targetEntity="Coramer\Sigtec\CompanyBundle\Entity\Plant", mappedBy="company")
     */
    private $plants;
    
    /**
     *
     * @var \Coramer\Sigtec\CompanyBundle\Entity\Contact
     * @ORM\OneToMany(targetEntity="Coramer\Sigtec\CompanyBundle\Entity\Contact", mappedBy="company")
     */
    private $contacts;

    /**
     * @var \Application\Sonata\UserBundle\Entity\User
     * 
     * @ORM\ManyToOne(targetEntity="Application\Sonata\UserBundle\Entity\User", inversedBy="companies")
     */
    private $user;
    
    /**
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\ReportTechnical
     * 
     * @ORM\OneToMany(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\ReportTechnical", mappedBy="company")
     */
    private $reportTechnicals;

    public function __construct() {
        $this->plants = new \Doctrine\Common\Collections\ArrayCollection();
        $this->contacts = new \Doctrine\Common\Collections\ArrayCollection();
        $this->reportTechnicals = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name
     *
     * @param string $name
     * @return Company
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
     * Set rif
     *
     * @param string $rif
     * @return Company
     */
    public function setRif($rif)
    {
        $this->rif = $rif;

        return $this;
    }

    /**
     * Get rif
     *
     * @return string 
     */
    public function getRif()
    {
        return $this->rif;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Company
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
     * @return Company
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
     * Set rifValidated
     *
     * @param boolean $rifValidated
     * @return Company
     */
    public function setRifValidated($rifValidated)
    {
        $this->rifValidated = $rifValidated;

        return $this;
    }

    /**
     * Get rifValidated
     *
     * @return boolean 
     */
    public function isRifValidated()
    {
        return $this->rifValidated;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Company
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Get rifValidated
     *
     * @return boolean 
     */
    public function getRifValidated()
    {
        return $this->rifValidated;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Company
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
     * Add plants
     *
     * @param \Coramer\Sigtec\CompanyBundle\Entity\Plant $plants
     * @return Company
     */
    public function addPlant(\Coramer\Sigtec\CompanyBundle\Entity\Plant $plants)
    {
        $this->plants[] = $plants;

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
     * Set user
     *
     * @param \Application\Sonata\UserBundle\Entity\User $user
     * @return Company
     */
    public function setUser(\Application\Sonata\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Application\Sonata\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add contacts
     *
     * @param \Coramer\Sigtec\CompanyBundle\Entity\Contact $contacts
     * @return Company
     */
    public function addContact(\Coramer\Sigtec\CompanyBundle\Entity\Contact $contacts)
    {
        $this->contacts[] = $contacts;

        return $this;
    }

    /**
     * Remove contacts
     *
     * @param \Coramer\Sigtec\CompanyBundle\Entity\Contact $contacts
     */
    public function removeContact(\Coramer\Sigtec\CompanyBundle\Entity\Contact $contacts)
    {
        $this->contacts->removeElement($contacts);
    }

    /**
     * Get contacts
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * Set deletedAt
     *
     * @param \DateTime $deletedAt
     * @return Company
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
     * Add reportTechnicals
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\ReportTechnical $reportTechnicals
     * @return Company
     */
    public function addReportTechnical(\Coramer\Sigtec\ReportTechnicalBundle\Entity\ReportTechnical $reportTechnicals)
    {
        $this->reportTechnicals[] = $reportTechnicals;

        return $this;
    }

    /**
     * Remove reportTechnicals
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\ReportTechnical $reportTechnicals
     */
    public function removeReportTechnical(\Coramer\Sigtec\ReportTechnicalBundle\Entity\ReportTechnical $reportTechnicals)
    {
        $this->reportTechnicals->removeElement($reportTechnicals);
    }

    /**
     * Get reportTechnicals
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReportTechnicals()
    {
        return $this->reportTechnicals;
    }
}
