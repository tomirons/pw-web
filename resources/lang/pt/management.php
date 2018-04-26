<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Management Language Lines
    |--------------------------------------------------------------------------
    */

    'broadcast' => 'Broadcast',
    'mailer' => 'Email',
    'forbid' => 'Banimentos',
    'gm' => 'Administrar GM\'s',
    'chat' => 'Chat (Live)',
    'watch' => 'Assistir',

    'edit_gm' => 'Alterando as permissões de: :user\'...',
    'change_permissions' => 'Change Permissions',
    'gm_permissions' => [
        0 => 'Exibir/esconder ID. (Itens/Personagens)',
        1 => 'Ativar/desativar a Invencibilidade',
        2 => 'Ativar/desativar o seu status online',
        3 => 'Esconder o nickname no whisper',
        4 => 'Teleportar até o ID',
        5 => 'Teleportar usuário até si',
        6 => 'Teleportar-se (Ctrl+Click Esquerdo)',
        11 => 'Mostrar o número de jogadores online',
        100 => 'Banir/desbanir pelo painel GM',
        101 => 'Mutar/desmutar pelo ID',
        102 => 'Desabilitar as trocas pelo ID',
        103 => 'Desabilitar loja pelo ID',
        104 => 'Broadcast do GM',
        105 => 'Reiniciar o Servidor',
        200 => 'Criar um monstro',
        206 => 'Ativar uma trigger NPCGEN',
    ],

   'table' => [
       'gm' => [
           'id' => 'ID',
           'name' => 'Nome',
           'actions' => 'Ações'
       ],
       'chat' => [
           'date' => 'Data',
           'user_id' => 'ID',
           'channel' => 'Canal',
           'destination' => 'Destino',
           'message' => 'Mensagem'
       ]
   ],

    'fields' => [
        'broadcast' => [
            'user' => 'ID',
            'user_desc' => 'Usuário que vai falar a mensagem no chat (opcional)',
            'channel' => 'Canal',
            'message' => 'Mensagem'
        ],
        'mailer' => [
            'type' => 'Mandar Para',
            'types' => [
                'list' => 'Lista dos Usuários',
                'all' => 'Todos os Usuários',
                'online' => 'Todos os Usuários Online'
            ],
            'roles' => 'ID\'s',
            'roles_desc' => 'separados por vírgula (,)',
            'item_id' => 'Código do Item',
            'quantity' => 'Quantidade',
            'protection_type' => 'Tipo de Proteção',
            'time_limit' => 'Limite de Tempo',
            'octet' => 'Código Octet',
            'mask' => 'Máscara',
            'gold' => 'Moedas',
            'subject' => 'Destinatário',
            'message' => 'Mensagem'
        ],
        'forbid' => [
            'types' => [
                'ban_acc' => 'Banir Conta',
                'ban_char' => 'Banir Personagem',
                'mute_acc' => 'Mutar Conta',
                'mute_char' => 'Mutar Personagem'
            ],
            'type' => 'Tipo',
            'user_id' => 'ID',
            'user_id_desc' => 'Código da conta/personagem',
            'length' => 'Tempo',
            'length_desc' => 'Em segundos',
            'reason' => 'Motivo'
        ],
        'gm' => [
            'account_id' => 'ID'
        ],
        'chat' => [
            'path' => 'Local da pasta contendo os logs',
            'path_desc' => 'Local onde o arquivo <b>world2.chat</b> está localizado.'
        ]
    ],
    'submit' => [
        'broadcast' => 'Enviar Mensagem',
        'mailer' => 'Enviar Email',
        'forbid' => 'Enviar',
        'gm' => [
            'add' => 'Adicionar GM',
            'save' => 'Salvar Permissões'
        ]
    ],
    'error' => [
        'gm' => [
            'no_user' => 'Conta :acc não existe.',
            'already_gm' => 'Conta :acc já é um GM.',
        ]
    ],
    'complete' => [
        'broadcast' => 'Mensagem enviada com sucesso!',
        'mailer' => [
            'list' => 'Email enviado para a lista de players!',
            'all' => 'Email enviado para todos os players!',
            'online' => 'Email enviado para todos os players online!'
        ],
        'forbid' => [
            'ban' => [
                'account' => 'Conta :user está banida por :seconds segundos!',
                'character' => 'O personagem :user está banido(a) por :seconds segundos!'
            ],
            'mute' => [
                'account' => 'Conta :user está mutada por :seconds segundos!',
                'character' => 'O personagem :user está mutado(a) por :seconds segundos!'
            ]
        ],
        'gm' => [
            'add' => ':acc agora tem persmissões de GM!',
            'edit' => ':acc\'s teve as suas permissões alteradas!',
            'remove' => ':acc\'s teve as suas permissões removidas!',
        ]
    ],

    'buttons' => [
        'refresh' => 'Recarregar'
    ],

    'channels' => [
        0 => 'Comum',
        1 => 'World',
        2 => 'Grupo',
        3 => 'Clãs',
        4 => 'PM\'s',
        7 => 'Negócios',
        9 => 'Broadcast',
        12 => 'Corneta'
    ],
    'faction_id' => 'Código do Clã: ',

];
