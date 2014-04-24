<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tecnocreaciones\Vzla\GovernmentBundle\Model;

/**
 * Description of TemplateConfig
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class TemplateConfig implements \Symfony\Component\DependencyInjection\ContainerAwareInterface
{
    private $templates = array();
    
    private $container;
    
    private $defaultOptions = array(
            'menu'              => array(),
            'logo'              => array(),
            'angular_dependencies'              => array(),
        );
            
    function setOptions($template, array $options) {
        
        $defaultOptions = $this->defaultOptions;
        // check option names and live merge, if errors are encountered Exception will be thrown
        $invalid = array();
        foreach ($options as $key => $value) {
            if (array_key_exists($key, $defaultOptions)) {
                if($key == 'angular_dependencies'){
                    $value = $this->fixDependencies($value);
                }
                $defaultOptions[$key] = $value;
            } else {
                $invalid[] = $key;
            }
        }

        if ($invalid) {
            throw new \InvalidArgumentException(sprintf('The Template does not support the following options: "%s".', implode('", "', $invalid)));
        }
        $this->templates[$template] = $defaultOptions;
    }
            
    function getTemplateOptions($template)
    {
        return $this->getOptions($template);
    }
    
    function getTemplateOption($template,$option = null)
    {
        return $this->getOptions($template,$option);
    }
    
    function getOptions($template,$option = null) {
        if(!isset($this->templates[$template])){
            throw new \InvalidArgumentException(sprintf('The template "%s" does not exist, are available: "%s".',$template, implode('", "', array_keys($this->templates))));
        }
        if($option != null){
            if(!$this->isValidOption($option )){
                throw new \InvalidArgumentException(sprintf('The Template does not support the following options: "%s".',$template, implode('", "', array_keys($this->defaultOptions))));
            }
            return $this->templates[$template][$option];
        }
        return $this->templates[$template];
    }
    
    public function isValidOption($option) {
        return isset($this->defaultOptions[$option]);
    }
    
    public function setTemplates(array $templates)
    {
        $this->templates = $templates;
        foreach ($templates as $template => $options) {
            $this->setOptions($template, $options);
        }
    }
    
    private function fixDependencies(array $dependencies) {
        foreach ($dependencies as $key => $dependence) {
            $dependencies[$key] = $this->container->get('templating.helper.assets')->getUrl($dependence);
        }
        return $dependencies;
    }


    public function setContainer(\Symfony\Component\DependencyInjection\ContainerInterface $container = null)
    {
        $this->container = $container;
    }
}
