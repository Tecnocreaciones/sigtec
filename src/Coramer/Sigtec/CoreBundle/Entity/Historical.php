<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Coramer\Sigtec\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Historial
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 * @ORM\Table()
 * @ORM\Entity()
 */
class Historical
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
     * @ORM\Column(name="event", type="string",length=200)
     */
    private $event;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text")
     */
    private $comment;
    
    /**
     * @var \Application\Sonata\UserBundle\Entity\User
     * 
     * @ORM\ManyToOne(targetEntity="Application\Sonata\UserBundle\Entity\User", inversedBy="companies")
     */
    private $user;
    
    /**
     * Date created
     * 
     * @var type 
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(name="created_at",type="datetime")
     */
    private $createdAt;
    
    /**
     * Reportes tecnicos
     * 
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\ReportTechnical
     * @ORM\ManyToMany(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\ReportTechnical",mappedBy="histories")
     */
    private $reportsTechnicals;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reportsTechnicals = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set comment
     *
     * @param string $comment
     * @return Historical
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Historical
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
     * @return Historical
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
     * Set user
     *
     * @param \Application\Sonata\UserBundle\Entity\User $user
     * @return Historical
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
     * Add reportsTechnicals
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\ReportTechnical $reportsTechnicals
     * @return Historical
     */
    public function addReportsTechnical(\Coramer\Sigtec\ReportTechnicalBundle\Entity\ReportTechnical $reportsTechnicals)
    {
        $this->reportsTechnicals->add($reportsTechnicals);

        return $this;
    }

    /**
     * Remove reportsTechnicals
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\ReportTechnical $reportsTechnicals
     */
    public function removeReportsTechnical(\Coramer\Sigtec\ReportTechnicalBundle\Entity\ReportTechnical $reportsTechnicals)
    {
        $this->reportsTechnicals->removeElement($reportsTechnicals);
    }

    /**
     * Get reportsTechnicals
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReportsTechnicals()
    {
        return $this->reportsTechnicals;
    }

    /**
     * Set event
     *
     * @param string $event
     * @return Historical
     */
    public function setEvent($event)
    {
        $this->event = $event;

        return $this;
    }

    /**
     * Get event
     *
     * @return string 
     */
    public function getEvent()
    {
        return $this->event;
    }
}
