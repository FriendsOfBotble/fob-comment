<?php

return [
    'common' => [
        'name' => 'Nume',
        'email' => 'Email',
        'website' => 'Website',
        'comment' => 'Comentariu',
        'email_placeholder' => 'Adresa ta de email nu va fi publicată.',
        'website_placeholder' => 'ex. https://example.com',
    ],

    'title' => 'Comentarii',
    'author' => 'Autor',
    'responsed_to' => 'Răspuns la',
    'permalink' => 'Link permanent',
    'url' => 'URL',
    'submitted_on' => 'Trimis la',
    'edit_comment' => 'Editează comentariu',
    'reply' => 'Răspunde',
    'in_reply_to' => 'Ca răspuns la :name',

    'reply_modal' => [
        'title' => 'Răspunde la :comment',
        'cancel' => 'Anulează',
    ],

    'allow_comments' => 'Permite comentarii',

    'front' => [
        'admin_badge' => 'Admin',

        'list' => [
            'title' => ':count comentariu|:count comentarii',
            'reply' => 'Răspunde',
            'reply_to' => 'Răspunde lui :name',
            'cancel_reply' => 'Anulează răspunsul',
            'waiting_for_approval_message' => 'Comentariul tău așteaptă moderarea. Aceasta este o previzualizare, comentariul tău va fi vizibil după aprobare.',
        ],

        'form' => [
            'description_email_optional' => 'Your email address will not be published. Email is optional. Required fields are marked *',
            'title' => 'Lasă un comentariu',
            'description' => 'Adresa ta de email nu va fi publicată. Câmpurile obligatorii sunt marcate cu *',
            'cookie_consent' => 'Salvează numele meu, emailul și website-ul în acest browser pentru data viitoare când comentez.',
            'submit' => 'Trimite comentariu',
        ],

        'comment_success_message' => 'Comentariul tău a fost trimis cu succes.',
    ],

    'enums' => [
        'statuses' => [
            'pending' => 'În așteptare',
            'approved' => 'Aprobat',
            'spam' => 'Spam',
            'trash' => 'Gunoi',
        ],
    ],

    'settings' => [
        'title' => 'FOB Comment',
        'description' => 'Configurează setările pentru FOB Comment',

        'form' => [
            'enable_recaptcha' => 'Activează reCAPTCHA',
            'enable_recaptcha_help' => 'Trebuie să activezi reCAPTCHA în :url pentru a folosi această funcție.',
            'captcha_setting_label' => 'Setări Captcha',
            'comment_moderation' => 'Comentariile trebuie aprobate manual',
            'comment_moderation_help' => 'Toate comentariile trebuie aprobate manual de un administrator înainte de a fi afișate pe site.',
            'show_comment_cookie_consent' => 'Arată caseta de bifat pentru cookie-urile comentariilor, permițând vizitatorilor să-și salveze informațiile în browser',
            'auto_fill_comment_form' => 'Completează automat datele comentariului pentru utilizatorii autentificați',
            'auto_fill_comment_form_help' => 'Formularul de comentariu va fi completat automat cu datele utilizatorului precum numele complet, emailul etc., dacă sunt autentificați.',
            'comment_order' => 'Sortează comentariile după',
            'comment_order_help' => 'Alege ordinea preferată pentru afișarea comentariilor în listă.',
            'comment_order_choices' => [
                'asc' => 'Cele mai vechi',
                'desc' => 'Cele mai noi',
            ],
            'display_admin_badge' => 'Afișează insigna de administrator pentru comentariile administratorilor',
            'show_admin_role_name_for_admin_badge' => 'Arată numele rolului de administrator pentru insigna de administrator',
            'show_admin_role_name_for_admin_badge_helper' => 'Dacă este activat, insigna de administrator va afișa numele rolului de administrator în loc de textul implicit "Admin". Dacă numele rolului de administrator este gol, se va folosi textul implicit. Dacă utilizatorul are mai multe roluri, se va folosi primul rol.',
            'avatar_provider' => 'Avatar provider',
            'avatar_provider_help' => 'Choose how to generate avatars for comments. Gravatar requires email, UI Avatars generates based on name.',
            'avatar_provider_choices' => [
                'gravatar' => 'Gravatar (Email-based)',
                'ui_avatars' => 'UI Avatars (Name-based)',
            ],
            'email_optional' => 'Make email field optional',
            'email_optional_help' => 'When enabled, visitors can submit comments without providing an email address.',
            'default_avatar' => 'Avatar implicit',
            'default_avatar_helper' => 'Default avatar for the author when they don\'t have an avatar. If you don\'t select any image, it will be generated using the selected avatar provider. Image size should be 150x150px.',
        ],
    ],
];
