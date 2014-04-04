<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com.ve
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Coramer\Sigtec\CompanyBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Tecnocreaciones\Bundle\ResourceBundle\Controller\ResourceController;

/**
 * Description of CompanyController
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com.ve>
 */
class CompanyController extends ResourceController
{
    function validateRifAction(Request $request) {
        $resource = $this->findOr404($request);
        $response = new \Symfony\Component\HttpFoundation\JsonResponse();
        $data = array();
        if($resource->isRifValidated()){
            $data['message'] = $this->get('translator')->trans('sigtec.the_rif_has_already_been_validated');
        }else{
            /** \Tecnocreaciones\Vzla\ToolsBundle\Tools\RifTool **/
            $rifService = $this->get('tecnocreaciones_vzla_tools.rif');
            
            $rifResponse= $rifService->getRif($resource->getRif());
            if($rifResponse->isValid()){
                
            }else{
                $response->setStatusCode(400);
                $data = $rifResponse->getArrayResponse();
            }
        }
        $response->setData($data);
        
        return $response;
    }
}
