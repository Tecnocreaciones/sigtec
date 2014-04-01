<?php

namespace Coramer\Sigtec\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DashboardController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
    
    /**
     * @Route("/new")
     * @Template()
     */
    public function newAction()
    {
        return array();
    }
    /**
     * @Route("/new2")
     * @Template()
     */
    public function new2Action()
    {
        return array();
    }
}
