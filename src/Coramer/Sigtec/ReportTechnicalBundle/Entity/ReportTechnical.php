<?php

namespace Coramer\Sigtec\ReportTechnicalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * ReportTechnical
 *
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Coramer\Sigtec\ReportTechnicalBundle\Repository\ReportTechnicalRepository")
 */
class ReportTechnical implements ReportTechnicalInterface
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
     * @ORM\Column(name="archive", type="string",length=10)
     */
    private $archive;

    /**
     * @var \DateTime
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(name="createdAt", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(name="updatedAt", type="datetime")
     */
    private $updatedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deletedAt", type="datetime", nullable=true)
     */
    private $deletedAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer")
     */
    private $status = self::STATUS_IN_PROGRESS;

    /**
     * @var \Coramer\Sigtec\CompanyBundle\Entity\Company
     * 
     * @ORM\ManyToOne(targetEntity="\Coramer\Sigtec\CompanyBundle\Entity\Company", inversedBy="reportTechnicals")
     */
    private $company;
    
    /**
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\ProfessionalProfile
     *
     * @ORM\OneToOne(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\ProfessionalProfile",cascade={"persist","remove"})
     */
    private $professionalProfile;
    
    /**
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany
     * 
     * @ORM\OneToOne(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany",inversedBy="reportTechnical")
     */
    private $descriptionAreaCompany;
    
    /**
     * Niveles de produccion
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\ProductionLevel
     * 
     * @ORM\OneToMany(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\ProductionLevel",mappedBy="reportTechnical")
     */
    private $productionLevels;
    
    /**
     * Productos fabricados
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\ProductManufactured
     * 
     * @ORM\OneToMany(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\ProductManufactured",mappedBy="reportTechnical")
     */
    private $productsManufactured;
    
    /**
     * Aditivos usados
     * 
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\AdditiveUsed
     * @ORM\OneToMany(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\AdditiveUsed",mappedBy="reportTechnical")
     */
    private $additivesUsed;
    
    public function __construct() {
        $this->productionLevels = new \Doctrine\Common\Collections\ArrayCollection();
        $this->productsManufactured = new \Doctrine\Common\Collections\ArrayCollection();
        $this->additivesUsed = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return ReportTechnical
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
     * @return ReportTechnical
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
     * Set deletedAt
     *
     * @param string $deletedAt
     * @return ReportTechnical
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    /**
     * Get deletedAt
     *
     * @return string 
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return ReportTechnical
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set company
     *
     * @param \Coramer\Sigtec\CompanyBundle\Entity\Company $company
     * @return ReportTechnical
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
     * Set archive
     *
     * @param string $archive
     * @return ReportTechnical
     */
    public function setArchive($archive)
    {
        $this->archive = $archive;

        return $this;
    }

    /**
     * Get archive
     *
     * @return string 
     */
    public function getArchive()
    {
        return $this->archive;
    }

    /**
     * Set professionalProfile
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\ProfessionalProfile $professionalProfile
     * @return ReportTechnical
     */
    public function setProfessionalProfile(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\ProfessionalProfile $professionalProfile = null)
    {
        $this->professionalProfile = $professionalProfile;

        return $this;
    }

    /**
     * Get professionalProfile
     *
     * @return \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\ProfessionalProfile 
     */
    public function getProfessionalProfile()
    {
        return $this->professionalProfile;
    }

    /**
     * Set descriptionAreaCompany
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany $descriptionAreaCompany
     * @return ReportTechnical
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
     * Add productionLevels
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\ProductionLevel $productionLevels
     * @return ReportTechnical
     */
    public function addProductionLevel(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\ProductionLevel $productionLevels)
    {
        $this->productionLevels[] = $productionLevels;

        return $this;
    }

    /**
     * Remove productionLevels
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\ProductionLevel $productionLevels
     */
    public function removeProductionLevel(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\ProductionLevel $productionLevels)
    {
        $this->productionLevels->removeElement($productionLevels);
    }

    /**
     * Get productionLevels
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProductionLevels()
    {
        return $this->productionLevels;
    }

    /**
     * Add productsManufactured
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\ProductManufactured $productsManufactured
     * @return ReportTechnical
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

    /**
     * Add additivesUsed
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\AdditiveUsed $additivesUsed
     * @return ReportTechnical
     */
    public function addAdditivesUsed(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\AdditiveUsed $additivesUsed)
    {
        $this->additivesUsed[] = $additivesUsed;

        return $this;
    }

    /**
     * Remove additivesUsed
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\AdditiveUsed $additivesUsed
     */
    public function removeAdditivesUsed(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\AdditiveUsed $additivesUsed)
    {
        $this->additivesUsed->removeElement($additivesUsed);
    }

    /**
     * Get additivesUsed
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAdditivesUsed()
    {
        return $this->additivesUsed;
    }
}
