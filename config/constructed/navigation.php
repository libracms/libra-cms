<?php
/**
 * File saves configured from admin menu items
 */
return array(
    'navigation' => array(
        //array of \Zend\Navigation\Page\PageAbstract
        'default' => array(
            array(
                'route'      => 'home',
                'label'      => 'Home',
                'title'      => 'Go Home',
                'controller' => 'index',
                'action'     => 'index',
                'order'      => -100, // make sure home is the first page
            ),
            array(
                'route'      => 'admin/home',
                'label'      => 'Administration',
                'controller' => 'index',
            ),
            array(
                'route'      => 'default',
                'label'      => 'Default router with module and alias params',
                'params'     => array(
                    'module' => 'libra-article',
                    'param'  => 'ru-page',
                ),
            ),
            array(
                'route'      => 'libra-article',
                'label'      => 'Special offer this week only!3',
            ),
            array(
                'label'      => 'Rus article',
                'route'      => 'libra-article',
                'params'     => array(
                    'alias' => 'ru-page',
                ),
            ),
            array(
                'route'      => 'libra-article',
                'label'      => 'FAQ',
                'params'     => array(
                    'alias' => 'faq',
                ),
            ),
            array(
                'route'      => 'libra-user',
                'label'      => 'User',
            ),
            array(
                'route'      => 'admin/libra-article',
                'label'      => 'Admin article',
                'controller' => 'index',
            ),
        ),

        'leftmenu' => array(
            array(
                'route'      => 'zfcuser',
                'label'      => 'zfcuser',
            ),
            array(
                'route'      => 'zfcuser/logout',
                'label'      => 'zfcuser logout',
            ),
            array(
                'route'      => 'zfcuser/login',
                'label'      => 'zfcuser login',
            ),
            array(
                'route'      => 'zfcuser/register',
                'label'      => 'zfcuser register',
            ),
            array(
                'route'      => 'zfcuser/changepassword',
                'label'      => 'zfcuser change-password',
            ),
            array(
                'route'      => 'zfcuser/changeemail',
                'label'      => 'zfcuser change-email',
            ),
        ),
    ),
);