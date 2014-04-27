<?php

namespace Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProfessionalProfile
 *
 * @ORM\Table()
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class ProfessionalProfile
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
     * @var integer
     *
     * @ORM\Column(name="quantityProfessionals", type="integer")
     */
    private $quantityProfessionals = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantityTechnical", type="integer")
     */
    private $quantityTechnical = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantityLaborers", type="integer")
     */
    private $quantityLaborers = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantityOther", type="integer")
     */
    private $quantityOther = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="total", type="integer")
     */
    private $total = 0;


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
     * Set quantityProfessionals
     *
     * @param integer $quantityProfessionals
     * @return ProfessionalProfile
     */
    public function setQuantityProfessionals($quantityProfessionals)
    {
        $this->quantityProfessionals = $quantityProfessionals;

        return $this;
    }

    /**
     * Get quantityProfessionals
     *
     * @return integer 
     */
    public function getQuantityProfessionals()
    {
        return $this->quantityProfessionals;
    }

    /**
     * Set quantityTechnical
     *
     * @param integer $quantityTechnical
     * @return ProfessionalProfile
     */
    public function setQuantityTechnical($quantityTechnical)
    {
        $this->quantityTechnical = $quantityTechnical;

        return $this;
    }

    /**
     * Get quantityTechnical
     *
     * @return integer 
     */
    public function getQuantityTechnical()
    {
        return $this->quantityTechnical;
    }

    /**
     * Set quantityLaborers
     *
     * @param integer $quantityLaborers
     * @return ProfessionalProfile
     */
    public function setQuantityLaborers($quantityLaborers)
    {
        $this->quantityLaborers = $quantityLaborers;

        return $this;
    }

    /**
     * Get quantityLaborers
     *
     * @return integer 
     */
    public function getQuantityLaborers()
    {
        return $this->quantityLaborers;
    }

    /**
     * Set quantityOther
     *
     * @param integer $quantityOther
     * @return ProfessionalProfile
     */
    public function setQuantityOther($quantityOther)
    {
        $this->quantityOther = $quantityOther;

        return $this;
    }

    /**
     * Get quantityOther
     *
     * @return integer 
     */
    public function getQuantityOther()
    {
        return $this->quantityOther;
    }

    /**
     * Set total
     *
     * @param integer $total
     * @return ProfessionalProfile
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return integer 
     */
    public function getTotal()
    {
        return $this->total;
    }
    
    /**
     * @ORM\PreUpdate
     */
    public function calculateTotal()
    {
        $this->total = 
                (int)$this->quantityProfessionals 
                + (int)$this->quantityTechnical
                + (int)$this->quantityLaborers
                + (int)$this->quantityOther
                ;
    }
}
