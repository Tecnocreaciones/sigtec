<?php

/*
 * This file is part of the TecnocreacionesVzlaFixturesBundle package.
 * 
 * (c) www.tecnocreaciones.com.ve
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tecnocreaciones\Vzla\FixturesBundle\Repository;

use Doctrine\ORM\EntityRepository as BaseEntityRepository;

/**
 * Description of BaseRepository
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com.ve>
 */
class EntityRepository extends BaseEntityRepository
{
    function getAllActive() {
        return $this->findBy(array('active' => true));
    }
    
    function getAllInactive() {
        return $this->findBy(array('active' => false));
    }
}
