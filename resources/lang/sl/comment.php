<?php

return [
    'common' => [
        'name' => 'Ime',
        'email' => 'E-pošta',
        'phone' => 'Telefon',
        'website' => 'Spletna stran',
        'comment' => 'Komentar',
        'email_placeholder' => 'Vaš e-poštni naslov ne bo objavljen.',
        'website_placeholder' => 'npr. https://example.com',
    ],

    'title' => 'Komentarji',
    'author' => 'Avtor',
    'responded_to' => 'Odgovor na',
    'permalink' => 'Stalna povezava',
    'url' => 'URL',
    'submitted_on' => 'Poslano',
    'edit_comment' => 'Uredi komentar',
    'reply' => 'Odgovori',
    'in_reply_to' => 'Kot odgovor na :name',

    'reply_modal' => [
        'title' => 'Odgovori na :comment',
        'cancel' => 'Prekliči',
    ],

    'allow_comments' => 'Dovoli komentarje',

    'front' => [
        'admin_badge' => 'Skrbnik',

        'list' => [
            'title' => ':count komentar|:count komentarja|:count komentarji|:count komentarjev',
            'title_singular' => ':count komentar',
            'title_plural' => ':count komentarjev',
            'reply' => 'Odgovori',
            'reply_to' => 'Odgovori :name',
            'cancel_reply' => 'Prekliči odgovor',
            'waiting_for_approval_message' => 'Vaš komentar čaka na odobritev. To je predogled, vaš komentar bo viden po odobritvi.',
        ],

        'form' => [
            'description_email_optional' => 'Your email address will not be published. Email is optional. Required fields are marked *',
            'title' => 'Pustite komentar',
            'description' => 'Vaš e-poštni naslov ne bo objavljen. Obvezna polja so označena z *',
            'cookie_consent' => 'Shrani moje ime, e-pošto in spletno stran v ta brskalnik za naslednji komentar.',
            'submit' => 'Pošlji komentar',
        ],

        'comment_success_message' => 'Vaš komentar je bil uspešno poslan.',
    ],

    'enums' => [
        'statuses' => [
            'pending' => 'V čakanju',
            'approved' => 'Odobreno',
            'spam' => 'Neželena pošta',
            'trash' => 'Smeti',
        ],
    ],

    'settings' => [
        'title' => 'FOB Comment',
        'description' => 'Konfigurirajte nastavitve za FOB Comment',

        'form' => [
            'enable_recaptcha' => 'Omogoči reCAPTCHA',
            'enable_recaptcha_help' => 'Za uporabo te funkcije morate omogočiti reCAPTCHA na :url.',
            'captcha_setting_label' => 'Nastavitve Captcha',
            'comment_moderation' => 'Komentarji morajo biti ročno odobreni',
            'comment_moderation_help' => 'Vse komentarje mora ročno odobriti skrbnik, preden se prikažejo na spletni strani.',
            'show_comment_cookie_consent' => 'Prikaži potrditveno polje za piškotke komentarjev, ki obiskovalcem omogoča shranjevanje podatkov v brskalnik',
            'auto_fill_comment_form' => 'Samodejno izpolni podatke komentarja za prijavljene uporabnike',
            'auto_fill_comment_form_help' => 'Obrazec za komentarje bo samodejno izpolnjen z uporabniškimi podatki, kot so polno ime, e-pošta itd., če so prijavljeni.',
            'comment_order' => 'Razvrsti komentarje po',
            'comment_order_help' => 'Izberite želeni vrstni red za prikaz komentarjev na seznamu.',
            'comment_order_choices' => [
                'asc' => 'Najstarejši',
                'desc' => 'Najnovejši',
            ],
            'display_admin_badge' => 'Prikaži značko skrbnika za komentarje skrbnikov',
            'show_admin_role_name_for_admin_badge' => 'Prikaži ime vloge skrbnika za značko skrbnika',
            'show_admin_role_name_for_admin_badge_helper' => 'Če je omogočeno, bo značka skrbnika prikazala ime vloge skrbnika namesto privzetega besedila "Skrbnik". Če je ime vloge skrbnika prazno, bo uporabljeno privzeto besedilo. Če ima uporabnik več vlog, bo uporabljena prva vloga.',
            'avatar_provider' => 'Avatar provider',
            'avatar_provider_help' => 'Choose how to generate avatars for comments. Gravatar requires email, UI Avatars generates based on name.',
            'avatar_provider_choices' => [
                'gravatar' => 'Gravatar (Email-based)',
                'ui_avatars' => 'UI Avatars (Name-based)',
            ],
            'email_optional' => 'Make email field optional',
            'email_optional_help' => 'When enabled, visitors can submit comments without providing an email address.',
            'show_website_field' => 'Prikaži polje za spletno stran v obrazcu za komentarje',
            'show_website_field_help' => 'Ko je onemogočeno, bo polje za spletno stran skrito iz javnega obrazca za komentarje.',
            'default_avatar' => 'Privzeti avatar',
            'default_avatar_helper' => 'Default avatar for the author when they don\'t have an avatar. If you don\'t select any image, it will be generated using the selected avatar provider. Image size should be 150x150px.',
        ],
    ],
];
