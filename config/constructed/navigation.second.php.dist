<?php
return array (
    array (
        '_name' => 'mainmenu',
        'type' => 'Zend\\Navigation\\Page\\Uri',
        'label' => 'Main Menu',
        'pages' => array (
            array (
                'type' => 'Zend\\Navigation\\Page\\Uri',
                'label' => 'Main Menu Second edition',
                'class' => 'nav-header',
                'order' => -101,
            ),
            array (
                'label' => 'Home',
                'title' => 'Go Home',
                'order' => -100,
                'type' => 'Zend\\Navigation\\Page\\Mvc',
                'controller' => 'index',
                'route' => 'home',
            ),
            array (
                'label' => 'English menu item',
                'type' => 'Zend\\Navigation\\Page\\Mvc',
                'params' => array (
                    'alias' => 'en-page',
                ),
                'route' => 'libra-article',
            ),
            array (
                'label' => 'Rus menu item',
                'type' => 'Zend\\Navigation\\Page\\Mvc',
                'params' => array (
                    'alias' => 'ru-page',
                    'locale' => 'ru-RU',
                ),
                'route' => 'libra-article',
            ),
            array (
                'label' => 'FAQ',
                'type' => 'Zend\\Navigation\\Page\\Mvc',
                'params' => array (
                    'alias' => 'faq',
                ),
                'route' => 'libra-article',
            ),
            array (
                'label' => 'Multilanguage page EN',
                'type' => 'Zend\\Navigation\\Page\\Mvc',
                'params' => array (
                    'alias' => 'multilanguage',
                    'locale' => 'en',
                ),
                'route' => 'libra-article',
            ),
            array (
                'label' => 'Мултиязыковая страница RU',
                'type' => 'Zend\\Navigation\\Page\\Mvc',
                'params' => array (
                    'alias' => 'multilanguage',
                    'locale' => 'ru',
                ),
                'route' => 'libra-article',
            ),
            array (
                'label' => 'Roadmap',
                'type' => 'Zend\\Navigation\\Page\\Mvc',
                'params' => array (
                    'alias' => 'roadmap',
                ),
                'route' => 'libra-article',
            ),
            array (
                'label' => 'You can change this module',
                'type' => 'Zend\\Navigation\\Page\\Mvc',
                'route' => 'my-module',
            ),
            array (
                'label' => 'Administration',
                'type' => 'Zend\\Navigation\\Page\\Mvc',
                'controller' => 'index',
                'route' => 'admin/home',
            ),
        ),
    ),
    array (
        '_name' => 'usermenu',
        'type' => 'Zend\\Navigation\\Page\\Uri',
        'label' => 'User Menu',
        'pages' => array (
            array (
                'type' => 'Zend\\Navigation\\Page\\Uri',
                'label' => 'User Menu',
                'class' => 'nav-header',
                'order' => -101,
            ),
            array (
                'label' => 'zfcuser',
                'type' => 'Zend\\Navigation\\Page\\Mvc',
                'route' => 'zfcuser',
            ),
            array (
                'label' => 'zfcuser logout',
                'type' => 'Zend\\Navigation\\Page\\Mvc',
                'route' => 'zfcuser/logout',
            ),
            array (
                'label' => 'zfcuser login',
                'type' => 'Zend\\Navigation\\Page\\Mvc',
                'route' => 'zfcuser/login',
            ),
            array (
                'label' => 'zfcuser register',
                'type' => 'Zend\\Navigation\\Page\\Mvc',
                'route' => 'zfcuser/register',
            ),
        ),
    ),
);
