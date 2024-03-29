<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com.ve
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Coramer\Sigtec\CompanyBundle\Repository;

use Tecnocreaciones\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository;
/**
 * Description of CompanyRepository
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class CompanyRepository extends EntityRepository
{
    function getQueryAllCompanyCurrentClient() {
        $qb = $this->createQueryBuilder('c');
        $qb
            ->select('c')
            ->innerJoin('c.user','u')
            ->andWhere('c.status = :status')
            ->andWhere('u.id = :user')
            ->setParameter('user', $this->getUser())
            ->setParameter('status', true)
                ;
        return $qb;
    }
}
