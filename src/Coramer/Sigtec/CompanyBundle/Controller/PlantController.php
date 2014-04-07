<?php

namespace Coramer\Sigtec\CompanyBundle\Controller;

use Coramer\Sigtec\CompanyBundle\Entity\Phone;
use Coramer\Sigtec\CompanyBundle\Entity\Plant;
use Coramer\Sigtec\CompanyBundle\Form\PlantType;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use Tecnocreaciones\Bundle\ResourceBundle\Controller\ResourceController;

/**
 * Plant controller.
 *
 */
class PlantController extends ResourceController
{
    
    public function newAction($companyId)
    {
        $phone1 = new Phone();
        $entity = new Plant();
        $entity->getPhones()->add($phone1);
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }
}