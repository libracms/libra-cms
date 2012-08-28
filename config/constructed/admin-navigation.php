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
                'options' => array(
                    'class' => 'nav',
                ),
            ),
            array(
                'route'      => 'admin/libra-article/list',
                'label'      => 'Article',
            ),
            array(
                'uri'      => '#',
                'label'      => 'conf',
                'pages' => array(
                    array(
                        'route'      => 'admin/libra-article/list',
                        'label'      => 'Article',
                    ),
                ),
                'options' => array(
                    'class' => 'nav',
                ),
            ),
        ),
    ),
);