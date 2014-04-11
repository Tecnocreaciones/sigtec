<?php

namespace Coramer\Sigtec\ReportTechnicalBundle\Entity\Master;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Process
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Coramer\Sigtec\ReportTechnicalBundle\Repository\Master\ProcessRepository")
 */
class Process
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
     * @var string
     *
     * @ORM\Column(name="form", type="string", length=100)
     */
    private $form;

    /**
     * @var string
     *
     * @ORM\Column(name="equation", type="string", length=255)
     */
    private $equation;

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean")
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
     *
     * @var TypeProcess
     * @ORM\ManyToOne(targetEntity="TypeProcess",inversedBy="processes")
     */
    private $typeProcess;

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
     * @return Process
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
     * Set form
     *
     * @param string $form
     * @return Process
     */
    public function setForm($form)
    {
        $this->form = $form;

        return $this;
    }

    /**
     * Get form
     *
     * @return string 
     */
    public function getForm()
    {
        return $this->form;
    }

    /**
     * Set equation
     *
     * @param string $equation
     * @return Process
     */
    public function setEquation($equation)
    {
        $this->equation = $equation;

        return $this;
    }

    /**
     * Get equation
     *
     * @return string 
     */
    public function getEquation()
    {
        return $this->equation;
    }
}
