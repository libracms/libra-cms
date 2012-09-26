<?php
$config = array(
    //default locale, not alias
    'default' => 'en_US',
    'locales' => array(
        //alias => langtag
        'en' => 'en_US',
        'en-GB',
        'ru' => 'ru_RU',
        'fr',
        'ru-UA',
        'uk-UA',
    ),
    //set 301 for permanent
    //set 302 for temporary
    'redirect_code' => '302',
);

return array(
    'libra_locale' => $config,
);