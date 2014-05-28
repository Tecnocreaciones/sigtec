<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Coramer\Sigtec\ReportTechnicalBundle\EventListener;

use Coramer\Sigtec\CompanyBundle\Manager\Events;
use Coramer\Sigtec\ReportTechnicalBundle\Event\ReportTechnicalEvent;
use Coramer\Sigtec\ReportTechnicalBundle\Manager\ReportTechnicalManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

/**
 * Escucha los eventos del reporte tecnico
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class ReportTechnicalListerner implements EventSubscriberInterface, ContainerAwareInterface
{
    private $container;
    
    public static function getSubscribedEvents() 
    {   
        return array(
            Events::REPORT_TECHNICAL_DETAIL_PRODUCT_STORAGE_UPDATE => array('checkSeonAddOrRemoveElementscurity',20),
        );
    }
    
    function onAddOrRemoveElements(ReportTechnicalEvent $event)
    {
        $reportTechnical = $event->getReportTechnical();
        if($this->getCompanyManager()->isValidRegistration($reportTechnical)){
            $reportTechnical->setValid(true);
        }else{
            $reportTechnical->setValid(false);
        }
        $em = $this->getEntityManager();
        $em->persist($reportTechnical);
        $em->flush();
    }
    
    function checkSecurity(ReportTechnicalEvent $reportTechnical)
    {
        $user = $this->getUser();
        if(!$user->getCompanies()->contains($reportTechnical->getCompany())){
            throw new AccessDeniedHttpException('Permission Denied!');
        }
    }

    public function setContainer(ContainerInterface $container = null) {
        $this->container = $container;
    }
    
    public function getEntityManager()
    {
        return $this->container->get('doctrine')->getManager();
    }
    
    /**
     * @return ReportTechnicalManager
     */
    function getReportTechnicalManager()
    {
        return $this->container->get('coramer_sigtec_company.company_manager');
    }
    
    /**
     * Get a user from the Security Context
     *
     * @return mixed
     *
     * @throws \LogicException If SecurityBundle is not available
     *
     * @see Symfony\Component\Security\Core\Authentication\Token\TokenInterface::getUser()
     */
    public function getUser()
    {
        if (!$this->container->has('security.context')) {
            throw new \LogicException('The SecurityBundle is not registered in your application.');
        }

        if (null === $token = $this->container->get('security.context')->getToken()) {
            return;
        }

        if (!is_object($user = $token->getUser())) {
            return;
        }

        return $user;
    }
}
