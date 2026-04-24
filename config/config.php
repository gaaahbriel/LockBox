<?php

return [
    'database' => [
        'driver' => 'mysql',
        'host' => 'localhost',
        'port' => 3306,
        'dbname' => 'lockbox',
        'user' => 'root',
        'pass' => ''
    ],

    'security' => [
        'first_key' => env('ENCRYPT_FIRST_KEY', base64_encode(random_bytes(32))),
        'second_key' => env('ENCRYPT_SECOND_KEY', base64_decode(random_bytes(64)))
    ]
];