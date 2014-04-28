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
 * Description of DescriptionAreaCompany
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 * @ORM\Table()
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class DescriptionAreaCompany
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
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\Area
     * 
     * @ORM\OneToOne(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\Area")
     */
    protected $area;
    

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
     * Set area
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\Area $area
     * @return DescriptionAreaCompany
     */
    public function setArea(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\Area $area = null)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Get area
     *
     * @return \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\Area 
     */
    public function getArea()
    {
        return $this->area;
    }
}
