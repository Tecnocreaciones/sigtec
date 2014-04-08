<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com.ve
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tecnocreaciones\Vzla\ApiBundle\Controller;

/**
 * Description of CountryController
 *
 * @author inhack20
 */
class CountryController extends \Tecnocreaciones\Bundle\ResourceBundle\Controller\ResourceController
{
    public function showAction(\Symfony\Component\HttpFoundation\Request $request) {
        $view = $this
            ->view()
            ->setTemplate($this->config->getTemplate('show.html'))
            ->setTemplateVar($this->config->getResourceName())
            ->setData($this->findOr404($request))
        ;
        $view->getSerializationContext()->setGroups(array('country'));
        return $this->handleView($view);
    }
    
    function getCountriesStatesAction(\Symfony\Component\HttpFoundation\Request $request) {
        $resource = $this->findOr404($request);
        $view = $this
            ->view()
            ->setTemplate($this->config->getTemplate('states.html'))
            ->setTemplateVar('states')
            ->setData($resource->getStates())
        ;
        $view->getSerializationContext()->setGroups('countries');
        return $this->handleView($view);
    }
    
    function getCountriesRegionsAction(\Symfony\Component\HttpFoundation\Request $request) {
        $resource = $this->findOr404($request);
        $view = $this
            ->view()
            ->setTemplate($this->config->getTemplate('regions.html'))
            ->setTemplateVar('regions')
            ->setData($resource->getRegions())
        ;
        $view->getSerializationContext()->setGroups('countries');
        return $this->handleView($view);
    }
}
