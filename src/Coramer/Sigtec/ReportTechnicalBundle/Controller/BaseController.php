<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Coramer\Sigtec\ReportTechnicalBundle\Controller;

use Coramer\Sigtec\ReportTechnicalBundle\Entity\ReportTechnical;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Tecnocreaciones\Bundle\ResourceBundle\Controller\ResourceController;

/**
 * Description of BaseController
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
abstract class BaseController extends ResourceController
{
    /**
     * 
     * @param Request $request
     * @return ReportTechnical
     * @throws NotFoundHttpException
     */
    protected function findReportTechnicalOr404(Request $request)
    {
        $resource = $this->getReportTechnicalRepository()->find($request->get('id'));
        if(!$resource){
            throw $this->createNotFoundException();
        }
        return $resource;
    }
    
    /**
     * @return \Coramer\Sigtec\ReportTechnicalBundle\Repository\ReportTechnicalRepository
     */
    protected function getReportTechnicalRepository(){
        return $this->get('coramer_sigtec_backend.repository.company_report_technical');
    }
    
    /**
     * @param Request $request
     *
     * @return RedirectResponse|Response
     */
    public function updateAction(Request $request)
    {
        $resource = $this->findOr404($request);
        $form = $this->getForm($resource);
        
        if (($request->isMethod('PUT') || $request->isMethod('POST')) && $form->submit($request)->isValid()) {

            $this->domainManager->update($resource);
            if ($request->isXmlHttpRequest()) {
                /** @var FlashBag $flashBag */
                $flashBag = $this->get('session')->getBag('flashes');
                $data = array(
                    'message' => $flashBag->get('success'),
                );
                return new \Symfony\Component\HttpFoundation\JsonResponse($data);
            }
            return $this->redirectHandler->redirectTo($resource);
        }

        if ($this->config->isApiRequest()) {
            return $this->handleView($this->view($form));
        }

        $view = $this
            ->view()
            ->setTemplate($this->config->getTemplate('update.html'))
            ->setData(array(
                $this->config->getResourceName() => $resource,
                'form'                           => $form->createView()
            ))
        ;

        return $this->handleView($view);
    }
    
    /**
     * 
     * @param type $id
     * @param array $parameters
     * @param type $domain
     * @return string
     */
    function trans($id, array $parameters = array(), $domain = 'flashes')
    {
        return $this->get('translator')->trans($id,$parameters, $domain);
    }
    
    /**
     * Dispara un evento que contiene el reporte tecnico
     * 
     * @param type $eventName
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\ReportTechnical $reportTechnical
     * @return \Coramer\Sigtec\ReportTechnicalBundle\Event\ReportTechnicalEvent
     */
    function dispatchReportTechnicalEvent($eventName,ReportTechnical $reportTechnical)
    {
        $event = new \Coramer\Sigtec\ReportTechnicalBundle\Event\ReportTechnicalEvent($reportTechnical);
        $this->get('event_dispatcher')->dispatch($eventName,$event);
        return $event;
    }
}
