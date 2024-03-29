<?php


namespace Coramer\Sigtec\CompanyBundle\Repository;

use Tecnocreaciones\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository;

/**
 * PlantRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PlantRepository extends EntityRepository
{   
    function findByCompanyNameAndUser(array $parameters)
    {
        $name = $company = null;
        if(isset($parameters['name'])){
            $name = $parameters['name'];
        }
        if(isset($parameters['company'])){
            $company = $parameters['company'];
        }
        $qb = $this->createQueryBuilder('p');
        $qb
                ->select('p')
                ->andWhere('p.name = :name')
                ->innerJoin('p.company', 'c')
                ->innerJoin('c.user', 'u')
                ->andWhere('c.id = :company')
                ->andWhere('u.id = :user')
                ->setParameters(array(
                    'name' => $name,
                    'user' => $this->getUser(),
                    'company' => $company,
                ))
                ;
        return $qb->getQuery()->getResult();
    }
    
    /**
     * Retorna las plantas activas de una compañia
     * @param \Coramer\Sigtec\CompanyBundle\Entity\Company $company
     * @return type
     */
    function getAllActiveByCompany(\Coramer\Sigtec\CompanyBundle\Entity\Company $company) 
    {
        return $this->getQueryBuilderAllActiveByCompany($company)
               ->getQuery()
               ->getResult();
    }
    
    /**
     * Retorna las plantas activas de una compañia
     * @param \Coramer\Sigtec\CompanyBundle\Entity\Company $company
     * @return type
     */
    function getQueryBuilderAllActiveByCompany(\Coramer\Sigtec\CompanyBundle\Entity\Company $company) 
    {
        return $this->getQueryAllActive()
                ->andWhere('p.company = :company')
                ->setParameter('company', $company)
                ;
    }
    
    function getAllActive() {
        return $this->getQueryAllActive()->getQuery()->getResult();
    }
    
    function getAllInactive() {
        return $this->findBy(array('active' => false));
    }
    
    function getQueryAllActive() {
        $qb = $this->createQueryBuilder('p');
        $qb
                ->andWhere('p.status = :status')
                ->setParameter('status', true);
        return $qb;
    }
}
