<?php

namespace LibraCmsTest;

use Zend\Mvc\Service\ServiceManagerConfig;
use Zend\ServiceManager\ServiceManager;

error_reporting(E_ALL | E_STRICT);
chdir(__DIR__);

/**
 * Test bootstrap, for setting up autoloading
 */
class Bootstrap
{
    protected static $serviceManager;

    public static function init()
    {
        static::initAutoloader();

        // use ModuleManager to load this module and it's dependencies
        $config = array(
            'module_listener_options' => array(
                'module_paths' => array(
                    '../module',
                    '../vendor',
                )
            ),
            'modules' => array(
                'LibraCmsTest',
                'LibraAppTest',
                'LibraArticleTest',
            ),
            'service_manager' => array(
                'use_defaults' => true,
            ),
        );

        $smConfig = isset($config['service_manager']) ? $config['service_manager'] : array();
        $serviceManager = new ServiceManager(new ServiceManagerConfig($smConfig));
        $serviceManager->setService('ApplicationConfig', $config);
        $serviceManager->get('ModuleManager')->loadModules();
        static::$serviceManager = $serviceManager;
    }

    public static function getServiceManager()
    {
        return static::$serviceManager;
    }

    protected static function initAutoloader()
    {
        $cwd = getcwd();
        chdir(dirname(__DIR__));
        require 'init_autoloader.php';
        chdir($cwd);
    }
}

Bootstrap::init();
