<?php

namespace Coramer\Sigtec\ReportTechnicalBundle\Entity\Master;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Mercado (Categoria)
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Coramer\Sigtec\ReportTechnicalBundle\Repository\Master\SegmentRepository")
 */
class Segment
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
     * @ORM\Column(name="note", type="text")
     */
    private $note;

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
     * @var SubSegment
     * 
     * @ORM\OneToMany(targetEntity="SubSegment", mappedBy="segment")
     */
    private $subSegments;

    public function __construct() {
        $this->subSegments = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Segment
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
     * Set note
     *
     * @param string $note
     * @return Segment
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return Segment
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
     * @return Segment
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
     * @return Segment
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
     * Add subSegments
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\SubSegment $subSegments
     * @return Segment
     */
    public function addSubSegment(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\SubSegment $subSegments)
    {
        $this->subSegments[] = $subSegments;

        return $this;
    }

    /**
     * Remove subSegments
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\SubSegment $subSegments
     */
    public function removeSubSegment(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\SubSegment $subSegments)
    {
        $this->subSegments->removeElement($subSegments);
    }

    /**
     * Get subSegments
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSubSegments()
    {
        return $this->subSegments;
    }
}
