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
 * Caracteristica de maquinaria
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Coramer\Sigtec\ReportTechnicalBundle\Repository\Master\FeatureMachineryRepository")
 */
class FeatureMachinery
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
     * Descripcion
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=100)
     */
    private $description;
    
    /**
     * Ayuda
     * 
     * @var string
     * @ORM\Column(name="help", type="text")
     */
    private $help;

    /**
     * Tipo de campo
     * @var string
     *
     * @ORM\Column(name="fieldType", type="string", length=100)
     */
    private $fieldType;

    /**
     * Tipo de unidad
     * @var string
     *
     * @ORM\Column(name="unitType", type="string", length=100)
     */
    private $unitType;

    /**
     * Valores disponibles
     * @var array
     *
     * @ORM\Column(name="values", type="array")
     */
    private $values;
    
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
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Machinery
     * 
     * @ORM\ManyToOne(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Machinery",inversedBy="machinery")
     */
    private $machinery;

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
     * @return FeatureMachinery
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
     * @return FeatureMachinery
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
     * @return FeatureMachinery
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
     * @return FeatureMachinery
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
     * Set machinery
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Machinery $machinery
     * @return FeatureMachinery
     */
    public function setMachinery(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Machinery $machinery = null)
    {
        $this->machinery = $machinery;

        return $this;
    }

    /**
     * Get machinery
     *
     * @return \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Machinery 
     */
    public function getMachinery()
    {
        return $this->machinery;
    }

    /**
     * Set help
     *
     * @param string $help
     * @return FeatureMachinery
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
     * Set fieldType
     *
     * @param string $fieldType
     * @return FeatureMachinery
     */
    public function setFieldType($fieldType)
    {
        $this->fieldType = $fieldType;

        return $this;
    }

    /**
     * Get fieldType
     *
     * @return string 
     */
    public function getFieldType()
    {
        return $this->fieldType;
    }

    /**
     * Set unitType
     *
     * @param string $unitType
     * @return FeatureMachinery
     */
    public function setUnitType($unitType)
    {
        $this->unitType = $unitType;

        return $this;
    }

    /**
     * Get unitType
     *
     * @return string 
     */
    public function getUnitType()
    {
        return $this->unitType;
    }

    /**
     * Set values
     *
     * @param array $values
     * @return FeatureMachinery
     */
    public function setValues($values)
    {
        $this->values = $values;

        return $this;
    }

    /**
     * Get values
     *
     * @return array 
     */
    public function getValues()
    {
        return $this->values;
    }
}
