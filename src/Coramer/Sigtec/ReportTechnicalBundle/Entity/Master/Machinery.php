<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Coramer\Sigtec\ReportTechnicalBundle\Entity\Master;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Maquinaria
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Coramer\Sigtec\ReportTechnicalBundle\Repository\Master\MachineryRepository")
 */
class Machinery
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
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean", nullable=true)
     */
    private $active = true;

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
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\FeatureMachinery
     * 
     * @ORM\OneToMany(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\FeatureMachinery",mappedBy="machinery")
     */
    private $featuresMachinery;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->featuresMachinery = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Machinery
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
     * Set active
     *
     * @param boolean $active
     * @return Machinery
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Machinery
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
     * @return Machinery
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
     * Add featuresMachinery
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\FeatureMachinery $featuresMachinery
     * @return Machinery
     */
    public function addFeaturesMachinery(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\FeatureMachinery $featuresMachinery)
    {
        $this->featuresMachinery[] = $featuresMachinery;

        return $this;
    }

    /**
     * Remove featuresMachinery
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\FeatureMachinery $featuresMachinery
     */
    public function removeFeaturesMachinery(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\FeatureMachinery $featuresMachinery)
    {
        $this->featuresMachinery->removeElement($featuresMachinery);
    }

    /**
     * Get featuresMachinery
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFeaturesMachinery()
    {
        return $this->featuresMachinery;
    }
}
