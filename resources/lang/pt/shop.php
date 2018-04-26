<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Shop Language Lines
    |--------------------------------------------------------------------------
    */
    'all' => 'Todos os Itens',
    'equipment' => 'Equipamentos',
    'fashion' => 'Roupas',
    'accessories' => 'Acessórios',
    'charms' => 'Encatos',
    'buy' => 'Comprar',
    'gift' => 'Presente',
    'send_gift' => 'Enviar Presente',
    'gift_title' => 'Enviado :name Para:',
    'select_char_first' => 'Você precisa selecionar um amigo da sua lista de amigos para enviar um presente.',
    'recently_added_friends' => 'Se você tiver adicionado o amigo recentemente, por favor, relogue no jogo.',
    'not_logged_in' => 'Você precisa estar online para comprar este item.',
    'no_friends' => 'A sua lista de amigos está vazia.',
    'purchase_complete' => 'Você comprou :name com sucesso.',
    'gift_complete' => 'Você enviou :name para :count amigo.',
    'mail_item' => [
        'title' => ':name Loja Online',
        'message' => "Você recebeu:\r:name x:count\r\r\rObrigado,\r:staff Time Sanctuary",
    ],
    'gift_item' => [
        'title' => 'Você recebeu um presente.',
        'message' => "Você recebeu:\r:name x:count\r\r\rde :player",
    ],
    'masks' => [
        0 => 'Outros',
        1 => 'Armas',
        'armor' => [
            2 => 'Capacete',
            16 => 'Armadura',
            64 => 'Perneiras',
            128 => 'Botas',
            256 => 'Braçadeiras',
            8 => 'Manto',
        ],
        'fashion' => [
            8192 => 'Torso',
            16384 => 'Pernas',
            32768 => 'Pés',
            65536 => 'Braços',
            33554432 => 'Cabelo',
            536870912 => 'Skins',
        ],
        'accessories' => [
            1536 => 'Anel',
            4 => 'Colar',
            32 => 'Ornamento',
        ],
        'charms' => [
            1048576 => 'HP',
            2097152 => 'MP',
        ],
        2048 => 'Munição',
        4096 => 'Montaria Voadora',
        131072 => 'Hierograma',
        262144 => 'Livros',
        524288 => 'Emoticons',
        8388608 => 'Gênio',
        -2147483585 => 'War Avatar',
    ],

    'fields' => [
        'name' => 'Nome',
        'price' => 'Preço',
        'item_id' => 'Código do Item',
        'octet' => 'Código Octet',
        'mask' => 'Máscara',
        'count' => 'Quantidade',
        'max_count' => 'Quantidade Máxima',
        'protection_type' => 'Tipo de Proteção',
        'expire_date' => 'Expira na Data',
        'discount' => 'Desconto',
        'shareable' => [
            'title' => 'Compartilhável',
            'yes' => 'Sim',
            'no' => 'Não'
        ],
        'description' => 'Descrição'
    ],

    'index' => 'Visualizando os itens...',
    'add' => 'Adicionar Item',
    'edit' => 'Editando o item: :name',
    'view' => 'Visualizando os itens...',
    'create' => 'Criar',
    'create_success' => 'Item criado com sucesso!',
    'edit_success' => 'Suas alterações foram salvas com sucesso!',
    'add_button' => 'Criar Item',
    'update_button' => 'Editar Item',
    'items_per_page' => 'Quantidade',
    'items_per_page_desc' => 'O número de itens à mostrar por página.',
    'missing' => [
        'title' => 'Item não encontrado...',
        'body' => 'Para consertar isto, faça o upload do <b>:id.gif</b> na pasta: <b>:path</b>.'
    ]

];
