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
                'label'      => 'English menu item',
                'route'      => 'libra-article',
                'params'     => array(
                    'alias' => 'en-page',
                ),
            ),
            array(
                'label'      => 'Rus menu item',
                'route'      => 'libra-article',
                'params'     => array(
                    'alias' => 'ru-page',
                    'locale' => 'ru-RU',
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
                'route'      => 'libra-article',
                'label'      => 'Roadmap',
                'params'     => array(
                    'alias' => 'roadmap',
                ),
            ),
            array(
                'route'      => 'my-module',
                'label'      => 'You can change this module',
            ),
            array(
                'route'      => 'admin/home',
                'label'      => 'Administration',
                'controller' => 'index',
            ),
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