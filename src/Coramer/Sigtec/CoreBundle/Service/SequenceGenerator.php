<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com.ve
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Coramer\Sigtec\CoreBundle\Service;

/**
 * Generate the sequence of entities
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class SequenceGenerator
{
    /**
     *
     * @var \Tecnocreaciones\Bundle\ToolsBundle\Service\SequenceGenerator
     */
    private $sequenceGenerator;
    
    /**
     * Generate sequence plants from your company
     * @param \Coramer\Sigtec\CompanyBundle\Entity\Company $company
     * @return string
     */
    public function getNextNamePlant(\Coramer\Sigtec\CompanyBundle\Entity\Company $company) {
        $qb = $this->sequenceGenerator->createQueryBuilder();
        $qb
            ->from('Coramer\Sigtec\CompanyBundle\Entity\Plant', 'p')
            ->join('p.company', 'c')
            ->where('c.id = :company')
            ->setParameter('company', $company)
            ;
        $mask = 'Planta {000}';
        return $this->sequenceGenerator->generateNext($qb,$mask,'name');
    }
    
    function getNextTempArchive()
    {
        $qb = $this->sequenceGenerator->createQueryBuilder();
        $qb->from('Coramer\Sigtec\ReportTechnicalBundle\Entity\ReportTechnical', 'rt')
            ;
        return $this->sequenceGenerator->generateNextTemp($qb,'archive');
    }
    
    public function setSequenceGenerator(\Tecnocreaciones\Bundle\ToolsBundle\Service\SequenceGenerator $sequenceGenerator) {
        $this->sequenceGenerator = $sequenceGenerator;
    }
}
