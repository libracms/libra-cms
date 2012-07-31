<?php

date_default_timezone_set('UTC');
mb_internal_encoding('utf-8');

chdir(dirname(__DIR__));

// Setup autoloading
include 'init_autoloader.php';

// Run the application!
Zend\Mvc\Application::init(include 'config/application.config.php')->run();
