<?php

namespace Tecnocreaciones\Vzla\FixturesBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Routing\ClassResourceInterface;
use FOS\RestBundle\Controller\Annotations\Get;

class CityController extends \Tecnocreaciones\Bundle\ResourceBundle\Controller\ResourceController implements ClassResourceInterface
{
    // "api_vlza_get_cities"     [GET] /cities
    /**
     * DELETE Route annotation.
     * @GET("/cities.{_format}")
     */
    public function getCitiesAction()
    {
        $data = Array('aa');
        $view = $this->view($data);
        return $this->handleView($view);
    }
}
