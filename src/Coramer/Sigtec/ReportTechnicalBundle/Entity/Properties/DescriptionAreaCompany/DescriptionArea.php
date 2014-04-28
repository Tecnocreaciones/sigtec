<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Description of DescriptionArea
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 * 
 * @ORM\Table()
 * @ORM\Entity
 */
class DescriptionArea
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
    protected $description;
    
    /**
     * @var string
     *
     * @ORM\Column(name="help", type="text")
     */
    protected $help;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean", nullable=true)
     */
    protected $active = true;
    
    /**
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\Area
     * 
     * @ORM\OneToMany(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\Area",mappedBy="descriptionArea")
     */
    protected $areas;
    
    /**
     * @var DescriptionArea
     *
     * @ORM\OneToMany(targetEntity="DescriptionArea", mappedBy="parent")
     */
    protected $descriptionAreas;
    
    /**
     * @var DescriptionArea
     *
     * @ORM\ManyToOne(targetEntity="DescriptionArea", inversedBy="descriptionAreas")
     */
    protected $parent;
    
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
     * Constructor
     */
    public function __construct()
    {
        $this->areas = new \Doctrine\Common\Collections\ArrayCollection();
        $this->descriptionAreas = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set description
     *
     * @param string $description
     * @return DescriptionArea
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
     * Add areas
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\Area $areas
     * @return DescriptionArea
     */
    public function addArea(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\Area $areas)
    {
        $this->areas[] = $areas;

        return $this;
    }

    /**
     * Remove areas
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\Area $areas
     */
    public function removeArea(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\Area $areas)
    {
        $this->areas->removeElement($areas);
    }

    /**
     * Get areas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAreas()
    {
        return $this->areas;
    }

    /**
     * Add descriptionAreas
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\DescriptionArea $descriptionAreas
     * @return DescriptionArea
     */
    public function addDescriptionArea(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\DescriptionArea $descriptionAreas)
    {
        $this->descriptionAreas[] = $descriptionAreas;

        return $this;
    }

    /**
     * Remove descriptionAreas
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\DescriptionArea $descriptionAreas
     */
    public function removeDescriptionArea(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\DescriptionArea $descriptionAreas)
    {
        $this->descriptionAreas->removeElement($descriptionAreas);
    }

    /**
     * Get descriptionAreas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDescriptionAreas()
    {
        return $this->descriptionAreas;
    }

    /**
     * Set parent
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\DescriptionArea $parent
     * @return DescriptionArea
     */
    public function setParent(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\DescriptionArea $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\DescriptionArea 
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return DescriptionArea
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
     * Set help
     *
     * @param string $help
     * @return DescriptionArea
     */
    public function setHelp($help)
    {
        $this->help = $help;

        return $this;
    }

    /**
     * Get help
     *
     * @return string 
     */
    public function getHelp()
    {
        return $this->help;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return DescriptionArea
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
     * @return DescriptionArea
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
}
