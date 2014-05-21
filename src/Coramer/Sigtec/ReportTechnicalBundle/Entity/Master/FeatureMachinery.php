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
     * Nombre
     * 
     * @var string
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;

    /**
     * Descripcion
     * 
     * @var string
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
     * Parametros del campo
     * @var array
     *
     * @ORM\Column(name="parameters", type="array")
     */
    private $parameters;
    
    /**
     * Parametros no serializables del campo (Se evaluaran al crear el campo)
     * @var array
     *
     * @ORM\Column(name="evalParameters", type="array")
     */
    private $evalParameters;
    
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
     * Modelo de maquinaria
     * 
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\ModelMachinery
     * @ORM\ManyToMany(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\ModelMachinery",mappedBy="featuresMachinery")
     */
    private $modelMachinery;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->modelMachinery = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return FeatureMachinery
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
     * Set parameters
     *
     * @param array $parameters
     * @return FeatureMachinery
     */
    public function setParameters($parameters)
    {
        $this->parameters = $parameters;

        return $this;
    }

    /**
     * Get parameters
     *
     * @return array 
     */
    public function getParameters()
    {
        return $this->parameters;
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
     * Add modelMachinery
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\ModelMachinery $modelMachinery
     * @return FeatureMachinery
     */
    public function addModelMachinery(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\ModelMachinery $modelMachinery)
    {
        $this->modelMachinery[] = $modelMachinery;

        return $this;
    }

    /**
     * Remove modelMachinery
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\ModelMachinery $modelMachinery
     */
    public function removeModelMachinery(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\ModelMachinery $modelMachinery)
    {
        $this->modelMachinery->removeElement($modelMachinery);
    }

    /**
     * Get modelMachinery
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getModelMachinery()
    {
        return $this->modelMachinery;
    }

    /**
     * Set evalParameters
     *
     * @param array $evalParameters
     * @return FeatureMachinery
     */
    public function setEvalParameters($evalParameters)
    {
        $this->evalParameters = $evalParameters;

        return $this;
    }

    /**
     * Get evalParameters
     *
     * @return array 
     */
    public function getEvalParameters()
    {
        return $this->evalParameters;
    }
}
