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
 * Otro mercado
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 * @ORM\Table()
 * @ORM\Entity
 */
class OtherMarket
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
     * Motivo
     * 
     * @var string
     * @ORM\Column(name="motive",type="string",length=100)
     */
    private $motive;
    
    /**
     * Segmento
     * 
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Segment
     * @ORM\ManyToOne(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Segment")
     */
    private $segment;
    
    /**
     * Sub Segmento
     * 
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\SubSegment
     * @ORM\ManyToOne(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\SubSegment")
     */
    private $subSegment;
    
    /**
     * Potencial de crecimiento
     * 
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\GrowthPotential
     * @ORM\ManyToOne(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\GrowthPotential",inversedBy="otherMarkets")
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
     * Set motive
     *
     * @param string $motive
     * @return OtherMarket
     */
    public function setMotive($motive)
    {
        $this->motive = $motive;

        return $this;
    }

    /**
     * Get motive
     *
     * @return string 
     */
    public function getMotive()
    {
        return $this->motive;
    }

    /**
     * Set segment
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Segment $segment
     * @return OtherMarket
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
     * @return OtherMarket
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
     * @return OtherMarket
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
