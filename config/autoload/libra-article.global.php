<?php
$config = array(
    //put true for short aliases like /about, /contacts, etc.
    //default: bool true
    'use_short_alias' => 0,
    /**
     * Conider locale at forming link and getting article
     * To have any effect you should have enabled LibraLocale module
     */
    'consider_locale'  => true,

    'override_home_route' => true,

    // Article alias for homepage
    'homepage_alias' => 'home',

    'tidy_config' => array(
        'indent'         => true,
        'indent-spaces'  => 4,
        'wrap'           => 120,
    ),
);


$libraArticleConfig = array(
    'libra_article' => $config,
    'router' => array(
        'routes' => array(
            'libra-article' => array(
                'priority' => $config['use_short_alias'] ? -100 : null,
                'options' => array(
                    'locale_aware' => $config['consider_locale'],
                    'route' => $config['use_short_alias'] ? '/[:alias]' : '/article[/:alias]',
                ),
            ),
        ),
    ),
);

if ($config['override_home_route']) {
    $libraArticleConfig['router']['routes']['home'] = array(
        'options' => array(
            'locale_aware' => $config['consider_locale'],
            'defaults' => array(
                'module'     => 'libra-article',
                'controller' => 'article',
                'action'     => 'view',
                'alias'      => $config['homepage_alias'],
            ),
        ),
    );
}

$libraArticleConfig['libra_article']['tidy_config']['show-body-only'] = true;

return $libraArticleConfig;