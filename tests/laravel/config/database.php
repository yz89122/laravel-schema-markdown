<?php

return [
    'default' => 'sqlite',
    'connections' => [
        'sqlite' => [
            'driver' => 'sqlite',
            'database' => ':memory:',
        ],
        'mysql' => [
            'driver' => 'mysql',
        ],
    ],
    'migrations' => 'migrations',
];
