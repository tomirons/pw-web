<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Main Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used all across the panel
    |
    */

    'home' => 'Home',
    'dashboard' => 'Dashboard',
    'apps' => [
        'news' => 'News',
        'shop' => 'Shop',
        'donate' => 'Donate',
        'voucher' => 'Voucher',
        'vote' => 'Vote',
        'services' => 'Ingame Services',
        'ranking' => 'Ranking',
        'manage' => 'Ingame Management',
        'system' => 'System',
        'members' => 'Members'
    ],
    'acp_link' => 'Admin Control Panel',
    'acc_settings' => 'Account Settings',
    'select_character' => 'Select a Character',
    'site' => 'Go to Site',

    /* Class Names */
    'classes' => [
        0 => 'Blademaster',
        1 => 'Wizard',
        2 => 'Psychic',
        3 => 'Venomancer',
        4 => 'Barbarian',
        5 => 'Assassin',
        6 => 'Archer',
        7 => 'Cleric',
        8 => 'Seeker',
        9 => 'Mystic'
    ],

    /* Login/Register Language Lines */
    'login' => 'Login',
    'login_link' => 'Login | Register',
    'logout' => 'Log Out',
    'signin' => [
        'title' => 'Sign In',
        'error' => 'Enter any username and password.',
        'username' => 'Username',
        'password' => 'Password',
        'button' => 'Login',
        'create' => 'Create Account',
    ],
    'signup' => [
        'title' => 'Sign Up',
        'info' => 'Enter your account details below:',
        'email' => 'Email',
        'username' => 'Username',
        'password' => 'Password',
        'confirm' => 'Re-type Your Password',
        'submit' => 'Submit',
        'back' => 'Back',
    ],

    'char_list_error' => 'We can\'t retrieve your characters, please try again later.',
    'server_not_online' => 'The server isn\'t online, please try again later.',
    'server_offline' => [
        'title' => 'Attention',
        'message' => 'Some pages may load slowly since the server isn\'t online.'
    ],
    'no_results' => 'Sorry, but there\'s nothing to display...',
    'reg_complete' => 'Your account has been registered, you can now login!',
    'acc_balance' => 'Balance: :money :currency',
    'buy' => 'Buy',
    'no_character_selected' => 'You must select a character before proceeding.',
    'no_characters' => 'You haven\'t created any characters.',
    'not_enough' => 'You don\'t have enough :currency.',
    'not_enough_gold' => 'You don\'t have enough gold.',

    'save' => 'Save',
    'save_settings' => 'Save Settings',
    'settings' => 'Settings',
    'account' => 'Account',
    'edit' => 'Edit',
    'remove' => 'Remove',
    'loading' => 'Loading...',
    'settings_saved' => 'Your settings have been saved!',

    'cron' => [
        'add' => 'Automate Your Panel',
        'info' => 'Adding this cron job will automate the voting transfer and ranking updates.',
        'job' => '* * * * * php ' . base_path( 'artisan' ) . ' schedule:run >> /dev/null 2>&1'
    ],

    'acc_tabs' => [
        'overview' => [
            'title' => 'Overview',
            'fields' => [
                'name' => 'Name',
                'email' => 'Email',
                'password' => 'Password'
            ]
        ],
        'email' => [
            'title' => 'Email Address',
            'fields' => [
                'email' => 'Email Address'
            ]
        ],
        'password' => [
            'title' => 'Password',
            'fields' => [
                'current' => 'Current Password',
                'current_desc' => 'To ensure this change is secure',
                'new' => 'New Password',
                'confirm' => 'Confirm New Password'
            ]
        ]
    ],

    'char_list' => [
        'title' => 'My Characters',
        'id' => 'ID: :n'
    ],

    '404' => [
        'title' => 'Houston, we have a problem.',
        'content' => 'Actually, the page you are looking for does not exist.',
        'button' => 'Return home'
    ],
    '500' => [
        'title' => 'Oops! Something went wrong.',
        'content' => 'We are fixing it! Please come back in a while.',
        'button' => 'Return home'
    ]

];
