<?php
/**
 * File saves configured from admin menu items
 */
return array(
    'navigation' => array(
        //array of \Zend\Navigation\Page\PageAbstract
        'admin-default' => array(
            array(
                'route'      => 'admin/home',
                'label'      => 'Administration',
            ),
            array(
                'route'      => 'admin/libra-navigation/navigations',
                'label'      => 'Navigation',
            ),
            array(
                'route'      => 'admin/libra-article/articles',
                'label'      => 'Article',
            ),
        ),
    ),
);