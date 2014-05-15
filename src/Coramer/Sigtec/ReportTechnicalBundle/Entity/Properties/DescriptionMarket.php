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
 * Descripcion del mercado
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 * @ORM\Table()
 * @ORM\Entity
 */
class DescriptionMarket 
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
     * Producto
     * 
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Product
     * @ORM\ManyToOne(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Product")
     */
    private $product;
    
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
     * Porcentaje de participacion
     * 
     * @var integer
     * @ORM\Column(name="participationRate",type="integer")
     */
    private $participationRate;
    
    /**
     * Requerimiento al mercado
     * 
     * @var integer
     * @ORM\Column(name="requirement",type="integer")
     */
    private $requirement;
    
    /**
     * Reporte tecnico
     * 
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\ReportTechnical 
     * @ORM\ManyToOne(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\ReportTechnical",inversedBy="descriptionMarkets")
     */
    private $reportTechnical;

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
     * Set participationRate
     *
     * @param integer $participationRate
     * @return DescriptionMarket
     */
    public function setParticipationRate($participationRate)
    {
        $this->participationRate = $participationRate;

        return $this;
    }

    /**
     * Get participationRate
     *
     * @return integer 
     */
    public function getParticipationRate()
    {
        return $this->participationRate;
    }

    /**
     * Set requirement
     *
     * @param integer $requirement
     * @return DescriptionMarket
     */
    public function setRequirement($requirement)
    {
        $this->requirement = $requirement;

        return $this;
    }

    /**
     * Get requirement
     *
     * @return integer 
     */
    public function getRequirement()
    {
        return $this->requirement;
    }

    /**
     * Set product
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Product $product
     * @return DescriptionMarket
     */
    public function setProduct(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Product $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Product 
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set segment
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\Segment $segment
     * @return DescriptionMarket
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
     * @return DescriptionMarket
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
     * Set reportTechnical
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\ReportTechnical $reportTechnical
     * @return DescriptionMarket
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
