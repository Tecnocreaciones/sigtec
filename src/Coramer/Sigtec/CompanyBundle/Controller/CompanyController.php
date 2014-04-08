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
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * Description of CompanyController
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com.ve>
 */
class CompanyController extends ResourceController
{
    /**
     * 
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return type
     * @Security("is_granted('ROLE_ADMIN')")
     */
    public function indexAction(Request $request) {
        return parent::indexAction($request);
    }
    /**
     * 
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return type
     * @Security("is_granted('ROLE_CLIENT')")
     */
    function clientIndexAction(Request $request) {
        $user = $this->getUser();
        $criteria = $request->get('filter',$this->config->getCriteria());
        $sorting = $request->get('sorting',$this->config->getSorting());
        $repository = $this->getRepository();
        $criteria['user'] = $user->getId();
        
        if ($this->config->isPaginated()) {
            $resources = $this->resourceResolver->getResource(
                $repository,
                'createPaginator',
                array($criteria, $sorting)
            );
            $maxPerPage = $this->config->getPaginationMaxPerPage();
            if(($limit = $request->query->get('limit')) && $limit > 0){
                if($limit > 100){
                    $limit = 100;
                }
                $maxPerPage = $limit;
            }
            $resources->setCurrentPage($request->get('page', 1), true, true);
            $resources->setMaxPerPage($maxPerPage);
        } else {
            $resources = $this->resourceResolver->getResource(
                $repository,
                'findBy',
                array($criteria, $sorting, $this->config->getLimit())
            );
        }

        $view = $this
            ->view()
            ->setTemplate($this->config->getTemplate('index.html'))
            ->setTemplateVar($this->config->getPluralResourceName())
        ;
        if($request->get('_format') == 'html'){
            $view->setData($resources);
        }else{
            $formatData = $request->get('_formatData','default');
            $view->setData($resources->toArray($this->config->getRedirectRoute('index'),array(),$formatData));
        }
        return $this->handleView($view);
    }
    
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
