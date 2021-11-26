<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Donate Language Lines
    |--------------------------------------------------------------------------
    */

    'status' => 'Status',
    'paypal_title' => 'PayPal',
    'paymentwall_title' => 'Paymentwall',
    'no_methods' => 'Metode donasi belum di konfigurasi, silahkan kontak administrator.',
    'error' => [
        'title' => 'Kesalahan',
        'message' => 'Silakan masukkan jumlah donate dalam :currency .',
        'minimum' => 'Minimal donasi :min.'
    ],
    'double_notice' => '<b>Info:</b> Dobel donate aktif',
    'double_donation' => 'Dobel Donate',
    'paypal_currency' => 'Mata Uang',
    'paypal_client_id' => 'Client ID',
    'paypal_client_id_desc' => 'Untuk mendapatkan client ID dan secret, <a href="https://developer.paypal.com/developer/applications/" target="_blank">buatlah sebuah aplikasi di situs pengembangan PayPal</a>. Pastikan Anda menggunakan <strong>live credentials</strong>, bukan test credentials.',
    'paypal_secret' => 'Secret',
    'paypal_per' => 'Jumlah per :currency',
    'paypal_min' => 'Jumlah minimal',
    'paypal' => [
        'description' => ':amount :currency',
        'success' => 'Terima kasih telah melakukan donasi.'
    ],
    'paymentwall_link' => 'iFrame Link',
    'paymentwall_link_desc' => '',
    'paymentwall_key' => 'Secret Key',
    'paymentwall_setup' => [
        'title' => 'Cara setup Paymentwall',
        'steps' => [
            1 => 'Masuk ke Paymentwall',
            2 => 'Ubah pengaturan aplikasi',
            3 => 'Ganti tipe pingback menjadi URL',
            4 => 'Ganti URL menjadi :url',
            5 => "<i class=\"icon-info font-red\"></i> Tetapkan PINGBACK SIGNATURE VERSION ke '1'"
        ]
    ],
    'currency' => [
        '' => "-",
        'AUD' => "Australian Dollar",
        'BRL' => "Brazilian Real",
        'CAD' => "Canadian Dollar",
        'CZK' => "Czech Koruna",
        'DKK' => "Danish Krone",
        'EUR' => "Euro",
        'HKD' => "Hong Kong Dollar",
        'HUF' => "Hungarian Forint",
        'IDR' => "Indonesian Rupiah",
        'JPY' => "Japanese Yen",
        'MYR' => "Malaysian Ringgit",
        'MXN' => "Mexican Peso",
        'NOK' => "Norwegian Krone",
        'NZD' => "New Zealand Dollar",
        'PHP' => "Philippine Peso",
        'PLN' => "Polish Zloty",
        'GBP' => "Pound Sterling",
        'SGD' => "Singapore Dollar",
        'SEK' => "Swedish Krona",
        'CHF' => "Swiss Franc",
        'TWD' => "Taiwan New Dollar",
        'THB' => "Thai Baht",
        'TRY' => "Turkish Lira",
        'USD' => "U.S. Dollar",
    ]

];
