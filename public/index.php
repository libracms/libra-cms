<?php

/**
 * Some default configurations
 */
//date_default_timezone_set('UTC');  //not alway is good idea
mb_internal_encoding('utf-8');

putenv('APP_ENV=development');

//Setup APP_ENV constant depended on server enviroment configuration.
//Values = [prod=production, dev=development, debug=debuging]. Default: prod
$env = getenv('APP_ENV') ?: 'production';

//Setup to display start up errors
if ($env === 'development') {
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
} else {
    ini_set('display_errors', 0);
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
