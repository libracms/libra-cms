<?php
/**
 * Start up file to init everything
 */

/**
 * This makes our life easier when dealing with paths. Everything is relative
 * to the application root now.
 */
chdir(dirname(__DIR__));

if (file_exists('./server.local.php')) {
    include './server.local.php';
}

// Some default configurations:

// Define default Time Zone
// You can set it if you need store default value from php.ini
define ('TZ', date_default_timezone_get());

// Then set it to UTC for proper working of Doctrine 2
date_default_timezone_set('UTC');

// The same to locale:
define('LOCALE', locale_get_default());
locale_set_default('en_US');

/**
 * Setup APP_ENV constant.
 * Values = [prod=production, dev=development, debug=debuging].
 * If not set in local.config.php then assume 'production'
 */
define('APP_ENV', 'production');

//Setup to display start up errors
if (APP_ENV == 'development') {
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
} else {
    ini_set('display_errors', 0);
}

// Setup autoloading
require './init_autoloader.php';

// Run the application!
Zend\Mvc\Application::init(include './config/application.config.php')->run();
