<?php

namespace Coramer\Sigtec\CompanyBundle\Controller;

use Tecnocreaciones\Bundle\ResourceBundle\Controller\ResourceController;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

/**
 * Contact controller.
 *
 */
class ContactController extends ResourceController
{
    /**
     * 
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \Coramer\Sigtec\CompanyBundle\Entity\Company $company
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
        
        $form = $this->getForm($resource);
        if ($request->isMethod('POST') && $form->submit($request)->isValid()) {
            $resource->setCompany($company);
            $resource = $this->domainManager->create($resource);

            return $this->redirect($this->generateUrl('coramer_sigtec_company_show',array('id' => $company->getId())));
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
            return $this->redirect($this->generateUrl('coramer_sigtec_company_show',array('id' => $resource->getCompany()->getId())));
        }
    }
}