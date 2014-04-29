<?php

namespace Coramer\Sigtec\ReportTechnicalBundle\Repository\Properties\DescriptionAreaCompany;

use Doctrine\ORM\EntityRepository;

/**
 * DescriptionAreaRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class DescriptionAreaRepository extends EntityRepository
{
    function getAllParentActive()
    {
        $qb = $this->createQueryBuilder('d');
        $qb
                ->andWhere($qb->expr()->isNull('d.parent'))
                ->andWhere('d.active = :active')
                ->setParameter('active', true);
        return $qb->getQuery()->getResult();
    }
    
    function getAllActive() {
        return $this->getQueryAllActive()->getQuery()->getResult();
    }
    
    function getAllInactive() {
        return $this->findBy(array('active' => false));
    }
    
    function getQueryAllActive() {
        $qb = $this->createQueryBuilder('e');
        $qb
                ->andWhere('e.active = :active')
                ->setParameter('active', true);
        return $qb;
    }
}