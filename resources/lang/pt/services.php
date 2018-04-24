<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Voucher Language Lines
    |--------------------------------------------------------------------------
    */

    'logged_in' => 'O personagem precisa estar logado',
    'logged_out' => 'O personagem precisa estar deslogado',
    'cultivation_unlocked' => 'O personagem deve ter o cultivo bloqueado',
    'not_max_level' => 'O level do seu personagem deve ser menor que ' . settings( 'level_up_cap' ),
    'level_40' => 'O personagem deve ter pelo menos level 40',
    'message' => 'Mensagem',
    'quantity' => 'Quantidade',
    'ingame_gold' => 'Moedas no Jogo',
    'requirements' => 'Requisitos:',
    'free' => 'Grátis',
    'must_login' => 'O personagem precisa estar logado.',
    'must_logout' => 'O personagem precisa estar deslogado.',
    'cultivation_not_unlocked' => 'O personagem deve ter o cultivo desbloqueado.',
    'max_level' => 'O seu personagem está no level máximo.',
    'not_high_enough_level' => 'O seu personagem não tem o level alto o suficiente.',
    'meridian_maxed' => 'Seu meridiano está no máximo.',
    'no_stash_password' => 'Você não tem uma senha bancária.',
    'not_enough_gold' => 'Seu personagem não tem moedas suficientes.',
    'broadcast' => [
        'title' => 'Mensagem',
        'description' => 'Faça um anúncio igualzinho ao dos GM\'s no jogo!',
        'requirements' => [
            0 => 'logged_in'
        ],
        'input' => [
            'name' => 'Mensagem',
            'type' => 'text',
            'placeholder' => 'Mensagem'
        ],
        'complete' => 'Seu broadcast foi enviado!',
    ],
    'virtual_to_cubi' => [
        'title' => 'Transformar Saldo em Gold',
        'description' => 'Transforme o saldo do seu painel em Gold.',
        'requirements' => [
            0 => 'logged_out'
        ],
        'input' => [
            'name' => 'Quantidade',
            'type' => 'number',
            'placeholder' => 'Quantidade'
        ],
        'complete' => 'Você receberá o seu gold em breve.',
    ],
    'cultivation_change' => [
        'title' => 'Alterar o Cultivo',
        'description' => 'Altere entre evil/god.',
        'requirements' => [
            0 => 'logged_out',
            1 => 'cultivation_unlocked'
        ],
        'complete' => 'O seu cultivo foi alterado com sucesso.',
    ],
    'gold_to_virtual' => [
        'title' => 'Moedas no jogo em saldo no painel',
        'description' => 'Transforme as suas moedas no jogo em saldo no painel.',
        'requirements' => [
            0 => 'logged_out'
        ],
        'input' => [
            'name' => 'Quantidade',
            'type' => 'number',
            'placeholder' => 'Quantidade'
        ],
        'complete' => 'Você recebeu :quantity :currency'
    ],
    'level_up' => [
        'title' => 'Comprar Leveis',
        'description' => 'Nunca foi tão fácil subir de level.',
        'requirements' => [
            0 => 'logged_out',
            1 => 'not_max_level'
        ],
        'input' => [
            'name' => 'Quantidade',
            'type' => 'number',
            'placeholder' => 'Quantidade'
        ],
        'complete' => 'Você subiu :quantity léveis.'
    ],
    'max_meridian' => [
        'title' => 'Meridiano Full',
        'description' => 'Deixe o seu meridiano no máximo, fácil e rápido.',
        'requirements' => [
            0 => 'logged_out',
            1 => 'level_40'
        ],
        'complete' => 'O seu meridiano está agora no máximo.'
    ],
    'reset_exp' => [
        'title' => 'Resetar Experiência',
        'description' => 'Resete a experiência do seu personagem a zero.',
        'requirements' => [
            0 => 'logged_out'
        ],
        'complete' => 'A sua experiência do seu personagem foi resetada para zero.',
    ],
    'reset_sp' => [
        'title' => 'Resetar Alma',
        'description' => 'Resete a alma do seu personagem para zero.',
        'requirements' => [
            0 => 'logged_out'
        ],
        'complete' => 'Sua alma foi resetada com sucesso.',
    ],
    'reset_stash_password' => [
        'title' => 'Resetar Senha Bancária',
        'description' => 'Recupere o acesso ao seu baú.',
        'requirements' => [
            0 => 'logged_out'
        ],
        'complete' => 'Senha bancária removida com sucesso.',
    ],
    'teleport' => [
        'title' => 'Teleportar Personagem',
        'description' => 'Teleporte o seu personagem para o mundo principal caso algo esteja impedindo-o de logar-se.',
        'requirements' => [
            0 => 'logged_out'
        ],
        'complete' => 'Seu personagem foi teleportado com sucesso.',
    ],

    'edit' => 'Editar Serviços',
    'fields' => [
        'enabled' => 'Habilitar',
        'price' => 'Preço',
        'price_desc' => '0 = Grátis',
        'world_tag' => 'World Tag',
        'x' => 'Coordenadas X',
        'y' => 'Coordenadas Y',
        'z' => 'Coordenadas Z',
        'cap' => 'Capacidade de Level'
    ],
    'edit_success' => 'Seus serviços foram salvos com sucesso!',
];
