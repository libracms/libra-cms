<?php
return array(
    'doctrine' => array(
        'connection' => array(
            'orm_default' => array(
                'driverClass' => 'Doctrine\DBAL\Driver\PDOSqlite\Driver',
                'params' => array(
                    'host'     => 'localhost',
                    'port'     => '3306',
                    'dbname'   => 'libra-cms',
                    'charset'  => 'UTF8',
                    'path'     => 'data/tests.sqlite',
                ),
            ),
        ),
        'configuration' => array(
            'orm_default' => array(
                'generate_proxies' => false,
            ),
        ),
    ),
);