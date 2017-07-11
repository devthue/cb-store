<?php

/**
 * Read more on Config Files
 * @link http://phalcon-rest.redound.org/config_files.html
 */

return [
    'debug' => true,
    'hostName' => 'http://api.caudatfarm.com',
    'clientHostName' => 'http://api.caudatfarm.com',
    'uploadsDir' => __DIR__ . '/../../public/uploads/',
    'cors' => [
        'allowedOrigins' => ['*']
    ],
    'application' => [
        'title' => 'Micro service API',
        'description' => 'Micro service API.',
        'baseUri' => '/',
        'viewsDir' => __DIR__ . '/../views/',
        'loggerUrl' => __DIR__ . '/../logs/errors.log',
    ],
    'authentication' => [
        'secret' => 'this_should_be_changed',
        'accesstrustedkey'=> 'hello',
        'expirationTime' => 86400 * 7, // One week till token expires
    ],
    'services' => [
        'oss' => [
            'basicToken' => 'Basic b3NzX2FwaTplNjI3NmEwMS0xOWI0LTQ3MzEtYmE5MC02ZGFhZTJkYTkxZjQ=',
            'url' => 'http://oss.seedcom.vn/',
            'action' => [
                'login' => 'sso/oauth/token',
                'userInformation' => 'hrapi/employee/getuserinfo'
            ]
        ],
        'user' => [
            'url' => 'http://user.caudatfarm.local:8080/',
            'action' => [
                'me' => 'users/me'
            ]
        ]
    ]
];