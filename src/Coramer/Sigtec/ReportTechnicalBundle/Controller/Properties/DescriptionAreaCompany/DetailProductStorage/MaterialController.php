<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Coramer\Sigtec\ReportTechnicalBundle\Controller\Properties\DescriptionAreaCompany\DetailProductStorage;

/**
 * Description of MaterialController
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class MaterialController extends \Coramer\Sigtec\ReportTechnicalBundle\Controller\BaseController
{
    function getActiveAction()
    {
        $resources = $this->getRepository()->getAllActive();
        $view = $this
            ->view()
            ->setTemplate($this->config->getTemplate('index.html'))
            ->setTemplateVar($this->config->getPluralResourceName())
            ->setData($resources)
        ;
        return $this->handleView($view);
    }
}
