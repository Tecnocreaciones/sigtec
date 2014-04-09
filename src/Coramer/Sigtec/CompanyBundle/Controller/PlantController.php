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
    public function updateAction(Request $request) {
        
        return parent::updateAction($request);
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
        $resource = $this->createNew();
        if($request->isMethod('GET')){
            $phone = new Phone();
            $resource->getPhones()->add($phone);
        }
        $form = $this->getForm($resource);
        if ($request->isMethod('POST') && $form->submit($request)->isValid()) {
            $resource->setCompany($company);
            $resource = $this->domainManager->create($resource);

            if (null === $resource) {
                return $this->redirectHandler->redirectToIndex();
            }

            return $this->redirectHandler->redirectTo($resource);
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
}