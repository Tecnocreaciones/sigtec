<?php

namespace Coramer\Sigtec\CoreBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Tecnocreaciones\Bundle\ToolsBundle\Service\UnitConverter\Type\LengthUnitType;
use Tecnocreaciones\Bundle\ToolsBundle\Service\UnitConverter\Type\TextileYarnsUnitType;

class DefaultController extends Controller
{
    /**
     * @Route("/hello")
     * @Template()
     */
    public function indexAction()
    {
        $converter= $this->get('tecnocreaciones_tools.unit_converter');
        //$r = $converter->convert('storage', 22, 'Mb', 'Mb');
        $result = array();
        $num = 1;
        $result[] = array(
            $num,
            $converter->convert(LengthUnitType::getType(), $num, LengthUnitType::UNIT_INCH, LengthUnitType::UNIT_KILOMETER)
        );
        $result[] = array(
            $num,
            $converter->convert(TextileYarnsUnitType::getType(), $num, TextileYarnsUnitType::UNIT_DECITEX, TextileYarnsUnitType::UNIT_TEX)
        );
        return array(
            'result' => $result
        );
    }
}
