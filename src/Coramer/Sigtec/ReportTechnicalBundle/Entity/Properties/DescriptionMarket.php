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
}
