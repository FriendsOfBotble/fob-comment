<?php

return [
    'common' => [
        'name' => 'Vārds',
        'email' => 'E-pasts',
        'phone' => 'Tālrunis',
        'website' => 'Vietne',
        'comment' => 'Komentārs',
        'email_placeholder' => 'Jūsu e-pasta adrese netiks publicēta.',
        'website_placeholder' => 'piem. https://example.com',
    ],

    'title' => 'Komentāri',
    'author' => 'Autors',
    'responded_to' => 'Atbilde uz',
    'permalink' => 'Pastāvīgā saite',
    'url' => 'URL',
    'submitted_on' => 'Iesniegts',
    'edit_comment' => 'Rediģēt komentāru',
    'reply' => 'Atbildēt',
    'in_reply_to' => 'Atbildot :name',

    'reply_modal' => [
        'title' => 'Atbildēt uz :comment',
        'cancel' => 'Atcelt',
    ],

    'allow_comments' => 'Atļaut komentārus',

    'front' => [
        'admin_badge' => 'Administrators',

        'list' => [
            'title' => ':count komentārs|:count komentāri',
            'title_singular' => ':count komentārs',
            'title_plural' => ':count komentāri',
            'reply' => 'Atbildēt',
            'reply_to' => 'Atbildēt :name',
            'cancel_reply' => 'Atcelt atbildi',
            'waiting_for_approval_message' => 'Jūsu komentārs gaida apstiprināšanu. Šis ir priekšskatījums, jūsu komentārs būs redzams pēc apstiprināšanas.',
        ],

        'form' => [
            'description_email_optional' => 'Your email address will not be published. Email is optional. Required fields are marked *',
            'title' => 'Atstāt komentāru',
            'description' => 'Jūsu e-pasta adrese netiks publicēta. Obligātie lauki ir atzīmēti ar *',
            'cookie_consent' => 'Saglabāt manu vārdu, e-pastu un vietni šajā pārlūkprogrammā nākamreiz, kad komentēšu.',
            'submit' => 'Publicēt komentāru',
        ],

        'comment_success_message' => 'Jūsu komentārs ir veiksmīgi nosūtīts.',
    ],

    'enums' => [
        'statuses' => [
            'pending' => 'Gaida',
            'approved' => 'Apstiprināts',
            'spam' => 'Mēstule',
            'trash' => 'Miskaste',
        ],
    ],

    'settings' => [
        'title' => 'FOB Comment',
        'description' => 'Konfigurēt iestatījumus FOB Comment',

        'form' => [
            'enable_recaptcha' => 'Iespējot reCAPTCHA',
            'enable_recaptcha_help' => 'Jums jāiespējo reCAPTCHA :url, lai izmantotu šo funkciju.',
            'captcha_setting_label' => 'Captcha iestatījumi',
            'comment_moderation' => 'Komentāri jāapstiprina manuāli',
            'comment_moderation_help' => 'Visus komentārus administratoram jāapstiprina manuāli, pirms tie tiek parādīti vietnē.',
            'show_comment_cookie_consent' => 'Rādīt komentāru sīkdatņu izvēles rūtiņu, ļaujot apmeklētājiem saglabāt savu informāciju pārlūkprogrammā',
            'auto_fill_comment_form' => 'Automātiski aizpildīt komentāra datus pieteikušamies lietotājiem',
            'auto_fill_comment_form_help' => 'Komentāru veidlapa tiks automātiski aizpildīta ar lietotāja datiem, piemēram, pilnu vārdu, e-pastu utt., ja viņi ir pieteikušies.',
            'comment_order' => 'Kārtot komentārus pēc',
            'comment_order_help' => 'Izvēlieties vēlamo secību komentāru attēlošanai sarakstā.',
            'comment_order_choices' => [
                'asc' => 'Vecākie',
                'desc' => 'Jaunākie',
            ],
            'display_admin_badge' => 'Rādīt administratora nozīmīti administratoru komentāriem',
            'show_admin_role_name_for_admin_badge' => 'Rādīt administratora lomas nosaukumu administratora nozīmītei',
            'show_admin_role_name_for_admin_badge_helper' => 'Ja iespējots, administratora nozīmīte rādīs administratora lomas nosaukumu, nevis noklusējuma tekstu "Administrators". Ja administratora lomas nosaukums ir tukšs, tiks izmantots noklusējuma teksts. Ja lietotājam ir vairākas lomas, tiks izmantota pirmā loma.',
            'avatar_provider' => 'Avatar provider',
            'avatar_provider_help' => 'Choose how to generate avatars for comments. Gravatar requires email, UI Avatars generates based on name.',
            'avatar_provider_choices' => [
                'gravatar' => 'Gravatar (Email-based)',
                'ui_avatars' => 'UI Avatars (Name-based)',
            ],
            'email_optional' => 'Make email field optional',
            'email_optional_help' => 'When enabled, visitors can submit comments without providing an email address.',
            'show_website_field' => 'Rādīt tīmekļa vietnes lauku komentāru formā',
            'show_website_field_help' => 'Kad atspējots, tīmekļa vietnes lauks tiks paslēpts no publiskās komentāru formas.',
            'default_avatar' => 'Noklusējuma avatars',
            'default_avatar_helper' => 'Default avatar for the author when they don\'t have an avatar. If you don\'t select any image, it will be generated using the selected avatar provider. Image size should be 150x150px.',
        ],
    ],
];
