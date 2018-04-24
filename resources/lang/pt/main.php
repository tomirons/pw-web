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

    'home' => 'Inicio',
    'dashboard' => 'Dashboard',
    'apps' => [
        'news' => 'Notícias',
        'shop' => 'Loja',
        'donate' => 'Doações',
        'voucher' => 'Cupons',
        'vote' => 'Votações',
        'services' => 'Serviços do Jogo',
        'ranking' => 'Ranking',
        'manage' => 'Administração do Jogo',
        'system' => 'Sistema',
        'members' => 'Membros'
    ],
    'acp_link' => 'Painel de Controle',
    'acc_settings' => 'Configurações da Conta',
    'select_character' => 'Selecionar um Personagem',
    'site' => 'Ir ao Site',

    /* Class Names */
    'classes' => [
        0 => 'Guerreiro',
        1 => 'Mago',
        2 => 'Espiritualista',
        3 => 'Feiticeira',
        4 => 'Bárbaro',
        5 => 'Mercenário',
        6 => 'Arqueiro',
        7 => 'Sacerdote',
        8 => 'Arcano',
        9 => 'Místico',
        10 => 'Retalhador',
        11 => 'Tormentador'
    ],

    /* Login/Register Language Lines */
    'login' => 'Entrar',
    'login_link' => 'Entrar | Registro',
    'logout' => 'Sair',
    'signin' => [
        'title' => 'Entrar',
        'error' => 'Digite um nome de usuário e senha.',
        'username' => 'Usuário',
        'password' => 'Senha',
        'button' => 'Entrar',
        'create' => 'Criar Conta',
    ],
    'signup' => [
        'title' => 'Registrar-se',
        'info' => 'Coloque os detalhes da sua conta:',
        'email' => 'Email',
        'username' => 'Usuário',
        'password' => 'Senha',
        'confirm' => 'Escreva a senha novamente',
        'submit' => 'Registrar',
        'back' => 'Voltar',
    ],

    'char_list_error' => 'Nós não podemos recuperar seus personagens, por favor, tente novamente mais tarde.',
    'server_not_online' => 'O servidor não está online no momento, tente mais tarde.',
    'server_offline' => [
        'title' => 'Atenção',
        'message' => 'Algumas páginas só podem ser exibidas com o servidor online.'
    ],
    'no_results' => 'Desculpe, nada a mostrar...',
    'reg_complete' => 'Parabéns, você se registrou com sucesso, pode logar!',
    'acc_balance' => 'Balanço: :money :currency',
    'buy' => 'Comprar',
    'no_character_selected' => 'Você precisa selecionar um personagem para continuar.',
    'no_characters' => 'Você ainda não criou um personagem.',
    'not_enough' => 'Você não tem :currency.',
    'not_enough_gold' => 'Você não tem moedas.',

    'save' => 'Salvar',
    'save_settings' => 'Salvar Configurações',
    'settings' => 'Configurações',
    'account' => 'Conta',
    'edit' => 'Editar',
    'remove' => 'Remover',
    'loading' => 'Carregando...',
    'settings_saved' => 'As suas configurações foram salvas com sucesso!',

    'cron' => [
        'add' => 'Deixe o seu painel automático...',
        'info' => 'Adicione esta rotina ao seu "crontab" e deixe a mágica fluir. :)',
        'job' => '* * * * * php ' . base_path( 'artisan' ) . ' schedule:run >> /dev/null 2>&1'
    ],

    'acc_tabs' => [
        'overview' => [
            'title' => 'Visão Geral',
            'fields' => [
                'name' => 'Nome',
                'email' => 'Email',
                'password' => 'Senha'
            ]
        ],
        'email' => [
            'title' => 'Email',
            'fields' => [
                'email' => 'Endereço de Email'
            ]
        ],
        'password' => [
            'title' => 'Senha',
            'fields' => [
                'current' => 'Senha Atual',
                'current_desc' => 'Para garantir que esta mudança é segura..',
                'new' => 'Nova Senha',
                'confirm' => 'Confirme a Senha'
            ]
        ]
    ],

    'char_list' => [
        'title' => 'Meus Personagens',
        'id' => 'ID: :n'
    ],

    '404' => [
        'title' => 'Houston, temos um problema!',
        'content' => 'A página que você buscou não existe. :(',
        'button' => 'Voltar à página principal?'
    ],
    '500' => [
        'title' => 'Oops! Algo está de errado.',
        'content' => 'Alguém deve estar resolvendo isto, volte mais tarde.',
        'button' => 'Voltar à página principal?'
    ]

];
