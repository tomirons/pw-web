<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Shop Language Lines
    |--------------------------------------------------------------------------
    */
    'all' => 'Semua',
    'equipment' => 'Armor',
    'fashion' => 'Busana',
    'accessories' => 'Aksesoris',
    'charms' => 'Jimat',
    'buy' => 'Beli',
    'gift' => 'Hadiah',
    'send_gift' => 'Kirim Hadiah',
    'gift_title' => 'Kirim :name ke:',
    'select_char_first' => 'Anda harus memilih karakter untuk melihat daftar teman.',
    'recently_added_friends' => 'Jika Anda sudah menambahkan daftar teman, tetapi tidak melihat nya di dalam daftar, silahkan relogin kembali.',
    'not_logged_in' => 'Anda harus login untuk membeli item ini.',
    'no_friends' => 'Daftar teman Anda kosong.',
    'purchase_complete' => 'Anda telah berhasil membeli :name.',
    'gift_complete' => 'Anda telah berhasil mengirim :name ke :count teman.',
    'mail_item' => [
        'title' => ':name Tok Web',
        'message' => "Anda menerima:\r:name x:count\r\r\rTerima kasih,\r:staff Team",
    ],
    'gift_item' => [
        'title' => 'Anda menerima hadiah',
        'message' => "Anda menerima:\r:name x:count\r\r\rDari :player",
    ],
    'masks' => [
        0 => 'Lain Lain',
        1 => 'Senjata',
        'armor' => [
            2 => 'Helm',
            16 => 'Baju',
            64 => 'Celana',
            128 => 'Sepatu',
            256 => 'Gelang',
            8 => 'Jubah',
        ],
        'fashion' => [
            8192 => 'Baju',
            16384 => 'Celana',
            32768 => 'Sepatu',
            65536 => 'Gelang',
            33554432 => 'Rambut',
            536870912 => 'Senjata',
        ],
        'accessories' => [
            1536 => 'Cin Cin',
            4 => 'Kalung',
            32 => 'Sabuk',
        ],
        'charms' => [
            1048576 => 'HP',
            2097152 => 'MP',
        ],
        2048 => 'Amunisi',
        4096 => 'Alat terbang',
        131072 => 'Hierogram',
        262144 => 'Heaven Book/Tome',
        524288 => 'Emot Chat',
        8388608 => 'Genie',
        -2147483585 => 'War Avatar',
    ],

    'fields' => [
        'name' => 'Nama',
        'price' => 'Harga',
        'item_id' => 'ID Barang',
        'octet' => 'Octets',
        'mask' => 'Mask',
        'count' => 'Jumlah',
        'max_count' => 'Maksimal Jumlah',
        'protection_type' => 'Tipe Proteksi',
        'expire_date' => 'Tanggal Kadarluarsa',
        'discount' => 'Discount',
        'shareable' => [
            'title' => 'Shareable',
            'yes' => 'Ya',
            'no' => 'Tidak'
        ],
        'description' => 'Deskripsi'
    ],

    'index' => 'Melihat Barang',
    'add' => 'Tambah Barang',
    'edit' => 'Ubah Barang: :name',
    'view' => 'Lihat Barang',
    'create' => 'Buat Barang Baru',
    'create_success' => 'Barang Anda sudah di buat!',
    'edit_success' => 'Perubahan Anda sudah di simpan!',
    'add_button' => 'Buat Barang',
    'update_button' => 'Update Barang',
    'items_per_page' => 'Barang Per Halaman',
    'items_per_page_desc' => 'Jumlah barang yang di tampilkan per halaman.',
    'missing' => [
        'title' => 'Icon hilang',
        'body' => 'To fix this, upload <b>:id.gif</b> to <b>:path</b>.'
    ]

];
