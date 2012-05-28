<?php
return array(
    'modules' => array(
        'LibraApp',
        'LibraArticle',
        'LibraNavigation',
        //'ZfcUser',
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
            //for ModuleAutoloader, if installed by composer it would not be necessary
            'LibraApp'      => './vendor/libra/libra-app',
            'LibraArticle'  => './vendor/libra/libra-article',
            'LibraNavigation'     => './vendor/libra/libra-navigation',
        ),
    ),
    'service_manager' => array(
        'use_defaults' => true,
        'factories'    => array(
        ),
    ),
);
