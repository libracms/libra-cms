<?php

// Some default configurations:

// Define default Time Zone
// You can set it if you need store default value from php.ini
define ('TZ', date_default_timezone_get());

// Then set it to UTC for proper working of Doctrine 2
date_default_timezone_set('UTC');

if (function_exists('mb_internal_encoding')) {
    mb_internal_encoding('utf-8');
}

putenv('APP_ENV=development');

//Setup APP_ENV constant depended on server enviroment configuration.
//Values = [prod=production, dev=development, debug=debuging]. Default: prod
$env = getenv('APP_ENV') ?: 'production';

//Setup to display start up errors
if ($env === 'development') {
    ini_set('display_errors', 1);
    error_reporting(E_ALL ^ E_STRICT);  // Added ' ^ E_STRICT' to avoid:
    // Strict standards: Declaration of ZfcTwitterBootstrap\View\Helper\Navigation\Menu::renderDeepestMenu()
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
