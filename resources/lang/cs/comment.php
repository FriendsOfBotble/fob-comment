<?php

return [
    'common' => [
        'name' => 'Jméno',
        'email' => 'E-mail',
        'website' => 'Webová stránka',
        'comment' => 'Komentář',
        'email_placeholder' => 'Vaše e-mailová adresa nebude zveřejněna.',
        'website_placeholder' => 'např. https://example.com',
    ],

    'title' => 'Komentáře',
    'author' => 'Autor',
    'responsed_to' => 'Odpověď na',
    'permalink' => 'Trvalý odkaz',
    'url' => 'URL',
    'submitted_on' => 'Odesláno',
    'edit_comment' => 'Upravit komentář',
    'reply' => 'Odpovědět',
    'in_reply_to' => 'V odpovědi na :name',

    'reply_modal' => [
        'title' => 'Odpovědět na :comment',
        'cancel' => 'Zrušit',
    ],

    'allow_comments' => 'Povolit komentáře',

    'front' => [
        'admin_badge' => 'Správce',

        'list' => [
            'title' => ':count komentář|:count komentáře|:count komentářů',
            'reply' => 'Odpovědět',
            'reply_to' => 'Odpovědět :name',
            'cancel_reply' => 'Zrušit odpověď',
            'waiting_for_approval_message' => 'Váš komentář čeká na schválení. Toto je náhled, váš komentář bude viditelný po schválení.',
        ],

        'form' => [
            'title' => 'Napsat komentář',
            'description' => 'Vaše e-mailová adresa nebude zveřejněna. Povinná pole jsou označena *',
            'cookie_consent' => 'Uložit mé jméno, e-mail a webovou stránku v tomto prohlížeči pro příští komentář.',
            'submit' => 'Odeslat komentář',
        ],

        'comment_success_message' => 'Váš komentář byl úspěšně odeslán.',
    ],

    'enums' => [
        'statuses' => [
            'pending' => 'Čeká na schválení',
            'approved' => 'Schváleno',
            'spam' => 'Spam',
            'trash' => 'Koš',
        ],
    ],

    'settings' => [
        'title' => 'FOB Comment',
        'description' => 'Konfigurace nastavení pro FOB Comment',

        'form' => [
            'enable_recaptcha' => 'Povolit reCAPTCHA',
            'enable_recaptcha_help' => 'Pro použití této funkce musíte povolit reCAPTCHA na :url.',
            'captcha_setting_label' => 'Nastavení Captcha',
            'comment_moderation' => 'Komentáře musí být schváleny ručně',
            'comment_moderation_help' => 'Všechny komentáře musí být ručně schváleny správcem před zobrazením na webu.',
            'show_comment_cookie_consent' => 'Zobrazit zaškrtávací políčko cookies komentářů, které umožňuje návštěvníkům uložit své informace v prohlížeči',
            'auto_fill_comment_form' => 'Automaticky vyplnit údaje komentáře pro přihlášené uživatele',
            'auto_fill_comment_form_help' => 'Formulář komentáře bude automaticky vyplněn uživatelskými údaji, jako je celé jméno, e-mail atd., pokud jsou přihlášeni.',
            'comment_order' => 'Řadit komentáře podle',
            'comment_order_help' => 'Vyberte preferované pořadí pro zobrazení komentářů v seznamu.',
            'comment_order_choices' => [
                'asc' => 'Nejstarší',
                'desc' => 'Nejnovější',
            ],
            'display_admin_badge' => 'Zobrazit odznak správce pro komentáře správců',
            'show_admin_role_name_for_admin_badge' => 'Zobrazit název role správce pro odznak správce',
            'show_admin_role_name_for_admin_badge_helper' => 'Pokud je povoleno, odznak správce zobrazí název role správce místo výchozího textu "Správce". Pokud je název role správce prázdný, použije se výchozí text. Pokud má uživatel více rolí, použije se první role.',
            'default_avatar' => 'Výchozí avatar',
            'default_avatar_helper' => 'Výchozí avatar pro autora, když nemá avatar. Pokud nevyberete žádný obrázek, bude vygenerován pomocí Gravataru. Velikost obrázku by měla být 150x150px.',
        ],
    ],
];