<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\GrowthPotential;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mercado en crecimiento
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Coramer\Sigtec\ReportTechnicalBundle\Repository\Properties\GrowthPotential\GrowingMarketRepository")
 */
class GrowingMarket
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
     * Mercado
     * 
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Segment
     * @ORM\ManyToOne(targetEntity="\Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Segment")
     */
    private $segment;
    
    /**
     * Sub Mercado
     * 
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\SubSegment
     * @ORM\ManyToOne(targetEntity="\Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\SubSegment")
     */
    private $subSegment;
    
    /**
     * Potencial de crecimiento
     * 
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\GrowthPotential
     * @ORM\ManyToOne(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\GrowthPotential",inversedBy="growthMarkets")
     */
    private $growthPotential;

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
     * Set segment
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Segment $segment
     * @return GrowingMarket
     */
    public function setSegment(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Segment $segment = null)
    {
        $this->segment = $segment;

        return $this;
    }

    /**
     * Get segment
     *
     * @return \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Segment 
     */
    public function getSegment()
    {
        return $this->segment;
    }

    /**
     * Set subSegment
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\SubSegment $subSegment
     * @return GrowingMarket
     */
    public function setSubSegment(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\SubSegment $subSegment = null)
    {
        $this->subSegment = $subSegment;

        return $this;
    }

    /**
     * Get subSegment
     *
     * @return \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\SubSegment 
     */
    public function getSubSegment()
    {
        return $this->subSegment;
    }

    /**
     * Set growthPotential
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\GrowthPotential $growthPotential
     * @return GrowingMarket
     */
    public function setGrowthPotential(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\GrowthPotential $growthPotential = null)
    {
        $this->growthPotential = $growthPotential;

        return $this;
    }

    /**
     * Get growthPotential
     *
     * @return \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\GrowthPotential 
     */
    public function getGrowthPotential()
    {
        return $this->growthPotential;
    }
}
