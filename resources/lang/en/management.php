<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Management Language Lines
    |--------------------------------------------------------------------------
    */

    'broadcast' => 'Broadcast',
    'mailer' => 'Mailer',
    'forbid' => 'Forbid',
    'gm' => 'Manage GM\'s',
    'chat' => 'Live Chat',
    'watch' => 'Watch',

    'edit_gm' => 'Changing :user\'s Permissions',
    'change_permissions' => 'Change Permissions',
    'gm_permissions' => [
        0 => 'Switch player\'s name and ID',
        1 => 'Turn hidden or invincible',
        2 => 'Switch online status',
        3 => 'Hide online status in wisper',
        4 => 'Teleport to player',
        5 => 'Teleport player to GM',
        6 => 'Teleport by ctrl+clicking map',
        11 => 'Show online number',
        100 => 'Ban player account/character',
        101 => 'Mute player account/character',
        102 => 'Ban trading for a player',
        103 => 'Ban selling for a player',
        104 => 'GM announcement broadcast',
        105 => 'Restart gameserver',
        200 => 'Create Monster',
        206 => 'Activate Monster Creator',
    ],

   'table' => [
       'gm' => [
           'id' => 'ID',
           'name' => 'Name',
           'actions' => 'Actions'
       ],
       'chat' => [
           'date' => 'Date',
           'user_id' => 'User ID',
           'channel' => 'Channel',
           'destination' => 'Destination',
           'message' => 'Message'
       ]
   ],

    'fields' => [
        'broadcast' => [
            'user' => 'Role ID',
            'user_desc' => 'User that you want to say the message (optional)',
            'channel' => 'Channel',
            'message' => 'Message'
        ],
        'mailer' => [
            'type' => 'Give To',
            'types' => [
                'list' => 'List of Players',
                'all' => 'All Players',
                'online' => 'All Online Players'
            ],
            'roles' => 'Role ID\'s',
            'roles_desc' => 'separate with (,)',
            'item_id' => 'Item ID',
            'quantity' => 'Quantity',
            'protection_type' => 'Protection Type',
            'time_limit' => 'Time Limit',
            'octet' => 'Octet',
            'mask' => 'Mask',
            'gold' => 'Gold',
            'subject' => 'Subject',
            'message' => 'Message'
        ],
        'forbid' => [
            'types' => [
                'ban_acc' => 'Ban Account',
                'ban_char' => 'Ban Character',
                'mute_acc' => 'Mute Account',
                'mute_char' => 'Mute Character'
            ],
            'type' => 'Type',
            'user_id' => 'User ID',
            'user_id_desc' => 'Account or Role ID',
            'length' => 'Length',
            'length_desc' => 'In seconds',
            'reason' => 'Reason'
        ],
        'gm' => [
            'account_id' => 'Account ID'
        ],
        'chat' => [
            'path' => 'Log Folder Path',
            'path_desc' => 'Folder path of where <b>world2.chat</b> is located.'
        ]
    ],
    'submit' => [
        'broadcast' => 'Send Message',
        'mailer' => 'Send Mail',
        'forbid' => 'Submit',
        'gm' => [
            'add' => 'Add GM',
            'save' => 'Save Permissions'
        ]
    ],
    'error' => [
        'gm' => [
            'no_user' => 'Account :acc doesn\'t exist.',
            'already_gm' => 'Account :acc is already a GM.',
        ]
    ],
    'complete' => [
        'broadcast' => 'Your message has been sent!',
        'mailer' => [
            'list' => 'Mail sent to the list players!',
            'all' => 'Mail has been sent to all players!',
            'online' => 'Mail has been sent to all online players!'
        ],
        'forbid' => [
            'ban' => [
                'account' => 'Account :user is banned for :seconds seconds!',
                'character' => 'Character :user is banned for :seconds seconds!'
            ],
            'mute' => [
                'account' => 'Account :user has been muted for :seconds seconds!',
                'character' => 'Character :user has been muted for :seconds seconds!'
            ]
        ],
        'gm' => [
            'add' => ':acc now has GM permissions!',
            'edit' => ':acc\'s permissions have been changed!',
            'remove' => ':acc\'s permissions have been revoked!',
        ]
    ],

    'buttons' => [
        'refresh' => 'Refresh'
    ],

    'channels' => [
        0 => 'Common',
        1 => 'World',
        2 => 'Party',
        3 => 'Faction',
        4 => 'Whisper',
        7 => 'Trade',
        9 => 'Broadcast',
        12 => 'Horn'
    ],
    'faction_id' => 'Faction ID: ',

];
