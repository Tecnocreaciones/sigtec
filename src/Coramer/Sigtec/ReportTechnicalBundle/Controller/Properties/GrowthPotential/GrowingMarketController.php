<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Coramer\Sigtec\ReportTechnicalBundle\Controller\Properties\GrowthPotential;

use Coramer\Sigtec\ReportTechnicalBundle\Event\Events;
use Coramer\Sigtec\ReportTechnicalBundle\Controller\BaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;


/**
 * Controlador de mercados en crecimiento
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class GrowingMarketController extends BaseController
{
    /**
     * Retorna el formulario de mercado en crecimiento
     * 
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return type
     * @throws type
     */
    function getFormAction(Request $request) 
    {
        $reportTechnical = $this->findReportTechnicalOr404($request);
        //Security Check
        $user = $this->getUser();
        if(!$user->getCompanies()->contains($reportTechnical->getCompany())){
            throw $this->createAccessDeniedHttpException();
        }
        $resource = $this->createNew();
        $resource->setGrowthPotential($reportTechnical->getGrowthPotential());
        $form = $this->getForm($resource);
        return $this->render('CoramerSigtecWebBundle:Backend:ReportTechnical/Properties/GrowthPotential/growthMarketForm.html.twig',array(
            'form' => $form->createView(),
            'reportTechnical' => $reportTechnical,
        ));
    }
    
    /**
     * Lista los mercados en crecimiento
     * 
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return type
     * @throws type
     */
    function listAction(Request $request)
    {
        $reportTechnical = $this->findReportTechnicalOr404($request);
        //Security Check
        $user = $this->getUser();
        if(!$user->getCompanies()->contains($reportTechnical->getCompany())){
            throw $this->createAccessDeniedHttpException();
        }
        
        $growthPotential = $reportTechnical->getGrowthPotential();
        
        $view = $this->view($growthPotential->getGrowthMarkets());
        $view->getSerializationContext()->setGroups(array('id','report_technical'));
        return $this->handleView($view);
    }
    
    /**
     * Añade un mercado en crecimiento
     * 
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return type
     * @throws type
     */
   public function createAction(Request $request) {
        $reportTechnical = $this->findReportTechnicalOr404($request);
        
        $this->dispatchReportTechnicalEvent(Events::REPORT_TECHNICAL_GROWING_MARKET_PRE_CREATE, $reportTechnical);
        
        $resource = $this->createNew();
        $resource->setGrowthPotential($reportTechnical->getGrowthPotential());
        $form = $this->getForm($resource);
        $data = array();
        $view = $this->view();
        if ($request->isMethod('POST') && $form->submit($request)->isValid()) {
            $resource->setGrowthPotential($reportTechnical->getGrowthPotential());
            $resource = $this->domainManager->create($resource);
            $reportTechnical->getGrowthPotential()->addGrowthMarket($resource);
            
            $this->dispatchReportTechnicalEvent(Events::REPORT_TECHNICAL_GROWING_MARKET_POST_CREATE, $reportTechnical);
            
            /** @var FlashBag $flashBag */
            $flashBag = $this->get('session')->getBag('flashes');
            if (null === $resource) {
                $view->setStatusCode(400);
                $data['message'] = 'Error';
            }else{
                $data['message'] = $flashBag->get('success');
                return $this->handleView($this->view($data));
            }
        }
        
        $data['form'] = $form;
        $view->setData($data);
        return $this->handleView($view);
    }
    
    /**
     * Actualiza un mercado en crecimiento
     * 
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     * @throws type
     */
    public function updateAction(Request $request) {
        $reportTechnical = $this->findReportTechnicalOr404($request);
        
        $this->dispatchReportTechnicalEvent(Events::REPORT_TECHNICAL_GROWING_MARKET_PRE_UPDATE, $reportTechnical);
        
        $resource = $this->getRepository()->find($request->get('slug'));
        $resource->setGrowthPotential($reportTechnical->getGrowthPotential());
        $form = $this->getForm($resource);
        
        if (($request->isMethod('PUT') || $request->isMethod('POST')) && $form->submit($request)->isValid()) {

            $this->domainManager->update($resource);
            
            $this->dispatchReportTechnicalEvent(Events::REPORT_TECHNICAL_GROWING_MARKET_POST_UPDATE, $reportTechnical);
            
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
     * Elimina un mercado en crecimiento
     * 
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return type
     * @throws type
     */
    public function deleteAction(Request $request) {
        $reportTechnical = $this->findReportTechnicalOr404($request);
        
        $this->dispatchReportTechnicalEvent(Events::REPORT_TECHNICAL_GROWING_MARKET_PRE_DELETE, $reportTechnical);
        
        if($request->isXmlHttpRequest()){
            $resource = $this->getRepository()->find($request->get('slug'));
            if(!$resource){
                throw $this->createNotFoundException();
            }
            $this->domainManager->delete($resource);
            
            $reportTechnical->getGrowthPotential()->removeGrowthMarket($resource);
            
            $this->dispatchReportTechnicalEvent(Events::REPORT_TECHNICAL_GROWING_MARKET_POST_DELETE, $reportTechnical);
            
            /** @var FlashBag $flashBag */
            $flashBag = $this->get('session')->getBag('flashes');
            $data = array(
                'message' => $flashBag->get('success'),
            );
            return new JsonResponse($data);
        }
    }
}
