<?php
/**
 * Welcome to Doctrine 2.
 * 
 * This is the index file of the sandbox. The first section of this file
 * demonstrates the bootstrapping and configuration procedure of Doctrine 2.
 * Below that section you can place your test code and experiment.
 */

use Zend\ServiceManager\ServiceManager,
    Zend\Mvc\Service\ServiceManagerConfiguration;

use Doctrine\ORM\Configuration,
    Doctrine\ORM\EntityManager,
    Doctrine\ORM\Mapping\Driver\DriverChain,
    Doctrine\Common\Annotations\AnnotationReader,
    Doctrine\Common\Annotations\AnnotationRegistry,
    Doctrine\ORM\Mapping\Driver\AnnotationDriver,
    Doctrine\ORM\Mapping\Driver\XmlDriver,
    Doctrine\ORM\Mapping\Driver\YamlDriver,
    Doctrine\Common\Cache\ArrayCache,
    Doctrine\Common\Cache\ApcCache;

chdir(__DIR__ . '/..');
require_once 'vendor/autoload.php';

//Zend autoloader
require_once 'Zend/Loader/AutoloaderFactory.php';
Zend\Loader\AutoloaderFactory::factory();

// Get application stack configuration
$configuration = include 'config/application.config.php';

//Register for annotation driver
$annotationReflection = new ReflectionClass('Doctrine\ORM\Mapping\Driver\AnnotationDriver');
$annotationsFile = realpath(dirname($annotationReflection->getFileName()) . '/DoctrineAnnotations.php');
AnnotationRegistry::registerFile($annotationsFile);

$reader = new \Doctrine\Common\Annotations\SimpleAnnotationReader();
$reader->addNamespace('Doctrine\ORM\Mapping');
$reader = new \Doctrine\Common\Annotations\CachedReader($reader, new ArrayCache());
/***/

// Setup service manager
$serviceManager = new ServiceManager(new ServiceManagerConfiguration($configuration['service_manager']));
$serviceManager->setService('ApplicationConfiguration', $configuration);
$modules = $serviceManager->get('ModuleManager')->loadModules();
$conf = $modules->getEvent()->getConfigListener()->getMergedConfig();
$drivers = $conf->di->instance->orm_driver_chain->parameters->drivers->toArray();

$driverChain = new DriverChain();
foreach ($drivers as $driver) {
    if (!is_array($driver)) continue;
    $class = $driver['class'];
    $paths = $driver['paths'];
    $namespace = $driver['namespace'];
    if ($class == 'Doctrine\ORM\Mapping\Driver\AnnotationDriver') {
        $driverObject = new $class($reader, $paths);
    } else {
        $driverObject = new $class($paths);
    }
    $driverChain->addDriver($driverObject, $namespace);
}


//$class = "Doctrine\ORM\Mapping\Driver\AnnotationDriver";
//$namespace = 'LibraArticle\Entity';
//$paths = array("/home/duke/www/libra-cms/vendor/libra/libra-article/src/LibraArticle/Entity");
//$driverObject = new $class($paths);

$driverObject = new AnnotationDriver($reader, $paths);
$driverChain->addDriver($driverObject, $namespace);

// Set up caches
$config = new Configuration;
$cache = new ArrayCache;
$config->setMetadataCacheImpl(new ArrayCache);
$config->setMetadataDriverImpl($driverChain);
$config->setQueryCacheImpl($cache);

// Proxy configuration
$config->setProxyDir(__DIR__ . '/Proxies');
$config->setProxyNamespace('Proxies');

// Database connection information
$connectionOptions = $conf->di->instance->get('DoctrineORMModule\Doctrine\ORM\Connection')->parameters->params->toArray();
