<?php
return array(
    'modules' => array(
        'LibraApp',
        //'Libra/Application',
    ),
    'module_listener_options' => array( 
        'config_glob_paths'    => array(
            'config/autoload/{,*.}{global,local}.php',
        ),
        'config_cache_enabled' => false,
        'cache_dir'            => 'data/cache',
        'module_paths' => array(
            './module',
            './vendor',
            'LibraApp' => './vendor/libra/libra-app',
            'Libra/Application' => './vendor/libra/libra-app',
        ),
    ),
    'service_manager' => array(
        'use_defaults' => true,
        'factories'    => array(
        ),
    ),
);
