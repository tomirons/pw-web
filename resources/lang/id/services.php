<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Voucher Language Lines
    |--------------------------------------------------------------------------
    */

    'logged_in' => 'Karakter Harus Login',
    'logged_out' => 'Karakter Harus Logout',
    'cultivation_unlocked' => 'Wibawa harus terbuka',
    'not_max_level' => 'Level karakter harus lebih rendah dari ' . settings('level_up_cap'),
    'level_40' => 'Minimal level 40',
    'message' => 'Pesan',
    'quantity' => 'Jumlah',
    'ingame_gold' => 'Gold di game',
    'requirements' => 'Kebutuhan:',
    'free' => 'Gratis',
    'must_login' => 'Karakter Anda harus berada di dalam game.',
    'must_logout' => 'Karakter Anda harus keluar dari game.',
    'cultivation_not_unlocked' => 'Wibawa karakter Anda harus terbuka.',
    'max_level' => 'Level karakter Anda sudah maksimal.',
    'not_high_enough_level' => 'Level karakter Anda tidak cukup.',
    'meridian_maxed' => 'Meridian Anda sudah maksimal.',
    'no_stash_password' => 'Karakter Anda tidak memiliki sandi bank.',
    'not_enough_gold' => 'Karakter Anda tidak memiliki gold yang cukup di dalam game.',
    'broadcast' => [
        'title' => 'Pesan Broadcast',
        'description' => 'Buat pengumuman di dalam game menggunakan chat merah!',
        'requirements' => [
            0 => 'logged_in'
        ],
        'input' => [
            'name' => 'message',
            'type' => 'text',
            'placeholder' => 'message'
        ],
        'complete' => 'Pesan Anda telah di kirim.',
    ],
    'virtual_to_cubi' => [
        'title' => 'Beli Cubi',
        'description' => 'Beli cubi gold menggunakan ' . settings('currency_name'),
        'requirements' => [
            0 => 'logged_out'
        ],
        'input' => [
            'name' => 'quantity',
            'type' => 'number',
            'placeholder' => 'quantity'
        ],
        'complete' => 'Cubi Anda telah di kirim, silahkan cek kembali sekitar 5 menit.',
    ],
    'cultivation_change' => [
        'title' => 'Ganti Wibawa',
        'description' => 'Ganti dari Sage ke Demon atau kebalikan nya.',
        'requirements' => [
            0 => 'logged_out',
            1 => 'cultivation_unlocked'
        ],
        'complete' => 'Wibawa Anda telah di ganti.',
    ],
    'gold_to_virtual' => [
        'title' => 'Beli ' . settings('currency_name') . ' dengan Gold ingame',
        'description' => 'Beli ' . settings('currency_name') . ' dengan menggunakan mata uang gold di dalam game',
        'requirements' => [
            0 => 'logged_out'
        ],
        'input' => [
            'name' => 'quantity',
            'type' => 'number',
            'placeholder' => 'quantity'
        ],
        'complete' => 'Anda menerima :quantity :currency'
    ],
    'level_up' => [
        'title' => 'Level Up',
        'description' => 'Naikkan level karakter Anda.',
        'requirements' => [
            0 => 'logged_out',
            1 => 'not_max_level'
        ],
        'input' => [
            'name' => 'quantity',
            'type' => 'number',
            'placeholder' => 'quantity'
        ],
        'complete' => 'Karakter anda sudah naik level sebanyak: :quantity kali.'
    ],
    'max_meridian' => [
        'title' => 'Upgrade Meridian',
        'description' => 'Maksimalkan atribut meridian pada karakter Anda.',
        'requirements' => [
            0 => 'logged_out',
            1 => 'level_40'
        ],
        'complete' => 'Meredian Anda sudah maksimal.'
    ],
    'reset_exp' => [
        'title' => 'Reset EXP',
        'description' => 'Reset EXP karakter Anda menjadi 0.',
        'requirements' => [
            0 => 'logged_out'
        ],
        'complete' => 'EXP karakter Anda sudah di reset.',
    ],
    'reset_sp' => [
        'title' => 'Reset SP',
        'description' => 'Reset SP karakter Anda menjadi 0.',
        'requirements' => [
            0 => 'logged_out'
        ],
        'complete' => 'SP karakter Anda sudah di reset.',
    ],
    'reset_stash_password' => [
        'title' => 'Reset Sandi Bank',
        'description' => 'Jika Anda lupa sandi bank Anda, gunakan fitur ini untuk menghapus / mereset sandi bank.',
        'requirements' => [
            0 => 'logged_out'
        ],
        'complete' => 'Sandi bank Anda sudah di hapus.',
    ],
    'teleport' => [
        'title' => 'Teleport Karakter',
        'description' => 'Jika karakter Anda tersangkut di dalam game, gunakan fitur ini untuk memindahkan nya ke posisi aman.',
        'requirements' => [
            0 => 'logged_out'
        ],
        'complete' => 'Karakter Anda telah berpindah.',
    ],

    'edit' => 'Ubah Layanan',
    'fields' => [
        'enabled' => 'Status',
        'price' => 'Harga',
        'price_desc' => '0 = Gratis',
        'world_tag' => 'World Tag',
        'x' => 'X Coordinates',
        'y' => 'Y Coordinates',
        'z' => 'Z Coordinates',
        'cap' => 'Level Cap'
    ],
    'edit_success' => 'Layanan Anda telah di simpan!',
];
