<?php

return [
    'common' => [
        'name' => 'Navn',
        'email' => 'E-mail',
        'phone' => 'Telefon',
        'website' => 'Hjemmeside',
        'comment' => 'Kommentar',
        'email_placeholder' => 'Din e-mailadresse vil ikke blive offentliggjort.',
        'website_placeholder' => 'f.eks. https://example.com',
    ],

    'title' => 'Kommentarer',
    'author' => 'Forfatter',
    'responded_to' => 'Svar til',
    'permalink' => 'Permalink',
    'url' => 'URL',
    'submitted_on' => 'Indsendt',
    'edit_comment' => 'Rediger kommentar',
    'reply' => 'Svar',
    'in_reply_to' => 'Som svar til :name',

    'reply_modal' => [
        'title' => 'Svar på :comment',
        'cancel' => 'Annuller',
    ],

    'allow_comments' => 'Tillad kommentarer',

    'front' => [
        'admin_badge' => 'Admin',

        'list' => [
            'title' => ':count kommentar|:count kommentarer',
            'title_singular' => ':count kommentar',
            'title_plural' => ':count kommentarer',
            'reply' => 'Svar',
            'reply_to' => 'Svar til :name',
            'cancel_reply' => 'Annuller svar',
            'waiting_for_approval_message' => 'Din kommentar afventer godkendelse. Dette er en forhåndsvisning, din kommentar vil være synlig efter godkendelse.',
        ],

        'form' => [
            'description_email_optional' => 'Din e-mailadresse vil ikke blive offentliggjort. E-mail er valgfri. Obligatoriske felter er markeret *',
            'title' => 'Skriv en kommentar',
            'description' => 'Din e-mailadresse vil ikke blive offentliggjort. Obligatoriske felter er markeret *',
            'cookie_consent' => 'Gem mit navn, e-mail og hjemmeside i denne browser til næste gang jeg kommenterer.',
            'submit' => 'Send kommentar',
        ],

        'comment_success_message' => 'Din kommentar er blevet sendt.',
    ],

    'enums' => [
        'statuses' => [
            'pending' => 'Afventer',
            'approved' => 'Godkendt',
            'spam' => 'Spam',
            'trash' => 'Papirkurv',
        ],
    ],

    'settings' => [
        'title' => 'FOB Comment',
        'description' => 'Konfigurer indstillinger for FOB Comment',

        'form' => [
            'enable_recaptcha' => 'Aktiver reCAPTCHA',
            'enable_recaptcha_help' => 'Du skal aktivere reCAPTCHA i :url for at bruge denne funktion.',
            'captcha_setting_label' => 'Captcha-indstillinger',
            'comment_moderation' => 'Kommentarer skal godkendes manuelt',
            'comment_moderation_help' => 'Alle kommentarer skal godkendes manuelt af en administrator før de vises på hjemmesiden.',
            'show_comment_cookie_consent' => 'Vis afkrydsningsfelt for kommentar-cookies, som tillader besøgende at gemme deres oplysninger i browseren',
            'auto_fill_comment_form' => 'Udfyld automatisk kommentardata for indloggede brugere',
            'auto_fill_comment_form_help' => 'Kommentarformularen udfyldes automatisk med brugerdata som fuldt navn, e-mail osv., hvis de er logget ind.',
            'comment_order' => 'Sorter kommentarer efter',
            'comment_order_help' => 'Vælg den foretrukne rækkefølge for visning af kommentarer i listen.',
            'comment_order_choices' => [
                'asc' => 'Ældste',
                'desc' => 'Nyeste',
            ],
            'display_admin_badge' => 'Vis administratormærke for administratorkommentarer',
            'show_admin_role_name_for_admin_badge' => 'Vis administratorrollenavn for administratormærket',
            'show_admin_role_name_for_admin_badge_helper' => 'Hvis aktiveret, vil administratormærket vise administratorrollenavnet i stedet for standardteksten "Admin". Hvis administratorrollenavnet er tomt, bruges standardteksten. Hvis brugeren har flere roller, bruges den første rolle.',
            'avatar_provider' => 'Avatar-udbyder',
            'avatar_provider_help' => 'Vælg, hvordan avatarer skal genereres til kommentarer. Gravatar kræver e-mail, UI Avatars genererer baseret på navn.',
            'avatar_provider_choices' => [
                'gravatar' => 'Gravatar (E-mail-baseret)',
                'ui_avatars' => 'UI Avatars (Navn-baseret)',
            ],
            'email_optional' => 'Gør e-mailfeltet valgfrit',
            'email_optional_help' => 'Når aktiveret, kan besøgende indsende kommentarer uden at angive en e-mailadresse.',
            'show_website_field' => 'Vis website-felt i kommentarskemaet',
            'show_website_field_help' => 'Når den er deaktiveret, skjules website-feltet i den offentlige kommentarsformular.',
            'default_avatar' => 'Standard avatar',
            'default_avatar_helper' => 'Standard avatar for forfatteren, når de ikke har en avatar. Hvis du ikke vælger et billede, genereres det ved hjælp af den valgte avatar-udbyder. Billedstørrelsen skal være 150x150px.',
        ],
    ],
];
