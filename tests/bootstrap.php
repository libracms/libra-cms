<?php

use Zend\Mvc\Service\ServiceManagerConfig;
use Zend\ServiceManager\ServiceManager;

date_default_timezone_set('UTC');
mb_internal_encoding('utf-8');
error_reporting(E_ALL | E_STRICT);

const APP_ENV = 'dev';

/**
 * This makes our life easier when dealing with paths. Everything is relative
 * to the application root now.
 */
chdir(dirname(__DIR__));

/** Initialize the autoloader */
require 'init_autoloader.php';


$appConfig = include 'config/application.config.php';
$configLocal = include __DIR__ . '/config.php';

// use ModuleManager to load this module and it's dependencies
$config = array(
    'modules' => array(
        //vendor modules
        'DoctrineModule',
        'DoctrineORMModule',
        'Libra',
        'LibraModuleManager',
        'LibraApp',
        'LibraArticle',
        'LibraNavigation',
        //'LibraUser',
        'LibraLocale',
        'LibraMarkdown',
        'LibraArticleImageZooming',
        'ZfcBase',
        'ZfcUser',
        'ZfcUserDoctrineORM',
        'ZfcTwig',
        'Application',
    ),
    'module_listener_options' => array(
        'config_glob_paths'    => array(
            //'config/autoload/{,*.}{global,local}.php',
            'config/constructed/navigation.php',
        ),
        'module_paths' => array(
            'module',
            'vendor',
        )
    ),
    'service_manager' => array(
        'use_defaults' => true,
        'factories'    => array(
            'Navigation' => 'Zend\Navigation\Service\DefaultNavigationFactory',
            'AdminNavigation'  => 'LibraApp\Service\AdminNavigationFactory',
        ),
    ),
);

function loadModules($config)
{
    $smConfig = isset($config['service_manager']) ? $config['service_manager'] : array();
    $serviceManager = new ServiceManager(new ServiceManagerConfig($smConfig));
    $serviceManager->setService('ApplicationConfig', $config);
    $serviceManager->get('ModuleManager')->loadModules();
    //$serviceManager->get('Application')->bootstrap();
}

loadModules($config);