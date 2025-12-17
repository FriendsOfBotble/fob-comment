<?php

return [
    'common' => [
        'name' => 'Nome',
        'email' => 'E-mail',
        'phone' => 'Telefone',
        'website' => 'Site',
        'comment' => 'Comentário',
        'email_placeholder' => 'Seu endereço de e-mail não será publicado.',
        'website_placeholder' => 'ex. https://example.com',
    ],

    'title' => 'Comentários',
    'author' => 'Autor',
    'responded_to' => 'Resposta a',
    'permalink' => 'Link permanente',
    'url' => 'URL',
    'submitted_on' => 'Enviado em',
    'edit_comment' => 'Editar comentário',
    'reply' => 'Responder',
    'in_reply_to' => 'Em resposta a :name',

    'reply_modal' => [
        'title' => 'Responder a :comment',
        'cancel' => 'Cancelar',
    ],

    'allow_comments' => 'Permitir comentários',

    'front' => [
        'admin_badge' => 'Admin',

        'list' => [
            'title' => ':count comentário|:count comentários',
            'title_singular' => ':count comentário',
            'title_plural' => ':count comentários',
            'reply' => 'Responder',
            'reply_to' => 'Responder a :name',
            'cancel_reply' => 'Cancelar resposta',
            'waiting_for_approval_message' => 'Seu comentário está aguardando moderação. Esta é uma pré-visualização, seu comentário será visível após ser aprovado.',
        ],

        'form' => [
            'description_email_optional' => 'Seu endereço de email não será publicado. O email é opcional. Os campos obrigatórios são marcados com *',
            'title' => 'Deixe um comentário',
            'description' => 'Seu endereço de e-mail não será publicado. Campos obrigatórios são marcados com *',
            'cookie_consent' => 'Salvar meu nome, e-mail e site neste navegador para o próximo comentário.',
            'submit' => 'Publicar comentário',
        ],

        'comment_success_message' => 'Seu comentário foi enviado com sucesso.',
    ],

    'enums' => [
        'statuses' => [
            'pending' => 'Pendente',
            'approved' => 'Aprovado',
            'spam' => 'Spam',
            'trash' => 'Lixeira',
        ],
    ],

    'settings' => [
        'title' => 'FOB Comment',
        'description' => 'Configurar definições para FOB Comment',

        'form' => [
            'enable_recaptcha' => 'Ativar reCAPTCHA',
            'enable_recaptcha_help' => 'Você precisa ativar o reCAPTCHA em :url para usar este recurso.',
            'captcha_setting_label' => 'Configurações de Captcha',
            'comment_moderation' => 'Comentários devem ser aprovados manualmente',
            'comment_moderation_help' => 'Todos os comentários devem ser aprovados manualmente por um administrador antes de serem exibidos no frontend.',
            'show_comment_cookie_consent' => 'Mostrar caixa de seleção de cookies de comentários, permitindo que visitantes salvem suas informações no navegador',
            'auto_fill_comment_form' => 'Preencher automaticamente dados de comentário para usuários conectados',
            'auto_fill_comment_form_help' => 'O formulário de comentário será preenchido automaticamente com dados do usuário como nome completo, e-mail, etc., se estiverem conectados.',
            'comment_order' => 'Ordenar comentários por',
            'comment_order_help' => 'Escolha a ordem preferida para exibir comentários na lista.',
            'comment_order_choices' => [
                'asc' => 'Mais antigos',
                'desc' => 'Mais recentes',
            ],
            'display_admin_badge' => 'Exibir distintivo de administrador para comentários de administradores',
            'show_admin_role_name_for_admin_badge' => 'Mostrar nome da função de administrador para o distintivo de administrador',
            'show_admin_role_name_for_admin_badge_helper' => 'Se ativado, o distintivo de administrador exibirá o nome da função de administrador em vez do texto padrão "Admin". Se o nome da função de administrador estiver vazio, o texto padrão será usado. Se o usuário tiver várias funções, a primeira função será usada.',
            'avatar_provider' => 'Provedor de avatar',
            'avatar_provider_help' => 'Escolha como gerar avatares para comentários. Gravatar requer email, UI Avatars gera com base no nome.',
            'avatar_provider_choices' => [
                'gravatar' => 'Gravatar (Baseado em email)',
                'ui_avatars' => 'UI Avatars (Baseado em nome)',
            ],
            'email_optional' => 'Tornar o campo de email opcional',
            'email_optional_help' => 'Quando ativado, os visitantes podem enviar comentários sem fornecer um endereço de email.',
            'show_website_field' => 'Mostrar o campo de site no formulário de comentários',
            'show_website_field_help' => 'Quando desativado, o campo de site será ocultado do formulário de comentários público.',
            'default_avatar' => 'Avatar padrão',
            'default_avatar_helper' => 'Avatar padrão para o autor quando não tem avatar. Se você não selecionar nenhuma imagem, ela será gerada usando o provedor de avatar selecionado. O tamanho da imagem deve ser 150x150px.',
        ],
    ],
];
