<?php
return array(
    'modules' => array(
        'DoctrineModule',
        'DoctrineORMModule',
        'LibraApp',
        'LibraArticle',
        //'LibraNavigation',
        'LibraAdmin',
        //'ZfcBase',
        //'ZfcUser',
        //'ZfcUserDoctrineORM',
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
            'LibraApp'          => './vendor/libra/libra-app',
            'LibraArticle'      => './vendor/libra/libra-article',
            'LibraNavigation'   => './vendor/libra/libra-navigation',
            'LibraAdmin'        => './vendor/libra/libra-admin',
        ),
    ),
    'service_manager' => array(
        'use_defaults' => true,
        'factories'    => array(
            'Translator' => 'Zend\I18n\Translator\TranslatorServiceFactory',
        ),
    ),
);
