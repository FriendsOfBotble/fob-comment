<?php

return [
    'common' => [
        'name' => 'Nume',
        'email' => 'Email',
        'phone' => 'Telefon',
        'website' => 'Website',
        'comment' => 'Comentariu',
        'email_placeholder' => 'Adresa ta de email nu va fi publicată.',
        'website_placeholder' => 'ex. https://example.com',
    ],

    'title' => 'Comentarii',
    'author' => 'Autor',
    'responded_to' => 'Răspuns la',
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
            'title_singular' => ':count comentariu',
            'title_plural' => ':count comentarii',
            'reply' => 'Răspunde',
            'reply_to' => 'Răspunde lui :name',
            'cancel_reply' => 'Anulează răspunsul',
            'waiting_for_approval_message' => 'Comentariul tău așteaptă moderarea. Aceasta este o previzualizare, comentariul tău va fi vizibil după aprobare.',
        ],

        'form' => [
            'description_email_optional' => 'Adresa ta de email nu va fi publicată. Emailul este opțional. Câmpurile obligatorii sunt marcate cu *',
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
            'avatar_provider' => 'Furnizor avatar',
            'avatar_provider_help' => 'Alege cum să generezi avatare pentru comentarii. Gravatar necesită email, UI Avatars generează pe baza numelui.',
            'avatar_provider_choices' => [
                'gravatar' => 'Gravatar (Bazat pe email)',
                'ui_avatars' => 'UI Avatars (Bazat pe nume)',
            ],
            'email_optional' => 'Fă câmpul email opțional',
            'email_optional_help' => 'Când este activat, vizitatorii pot trimite comentarii fără a furniza o adresă de email.',
            'show_website_field' => 'Afișează câmpul site web în formularul de comentarii',
            'show_website_field_help' => 'Când este dezactivat, câmpul site web va fi ascuns din formularul public de comentarii.',
            'default_avatar' => 'Avatar implicit',
            'default_avatar_helper' => 'Avatar implicit pentru autor când nu au un avatar. Dacă nu selectezi nicio imagine, va fi generată folosind furnizorul de avatare selectat. Dimensiunea imaginii trebuie să fie 150x150px.',
        ],
    ],
];
