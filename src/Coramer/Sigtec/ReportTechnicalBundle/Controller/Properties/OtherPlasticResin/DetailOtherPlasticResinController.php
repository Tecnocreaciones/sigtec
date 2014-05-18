<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Coramer\Sigtec\ReportTechnicalBundle\Controller\Properties\OtherPlasticResin;

use Coramer\Sigtec\ReportTechnicalBundle\Controller\BaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Controlador de los detalles de otras resinas plasticas
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class DetailOtherPlasticResinController extends BaseController
{
    public function listAction(Request $request) {
        $reportTechnical = $this->findReportTechnicalOr404($request);
        $view = $this
            ->view()
        ;
        $view->setData($reportTechnical->getOtherPlasticResin());
        return $this->handleView($view);
    }
    
    public function createAction(Request $request) {
        $reportTechnical = $this->findReportTechnicalOr404($request);
        //Security Check
        $user = $this->getUser();
        if(!$user->getCompanies()->contains($reportTechnical->getCompany())){
            throw $this->createAccessDeniedHttpException();
        }
        $otherPlasticResin = $reportTechnical->getOtherPlasticResin();
        
        $resource = $this->createNew();
        $resource->setOtherPlasticResin($otherPlasticResin);
        $form = $this->getForm($resource);
        $data = array();
        $view = $this->view();
        if ($request->isMethod('POST') && $form->submit($request)->isValid()) {
            $resource = $this->domainManager->create($resource);
            if(!$otherPlasticResin->isUseOtherPlasticResins()){
                $otherPlasticResin->setUseOtherPlasticResins(true);
                $em = $this->getDoctrine()->getManager();
                $em->persist($otherPlasticResin);
                $em->flush();
            }
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
    
    public function deleteAction(Request $request) {
        $reportTechnical = $this->findReportTechnicalOr404($request);
        //Security Check
        $user = $this->getUser();
        if(!$user->getCompanies()->contains($reportTechnical->getCompany())){
            throw $this->createAccessDeniedHttpException();
        }
        if($request->isXmlHttpRequest()){
            $resource = $this->getRepository()->find($request->get('slug'));
            if(!$resource){
                throw $this->createNotFoundException();
            }
            $otherPlasticResin = $reportTechnical->getOtherPlasticResin();
            
            $this->domainManager->delete($resource);
            
            $otherPlasticResin->removeDetailOthersPlasticResin($resource);
            
            /** @var FlashBag $flashBag */
            $flashBag = $this->get('session')->getBag('flashes');
            
            if($otherPlasticResin->getDetailOthersPlasticResin()->isEmpty()){
                $otherPlasticResin->setUseOtherPlasticResins(false);
                $em = $this->getDoctrine()->getManager();
                $em->persist($otherPlasticResin);
                $em->flush();
            }
            
            $data = array(
                'message' => $flashBag->get('success'),
            );
            return new JsonResponse($data);
        }
    }
    
    public function updateAction(Request $request) {
        $reportTechnical = $this->findReportTechnicalOr404($request);
        //Security Check
        $user = $this->getUser();
        if(!$user->getCompanies()->contains($reportTechnical->getCompany())){
            throw $this->createAccessDeniedHttpException();
        }
        $resource = $this->getRepository()->find($request->get('slug'));
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
    
    function getFormAction(Request $request)
    {
        $reportTechnical = $this->findReportTechnicalOr404($request);
        //Security Check
        $user = $this->getUser();
        if(!$user->getCompanies()->contains($reportTechnical->getCompany())){
            throw $this->createAccessDeniedHttpException();
        }
        
        $resource = $this->createNew();
        $form = $this->getForm($resource);
        return $this->render('CoramerSigtecWebBundle:Backend:ReportTechnical/Properties/OtherPlasticResin/DetailOtherPlasticResin/form.html.twig',array(
            'form' => $form->createView(),
            'reportTechnical' => $reportTechnical,
        ));
    }
}
