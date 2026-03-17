<?php

return [
    'common' => [
        'name' => 'Navn',
        'email' => 'E-mail',
        'phone' => 'Telefon',
        'website' => 'Hjemmeside',
        'comment' => 'Kommentar',
        'email_placeholder' => 'Din e-mailadresse vil ikke blive offentliggjort.',
        'name_placeholder' => 'Your name',
        'website_placeholder' => 'f.eks. https://example.com',
        'comment_placeholder' => 'Write your comment here...',
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
            'delete' => 'Slet',
            'delete_confirm' => 'Er du sikker på, at du vil slette denne kommentar?',
        ],

        'form' => [
            'description_email_optional' => 'Din e-mailadresse vil ikke blive offentliggjort. E-mail er valgfri. Obligatoriske felter er markeret *',
            'title' => 'Skriv en kommentar',
            'description' => 'Din e-mailadresse vil ikke blive offentliggjort. Obligatoriske felter er markeret *',
            'cookie_consent' => 'Gem mit navn, e-mail og hjemmeside i denne browser til næste gang jeg kommenterer.',
            'submit' => 'Send kommentar',
            'login_required' => 'Du skal være logget ind for at skrive en kommentar.',
            'login_to_comment' => 'Log ind for at kommentere',
        ],

        'comment_success_message' => 'Din kommentar er blevet sendt.',
        'rate_limit_error' => 'Du kommenterer for hurtigt. Vent venligst :seconds sekunder, inden du poster endnu en kommentar.',
        'comment_deleted_message' => 'Din kommentar er blevet slettet.',
        'delete_not_authorized' => 'Du har ikke tilladelse til at slette denne kommentar.',
    ],

    'enums' => [
        'statuses' => [
            'pending' => 'Afventer',
            'approved' => 'Godkendt',
            'spam' => 'Spam',
            'trash' => 'Papirkurv',
        ],
    ],

    'email_templates' => [
        'admin_new_comment_title' => 'Ny kommentar modtaget',
        'admin_new_comment_message' => ':comment_name har skrevet en ny kommentar',
        'comment_reply_title' => 'Nyt svar på din kommentar',
        'comment_reply_message' => ':reply_name svarede på din kommentar',
        'commented_on' => 'Kommenterede på',
        'view_comment' => 'Se kommentar',
    ],

    'settings' => [
        'title' => 'FOB Comment',
        'description' => 'Konfigurer indstillinger for FOB Comment',

        'email' => [
            'templates' => [
                'title' => 'Kommentar',
                'description' => 'E-mailskabeloner til kommentarnotifikationer',
                'admin_new_comment' => [
                    'title' => 'Administratornotifikation for ny kommentar',
                    'description' => 'Send e-mail til administrator, når en ny kommentar er oprettet',
                    'subject' => 'Ny kommentar på {{ site_title }}',
                    'comment_name_description' => 'Kommentarforfatterens navn',
                    'comment_email_description' => 'Kommentarforfatterens e-mail',
                    'comment_content_description' => 'Kommentarens indhold',
                    'comment_reference_description' => 'Den side/indlæg der er kommenteret på',
                    'comment_url_description' => 'URL til visning af kommentaren',
                ],
                'comment_reply' => [
                    'title' => 'Notificer kommentator om svar',
                    'description' => 'Send e-mail til kommentator, når nogen svarer på deres kommentar',
                    'subject' => 'Nyt svar på din kommentar på {{ site_title }}',
                    'comment_name_description' => 'Oprindelig kommentators navn',
                    'reply_name_description' => 'Svarforfatterens navn',
                    'reply_content_description' => 'Svarets indhold',
                    'comment_reference_description' => 'Den side/indlæg der er kommenteret på',
                    'comment_url_description' => 'URL til visning af kommentaren',
                ],
            ],
        ],

        'form' => [
            'enable_recaptcha' => 'Aktiver reCAPTCHA',
            'enable_recaptcha_help' => 'Du skal aktivere reCAPTCHA i :url for at bruge denne funktion.',
            'captcha_setting_label' => 'Captcha-indstillinger',
            'disable_guest_comment' => 'Deaktiver gæstekommentarer',
            'disable_guest_comment_help' => 'Når aktiveret skal brugere være logget ind for at skrive kommentarer. Dette hjælper med at reducere spam-kommentarer.',
            'comment_moderation' => 'Kommentarer skal godkendes manuelt',
            'comment_moderation_help' => 'Alle kommentarer skal godkendes manuelt af en administrator før de vises på hjemmesiden.',
            'rate_limit_seconds' => 'Hastighedsbegrænsning (sekunder)',
            'rate_limit_seconds_help' => 'Minimum tid i sekunder mellem kommentarer fra samme bruger. Indstil til 0 for at deaktivere hastighedsbegrænsning.',
            'show_comment_cookie_consent' => 'Vis afkrydsningsfelt for kommentar-cookies, som tillader besøgende at gemme deres oplysninger i browseren',
            'show_comment_cookie_consent_help' => 'Når aktiveret kan besøgende gemme deres navn, e-mail og hjemmeside i browseren til fremtidige kommentarer.',
            'auto_fill_comment_form' => 'Udfyld automatisk kommentardata for indloggede brugere',
            'auto_fill_comment_form_help' => 'Kommentarformularen udfyldes automatisk med brugerdata som fuldt navn, e-mail osv., hvis de er logget ind.',
            'comment_order' => 'Sorter kommentarer efter',
            'comment_order_help' => 'Vælg den foretrukne rækkefølge for visning af kommentarer i listen.',
            'comment_order_choices' => [
                'asc' => 'Ældste',
                'desc' => 'Nyeste',
            ],
            'display_admin_badge' => 'Vis administratormærke for administratorkommentarer',
            'display_admin_badge_help' => 'Når aktiveret vil kommentarer fra administratorer vise et "Admin"-mærke ved siden af deres navn.',
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
            'allow_author_delete' => 'Tillad forfattere at slette deres kommentarer',
            'allow_author_delete_help' => 'Når aktiveret, kan indloggede brugere slette deres egne kommentarer.',
            'primary_color' => 'Primærfarve',
            'primary_color_helper' => 'Primærfarve til knapper, afkrydsningsfelter og mærker. Lad feltet være tomt for at bruge temaets primærfarve.',
            'primary_color_hover' => 'Primær hoverfarve',
            'primary_color_hover_helper' => 'Hoverfarve til knapper. Lad feltet være tomt for at bruge en mørkere nuance af primærfarven.',
        ],
    ],
];
