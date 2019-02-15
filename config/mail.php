<?php

return [
    'driver' => env('MAIL_DRIVER', 'smtp'),
    'host' => env('MAIL_HOST', 'smtp.yandex.ru'),
    'port' => env('MAIL_PORT', 587),
    'from' => [
        'address' => 'siwals244@yandex.ru',
        'name' => 'test',
    ],
    'encryption' => env('MAIL_ENCRYPTION', 'tls'),
    'username' => env('MAIL_USERNAME', 'siwals244@yandex.ru'),
    'password' => env('MAIL_PASSWORD', 'nNyfAxwxLBvYZ9E'),
];

