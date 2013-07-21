<?php
/**
 * File saves configured from admin menu items
 */
return array(
    'navigation' => array(
        //array of \Zend\Navigation\Page\PageAbstract
        'default' => is_readable(__DIR__ . '/navigation.default.php') ? include __DIR__ . '/navigation.default.php'
            : include __DIR__ . '/navigation.default.php.dist',
        'second'  => is_readable(__DIR__ . '/navigation.second.php') ? include __DIR__ . '/navigation.second.php'
            : include __DIR__ . '/navigation.second.php.dist',
        'admin-default' => is_readable(__DIR__ . '/navigation.admin-default.php') ? include __DIR__ . '/navigation.admin-default.php'
            : include __DIR__ . '/navigation.admin-default.php.dist',
    ),
);
