<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new FOS\UserBundle\FOSUserBundle(),//Manejador se session y usuario
            new FOS\RestBundle\FOSRestBundle(),//Trabaja con el serializador de objetos
            new FOS\JsRoutingBundle\FOSJsRoutingBundle(),//Generado de rutas javascript
            new Stof\DoctrineExtensionsBundle\StofDoctrineExtensionsBundle(),//Extensiones de doctrine
            new Liip\ImagineBundle\LiipImagineBundle(),//Manejador de imagenes
            new Liip\DoctrineCacheBundle\LiipDoctrineCacheBundle(),//Cache para doctrine
            new Lunetics\LocaleBundle\LuneticsLocaleBundle(),//Manejador pagina multi-lenguaje
            new JMS\TranslationBundle\JMSTranslationBundle(),//Traductor optimizado
            new JMS\SerializerBundle\JMSSerializerBundle(),//Serializador de objetos en json y xml
            new Bazinga\Bundle\JsTranslationBundle\BazingaJsTranslationBundle(),//Traduccion disponible en javascript
            new Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle(),//Para cargar fixtures de la base de datos
            new WhiteOctober\PagerfantaBundle\WhiteOctoberPagerfantaBundle(),//Paginador
            new Sylius\Bundle\ResourceBundle\SyliusResourceBundle(),//Recursos CRUD
            new Knp\Bundle\MenuBundle\KnpMenuBundle(),//Gestor del menu
            new Lsw\ApiCallerBundle\LswApiCallerBundle(),//Api Conector curl
            new Nelmio\ApiDocBundle\NelmioApiDocBundle(),//Documentador de API REST
            //SonataAdminBundle dependencias
            new Sonata\CoreBundle\SonataCoreBundle(),
            new Sonata\BlockBundle\SonataBlockBundle(),
            new Sonata\DoctrineORMAdminBundle\SonataDoctrineORMAdminBundle(),//Requerido por SonataAdminBundle
            new Sonata\jQueryBundle\SonatajQueryBundle(),
            
            new Sonata\AdminBundle\SonataAdminBundle(),//Administracion
            new Sonata\EasyExtendsBundle\SonataEasyExtendsBundle(),
            
            new Coramer\Sigtec\CoreBundle\CoramerSigtecCoreBundle(),
            new Coramer\Sigtec\WebBundle\CoramerSigtecWebBundle(),
            new Tecnocreaciones\Vzla\ToolsBundle\TecnocreacionesVzlaToolsBundle(),
            new Tecnocreaciones\Vzla\GovernmentBundle\TecnocreacionesVzlaGovernmentBundle(),
            new Tecnocreaciones\Bundle\InstallBundle\TecnocreacionesInstallBundle(),
            new Tecnocreaciones\Bundle\AjaxFOSUserBundle\TecnocreacionesAjaxFOSUserBundle(),
            new Tecnocreaciones\Bundle\ToolsBundle\TecnocreacionesToolsBundle(),
            new Coramer\Sigtec\CompanyBundle\CoramerSigtecCompanyBundle(),
            new Tecnocreaciones\Bundle\ResourceBundle\TecnocreacionesResourceBundle(),
            new Coramer\Sigtec\FixturesBundle\CoramerSigtecFixturesBundle(),
            new Coramer\Sigtec\RestBundle\CoramerSigtecRestBundle(),
            new Coramer\Sigtec\ResourceBundle\CoramerSigtecResourceBundle(),
            new Tecnocreaciones\Vzla\FixturesBundle\TecnocreacionesVzlaFixturesBundle(),
            new Tecnocreaciones\Vzla\ApiBundle\TecnocreacionesVzlaApiBundle(),
            new Tecnocreaciones\Vzla\EntityBundle\TecnocreacionesVzlaEntityBundle(),
            new Tecnocreaciones\Bundle\BehatBundle\TecnocreacionesBehatBundle(),
            new Coramer\Sigtec\ReportTechnicalBundle\CoramerSigtecReportTechnicalBundle(),
            new Coramer\Sigtec\TemplateBundle\CoramerSigtecTemplateBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            //$bundles[] = new Acme\DemoBundle\AcmeDemoBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
