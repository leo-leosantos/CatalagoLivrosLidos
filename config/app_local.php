<?php

return [
    'debug' => filter_var(env('DEBUG', true), FILTER_VALIDATE_BOOLEAN),
    'Security' => ['salt' => env('SECURITY_SALT', '904d3dfe3fecc2423acc6340a0c9cc4aa7474e1f479a8422995c91c16861e87f'),],
    'Datasources' => [
        'default' => [
            'host' => 'localhost',
            //'port' => 'non_standard_port_number',
            'username' => 'root',
            'password' => 'root',
            'database' => 'cakephp_meus_uso_livros_lidos',
            //'schema' => 'myapp',
            'url' => env('DATABASE_URL', null),
        ],
        'test' => [
            'host' => 'localhost',
            //'port' => 'non_standard_port_number',
            'username' => 'root',
            'password' => 'root',
            'database' => 'cakephp_meus_uso_livros_lidos',
            //'schema' => 'myapp',
        ],
    ],
    'EmailTransport' => [
        'default' => [
            'host' => 'localhost',
            'port' => 25,
            'username' => null,
            'password' => null,
            'client' => null,
            'url' => env('EMAIL_TRANSPORT_DEFAULT_URL', null),
        ],
    ],
];
