<?php
$config = array(
    // List of available locales in format: alias => locale
    // if alias omitted then value will be accepted as alias
    // Should exist at least 1 record for default alias
    // alias are required
    'locales' => array(
        //alias => langtag
        'en' => 'en-US',
        'en-GB' => 'en-GB',
        'ru' => 'ru-RU',
        'fr' => 'fr',
        'ru-UA' => 'ru-UA',
        'uk-UA' => 'uk-UA',
    ),

    // default locale tag or alias
    'default' => 'en-US',

    // It determs if look up /locale-tag in locale list and redirect to
    // proper locale alias
    // will be turned to false after adoptation period (in ver. 0.6.0)
    'redirect_from_locale_tag' => true,

    // Redirect http header type defined by code
    // set 301 for permanent
    // set 302 for temporary
    'redirect_code' => '302',
);

return array(
    'libra_locale' => $config,
);
