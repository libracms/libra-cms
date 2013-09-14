<?php
$env = getenv('APP_ENV') ?: 'production';

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
    //'ZfcTwig',  //breack partial display
    'ZfcTwitterBootstrap',
    'DluTwBootstrap',
    'DluTwBootstrapDemo',
    //'Test',

    // Put below YOUR modules. They will be in the last position to override
    // rest of modules.


    //keep main module in the last position for final configs.
    'Application',
);

if ($env === 'development') {
    //$modules[] = 'ZendDeveloperTools';
}

return array(
    'modules' => $modules,
    // These are various options for the listeners attached to the ModuleManager
    'module_listener_options' => array(
        // Array of paths in which modules reside.
        // If a string key is provided, the listener will consider that a module
        // namespace, the value of that key the specific path to that module's
        // Module class.
        'module_paths' => array(
            './module',
            './vendor',
        ),

        // An array of paths from which to glob configuration files after
        // modules are loaded. These effectively override configuration
        // provided by modules themselves. Paths may use GLOB_BRACE notation.
        //*.development.php should contain config for development
        //*.production.php may contain config for prudiction server
        'config_glob_paths'    => array(
            'config/autoload/{,*.}{global,'. $env .',local}.php',
            'config/constructed/navigation.php',
            'config/config.php',
        ),

        // Whether or not to enable a configuration cache.
        // If enabled, the merged configuration will be cached and used in
        // subsequent requests.
        'config_cache_enabled' => false,
        'config_cache_key'     => 'module_config_cache',
        'cache_dir'            => 'data/cache',
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
