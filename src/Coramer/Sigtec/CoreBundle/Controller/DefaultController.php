<?php

namespace Coramer\Sigtec\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/hello")
     * @Template()
     */
    public function indexAction()
    {
        $generatorSecuence = $this->get('tecnocreaciones_tools.sequence_generator');
        $qb = $generatorSecuence->createQueryBuilder();
        $qb->from('Tecnocreaciones\Vzla\EntityBundle\Entity\Country', 'c');
        $mask = '{dd}-{000}';
        $mask = '{mm}-{000}';
        $mask = '{yyyy}-{000}';
        $mask = '{yy}-{000}';
        $mask = '{mask1}-{000}';
        $mask = '{mask2}-{000}';
        $mask = 'Test-{mask1}-{mask2}-{dd}-{mm}-{yyyy}-{yy}-{000+4}';
        
        $secuence = $this->get('tecnocreaciones_tools.sequence_generator')->generateNext($qb,$mask,'description',array('mask1' => 'ZONAS','mask2' => 'CATEGORIA'));
        return array('secuence' => $secuence);
    }
}
