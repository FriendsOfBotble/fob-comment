<?php

return [
    'common' => [
        'name' => 'Jméno',
        'email' => 'E-mail',
        'phone' => 'Telefon',
        'website' => 'Webová stránka',
        'comment' => 'Komentář',
        'email_placeholder' => 'Vaše e-mailová adresa nebude zveřejněna.',
        'name_placeholder' => 'Your name',
        'website_placeholder' => 'např. https://example.com',
        'comment_placeholder' => 'Write your comment here...',
    ],

    'title' => 'Komentáře',
    'author' => 'Autor',
    'responded_to' => 'Odpověď na',
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
            'title_singular' => ':count komentář',
            'title_plural' => ':count komentářů',
            'reply' => 'Odpovědět',
            'reply_to' => 'Odpovědět :name',
            'cancel_reply' => 'Zrušit odpověď',
            'waiting_for_approval_message' => 'Váš komentář čeká na schválení. Toto je náhled, váš komentář bude viditelný po schválení.',
            'delete' => 'Smazat',
            'delete_confirm' => 'Opravdu chcete smazat tento komentář?',
        ],

        'form' => [
            'description_email_optional' => 'Your email address will not be published. Email is optional. Required fields are marked *',
            'title' => 'Napsat komentář',
            'description' => 'Vaše e-mailová adresa nebude zveřejněna. Povinná pole jsou označena *',
            'cookie_consent' => 'Uložit mé jméno, e-mail a webovou stránku v tomto prohlížeči pro příští komentář.',
            'submit' => 'Odeslat komentář',
            'login_required' => 'Musíte být přihlášeni, abyste mohli přidat komentář.',
            'login_to_comment' => 'Přihlásit se ke komentáři',
        ],

        'comment_success_message' => 'Váš komentář byl úspěšně odeslán.',
        'rate_limit_error' => 'Komentujete příliš rychle. Před odesláním dalšího komentáře počkejte :seconds sekund.',
        'comment_deleted_message' => 'Váš komentář byl úspěšně smazán.',
        'delete_not_authorized' => 'Nemáte oprávnění smazat tento komentář.',
    ],

    'enums' => [
        'statuses' => [
            'pending' => 'Čeká na schválení',
            'approved' => 'Schváleno',
            'spam' => 'Spam',
            'trash' => 'Koš',
        ],
    ],

    'email_templates' => [
        'admin_new_comment_title' => 'Nový komentář přijat',
        'admin_new_comment_message' => ':comment_name zanechal nový komentář',
        'comment_reply_title' => 'Nová odpověď na váš komentář',
        'comment_reply_message' => ':reply_name odpověděl na váš komentář',
        'commented_on' => 'Komentoval',
        'view_comment' => 'Zobrazit komentář',
    ],

    'settings' => [
        'title' => 'FOB Comment',
        'description' => 'Konfigurace nastavení pro FOB Comment',

        'email' => [
            'templates' => [
                'title' => 'Komentář',
                'description' => 'E-mailové šablony pro oznámení o komentářích',
                'admin_new_comment' => [
                    'title' => 'Oznámení správci o novém komentáři',
                    'description' => 'Odeslat e-mail správci při přidání nového komentáře',
                    'subject' => 'Nový komentář na {{ site_title }}',
                    'comment_name_description' => 'Jméno autora komentáře',
                    'comment_email_description' => 'E-mail autora komentáře',
                    'comment_content_description' => 'Obsah komentáře',
                    'comment_reference_description' => 'Stránka/příspěvek, ke kterému byl komentář přidán',
                    'comment_url_description' => 'URL pro zobrazení komentáře',
                ],
                'comment_reply' => [
                    'title' => 'Oznámení komentátorovi o odpovědi',
                    'description' => 'Odeslat e-mail komentátorovi, když někdo odpoví na jeho komentář',
                    'subject' => 'Nová odpověď na váš komentář na {{ site_title }}',
                    'comment_name_description' => 'Jméno původního komentátora',
                    'reply_name_description' => 'Jméno autora odpovědi',
                    'reply_content_description' => 'Obsah odpovědi',
                    'comment_reference_description' => 'Stránka/příspěvek, ke kterému byl komentář přidán',
                    'comment_url_description' => 'URL pro zobrazení komentáře',
                ],
            ],
        ],

        'form' => [
            'enable_recaptcha' => 'Povolit reCAPTCHA',
            'enable_recaptcha_help' => 'Pro použití této funkce musíte povolit reCAPTCHA na :url.',
            'captcha_setting_label' => 'Nastavení Captcha',
            'disable_guest_comment' => 'Zakázat komentáře hostů',
            'disable_guest_comment_help' => 'Pokud je povoleno, uživatelé musí být přihlášeni, aby mohli přidávat komentáře. To pomáhá snižovat spam komentáře.',
            'comment_moderation' => 'Komentáře musí být schváleny ručně',
            'comment_moderation_help' => 'Všechny komentáře musí být ručně schváleny správcem před zobrazením na webu.',
            'rate_limit_seconds' => 'Limit frekvence (sekundy)',
            'rate_limit_seconds_help' => 'Minimální čas v sekundách mezi komentáři od stejného uživatele. Nastavte na 0 pro vypnutí limitu frekvence.',
            'show_comment_cookie_consent' => 'Zobrazit zaškrtávací políčko cookies komentářů, které umožňuje návštěvníkům uložit své informace v prohlížeči',
            'show_comment_cookie_consent_help' => 'Když je povoleno, návštěvníci mohou uložit své jméno, e-mail a web v prohlížeči pro budoucí komentáře.',
            'auto_fill_comment_form' => 'Automaticky vyplnit údaje komentáře pro přihlášené uživatele',
            'auto_fill_comment_form_help' => 'Formulář komentáře bude automaticky vyplněn uživatelskými údaji, jako je celé jméno, e-mail atd., pokud jsou přihlášeni.',
            'comment_order' => 'Řadit komentáře podle',
            'comment_order_help' => 'Vyberte preferované pořadí pro zobrazení komentářů v seznamu.',
            'comment_order_choices' => [
                'asc' => 'Nejstarší',
                'desc' => 'Nejnovější',
            ],
            'display_admin_badge' => 'Zobrazit odznak správce pro komentáře správců',
            'display_admin_badge_help' => 'Když je povoleno, komentáře od správců budou zobrazovat odznak "Správce" vedle jejich jména.',
            'show_admin_role_name_for_admin_badge' => 'Zobrazit název role správce pro odznak správce',
            'show_admin_role_name_for_admin_badge_helper' => 'Pokud je povoleno, odznak správce zobrazí název role správce místo výchozího textu "Správce". Pokud je název role správce prázdný, použije se výchozí text. Pokud má uživatel více rolí, použije se první role.',
            'avatar_provider' => 'Poskytovatel avatarů',
            'avatar_provider_help' => 'Vyberte způsob generování avatarů pro komentáře. Gravatar vyžaduje e-mail, UI Avatars generuje podle jména.',
            'avatar_provider_choices' => [
                'gravatar' => 'Gravatar (podle e-mailu)',
                'ui_avatars' => 'UI Avatars (podle jména)',
            ],
            'email_optional' => 'Nastavit e-mailové pole jako nepovinné',
            'email_optional_help' => 'Když je povoleno, návštěvníci mohou odeslat komentář bez zadání e-mailové adresy.',
            'show_website_field' => 'Zobrazit pole webu ve formuláři komentáře',
            'show_website_field_help' => 'Když je vypnuto, pole webu bude skryto z veřejného formuláře komentáře.',
            'default_avatar' => 'Výchozí avatar',
            'default_avatar_helper' => 'Výchozí avatar pro autora, když nemá vlastní avatar. Pokud nevyberete obrázek, bude vygenerován pomocí vybraného poskytovatele avatarů. Velikost obrázku by měla být 150x150px.',
            'allow_author_delete' => 'Povolit autorům mazat jejich komentáře',
            'allow_author_delete_help' => 'Když je povoleno, přihlášení uživatelé mohou mazat vlastní komentáře.',
            'primary_color' => 'Primární barva',
            'primary_color_helper' => 'Primární barva pro tlačítka, zaškrtávací políčka a odznaky. Ponechte prázdné pro použití primární barvy tématu.',
            'primary_color_hover' => 'Primární barva při najetí',
            'primary_color_hover_helper' => 'Barva při najetí kurzoru pro tlačítka. Ponechte prázdné pro použití tmavšího odstínu primární barvy.',
        ],
    ],
];
