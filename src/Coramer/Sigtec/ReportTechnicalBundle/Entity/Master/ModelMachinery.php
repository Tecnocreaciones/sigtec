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
 * Modelo de maquinaria
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Coramer\Sigtec\ReportTechnicalBundle\Repository\Master\MachineryRepository")
 */
class ModelMachinery
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
     * Nombre
     * 
     * @var string
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;
    
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
     * Caracteristicas de la maquinaria
     * 
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\FeatureMachinery
     * @ORM\ManyToMany(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\FeatureMachinery",inversedBy="modelMachinery")
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
     * @return ModelMachinery
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
     * @return ModelMachinery
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
     * @return ModelMachinery
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
     * @return ModelMachinery
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
     * @return ModelMachinery
     */
    public function addFeaturesMachinery(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\FeatureMachinery $featuresMachinery)
    {
        $this->featuresMachinery->add($featuresMachinery);

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

    /**
     * Set name
     *
     * @param string $name
     * @return ModelMachinery
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
}
