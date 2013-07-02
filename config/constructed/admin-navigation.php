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
                'route'         => 'admin/libra-app/index',
                'label'         => 'Help',
                'action'        => 'help',
            ),*/
        ),
    ),
);