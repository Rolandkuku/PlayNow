<?php

namespace Playnow\app\configurations;

class Configuration
{
    protected $configurations = [
        'app' => [
            'debug' => true,
            'url' => '127.0.0.1',
            'maintenance' => false,
        ],

        'db' => [
            'fetch' => \PDO::FETCH_OBJECT,
            'default' => 'default',
            'connections' => [
                'default' => [
                    'driver' => 'mysql',
                    'host' => 'localhost',
                    'database' => 'playnow',
                    'username' => 'root',
                    'password' => 'root',
                    'charset' => 'utf8',
                    'collation' => 'utf8_unicode_ci'
                ],
                'default2' => [
                    'driver' => 'mysql',
                    'host' => '127.0.0.1',
                    'database' => 'playnow',
                    'username' => 'root',
                    'password' => 'root',
                    'charset' => 'utf8',
                    'collation' => 'utf8_unicode_ci'
                ]
            ]
        ],

        'langs' => [
            'fr',
            'en'
        ]
    ];
}