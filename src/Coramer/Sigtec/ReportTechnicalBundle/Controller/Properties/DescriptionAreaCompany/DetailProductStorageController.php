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

use Tecnocreaciones\Bundle\ResourceBundle\Controller\ResourceController;

/**
 * Description of DetailProductStorageController
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class DetailProductStorageController extends ResourceController
{
    function getFormAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $resource = $this->createNew();
        $form = $this->getForm($resource);
        return $this->render('CoramerSigtecWebBundle:Backend:ReportTechnical/Properties/DescriptionAreaCompany/DetailProductStorage/form.html.twig',array(
            'form' => $form->createView(),
        ));
    }
}
