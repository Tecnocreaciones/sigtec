<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com.ve
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tecnocreaciones\Bundle\ResourceBundle\Model\Paginator;

use Pagerfanta\Pagerfanta as BasePagerfanta;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Routing\Router;

/**
 * Pagerfanta modificado para serializarlo
 *
 * @author Anais Ortega <adcom23@tecnocreaciones.com.ve>
 */
class Pagerfanta extends BasePagerfanta implements ContainerAwareInterface
{
    protected $route = null;
    protected $container;
            
    function toArray($route = null,array $parameters = array()) {
        $links = array(
            'self'  => array('href' => ''),
            'first' => array('href' => ''),
            'last'  => array('href' => ''),
            'next'  => array('href' => ''),
            'previous'  => array('href' => ''),
        );
        $paginator = array(
                        'getNbResults' => $this->getNbResults(),
                        'getCurrentPage' => $this->getCurrentPage(),
                        'getNbPages' => $this->getNbPages(),
                        'getMaxPerPage' => $this->getMaxPerPage(),
                    );
        if($route != null){
            $links['first']['href'] = $this->generateUrl($route, array_merge($parameters, array('page' => 1)));
            $links['self']['href'] = $this->generateUrl($route, array_merge($parameters, array('page' => $this->getCurrentPage())));
            $links['last']['href'] = $this->generateUrl($route, array_merge($parameters, array('page' => $this->getNbPages())));
            if($this->hasPreviousPage()){
                $links['previous']['href'] = $this->generateUrl($route, array_merge($parameters, array('page' => $this->getPreviousPage())));
            }
            if($this->hasNextPage()){
                $links['next']['href'] = $this->generateUrl($route, array_merge($parameters, array('page' => $this->getNextPage())));
            }
        }
        $results = $this->getCurrentPageResults()->getArrayCopy();
        return array(
            '_links' => $links,
            '_embedded' => array(
                'results' => $results,
                'paginator' => $paginator
            ),
        );
    }
    
    protected function  generateUrl($route,array $parameters){
        return $this->container->get('router')->generate($route, $parameters, Router::ABSOLUTE_URL);
    }
    
    public function setContainer(ContainerInterface $container = null) {
        $this->container = $container;
    }
}
