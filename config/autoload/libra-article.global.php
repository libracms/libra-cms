<?php
$config = array(
    //put true for short aliases like /about, /contacts, etc.
    //default: bool true
    'use_short_alias' => true,
    /**
     * Conider locale at forming link and getting article
     * To have any effect you should have enabled LibraLocale module
     */
    'consider_locale'  => true,
);

return array(
    'libra_article' => $config,
    'router' => array(
        'routes' => array(
            'libra-article' => array(
                'priority' => $config['use_short_alias'] ? -1100 : null,
                'options' => array(
                    'locale_aware' => $config['consider_locale'],
                    'route' => ($config['use_short_alias'] ? '' : '/article') . '[/:alias]',
                ),
            ),
            'home' => array(
                'options' => array(
                    'locale_aware' => $config['consider_locale'],
                ),
            ),
        ),
    ),
);