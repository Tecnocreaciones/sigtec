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
 * Potencial de crecimiento
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 * @ORM\Table()
 * @ORM\Entity
 */
class GrowthPotential 
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
     * Fecha de última inversión en maquinarias
     * 
     * @var \DateTime
     * @ORM\Column(name="lastInvestmentMachinery",type="date",nullable=true)
     */
    private $lastInvestmentMachinery;
    
    /**
     * Mercados en crecimiento
     * 
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\SubSegment
     * @ORM\ManyToMany(targetEntity="\Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\SubSegment",cascade={"persist"})
     */
    private $growthMarkets;
    
    /**
     * ¿Considera entrar en otros mercados?
     * 
     * @var boolean
     * @ORM\Column(name="otherMarkets",type="boolean",nullable=true)
     */
    private $doYouConsiderEnteringOtherMarkets = false;
    
    /**
     * Otros mercados
     * 
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\GrowthPotential\OtherMarket
     * @ORM\OneToMany(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\GrowthPotential\OtherMarket",mappedBy="growthPotential")
     */
    private $otherMarkets;
    
    /**
     * ¿Planifica adquirir nuevas maquinarias?
     * 
     * @var boolean
     * @ORM\Column(name="purchaseNewMachineries",type="boolean",nullable=true)
     */
    private $doYouPlanToPurchaseNewMachineries = false;
    
    /**
     * Nuevas maquinarias
     * 
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\GrowthPotential\NewMachinery
     * @ORM\OneToMany(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\GrowthPotential\NewMachinery",mappedBy="growthPotential")
     */
    private $newMachineries;
    
    /**
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\ReportTechnical
     * 
     * @ORM\OneToOne(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\ReportTechnical",mappedBy="growthPotential")
     */
    private $reportTechnical;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->otherMarkets = new \Doctrine\Common\Collections\ArrayCollection();
        $this->newMachineries = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set lastInvestmentMachinery
     *
     * @param \DateTime $lastInvestmentMachinery
     * @return GrowthPotential
     */
    public function setLastInvestmentMachinery($lastInvestmentMachinery)
    {
        $this->lastInvestmentMachinery = $lastInvestmentMachinery;

        return $this;
    }

    /**
     * Get lastInvestmentMachinery
     *
     * @return \DateTime 
     */
    public function getLastInvestmentMachinery()
    {
        return $this->lastInvestmentMachinery;
    }

    /**
     * Set doYouConsiderEnteringOtherMarkets
     *
     * @param boolean $doYouConsiderEnteringOtherMarkets
     * @return GrowthPotential
     */
    public function setDoYouConsiderEnteringOtherMarkets($doYouConsiderEnteringOtherMarkets)
    {
        $this->doYouConsiderEnteringOtherMarkets = $doYouConsiderEnteringOtherMarkets;

        return $this;
    }

    /**
     * Get doYouConsiderEnteringOtherMarkets
     *
     * @return boolean 
     */
    public function getDoYouConsiderEnteringOtherMarkets()
    {
        return $this->doYouConsiderEnteringOtherMarkets;
    }

    /**
     * Set doYouPlanToPurchaseNewMachineries
     *
     * @param boolean $doYouPlanToPurchaseNewMachineries
     * @return GrowthPotential
     */
    public function setDoYouPlanToPurchaseNewMachineries($doYouPlanToPurchaseNewMachineries)
    {
        $this->doYouPlanToPurchaseNewMachineries = $doYouPlanToPurchaseNewMachineries;

        return $this;
    }

    /**
     * Get doYouPlanToPurchaseNewMachineries
     *
     * @return boolean 
     */
    public function getDoYouPlanToPurchaseNewMachineries()
    {
        return $this->doYouPlanToPurchaseNewMachineries;
    }

    /**
     * Add otherMarkets
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\GrowthPotential\OtherMarket $otherMarkets
     * @return GrowthPotential
     */
    public function addOtherMarket(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\GrowthPotential\OtherMarket $otherMarkets)
    {
        $this->otherMarkets[] = $otherMarkets;

        return $this;
    }

    /**
     * Remove otherMarkets
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\GrowthPotential\OtherMarket $otherMarkets
     */
    public function removeOtherMarket(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\GrowthPotential\OtherMarket $otherMarkets)
    {
        $this->otherMarkets->removeElement($otherMarkets);
    }

    /**
     * Get otherMarkets
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOtherMarkets()
    {
        return $this->otherMarkets;
    }

    /**
     * Add newMachineries
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\GrowthPotential\NewMachinery $newMachineries
     * @return GrowthPotential
     */
    public function addNewMachinery(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\GrowthPotential\NewMachinery $newMachineries)
    {
        $this->newMachineries[] = $newMachineries;

        return $this;
    }

    /**
     * Remove newMachineries
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\GrowthPotential\NewMachinery $newMachineries
     */
    public function removeNewMachinery(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\GrowthPotential\NewMachinery $newMachineries)
    {
        $this->newMachineries->removeElement($newMachineries);
    }

    /**
     * Get newMachineries
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNewMachineries()
    {
        return $this->newMachineries;
    }

    /**
     * Set reportTechnical
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\ReportTechnical $reportTechnical
     * @return GrowthPotential
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

    /**
     * Add growthMarkets
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\SubSegment $growthMarkets
     * @return GrowthPotential
     */
    public function addGrowthMarket(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\SubSegment $growthMarkets)
    {
        $this->growthMarkets->add($growthMarkets);

        return $this;
    }

    /**
     * Remove growthMarkets
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\SubSegment $growthMarkets
     */
    public function removeGrowthMarket(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\SubSegment $growthMarkets)
    {
        $this->growthMarkets->removeElement($growthMarkets);
    }

    /**
     * Get growthMarkets
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGrowthMarkets()
    {
        return $this->growthMarkets;
    }
}
