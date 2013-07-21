<?php
$modules = array(
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
    'ZfcTwig',
    'ZfcTwitterBootstrap',
    'DluTwBootstrap',
    'DluTwBootstrapDemo',
    //'Test',

    //Put below YOUR modules. They will be in the last position to override rest of modules.


    //keep main module in the last position for final configs.
    'Application',
);

if (APP_ENV === 'dev') {
    //$modules[] = 'ZendDeveloperTools';
}

return array(
    'modules' => $modules,
    'module_listener_options' => array(
        'config_glob_paths'    => array(
            'config/autoload/{,*.}{global,'. APP_ENV .',local}.php',
            'config/constructed/navigation.php',
            'config/config.php',
        ),
        'config_cache_enabled' => false,
        'cache_dir'            => 'data/cache',
        'module_paths' => array(
            './module',
            './vendor',
        ),
    ),
    'service_manager' => array(
        'use_defaults' => true,
        'factories'    => array(
            'Navigation' => 'Zend\Navigation\Service\DefaultNavigationFactory',
            'SecondNavigation' => 'LibraApp\Service\SecondNavigationFactory',
            'AdminNavigation'  => 'LibraApp\Service\AdminNavigationFactory',
        ),
    ),
);
