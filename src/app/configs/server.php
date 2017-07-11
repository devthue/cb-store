<?php

/**
 * Read more on Config Files
 * @link http://phalcon-rest.redound.org/config_files.html
 */

return [
    'database' => [
        'adapter' => 'Mysql',
        'host' => 'mariadb',
        'username' => 'root',
        'password' => 'w5vWANN16z5I3PBw',
        'dbname' => 'cdf_store',
        'options' => [ // this is your important part
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
        ]
    ],
    'redis' => [
        // Change to your own configuration
        'host' => 'localhost',
        'port' => 6379,
        'persistent' => true,
        'lifetime' => 860000
    ]
];