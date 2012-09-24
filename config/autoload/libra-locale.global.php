<?php
$config = array(
    //default locale, not alias
    'default' => 'en-US',
    'locales' => array(
        //alias => langtag
        'en' => 'en-US',
        'en-GB',
        'ru' => 'ru-RU',
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