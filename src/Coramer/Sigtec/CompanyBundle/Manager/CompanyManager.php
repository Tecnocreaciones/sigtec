<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Coramer\Sigtec\CompanyBundle\Manager;

use Coramer\Sigtec\CompanyBundle\Entity\Company;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Administrador de empresa
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class CompanyManager implements ContainerAwareInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;
    
    /**
     * Retorna el porcentaje de registro de la empresa con la información faltante.
     * 
     * @param Company $company
     * @return integer|array
     */
    function getRegistrationPercentage(Company $company,$withErrors = false)
    {
        $percentage= 0 ;
        $errors = array();
        $validPlant = $validContact = false;
        if(count($company->getPlants()) > 0){
            foreach ($company->getPlants() as $plant) {
                if($plant->isStatus()){
                    $validPlant = true;
                    break;
                }
            }
            if($validPlant){
               $percentage+= 50; 
            }else{
               $percentage+= 10; 
                $errors[] = $this->trans('sigtec.help.company.at_least_one_plan_must_be_active', array('%x%' => 1), 'help');   
            }
        }else{
            $errors[] = $this->trans('sigtec.help.company.you_must_add_at_least_x_plants', array('%x%' => 1), 'help');   
        }
        
        if(count($company->getContacts()) > 0){
            $percentage+= 50;
        }else{
            $errors[] = $this->trans('sigtec.help.company.you_must_add_at_least_x_contacts', array('%x%' => 1), 'help');
        }
        
        $result = $percentage;
        if($withErrors){
            $result = array(
                'percentage' => $percentage,
                'errors' => $errors
            );
        }
        return $result;
    }
    
    function isValidRegistration(Company $company)
    {
        if($this->getRegistrationPercentage($company) == 100){
            return true;
        }
        return false;
    }

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }
    
    protected function trans($id, array $parameters = array(), $domain = null)
    {
        return $this->container->get('translator')->trans($id,$parameters,$domain);
    }
}
