<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Donate Language Lines
    |--------------------------------------------------------------------------
    */

    'paypal_title' => 'PayPal',
    'paymentwall_title' => 'Paymentwall',
    'no_methods' => 'As doações ainda não foram configuradas, contate um administrador.',
    'error' => [
        'title' => 'Error',
        'message' => 'Digite a quantidade em dinheiro que você deseja doar <b>ou</b> quanto em :currency você quer receber.',
        'minimum' => 'Você não pode doar, aguarde :min minutos.'
    ],
    'double_notice' => '<b>Atenção:</b> Doações duplas ativadas, aproveite!',

    'double_donation' => 'Doações Duplas',
    'paypal_currency' => 'Atual',
    'paypal_client_id' => 'ID',
    'paypal_client_id_desc' => 'Para obter o ID, <a href="https://developer.paypal.com/developer/applications/" target="_blank">clique aqui</a>. Tenha certeza de que estará usando as <strong>credenciais corretas</strong>.',
    'paypal_secret' => 'Chave Secreta',
    'paypal_per' => 'Moeda Atual :currency',
    'paypal_min' => 'Quantidade Mínima',
    'paypal' => [
        'description' => ':amount :currency',
        'success' => 'Informações atualizadas com sucesso!'
    ],
    'paymentwall_link' => 'iFrame Link',
    'paymentwall_link_desc' => '',
    'paymentwall_key' => 'Chave Secreta',
    'paymentwall_setup' => [
        'title' => 'Como configurar o Paymentwall',
        'steps' => [
            1 => 'Logar no Paymentwall',
            2 => 'Configurar aplicação',
            3 => 'Alterar o tipo de pingback para a URL',
            4 => 'Alterar a URL para: :url',
            5 => "<i class=\"icon-info font-red\"></i> Alterar pingback para a versão: '1'"
        ]
    ],
    'currency' => [
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
        'CHF'   => "Swiss Franc",
        'TWD'   => "Taiwan New Dollar",
        'THB'   => "Thai Baht",
        'TRY'   => "Turkish Lira",
        'USD'   => "U.S. Dollar",
    ]

];
