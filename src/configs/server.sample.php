<?php

return [
    'database' => [
        'adapter' => 'Mysql',
        'host' => 'mariadb',
        'username' => 'root',
        'password' => '',
        'dbname' => 'cdf_store',
        'options' => [
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
        ]
    ],
    'redis' => [
        'host' => 'redis',
        'port' => 6379,
        'persistent' => true,
        'lifetime' => 860000
    ]
];