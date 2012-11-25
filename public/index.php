<?php

/**
 * Some default configurations
 */
date_default_timezone_set('UTC');
mb_internal_encoding('utf-8');

//ini_set('display_errors', 1); //development

/**
 * This makes our life easier when dealing with paths. Everything is relative
 * to the application root now.
 */
chdir(dirname(__DIR__));

// Setup autoloading
require 'init_autoloader.php';

// Run the application!
Zend\Mvc\Application::init(include 'config/application.config.php')->run();
