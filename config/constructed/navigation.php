<?php
/**
 * File saves configured from admin menu items
 */
return array(
    'navigation' => array(
        //array of \Zend\Navigation\Page\PageAbstract
        'default' => file_exists(__DIR__ . '/navigation.default.php') ? include __DIR__ . '/navigation.default.php'
            : include __DIR__ . '/navigation.default.php.dist',
        'second'  => file_exists(__DIR__ . '/navigation.second.php') ? include __DIR__ . '/navigation.second.php'
            : include __DIR__ . '/navigation.second.php.dist',
    ),
);
