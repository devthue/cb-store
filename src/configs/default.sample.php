<?php

return [
    'debug' => false,
    'domainName' => 'store',
    'hostName' => 'http://api.caudatfarm.com',
    'clientHostName' => 'http://api.caudatfarm.com',
    'cors' => [
        'allowedOrigins' => ['*']
    ],
    'application' => [
        'title' => 'The coffee store',
        'description' => 'For barista',
        'baseUri' => '/',
        'viewsDir' => __DIR__ . '/../app/Views',
        'loggerUrl' => __DIR__ . '/../logs/errors.log',
    ],
    'authentication' => [
        'secret' => 'this_should_be_changed',
        'accesstrustedkey'=> 'hello',
        'expirationTime' => 86400 * 7, // One week till token expires
    ],
    'services' => [
        'user' => [
            'url' => 'http://user.caudatfarm.local:8080/',
            'action' => [
                'me' => 'users/me'
            ]
        ]
    ]
];