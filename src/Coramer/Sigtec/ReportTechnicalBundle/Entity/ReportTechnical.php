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
class ReportTechnical extends AbstractReportTechnical
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
    protected $status = self::STATUS_IN_PROGRESS;

    /**
     * @var \Coramer\Sigtec\CompanyBundle\Entity\Company
     * 
     * @ORM\ManyToOne(targetEntity="\Coramer\Sigtec\CompanyBundle\Entity\Company", inversedBy="reportTechnicals")
     */
    private $company;
    
    /**
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\ProfessionalProfile
     *
     * @ORM\OneToOne(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\ProfessionalProfile",cascade={"persist"})
     */
    private $professionalProfile;
    
    /**
     * Descripción de areas de la empresa
     * 
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany
     * @ORM\OneToOne(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany",inversedBy="reportTechnical")
     */
    private $descriptionAreaCompany;
    
    /**
     * Niveles de produccion
     * 
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\ProductionLevel
     * @ORM\OneToMany(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\ProductionLevel",mappedBy="reportTechnical")
     */
    private $productionLevels;
    
    /**
     * Productos fabricados
     * 
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\ProductManufactured
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
    
    /**
     * Otras resinas plasticas
     * 
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\OtherPlasticResin
     * @ORM\OneToOne(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\OtherPlasticResin",inversedBy="reportTechnical",cascade={"persist"})
     */
    private $otherPlasticResin;
    
    /**
     * Descripcion de los mercados
     * 
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionMarket
     * @ORM\OneToMany(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionMarket",mappedBy="reportTechnical")
     */
    private $descriptionMarkets;
    
    /**
     * Exportacion
     * 
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\Exportation
     * @ORM\OneToOne(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\Exportation",inversedBy="reportTechnical",cascade={"persist"})
     */
    private $exportation;
    
    /**
     * Potencial de crecimiento
     * 
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\GrowthPotential
     * @ORM\OneToOne(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\GrowthPotential",inversedBy="reportTechnical",cascade={"persist"})
     */
    private $growthPotential;
    
    /**
     * Potencial de crecimiento
     * 
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\InventoryLevel
     * @ORM\OneToOne(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\InventoryLevel",inversedBy="reportTechnical",cascade={"persist"})
     */
    private $inventoryLevel;
    
    /**
     * ¿Reporte Valida? (Datos completo)
     * 
     * @var boolean
     * @ORM\Column(name="valid", type="boolean")
     */
    private $valid = false;
    
    /**
     * Historiales
     * 
     * @var \Coramer\Sigtec\CoreBundle\Entity\Historical
     * @ORM\ManyToMany(targetEntity="Coramer\Sigtec\CoreBundle\Entity\Historical",inversedBy="reportsTechnicals",cascade={"persist"})
     */
    private $histories;
    
    public function __construct() {
        $this->productionLevels = new \Doctrine\Common\Collections\ArrayCollection();
        $this->productsManufactured = new \Doctrine\Common\Collections\ArrayCollection();
        $this->additivesUsed = new \Doctrine\Common\Collections\ArrayCollection();
        $this->descriptionMarkets = new \Doctrine\Common\Collections\ArrayCollection();
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
        $this->productionLevels->set($productionLevels->getId(),$productionLevels);

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
     * @return \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\ProductionLevel
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
        $this->productsManufactured->add($productsManufactured);

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
        $this->additivesUsed->add($additivesUsed);

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

    /**
     * Set otherPlasticResin
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\OtherPlasticResin $otherPlasticResin
     * @return ReportTechnical
     */
    public function setOtherPlasticResin(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\OtherPlasticResin $otherPlasticResin = null)
    {
        $this->otherPlasticResin = $otherPlasticResin;

        return $this;
    }

    /**
     * Get otherPlasticResin
     *
     * @return \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\OtherPlasticResin 
     */
    public function getOtherPlasticResin()
    {
        return $this->otherPlasticResin;
    }

    /**
     * Add descriptionMarkets
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionMarket $descriptionMarkets
     * @return ReportTechnical
     */
    public function addDescriptionMarket(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionMarket $descriptionMarkets)
    {
        $this->descriptionMarkets->add($descriptionMarkets);

        return $this;
    }

    /**
     * Remove descriptionMarkets
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionMarket $descriptionMarkets
     */
    public function removeDescriptionMarket(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionMarket $descriptionMarkets)
    {
        $this->descriptionMarkets->removeElement($descriptionMarkets);
    }

    /**
     * Get descriptionMarkets
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDescriptionMarkets()
    {
        return $this->descriptionMarkets;
    }

    /**
     * Set exportation
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\Exportation $exportation
     * @return ReportTechnical
     */
    public function setExportation(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\Exportation $exportation = null)
    {
        $this->exportation = $exportation;

        return $this;
    }

    /**
     * Get exportation
     *
     * @return \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\Exportation 
     */
    public function getExportation()
    {
        return $this->exportation;
    }

    /**
     * Set growthPotential
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\GrowthPotential $growthPotential
     * @return ReportTechnical
     */
    public function setGrowthPotential(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\GrowthPotential $growthPotential = null)
    {
        $this->growthPotential = $growthPotential;

        return $this;
    }

    /**
     * Get growthPotential
     *
     * @return \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\GrowthPotential 
     */
    public function getGrowthPotential()
    {
        return $this->growthPotential;
    }

    /**
     * Set inventoryLevel
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\InventoryLevel $inventoryLevel
     * @return ReportTechnical
     */
    public function setInventoryLevel(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\InventoryLevel $inventoryLevel = null)
    {
        $this->inventoryLevel = $inventoryLevel;

        return $this;
    }

    /**
     * Get inventoryLevel
     *
     * @return \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\InventoryLevel 
     */
    public function getInventoryLevel()
    {
        return $this->inventoryLevel;
    }

    /**
     * Set valid
     *
     * @param boolean $valid
     * @return ReportTechnical
     */
    public function setValid($valid)
    {
        $this->valid = $valid;

        return $this;
    }

    /**
     * Get valid
     *
     * @return boolean 
     */
    public function getValid()
    {
        return $this->valid;
    }
    
    /**
     * Is valid
     *
     * @return boolean 
     */
    public function isValid()
    {
        return $this->valid;
    }

    /**
     * Add histories
     *
     * @param \Coramer\Sigtec\CoreBundle\Entity\Historical $histories
     * @return ReportTechnical
     */
    public function addHistory(\Coramer\Sigtec\CoreBundle\Entity\Historical $histories)
    {
        $this->histories->add($histories);

        return $this;
    }

    /**
     * Remove histories
     *
     * @param \Coramer\Sigtec\CoreBundle\Entity\Historical $histories
     */
    public function removeHistory(\Coramer\Sigtec\CoreBundle\Entity\Historical $histories)
    {
        $this->histories->removeElement($histories);
    }

    /**
     * Get histories
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getHistories()
    {
        return $this->histories;
    }
}
