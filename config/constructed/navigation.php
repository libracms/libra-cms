<?php
/**
 * File saves configured from admin menu items
 */
return array(
    'navigation' => array(
        //array of \Zend\Navigation\Page\PageAbstract
        'default' => include __DIR__ . '/navigation.default.php',
        'second'  => include __DIR__ . '/navigation.second.php',
    ),
);
