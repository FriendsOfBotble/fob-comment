<?php

return [
    'common' => [
        'name' => 'Navn',
        'email' => 'E-post',
        'phone' => 'Telefon',
        'website' => 'Nettsted',
        'comment' => 'Kommentar',
        'email_placeholder' => 'E-postadressen din vil ikke bli publisert.',
        'name_placeholder' => 'Your name',
        'website_placeholder' => 'f.eks. https://example.com',
        'comment_placeholder' => 'Write your comment here...',
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
            'delete' => 'Slett',
            'delete_confirm' => 'Er du sikker på at du vil slette denne kommentaren?',
        ],

        'form' => [
            'description_email_optional' => 'E-postadressen din vil ikke bli publisert. E-post er valgfritt. Obligatoriske felt er merket *',
            'title' => 'Legg igjen en kommentar',
            'description' => 'E-postadressen din vil ikke bli publisert. Obligatoriske felt er merket *',
            'cookie_consent' => 'Lagre navn, e-post og nettsted i denne nettleseren til neste gang jeg kommenterer.',
            'submit' => 'Send kommentar',
            'login_required' => 'Du må være innlogget for å legge inn en kommentar.',
            'login_to_comment' => 'Logg inn for å kommentere',
        ],

        'comment_success_message' => 'Kommentaren din har blitt sendt.',
        'rate_limit_error' => 'You are commenting too fast. Please wait :seconds seconds before posting another comment.',
        'comment_deleted_message' => 'Kommentaren din har blitt slettet.',
        'delete_not_authorized' => 'Du er ikke autorisert til å slette denne kommentaren.',
    ],

    'enums' => [
        'statuses' => [
            'pending' => 'Venter',
            'approved' => 'Godkjent',
            'spam' => 'Spam',
            'trash' => 'Papirkurv',
        ],
    ],

    'email_templates' => [
        'admin_new_comment_title' => 'Ny kommentar mottatt',
        'admin_new_comment_message' => ':comment_name la igjen en ny kommentar',
        'comment_reply_title' => 'Nytt svar på kommentaren din',
        'comment_reply_message' => ':reply_name svarte på kommentaren din',
        'commented_on' => 'Kommenterte på',
        'view_comment' => 'Se kommentar',
    ],

    'settings' => [
        'title' => 'FOB Comment',
        'description' => 'Konfigurer innstillinger for FOB Comment',

        'email' => [
            'templates' => [
                'title' => 'Kommentar',
                'description' => 'E-postmaler for kommentarvarsler',
                'admin_new_comment' => [
                    'title' => 'Adminvarsel for ny kommentar',
                    'description' => 'Send e-post til admin når en ny kommentar er publisert',
                    'subject' => 'Ny kommentar på {{ site_title }}',
                    'comment_name_description' => 'Navn på kommentarforfatter',
                    'comment_email_description' => 'E-post til kommentarforfatter',
                    'comment_content_description' => 'Kommentarinnhold',
                    'comment_reference_description' => 'Siden/innlegget som kommenteres',
                    'comment_url_description' => 'URL for å se kommentaren',
                ],
                'comment_reply' => [
                    'title' => 'Varsle kommentator om svar',
                    'description' => 'Send e-post til kommentator når noen svarer på kommentaren deres',
                    'subject' => 'Nytt svar på kommentaren din på {{ site_title }}',
                    'comment_name_description' => 'Navn på opprinnelig kommentator',
                    'reply_name_description' => 'Navn på svarforfatter',
                    'reply_content_description' => 'Svarinnhold',
                    'comment_reference_description' => 'Siden/innlegget som kommenteres',
                    'comment_url_description' => 'URL for å se kommentaren',
                ],
            ],
        ],

        'form' => [
            'enable_recaptcha' => 'Aktiver reCAPTCHA',
            'enable_recaptcha_help' => 'Du må aktivere reCAPTCHA i :url for å bruke denne funksjonen.',
            'captcha_setting_label' => 'Captcha-innstillinger',
            'disable_guest_comment' => 'Deaktiver gjestekommentarer',
            'disable_guest_comment_help' => 'Når aktivert må brukere være innlogget for å legge inn kommentarer. Dette hjelper med å redusere spam-kommentarer.',
            'comment_moderation' => 'Kommentarer må godkjennes manuelt',
            'comment_moderation_help' => 'Alle kommentarer må godkjennes manuelt av en administrator før de vises på nettsiden.',
            'rate_limit_seconds' => 'Rate limit (seconds)',
            'rate_limit_seconds_help' => 'Minimum time in seconds between comments from the same user. Set to 0 to disable rate limiting.',
            'show_comment_cookie_consent' => 'Vis avkrysningsboks for kommentarinformasjonskapsler, slik at besøkende kan lagre informasjonen sin i nettleseren',
            'show_comment_cookie_consent_help' => 'When enabled, visitors can save their name, email, and website in their browser for future comments.',
            'auto_fill_comment_form' => 'Autofyll kommentardata for innloggede brukere',
            'auto_fill_comment_form_help' => 'Kommentarskjemaet fylles automatisk ut med brukerdata som fullt navn, e-post osv. hvis de er logget inn.',
            'comment_order' => 'Sorter kommentarer etter',
            'comment_order_help' => 'Velg foretrukket rekkefølge for å vise kommentarer i listen.',
            'comment_order_choices' => [
                'asc' => 'Eldste',
                'desc' => 'Nyeste',
            ],
            'display_admin_badge' => 'Vis administratormerke for administratorkommentarer',
            'display_admin_badge_help' => 'When enabled, comments from admins will show an "Admin" badge next to their name.',
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
            'allow_author_delete' => 'La forfattere slette sine kommentarer',
            'allow_author_delete_help' => 'Når aktivert, kan innloggede brukere slette sine egne kommentarer.',
            'primary_color' => 'Primærfarge',
            'primary_color_helper' => 'Primærfarge for knapper, avkrysningsbokser og merker. La stå tom for å bruke temaets primærfarge.',
            'primary_color_hover' => 'Primær hoverfarger',
            'primary_color_hover_helper' => 'Hoverfarge for knapper. La stå tom for å bruke en mørkere nyanse av primærfargen.',
        ],
    ],
];
