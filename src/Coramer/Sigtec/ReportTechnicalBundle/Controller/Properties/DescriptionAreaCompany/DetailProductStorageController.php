<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Coramer\Sigtec\ReportTechnicalBundle\Controller\Properties\DescriptionAreaCompany;

use Coramer\Sigtec\ReportTechnicalBundle\Controller\BaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;

/**
 * Description of DetailProductStorageController
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class DetailProductStorageController extends BaseController
{
    public function listAction(Request $request) {
        $reportTechnical = $this->findReportTechnicalOr404($request);
        $view = $this
            ->view()
            ->setTemplate($this->config->getTemplate('index.html'))
            ->setTemplateVar($this->config->getPluralResourceName())
        ;
        $view->setData($reportTechnical->getDescriptionAreaCompany()->getDetailProductStorages());
        $view->getSerializationContext()->setGroups(array('report_technical','id'));
        return $this->handleView($view);
    }
    
    public function createAction(Request $request)
    {    
        $reportTechnical = $this->findReportTechnicalOr404($request);
        //Security Check
        $user = $this->getUser();
        if(!$user->getCompanies()->contains($reportTechnical->getCompany())){
            throw $this->createAccessDeniedHttpException();
        }
        $resource = $this->createNew();
        $resource->setDescriptionAreaCompany($reportTechnical->getDescriptionAreaCompany());
        
        $form = $this->getForm($resource);
        $data = array();
        $view = $this->view();
        if ($request->isMethod('POST') && $form->submit($request)->isValid()) {
            $resource->setDescriptionAreaCompany($reportTechnical->getDescriptionAreaCompany());
            $resource = $this->domainManager->create($resource);
            
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
    public function updateAction(Request $request)
    {
        $resource = $this->findOr404($request);
        $reportTechnical = $resource->getDescriptionAreaCompany()->getReportTechnical();
        //Security Check
        $user = $this->getUser();
        if(!$user->getCompanies()->contains($reportTechnical->getCompany())){
            throw $this->createAccessDeniedHttpException();
        }
        return parent::updateAction($request);
    }
    public function deleteAction(Request $request)
    {
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
            $this->domainManager->delete($resource);
            /** @var FlashBag $flashBag */
            $flashBag = $this->get('session')->getBag('flashes');
            $data = array(
                'message' => $flashBag->get('success'),
            );
            return new JsonResponse($data);
        }
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
        $resource->setDescriptionAreaCompany($reportTechnical->getDescriptionAreaCompany());
        $form = $this->getForm($resource);
        return $this->render('CoramerSigtecWebBundle:Backend:ReportTechnical/Properties/DescriptionAreaCompany/DetailProductStorage/form.html.twig',array(
            'form' => $form->createView(),
            'reportTechnical' => $reportTechnical,
        ));
    }
}