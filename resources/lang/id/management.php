<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Management Language Lines
    |--------------------------------------------------------------------------
    */

    'broadcast' => 'Broadcast',
    'mailer' => 'Pengiriman Surat',
    'forbid' => 'Larang',
    'gm' => 'Manajemen GM',
    'chat' => 'Chat Langsung',
    'watch' => 'Lihat',

    'edit_gm' => 'Ganti akses GM :user',
    'change_permissions' => 'Ganti akses',
    'gm_permissions' => [
        0 => 'Tukar nama player menjadi ID',
        1 => 'Aktifkan mode tersembunya dan kebal',
        2 => 'Aktifkan status Online',
        3 => 'Sembunyikan status Online saat berbisik',
        4 => 'Berpindah posisi ke player',
        5 => 'Pindahkan posisi player ke GM',
        6 => 'Berpindah dengan menekan ctrl+klik di map',
        11 => 'Tampilkan player yang sedang Online',
        100 => 'Ban akun/karakter',
        101 => 'Mute akun/karakter',
        102 => 'Ban trading untuk player',
        103 => 'Ban jualan untuk player',
        104 => 'Pengumuman GM',
        105 => 'Restart gameserver',
        200 => 'Buat Monster',
        206 => 'Aktifkan Monster Creator',
    ],

    'table' => [
        'gm' => [
            'id' => 'ID',
            'name' => 'Nama',
            'actions' => 'Aksi'
        ],
        'chat' => [
            'date' => 'Tanggal',
            'user_id' => 'User ID',
            'channel' => 'Saluran',
            'destination' => 'Tujuan',
            'message' => 'Pesan'
        ]
    ],

    'fields' => [
        'broadcast' => [
            'user' => 'ID Karakter',
            'user_desc' => 'ID karakter yang ingin di tampilkan untuk mengirim pesan (optional)',
            'channel' => 'Saluran',
            'message' => 'Pesan'
        ],
        'mailer' => [
            'type' => 'Kirim Ke',
            'types' => [
                'list' => 'Daftar player',
                'all' => 'Semua player',
                'online' => 'Semua player yang sedang online'
            ],
            'roles' => 'ID Karakter',
            'roles_desc' => 'pisahkan dengan (,)',
            'item_id' => 'ID Barang',
            'quantity' => 'Jumlah',
            'protection_type' => 'Tipe Kunci (proctype)',
            'time_limit' => 'Batas Waktu',
            'octet' => 'Octet',
            'mask' => 'Mask',
            'gold' => 'Gold',
            'subject' => 'Judul',
            'message' => 'Pesan'
        ],
        'forbid' => [
            'types' => [
                'ban_acc' => 'Ban Akun',
                'ban_char' => 'Ban Karakter',
                'mute_acc' => 'Mute Akun',
                'mute_char' => 'Mute Karakter'
            ],
            'type' => 'Tipe',
            'user_id' => 'User ID',
            'user_id_desc' => 'Akun atau ID Karakter',
            'length' => 'Durasi',
            'length_desc' => 'Dalam detik',
            'reason' => 'Alasan'
        ],
        'gm' => [
            'account_id' => 'ID Akun'
        ],
        'chat' => [
            'path' => 'Log Folder Path',
            'path_desc' => 'Path folder di mana file <b>world2.chat</b> berada.'
        ]
    ],
    'submit' => [
        'broadcast' => 'Kirim Pesan',
        'mailer' => 'Kirim Surat',
        'forbid' => 'Kirim',
        'gm' => [
            'add' => 'Tambah GM',
            'save' => 'Simpan Akses'
        ]
    ],
    'error' => [
        'gm' => [
            'no_user' => 'Akun :acc doesn\'t tidak ada.',
            'already_gm' => 'Akun :acc sudah jadi GM.',
        ]
    ],
    'complete' => [
        'broadcast' => 'Pesan Anda sudah di kirim!',
        'mailer' => [
            'list' => 'Surat telah di kirim ke daftar player!',
            'all' => 'Surat telah di kirim ke semua player!',
            'online' => 'Surat telah di kirim ke semua player yang sedang Online!'
        ],
        'forbid' => [
            'ban' => [
                'account' => 'Akun :user banned untuk :seconds detik!',
                'character' => 'Karakter :user banned untuk :seconds detik!'
            ],
            'mute' => [
                'account' => 'Akun :user telah di muted untuk :seconds detik!',
                'character' => 'Karakter :user telah di muted untuk :seconds detik!'
            ]
        ],
        'gm' => [
            'add' => ':acc sekarang memiliki akses GM!',
            'edit' => 'akses GM :acc telah di ubah',
            'remove' => 'akses GM :acc telah di hapus',
        ]
    ],

    'buttons' => [
        'refresh' => 'Segarkan'
    ],

    'channels' => [
        0 => 'Umum',
        1 => 'World',
        2 => 'Grup',
        3 => 'Guild',
        4 => 'Bisik',
        7 => 'Dagang',
        9 => 'Toa',
        12 => 'Horn'
    ],
    'faction_id' => 'Guild ID: ',

];
