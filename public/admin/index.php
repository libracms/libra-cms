<?php
//apc_clear_cache();
//date_default_timezone_set('UTC');
mb_internal_encoding('utf-8');
date_default_timezone_set('Europe/Kiev');
chdir(dirname(dirname(__DIR__)) . '/admin');
define('ADMINISTRATION', true);
$file = (getenv('ZF2_PATH') ?: '../vendor/ZendFramework/library') . '/Zend/Loader/AutoloaderFactory.php';
if (file_exists($file)) {
    require_once $file;
} else {
    require_once 'Zend/Loader/AutoloaderFactory.php';
}
//require_once '/var/www/zf2FrameWork/library/Zend/Loader/AutoloaderFactory.php';
Zend\Loader\AutoloaderFactory::factory();

$appConfig = include 'config/application.config.php';

$listenerOptions = new Zend\Module\Listener\ListenerOptions($appConfig['module_listener_options']);
$defaultListeners = new Zend\Module\Listener\DefaultListenerAggregate($listenerOptions);
//$defaultListeners->getConfigListener()->addConfigGlobPath("../config/autoload/global.config.php");
$defaultListeners->getConfigListener()->addConfigGlobPath("config/autoload/{module.*,global,local}.config.php");
$defaultListeners->getConfigListener()->addConfigGlobPath("../config/autoload/local.config.php");
$defaultListeners->getConfigListener()->addConfigGlobPath("../config/autoload/module.journal.config.php");
$defaultListeners->getConfigListener()->addConfigGlobPath("../config/config.php");

$moduleManager = new Zend\Module\Manager($appConfig['modules']);
$moduleManager->events()->attachAggregate($defaultListeners);
$moduleManager->loadModules();

// Create application, bootstrap, and run
$bootstrap = new Zend\Mvc\Bootstrap($defaultListeners->getConfigListener()->getMergedConfig());
$application = new Zend\Mvc\Application;
$bootstrap->bootstrap($application);
$application->run()->send();