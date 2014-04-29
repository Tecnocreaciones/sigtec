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
     * @var \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\PlantDescription
     * 
     * @ORM\OneToMany(targetEntity="Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\PlantDescription", mappedBy="descriptionAreaCompany")
     */
    protected $plantsDescription;
    
    public function __construct() {
        $this->plantsDescription = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add plantsDescription
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\PlantDescription $plantsDescription
     * @return DescriptionAreaCompany
     */
    public function addPlantsDescription(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\PlantDescription $plantsDescription)
    {
        $this->plantsDescription[] = $plantsDescription;

        return $this;
    }

    /**
     * Remove plantsDescription
     *
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\PlantDescription $plantsDescription
     */
    public function removePlantsDescription(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\PlantDescription $plantsDescription)
    {
        $this->plantsDescription->removeElement($plantsDescription);
    }

    /**
     * Get plantsDescription
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPlantsDescription()
    {
        return $this->plantsDescription;
    }
}
