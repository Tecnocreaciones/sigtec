<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Coramer\Sigtec\ReportTechnicalBundle\Manager;

use Coramer\Sigtec\ReportTechnicalBundle\Entity\ReportTechnical;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Manejador del reporte tecnico
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class ReportTechnicalManager implements ContainerAwareInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;
    
    private $errors;
    
    private $percentage;
    
    public function __construct() {
        $this->errors = array();
    }
    
    public function getErrors()
    {
        return $this->errors;
    }
    
    public function addError($error,array $parameters = array(), $domain = 'help')
    {
        return $this->errors[] = $this->trans($error,$parameters,$domain);
    }
    
    /**
     * Retorna el porcentaje de registro del reporte tecnico con la información faltante.
     * 
     * @param ReportTechnical $reportTechnical
     * @return integer|array
     */
    function getRegistrationPercentage(ReportTechnical $reportTechnical)
    {
        $this->percentage = 0;
        
        //Evalue el perfil profesional
        if($reportTechnical->getProfessionalProfile()->getTotal() == 0){
            $this->addError('sigtec.help.company_report_technical.you_must_enter_the_professional_profile');
        }else{
            $this->percentage+= 50;
        }
        
        //Evalua el nivel de produccion
        if(count($reportTechnical->getProductionLevels()) > 0){
            $valid = true;
            foreach ($reportTechnical->getProductionLevels() as $productionLevel) {
                if(count($productionLevel->getMachineries()) == 0){
                    $this->addError('sigtec.help.company_report_technical.you_must_add_at_least_one_level_production_machinery',
                        array('%x%'=>$productionLevel->getProcess()->getDescription())
                    );
                    $valid = false;
                    break;
                }
            }
            if($valid){
                $this->percentage += 50;
            }
        }else{
            $this->addError('sigtec.help.company_report_technical.you_must_add_production_levels');
        }
        
        $update = false;
        if($this->percentage == 100 && !$reportTechnical->isValid()){
            $reportTechnical->setValid(true);
            $update = true;
        }elseif($this->percentage < 100 && $reportTechnical->isValid()){
            $update = true;
            $reportTechnical->setValid(false);
        }
        if($update){
            $em = $this->getEntityManager();
            $em->persist($reportTechnical);
            $em->flush();
        }
        return $this->percentage;
    }
    
    function isValidRegistration(ReportTechnical $reportTechnical)
    {
        if($this->getRegistrationPercentage($reportTechnical) == 100){
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
    
    public function getEntityManager()
    {
        return $this->container->get('doctrine')->getManager();
    }
}
