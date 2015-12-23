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
    'apps' => [
        'news' => 'News',
        'shop' => 'Shop',
        'donate' => 'Donate',
        'voucher' => 'Voucher',
        'vote' => 'Vote',
        'services' => 'Ingame Services',
        'ranking' => 'Ranking',
        'manage' => 'Ingame Management',
        'system' => 'System'
    ],
    'acp_link' => 'Admin Control Panel',
    'acc_settings' => 'Account Settings',
    'select_character' => 'Select a Character',

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

    'char_list_error' => 'An error occurred while retrieving your characters, please try again later.',
    'server_not_online' => 'The server isn\'t online, please try again later.',
    'server_offline' => [
        'title' => 'Attention',
        'message' => 'Some pages may load slowly since the server isn\'t online.'
    ],
    'no_results' => 'Sorry, but there\'s nothing to display...',
    'reg_complete' => 'Your account has been registered, you can now login!',
    'acc_balance' => 'Account Balance: :money :currency',
    'buy' => 'Buy',
    'no_character_selected' => 'You must select a character before proceeding.',
    'not_enough' => 'You don\'t have enough :currency.',

    'save_settings' => 'Save Settings',
    'settings' => 'Settings',
    'edit' => 'Edit',
    'remove' => 'Remove',
    'loading' => 'Loading...',
    'settings_saved' => 'Your settings have been saved!',

    'cron' => [
        'add' => 'Automate Your Panel',
        'info' => 'Adding this cron job will automate the voting transfer and ranking updates.',
        'job' => '* * * * * php ' . base_path( 'artisan' ) . ' schedule:run >> /dev/null 2>&1'
    ]

];
