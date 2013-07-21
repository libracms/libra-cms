<?php

/**
 * Some default configurations
 */
date_default_timezone_set('UTC');
mb_internal_encoding('utf-8');

putenv('APP_ENV=dev');

//Setup APP_ENV constant depended on server enviroment configuration.
//Values = [prod=production, dev=development, debug=debuging]. Default: prod
define('APP_ENV', getenv('APP_ENV') ?: 'prod');

if (APP_ENV === 'dev') {
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
}

/**
 * This makes our life easier when dealing with paths. Everything is relative
 * to the application root now.
 */
chdir(dirname(__DIR__));

// Setup autoloading
require 'init_autoloader.php';

// Run the application!
Zend\Mvc\Application::init(include 'config/application.config.php')->run();
