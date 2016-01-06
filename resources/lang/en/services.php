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
    'not_max_level' => 'Character level must be lower then ' . settings( 'level_up_cap' ),
    'level_40' => 'Character must be at least level 40',
    'message' => 'Message',
    'quantity' => 'Quantity',
    'ingame_gold' => 'Ingame Gold',
    'requirements' => 'Requirements:',
    'free' => 'Free',
    'must_login' => 'Your character must be logged in.',
    'must_logout' => 'Your character must be logged out.',
    'cultivation_not_unlocked' => 'Your character must have cultivation unlocked.',
    'max_level' => 'Your character is already max level.',
    'not_high_enough_level' => 'Your character isn\'t high enough level.',
    'meridian_maxed' => 'Your meridian is already maxed.',
    'no_stash_password' => 'Your character doesn\'t have a stash password .',
    'not_enough_gold' => 'Your character doesn\'t have enough in-game gold.',
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
        ],
        'complete' => 'Your broadcast has been sent.',
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
        ],
        'complete' => 'You will receive your cubi shortly.',
    ],
    'cultivation_change' => [
        'title' => 'Change Cultivation',
        'description' => 'Change from sage to demon, and vise versa.',
        'requirements' => [
            0 => 'logged_out',
            1 => 'cultivation_unlocked'
        ],
        'complete' => 'Your cultivation has been changed.',
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
        ],
        'complete' => 'You\'ve received :quantity :currency'
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
        ],
        'complete' => 'You\'ve leveled up :quantity times.'
    ],
    'max_meridian' => [
        'title' => 'Meridian Upgrade',
        'description' => 'Maxes meridian attribute for your character.',
        'requirements' => [
            0 => 'logged_out',
            1 => 'level_40'
        ],
        'complete' => 'Your meridian is now maxed.'
    ],
    'reset_exp' => [
        'title' => 'Reset Experience',
        'description' => 'Resets the expereince of your character to zero.',
        'requirements' => [
            0 => 'logged_out'
        ],
        'complete' => 'Your experience has been reset.',
    ],
    'reset_sp' => [
        'title' => 'Reset Spirit',
        'description' => 'Resets the spirit of your character to zero.',
        'requirements' => [
            0 => 'logged_out'
        ],
        'complete' => 'Your spirit has been reset',
    ],
    'reset_stash_password' => [
        'title' => 'Reset Stash Password',
        'description' => 'Recover access to your stash.',
        'requirements' => [
            0 => 'logged_out'
        ],
        'complete' => 'Your stash password has been removed.',
    ],
    'teleport' => [
        'title' => 'Teleport Character',
        'description' => 'Teleports your character if you get stuck in-game and can\'t enter the game.',
        'requirements' => [
            0 => 'logged_out'
        ],
        'complete' => 'Your character has been teleported.',
    ],

    'edit' => 'Edit Services',
    'fields' => [
        'enabled' => 'Enabled',
        'price' => 'Price',
        'price_desc' => '0 = Free',
        'world_tag' => 'World Tag',
        'x' => 'X Coordinates',
        'y' => 'Y Coordinates',
        'z' => 'Z Coordinates',
        'cap' => 'Level Cap'
    ],
    'edit_success' => 'Your services have been saved!',
];
