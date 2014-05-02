<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Coramer\Sigtec\CoreBundle\EventListener;

/**
 * Description of PurgeListerner
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class PurgeListerner implements \Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    public static function getSubscribedEvents() {
        return array(
            \Tecnocreaciones\Bundle\ToolsBundle\ToolsEvents::PRE_PURGER => 'onePrePurger',
        );
    }
    
    function onePrePurger(\Tecnocreaciones\Bundle\ToolsBundle\Event\PurgeEvent $event)
    {
        $qb = $event->createQueryBuilder();
        $qb
            ->delete('Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\DescriptionAreaCompany\DescriptionArea','d')
            ->andWhere($qb->expr()->isNotNull('d.parent'))
            ;
        $event->addSqlCondition($qb);
    }
}
