<?php
$config = array(
    //name of template
    'layoutName' => 'default',
    'adminLayoutName' => 'default',
    /**
     * Conider locale at forming link and getting article
     * To have any effect you should have enabled LibraLocale module
     */
    'consider_locale'  => false,
);

return array(
    'libra_app' => $config,
    'router' => array(
        'routes' => array(
            'default' => array(
                'options' => array(
                    'locale_aware' => $config['consider_locale'],
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