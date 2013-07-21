<?php
return array(
    'modules' => array(
        //vendor modules
        'DoctrineModule',
        'DoctrineORMModule',
        'Libra',
        'LibraModuleManager',
        'LibraApp',
        'LibraArticle',
        'LibraNavigation',
        //'LibraUser',
        'LibraLocale',
        'LibraMarkdown',
        'LibraArticleImageZooming',
        'ZfcBase',
        'ZfcUser',
        'ZfcUserDoctrineORM',
        'ZfcTwitterBootstrap',
        'DluTwBootstrap',
        'DluTwBootstrapDemo',
        //'ZendDeveloperTools',
        //'Test',
        'ZfcTwig',

        //Put below YOUR modules. They will be in the last position to override rest of modules.


        //keep main module in the last position for final configs.
        'Application',
    ),
    'module_listener_options' => array(
        'config_glob_paths'    => array(
            'config/autoload/{,*.}{global,local}.php',
            'config/constructed/admin-navigation.php',
            'config/constructed/navigation.php',
            'config/config.php',
        ),
        'config_cache_enabled' => false,
        'cache_dir'            => 'data/cache',
        'module_paths' => array(
            './module',
            './vendor',
            /*
             * for ModuleAutoloader, if not installed by composer.
             * It doesn't necessary if it was installed directly in vendor dir.
             */
            'Libra'             => './vendor/libra/libra',
            'LibraApp'          => './vendor/libra/libra-app',
            'LibraArticle'      => './vendor/libra/libra-article',
            'LibraNavigation'   => './vendor/libra/libra-navigation',
            //'LibraAdmin'        => './vendor/libra/libra-admin',
            'LibraUser'         => './vendor/libra/libra-user',
            'LibraLocale'       => './vendor/libra/libra-locale',
            'LibraMarkdown'     => './vendor/libra/libra-markdown',
            'LibraModuleManager'=> './vendor/libra/libra-module-manager',
            'LibraArticleImageZooming'  => './vendor/libra/libra-article-image-zooming',
        ),
    ),
    'service_manager' => array(
        'use_defaults' => true,
        'factories'    => array(
            //'Translator' => 'Zend\I18n\Translator\TranslatorServiceFactory',
            'Navigation' => 'Zend\Navigation\Service\DefaultNavigationFactory',
            'SecondNavigation' => 'LibraApp\Service\SecondNavigationFactory',
            'AdminNavigation'  => 'LibraApp\Service\AdminNavigationFactory',
        ),
    ),
);
