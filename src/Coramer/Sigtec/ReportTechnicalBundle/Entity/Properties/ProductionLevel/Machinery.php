<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\ProductionLevel;

use Doctrine\ORM\Mapping as ORM;

/**
 * Maquinaria
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 * @ORM\Table()
 * @ORM\Entity
 */
class Machinery
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
     * Datos de la maquinaria
     * 
     * @var array
     * @ORM\Column(name="data", type="array")
     */
    private $data;

    /**
     * Nivel de produccion
     * 
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\ProductionLevel
     * @ORM\ManyToOne(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\ProductionLevel",inversedBy="machineries")
     */
    private $productionLevel;

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
     * Set data
     *
     * @param array $data
     * @return Machinery
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return array 
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set productionLevel
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\ProductionLevel $productionLevel
     * @return Machinery
     */
    public function setProductionLevel(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\ProductionLevel $productionLevel = null)
    {
        $this->productionLevel = $productionLevel;

        return $this;
    }

    /**
     * Get productionLevel
     *
     * @return \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\ProductionLevel 
     */
    public function getProductionLevel()
    {
        return $this->productionLevel;
    }
}
