<?php
/**
 * File saves configured from admin menu items
 */
//array of \Zend\Navigation\Page\PageAbstract
return array(
    array(
        'route'      => 'admin/home',
        'label'      => 'Administration',
    ),
    array(
        'route'      => 'admin/libra-navigation/pages',
        'label'      => 'Navigation',
    ),
    array(
        'route'      => 'admin/libra-article/articles',
        'label'      => 'Article',
    ),
    /*array(
        'type'          => 'uri',
        'label'         => 'Configuratuon',
        'pages'         => array(
            array(
                'route'         => 'admin/libra-app/config/general',
                'label'         => 'General',
                'action'        => 'edit',
            ),
            array(
                'route'         => 'admin/default',
                'label'         => 'Translation',
                'controller'    => 'translation',
                'action'        => 'edit',
            ),
        ),
    ),
    array(
        'type'          => 'uri',
        'label'         => 'Help',
        'pages'         => array(
            array(
                'route'         => 'admin/libra-app/index',
                'label'         => 'About Libra CMS',
                'action'        => 'help',
            ),
            array(
                'route'         => 'dlu_twb_demo_demo',
                'label'         => 'DluTwBootstrap Forms Demo',
            ),
        ),
    ),*/
);