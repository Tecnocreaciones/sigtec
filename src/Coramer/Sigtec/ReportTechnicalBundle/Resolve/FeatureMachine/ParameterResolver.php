<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Coramer\Sigtec\ReportTechnicalBundle\Resolve\FeatureMachine;

/**
 * Description of ParameterResolver
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class ParameterResolver implements \Symfony\Component\DependencyInjection\ContainerAwareInterface
{
    /**
     *
     * @var \Symfony\Component\DependencyInjection\ContainerInterface
     */
    private $container;
    
    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $em;
    
    /**
     * Caracteristicas de las maquinarais
     * 
     * @var array 
     */
    private $featuresMachinery;
    
    function __construct(\Doctrine\ORM\EntityManager $em) {
        $this->em = $em;
        $this->getFeaturesMachinery();
    }
    /**
     * Resuelve el valor de las caracteristicas
     * 
     * @param type $name
     * @param type $value
     * @return type
     */
    function getResolveValue($name,$value) 
    {
        $feature = $this->getFeaturesMachineryByName($name);
        $fieldType = $feature->getFieldType();
        switch ($fieldType):
            case 'entity':
                return $this->resolveByEntity($feature,$value);
            case 'choice':
                return $this->resolveByChoice($feature,$value);
            default;
            return $value;
        endswitch;
    }
    
    public function setContainer(\Symfony\Component\DependencyInjection\ContainerInterface $container = null) {
        $this->container = $container;
    }
    
    /**
     * 
     * @return \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\FeatureMachinery
     */
    public function getFeaturesMachinery() {
         if($this->featuresMachinery === null){
            $this->featuresMachinery = $this->em->getRepository('Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\FeatureMachinery')->findBy(array(
                'active' => true,
            ));
            if($this->featuresMachinery){
                foreach ($this->featuresMachinery as $featureMachinery) {
                    $this->featuresMachinery[$featureMachinery->getName()] = $featureMachinery;
                }
            }
        }
        return $this->featuresMachinery;
    }
    
    /**
     * Retorna una caracteristica por su nombre
     * 
     * @param type $name
     * @return type
     * @throws \InvalidArgumentException
     */
    public function getFeaturesMachineryByName($name)
    {
        if(!isset($this->featuresMachinery[$name])){
            throw new \InvalidArgumentException('the name of feature not exist');
        }
        return $this->featuresMachinery[$name];
    }
    
    /**
     * Resuelve el valor por la entidad
     * 
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\FeatureMachinery $feature
     * @param integer $id
     * @return string
     */
    function resolveByEntity(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\FeatureMachinery $feature,$id) 
    {
        $class = $feature->getParameter('class');
        $property = $feature->getParameter('property');
        $entity = $this->em->getRepository($class)->find($id);
        if($entity){
            $accessor = \Symfony\Component\PropertyAccess\PropertyAccess::createPropertyAccessor();
            return $accessor->getValue($entity, $property);
        }
    }

    /**
     * Resuelve el valor por la opcion
     * 
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\FeatureMachinery $feature
     * @param type $value
     * @return string
     */
    function resolveByChoice(\Coramer\Sigtec\ReportTechnicalBundle\Entity\Master\FeatureMachinery $feature,$value) 
    {
        $choices = $feature->getParameter('choices');
        if(isset($choices[$value])){
            return $choices[$value];
        }
    }
}
