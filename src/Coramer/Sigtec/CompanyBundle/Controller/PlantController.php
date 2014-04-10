<?php

namespace Coramer\Sigtec\CompanyBundle\Controller;

use Coramer\Sigtec\CompanyBundle\Entity\Phone;
use Symfony\Component\HttpFoundation\Request;
use Tecnocreaciones\Bundle\ResourceBundle\Controller\ResourceController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

/**
 * Plant controller.
 *
 */
class PlantController extends ResourceController
{
    public function showAction(Request $request) {
        $resource = $this->findOr404($request);
        
        //Security Check
        $user = $this->getUser();
        if(!$user->getCompanies()->contains($resource->getCompany())){
            throw $this->createAccessDeniedHttpException();
        }
        
        $view = $this
            ->view()
            ->setTemplate($this->config->getTemplate('show.html'))
            ->setTemplateVar($this->config->getResourceName())
            ->setData($resource)
        ;
        $view->getSerializationContext()->setGroups('show');
        return $this->handleView($view);
    }
    
    public function updateAction(Request $request) {
        $resource = $this->findOr404($request);
        
        //Security Check
        $user = $this->getUser();
        if(!$user->getCompanies()->contains($resource->getCompany())){
            throw $this->createAccessDeniedHttpException();
        }
        
        $em = $this->getDoctrine()->getManager();
        $originalPhones = new \Doctrine\Common\Collections\ArrayCollection();
        foreach ($resource->getPhones() as $phone) {
            $originalPhones->add($phone);
        }
        $form = $this->getForm($resource);

        if (($request->isMethod('PUT') || $request->isMethod('POST')) && $form->submit($request)->isValid()) {
            foreach ($originalPhones as $phone) {
                if (false === $resource->getPhones()->contains($phone)) {
                    $em->remove($phone);
                }
            }
            $this->domainManager->update($resource);

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
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \Coramer\Sigtec\CompanyBundle\Entity\Company $company
     * @return type
     * @ParamConverter("company", class="Coramer\Sigtec\CompanyBundle\Entity\Company",options={"id" = "company_id"})
     */
    public function newAction(Request $request, \Coramer\Sigtec\CompanyBundle\Entity\Company $company)
    {
        //Security Check
        $user = $this->getUser();
        if(!$user->getCompanies()->contains($company)){
            throw $this->createAccessDeniedHttpException();
        }
        $resource = $this->createNew();
        if($request->isMethod('GET')){
            $phone = new Phone();
            $resource->getPhones()->add($phone);
        }
        $form = $this->getForm($resource);
        $resource->setCompany($company);
        if ($request->isMethod('POST') && $form->submit($request)->isValid()) {
            $resource = $this->domainManager->create($resource);

            return $this->redirect($this->generateUrl('coramer_sigtec_backend_company_show',array('id' => $company->getId())));
        }
        
        if ($this->config->isApiRequest()) {
            return $this->handleView($this->view($form));
        }

        $view = $this
            ->view()
            ->setTemplate($this->config->getTemplate('create.html'))
            ->setData(array(
                $this->config->getResourceName() => $resource,
                'form'                           => $form->createView(),
                'company' => $company,
            ))
        ;

        return $this->handleView($view);
    }
    
    public function deleteAction(Request $request) {
        $resource = $this->findOr404($request);
        //Security Check
        $user = $this->getUser();
        if(!$user->getCompanies()->contains($resource->getCompany())){
            throw $this->createAccessDeniedHttpException();
        }
        
        $this->domainManager->delete($resource);
        if($request->isXmlHttpRequest()){
            /** @var FlashBag $flashBag */
            $flashBag = $this->get('session')->getBag('flashes');
            $data = array(
                'message' => $flashBag->get('success'),
            );
            return new \Symfony\Component\HttpFoundation\JsonResponse($data);
        }else{
            return $this->redirect($this->generateUrl('coramer_sigtec_backend_company_show',array('id' => $resource->getCompany()->getId())));
        }
    }
}