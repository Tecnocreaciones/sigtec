<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Coramer\Sigtec\ReportTechnicalBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Description of SimpleRepository
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class SimpleRepository extends EntityRepository
{
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
