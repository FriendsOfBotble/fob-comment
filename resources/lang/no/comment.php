<?php

return [
    'common' => [
        'name' => 'Navn',
        'email' => 'E-post',
        'phone' => 'Telefon',
        'website' => 'Nettsted',
        'comment' => 'Kommentar',
        'email_placeholder' => 'E-postadressen din vil ikke bli publisert.',
        'website_placeholder' => 'f.eks. https://example.com',
    ],

    'title' => 'Kommentarer',
    'author' => 'Forfatter',
    'responded_to' => 'Svar til',
    'permalink' => 'Permalenke',
    'url' => 'URL',
    'submitted_on' => 'Sendt inn',
    'edit_comment' => 'Rediger kommentar',
    'reply' => 'Svar',
    'in_reply_to' => 'Som svar til :name',

    'reply_modal' => [
        'title' => 'Svar på :comment',
        'cancel' => 'Avbryt',
    ],

    'allow_comments' => 'Tillat kommentarer',

    'front' => [
        'admin_badge' => 'Admin',

        'list' => [
            'title' => ':count kommentar|:count kommentarer',
            'title_singular' => ':count kommentar',
            'title_plural' => ':count kommentarer',
            'reply' => 'Svar',
            'reply_to' => 'Svar til :name',
            'cancel_reply' => 'Avbryt svar',
            'waiting_for_approval_message' => 'Kommentaren din venter på godkjenning. Dette er en forhåndsvisning, kommentaren din vil være synlig etter godkjenning.',
        ],

        'form' => [
            'description_email_optional' => 'E-postadressen din vil ikke bli publisert. E-post er valgfritt. Obligatoriske felt er merket *',
            'title' => 'Legg igjen en kommentar',
            'description' => 'E-postadressen din vil ikke bli publisert. Obligatoriske felt er merket *',
            'cookie_consent' => 'Lagre navn, e-post og nettsted i denne nettleseren til neste gang jeg kommenterer.',
            'submit' => 'Send kommentar',
        ],

        'comment_success_message' => 'Kommentaren din har blitt sendt.',
    ],

    'enums' => [
        'statuses' => [
            'pending' => 'Venter',
            'approved' => 'Godkjent',
            'spam' => 'Spam',
            'trash' => 'Papirkurv',
        ],
    ],

    'settings' => [
        'title' => 'FOB Comment',
        'description' => 'Konfigurer innstillinger for FOB Comment',

        'form' => [
            'enable_recaptcha' => 'Aktiver reCAPTCHA',
            'enable_recaptcha_help' => 'Du må aktivere reCAPTCHA i :url for å bruke denne funksjonen.',
            'captcha_setting_label' => 'Captcha-innstillinger',
            'comment_moderation' => 'Kommentarer må godkjennes manuelt',
            'comment_moderation_help' => 'Alle kommentarer må godkjennes manuelt av en administrator før de vises på nettsiden.',
            'show_comment_cookie_consent' => 'Vis avkrysningsboks for kommentarinformasjonskapsler, slik at besøkende kan lagre informasjonen sin i nettleseren',
            'auto_fill_comment_form' => 'Autofyll kommentardata for innloggede brukere',
            'auto_fill_comment_form_help' => 'Kommentarskjemaet fylles automatisk ut med brukerdata som fullt navn, e-post osv. hvis de er logget inn.',
            'comment_order' => 'Sorter kommentarer etter',
            'comment_order_help' => 'Velg foretrukket rekkefølge for å vise kommentarer i listen.',
            'comment_order_choices' => [
                'asc' => 'Eldste',
                'desc' => 'Nyeste',
            ],
            'display_admin_badge' => 'Vis administratormerke for administratorkommentarer',
            'show_admin_role_name_for_admin_badge' => 'Vis administratorrollenavn for administratormerket',
            'show_admin_role_name_for_admin_badge_helper' => 'Hvis aktivert, vil administratormerket vise administratorrollenavnet i stedet for standardteksten "Admin". Hvis administratorrollenavnet er tomt, brukes standardteksten. Hvis brukeren har flere roller, brukes den første rollen.',
            'avatar_provider' => 'Avatarleverandør',
            'avatar_provider_help' => 'Velg hvordan avatarer genereres for kommentarer. Gravatar krever e-post, UI Avatars genererer basert på navn.',
            'avatar_provider_choices' => [
                'gravatar' => 'Gravatar (E-postbasert)',
                'ui_avatars' => 'UI Avatars (Navnebasert)',
            ],
            'email_optional' => 'Gjør e-postfeltet valgfritt',
            'email_optional_help' => 'Når aktivert, kan besøkende sende inn kommentarer uten å oppgi en e-postadresse.',
            'show_website_field' => 'Vis nettsted-felt i kommentarskjemaet',
            'show_website_field_help' => 'Når den er deaktivert, skjules nettsted-feltet fra det offentlige kommentarskjemaet.',
            'default_avatar' => 'Standard avatar',
            'default_avatar_helper' => 'Standard avatar for forfatteren når de ikke har en avatar. Hvis du ikke velger noe bilde, genereres det ved hjelp av den valgte avatarleverandøren. Bildestørrelsen bør være 150x150px.',
        ],
    ],
];
