<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com.ve
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tecnocreaciones\Bundle\BehatBundle\EventListener\DoctrineDataFixturesExtension;

use Behat\Behat\Event\FeatureEvent;
use Behat\Behat\Event\OutlineExampleEvent;
use Behat\Behat\Event\ScenarioEvent;
use Behat\Behat\Event\SuiteEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Description of HookListener
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class HookListener implements EventSubscriberInterface
{
    /**
     * @var string feature|scenario
     */
    private $lifetime;

    /**
     * @var object
     */
    private $fixtureService;

    public function __construct($lifetime)
    {
        $this->lifetime = $lifetime;
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        $events = array(
            'beforeSuite',
            'beforeFeature',
            'afterFeature',
            'beforeScenario',
            'afterScenario',
            'beforeOutlineExample',
            'afterOutlineExample',
        );

        return array_combine($events, $events);
    }

    /**
     * Set fixture service
     *
     * @param \VIPSoft\DoctrineDataFixturesExtension\Service\FixtureService $service
     */
    public function setFixtureService($service)
    {
        $this->fixtureService = $service;
    }

    /**
     * Listens to "suite.before" event.
     *
     * @param \Behat\Behat\Event\SuiteEvent $event
     */
    public function beforeSuite(SuiteEvent $event)
    {
        $this->fixtureService
             ->cacheFixtures();
    }

    /**
     * Listens to "feature.before" event.
     *
     * @param \Behat\Behat\Event\FeatureEvent $event
     */
    public function beforeFeature(FeatureEvent $event)
    {
        if ('feature' !== $this->lifetime) {
            return;
        }
        
        $this->fixtureService
             ->reloadFixtures();
    }

    /**
     * Listens to "feature.after" event.
     *
     * @param \Behat\Behat\Event\FeatureEvent $event
     */
    public function afterFeature(FeatureEvent $event)
    {
        if ('feature' !== $this->lifetime) {
            return;
        }

        $this->fixtureService
             ->flush();
    }

    /**
     * Listens to "scenario.before" event.
     *
     * @param \Behat\Behat\Event\ScenarioEvent $event
     */
    public function beforeScenario(ScenarioEvent $event)
    {
        $reload = false;
        if($event->getScenario()->hasTag('loadfixtures')){
            $reload = true;
        }
        if ('scenario' == $this->lifetime) {
            $reload = true;
        }
        if($reload){
            $this->fixtureService
                 ->reloadFixtures();
        }
    }

    /**
     * Listens to "scenario.after" event.
     *
     * @param \Behat\Behat\Event\ScenarioEvent $event
     */
    public function afterScenario(ScenarioEvent $event)
    {
        if ('scenario' !== $this->lifetime) {
            return;
        }

        $this->fixtureService
             ->flush();
    }

    /**
     * Listens to "outline.example.before" event.
     *
     * @param \Behat\Behat\Event\OutlineExampleEvent $event
     */
    public function beforeOutlineExample(OutlineExampleEvent $event)
    {
        if ('scenario' !== $this->lifetime) {
            return;
        }

        $this->fixtureService
             ->reloadFixtures();
    }

    /**
     * Listens to "outline.example.after" event.
     *
     * @param \Behat\Behat\Event\OutlineExampleEvent $event
     */
    public function afterOutlineExample(OutlineExampleEvent $event)
    {
        if ('scenario' !== $this->lifetime) {
            return;
        }

        $this->fixtureService
             ->flush();
    }
}
