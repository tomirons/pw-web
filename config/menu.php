<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Admin Menu
    |--------------------------------------------------------------------------
    */

    'icons' => [
        'dashboard' => 'home',
        'system' => 'settings',
        'news' => 'book-open',
        'shop' => 'basket',
        'donate' => 'credit-card',
        'voucher' => 'tag',
        'vote' => 'like',
        'services' => 'magic-wand',
        'ranking' => 'bar-chart',
        'management' => 'users'
    ],

    'admin' => [
        'dashboard',
        'system' => [
            'apps',
            'settings'
        ],
        'news' => [
            'application' => TRUE,
            'add',
            'view',
            'settings'
        ],
        'shop' => [
            'application' => TRUE,
            'add',
            'view',
            'settings'
        ],
        'donate' => [
            'application' => TRUE,
            'settings'
        ],
        'voucher' => [
            'application' => TRUE,
            'add',
            'view'
        ],
        'vote' => [
            'application' => TRUE,
            'add',
            'view'
        ],
        'services' => [
            'application' => TRUE,
            'view',
            'settings'
        ],
        'ranking' => [
            'application' => TRUE,
            'settings'
        ],
        'management' => [
            'broadcast',
            'mailer',
            'forbid',
            'gm',
            'chat' => [
                'watch',
                'settings'
            ]
        ]
    ]
];
