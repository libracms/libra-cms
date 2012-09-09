<?php
$config = array(
    //put true for short aliases like /about, /contacts, etc.
    //default: true
    'use_short_alias' => true,
    'locales'         => true,
);

return array(
    'libra_article' => $config,
    'router' => array(
        'routes' => array(
            'libra-article' => array(
                'priority' => $config['use_short_alias'] ? -100 : null,
                'options' => array(
                    'route' => ($config['locales'] ? '/:locale' : '') . (($config['use_short_alias'] ? '' : '/article') . '[/:alias]'),
                ),
            ),
        ),
    ),
);