<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Voucher Language Lines
    |--------------------------------------------------------------------------
    */

    'logged_in' => 'Character must be logged in',
    'logged_out' => 'Character must be logged out',
    'cultivation_unlocked' => 'Must have cultivation unlocked',
    'not_max_level' => 'Character must not be level 105 or higher (if allowed)',
    'message' => 'Message',
    'quantity' => 'Quantity',
    'ingame_gold' => 'Ingame Gold',
    'requirements' => 'Requirements:',
    'broadcast' => [
        'title' => 'Broadcast Message',
        'description' => 'Make an announcement in-game, you will be heard!',
        'requirements' => [
            0 => 'logged_in'
        ],
        'input' => [
            'name' => 'message',
            'type' => 'text',
            'placeholder' => 'message'
        ]
    ],
    'virtual_to_cubi' => [
        'title' => 'Virtual Currency for Cubi',
        'description' => 'Exchange your website currency for cubi in-game.',
        'requirements' => [
            0 => 'logged_out'
        ],
        'input' => [
            'name' => 'quantity',
            'type' => 'number',
            'placeholder' => 'quantity'
        ]
    ],
    'cultivation_change' => [
        'title' => 'Change Cultivation',
        'description' => 'Change from sage to demon, and vise versa.',
        'requirements' => [
            0 => 'logged_in',
            1 => 'cultivation_unlocked'
        ]

    ],
    'gold_to_virtual' => [
        'title' => 'Ingame Gold for Virtual Currency',
        'description' => 'Exchange your in-game gold for the website currency.',
        'requirements' => [
            0 => 'logged_out'
        ],
        'input' => [
            'name' => 'quantity',
            'type' => 'number',
            'placeholder' => 'quantity'
        ]
    ],
    'level_up' => [
        'title' => 'Level Up',
        'description' => 'Quickly and easily increase the level of your character.',
        'requirements' => [
            0 => 'logged_out',
            1 => 'not_max_level'
        ],
        'input' => [
            'name' => 'quantity',
            'type' => 'number',
            'placeholder' => 'quantity'
        ]
    ],
    'max_meridian' => [
        'title' => 'Meridian Upgrade',
        'description' => 'Maxes meridian attribute for your character.',
        'requirements' => [
            0 => 'logged_out'
        ]
    ],
    'reset_exp' => [
        'title' => 'Reset Experience',
        'description' => 'Resets the expereince of your character to zero.',
        'requirements' => [
            0 => 'logged_out'
        ]
    ],
    'reset_sp' => [
        'title' => 'Reset Spirit',
        'description' => 'Resets the spirit of your character to zero.',
        'requirements' => [
            0 => 'logged_out'
        ]
    ],
    'reset_stash_password' => [
        'title' => 'Reset Stash Password',
        'description' => 'Recover access to your stash.',
        'requirements' => [
            0 => 'logged_out'
        ]
    ],
    'teleport' => [
        'title' => 'Teleport Character',
        'description' => 'Teleports your character if you get stuck in-game and can\'t enter the game.',
        'requirements' => [
            0 => 'logged_out'
        ]
    ],
];
