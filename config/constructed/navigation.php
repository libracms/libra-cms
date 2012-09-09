<?php
/**
 * File saves configured from admin menu items
 */
return array(
    'navigation' => array(
        //array of \Zend\Navigation\Page\PageAbstract
        'default' => array(
            array(
                'type'       => 'uri',
                'label'      => 'Main Menu',
                'order'      => -101, // make sure home is the first page
                'class'      => 'nav-header',
            ),
            array(
                'route'      => 'home',
                'label'      => 'Home',
                'title'      => 'Go Home',
                'order'      => -100, // make sure home is the first page
                'controller' => 'index', //hack for removing active class
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
                'route'      => 'libra-article',
                'label'      => 'Multilanguage page EN',
                'params'     => array(
                    'alias' => 'multilanguage',
                    'locale' => 'en',
                ),
            ),
            array(
                'route'      => 'libra-article',
                'label'      => 'Мултиязыковая страница RU',
                'params'     => array(
                    'alias' => 'multilanguage',
                    'locale' => 'ru',
                ),
            ),
            array(
                'route'      => 'libra-user',
                'label'      => 'User',
            ),
            array(
                'route'      => 'admin/libra-article/articles',
                'label'      => 'Admin article',
                'controller' => 'index',
            ),
            /*array(
                'type'       => 'uri',
                'label'      => 'User Menu',
                'class'      => 'nav-header',
            ),
            array(
                'route'      => 'zfcuser',
                'label'      => 'zfcuser',
            ),
            array(
                'route'      => 'zfcuser/logout',
                'label'      => 'zfcuser logout',
            ),*/
        ),

        'leftmenu' => array(
            array(
                'type'       => 'uri',
                'label'      => 'User Menu',
                'class'      => 'nav-header',
                'order'      => -101,
            ),
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