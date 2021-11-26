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

    'home' => 'Beranda',
    'dashboard' => 'Dasbor',
    'apps' => [
        'news' => 'Berita',
        'shop' => 'Toko',
        'donate' => 'Donasi',
        'voucher' => 'Vocer',
        'vote' => 'Voting',
        'services' => 'Layanan',
        'ranking' => 'Peringkat',
        'manage' => 'Manajemen di dalam game',
        'system' => 'Sistem',
        'members' => 'Anggota'
    ],
    'acp_link' => 'Kontrol Panel Admin',
    'acc_settings' => 'Pengaturan Akun',
    'select_character' => 'Pilih karakter',
    'site' => 'Pergi ke situs',

    /* Class Names */
    'classes' => [
        0 => 'Warrior',
        1 => 'Mage',
        2 => 'Psychic',
        3 => 'Fox Lady',
        4 => 'Beast',
        5 => 'Assassin',
        6 => 'Archer',
        7 => 'Priest',
        8 => 'Seeker',
        9 => 'Mystic',
        10 => 'Duskblade',
        11 => 'Stormbringer'
    ],

    /* Login/Register Language Lines */
    'login' => 'Masuk',
    'login_link' => 'Masuk | Daftar',
    'logout' => 'Keluar',
    'signin' => [
        'title' => 'Masuk',
        'error' => 'Masukkan nama pengguna dan kata sandi.',
        'username' => 'Nama Pengguna',
        'password' => 'Kata Sandi',
        'button' => 'Masuk',
        'create' => 'Buat Akun',
    ],
    'signup' => [
        'title' => 'Daftar',
        'info' => 'Masukkan detil akun berikut below:',
        'email' => 'Email',
        'username' => 'Nama Pengguna',
        'password' => 'Kata Sandi',
        'confirm' => 'Ketik ulang kata sandi',
        'submit' => 'Kirim',
        'back' => 'Kembali',
    ],

    'char_list_error' => 'Karakter Anda tidak bisa di ambil, silahkan coba kembali beberapa saat.',
    'server_not_online' => 'Server tidak Online, silahkan coba kembali beberapa saat.',
    'server_offline' => [
        'title' => 'Perhatian',
        'message' => 'Bebrapa halaman akan lambat di tampil atau bahkan tidak bisa di tampilkan, ini di karenakan server sedang Offline.'
    ],
    'no_results' => 'Maaf, tidak ada yang bisa di tampilkan...',
    'reg_complete' => 'Akun Anda sudah di daftarkan, sekarang Anda dapat login!',
    'acc_balance' => 'Saldo: :money :currency',
    'buy' => 'Beli',
    'no_character_selected' => 'Anda harus memilih karakter sebelum melakukan proses.',
    'no_characters' => 'Anda belum membuat karakter.',
    'not_enough' => ':currency Anda tidak cukup.',
    'not_enough_gold' => 'Gold Anda tidak cukup.',

    'save' => 'Simpan',
    'save_settings' => 'Simpan Pengaturan',
    'settings' => 'Pengaturan',
    'account' => 'Akun',
    'edit' => 'Ubah',
    'remove' => 'Hapus',
    'loading' => 'Loading...',
    'settings_saved' => 'Pengaturan Anda telah di simpan!',

    'cron' => [
        'add' => 'Pembaruan Otomatis',
        'info' => 'Tambahan cron job dibawah ini untuk membuat Rangking dan Voting selalu update.',
        'job' => '* * * * * php ' . base_path('artisan') . ' schedule:run >> /dev/null 2>&1'
    ],

    'acc_tabs' => [
        'overview' => [
            'title' => 'Pratinjau',
            'fields' => [
                'name' => 'Nama',
                'email' => 'Email',
                'password' => 'Kata Sandi'
            ]
        ],
        'email' => [
            'title' => 'Alamat Email',
            'fields' => [
                'email' => 'Alamat Email'
            ]
        ],
        'password' => [
            'title' => 'Kata Sandi',
            'fields' => [
                'current' => 'Kata Sandi saat ini',
                'current_desc' => 'Untuk memastikan perubahan ini aman',
                'new' => 'Kata sandi baru',
                'confirm' => 'Konfirmasi kata sandi'
            ]
        ]
    ],

    'char_list' => [
        'title' => 'Karakter Saya',
        'id' => 'ID: :n'
    ],

    '404' => [
        'title' => 'Pekanbaru, kami memiliki masalah.',
        'content' => 'Halaman yang Anda cari tidak tersedia.',
        'button' => 'Kembali ke Beranda'
    ],
    '500' => [
        'title' => 'Oops! Ada sesuatu yang salah.',
        'content' => 'Kami sedang memperbaikinya! Silahkan kembali beberapa saat lagi.',
        'button' => 'Kembali ke Beranda'
    ]

];
