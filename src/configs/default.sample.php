<?php

return [
    'debug' => true,
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
            'basicToken' => 'Basic oss_basic_token',
            'url' => 'http://oss.seedcom.vn/',
            'action' => [
                'login' => 'sso/oauth/token',
                'userInformation' => 'hrapi/employee/getuserinfo'
            ]
        ]
    ]
];