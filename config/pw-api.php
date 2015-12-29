<?php

return [

    /**
     * These ports MUST be open if you the package isn't on the host machine
     *
     * @var array
     */
    'ports' => [
        'gamedbd' => 29400,
        'gdeliveryd' => 29100,
        'gacd' => 29300,
        'client' => 29000
    ],

    'maxbuffer' => 65536,

    's_block' => FALSE,

    's_readtype' => 3,
];