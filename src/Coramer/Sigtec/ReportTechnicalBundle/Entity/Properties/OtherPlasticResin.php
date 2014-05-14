<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties;

use Doctrine\ORM\Mapping as ORM;

/**
 * Otras resinas plasticas
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 * @ORM\Table()
 * @ORM\Entity
 */
class OtherPlasticResin
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
     * ¿Usa otras resinas plásticas?
     * 
     * @var boolean
     * @ORM\Column(name="useOtherPlasticResins",type="boolean")
     */
    private $useOtherPlasticResins = false;
    
    /**
     * Detalles de otras resinas plasticas
     * 
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\OtherPlasticResin\DetailOtherPlasticResin
     * @ORM\OneToMany(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\OtherPlasticResin\DetailOtherPlasticResin", mappedBy="otherPlasticResin")
     */
    private $detailOthersPlasticResin;
            
    /**
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\ReportTechnical
     * 
     * @ORM\OneToOne(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\ReportTechnical",mappedBy="otherPlasticResin")
     */
    private $reportTechnical;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->detailOthersPlasticResin = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set useOtherPlasticResins
     *
     * @param boolean $useOtherPlasticResins
     * @return OtherPlasticResin
     */
    public function setUseOtherPlasticResins($useOtherPlasticResins)
    {
        $this->useOtherPlasticResins = $useOtherPlasticResins;

        return $this;
    }

    /**
     * Get useOtherPlasticResins
     *
     * @return boolean 
     */
    public function getUseOtherPlasticResins()
    {
        return $this->useOtherPlasticResins;
    }

    /**
     * Add detailOthersPlasticResin
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\OtherPlasticResin\DetailOtherPlasticResin $detailOthersPlasticResin
     * @return OtherPlasticResin
     */
    public function addDetailOthersPlasticResin(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\OtherPlasticResin\DetailOtherPlasticResin $detailOthersPlasticResin)
    {
        $this->detailOthersPlasticResin[] = $detailOthersPlasticResin;

        return $this;
    }

    /**
     * Remove detailOthersPlasticResin
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\OtherPlasticResin\DetailOtherPlasticResin $detailOthersPlasticResin
     */
    public function removeDetailOthersPlasticResin(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\OtherPlasticResin\DetailOtherPlasticResin $detailOthersPlasticResin)
    {
        $this->detailOthersPlasticResin->removeElement($detailOthersPlasticResin);
    }

    /**
     * Get detailOthersPlasticResin
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDetailOthersPlasticResin()
    {
        return $this->detailOthersPlasticResin;
    }

    /**
     * Set reportTechnical
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\ReportTechnical $reportTechnical
     * @return OtherPlasticResin
     */
    public function setReportTechnical(\Coramer\Sigtec\ReportTechnicalBundle\Entity\ReportTechnical $reportTechnical = null)
    {
        $this->reportTechnical = $reportTechnical;

        return $this;
    }

    /**
     * Get reportTechnical
     *
     * @return \Coramer\Sigtec\ReportTechnicalBundle\Entity\ReportTechnical 
     */
    public function getReportTechnical()
    {
        return $this->reportTechnical;
    }
}
