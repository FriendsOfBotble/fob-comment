<?php

return [
    'common' => [
        'name' => 'Vārds',
        'email' => 'E-pasts',
        'phone' => 'Tālrunis',
        'website' => 'Vietne',
        'comment' => 'Komentārs',
        'email_placeholder' => 'Jūsu e-pasta adrese netiks publicēta.',
        'name_placeholder' => 'Your name',
        'website_placeholder' => 'piem. https://example.com',
        'comment_placeholder' => 'Write your comment here...',
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
            'delete' => 'Dzēst',
            'delete_confirm' => 'Vai tiešām vēlaties dzēst šo komentāru?',
        ],

        'form' => [
            'description_email_optional' => 'Your email address will not be published. Email is optional. Required fields are marked *',
            'title' => 'Atstāt komentāru',
            'description' => 'Jūsu e-pasta adrese netiks publicēta. Obligātie lauki ir atzīmēti ar *',
            'cookie_consent' => 'Saglabāt manu vārdu, e-pastu un vietni šajā pārlūkprogrammā nākamreiz, kad komentēšu.',
            'submit' => 'Publicēt komentāru',
            'login_required' => 'Jums ir jāpiesakās, lai publicētu komentāru.',
            'login_to_comment' => 'Piesakieties, lai komentētu',
        ],

        'comment_success_message' => 'Jūsu komentārs ir veiksmīgi nosūtīts.',
        'rate_limit_error' => 'You are commenting too fast. Please wait :seconds seconds before posting another comment.',
        'comment_deleted_message' => 'Jūsu komentārs ir veiksmīgi dzēsts.',
        'delete_not_authorized' => 'Jums nav atļaujas dzēst šo komentāru.',
    ],

    'enums' => [
        'statuses' => [
            'pending' => 'Gaida',
            'approved' => 'Apstiprināts',
            'spam' => 'Mēstule',
            'trash' => 'Miskaste',
        ],
    ],

    'email_templates' => [
        'admin_new_comment_title' => 'Saņemts jauns komentārs',
        'admin_new_comment_message' => ':comment_name atstāja jaunu komentāru',
        'comment_reply_title' => 'Jauna atbilde uz jūsu komentāru',
        'comment_reply_message' => ':reply_name atbildēja uz jūsu komentāru',
        'commented_on' => 'Komentēts par',
        'view_comment' => 'Skatīt komentāru',
    ],

    'settings' => [
        'title' => 'FOB Comment',
        'description' => 'Konfigurēt iestatījumus FOB Comment',

        'email' => [
            'templates' => [
                'title' => 'Komentārs',
                'description' => 'E-pasta veidnes komentāru paziņojumiem',
                'admin_new_comment' => [
                    'title' => 'Administratora paziņojums par jaunu komentāru',
                    'description' => 'Sūtīt e-pastu administratoram, kad ir publicēts jauns komentārs',
                    'subject' => 'Jauns komentārs vietnē {{ site_title }}',
                    'comment_name_description' => 'Komentāra autora vārds',
                    'comment_email_description' => 'Komentāra autora e-pasts',
                    'comment_content_description' => 'Komentāra saturs',
                    'comment_reference_description' => 'Lapa/ieraksts, par ko komentē',
                    'comment_url_description' => 'URL, lai skatītu komentāru',
                ],
                'comment_reply' => [
                    'title' => 'Paziņot komentētājam par atbildi',
                    'description' => 'Sūtīt e-pastu komentētājam, kad kāds atbild uz viņa komentāru',
                    'subject' => 'Jauna atbilde uz jūsu komentāru vietnē {{ site_title }}',
                    'comment_name_description' => 'Sākotnējā komentētāja vārds',
                    'reply_name_description' => 'Atbildes autora vārds',
                    'reply_content_description' => 'Atbildes saturs',
                    'comment_reference_description' => 'Lapa/ieraksts, par ko komentē',
                    'comment_url_description' => 'URL, lai skatītu komentāru',
                ],
            ],
        ],

        'form' => [
            'enable_recaptcha' => 'Iespējot reCAPTCHA',
            'enable_recaptcha_help' => 'Jums jāiespējo reCAPTCHA :url, lai izmantotu šo funkciju.',
            'captcha_setting_label' => 'Captcha iestatījumi',
            'disable_guest_comment' => 'Atspējot viešņu komentārus',
            'disable_guest_comment_help' => 'Ja iespējots, lietotājiem ir jāpiesakās, lai publicētu komentārus. Tas palīdz samazināt surogātpasta komentārus.',
            'comment_moderation' => 'Komentāri jāapstiprina manuāli',
            'comment_moderation_help' => 'Visus komentārus administratoram jāapstiprina manuāli, pirms tie tiek parādīti vietnē.',
            'rate_limit_seconds' => 'Rate limit (seconds)',
            'rate_limit_seconds_help' => 'Minimum time in seconds between comments from the same user. Set to 0 to disable rate limiting.',
            'show_comment_cookie_consent' => 'Rādīt komentāru sīkdatņu izvēles rūtiņu, ļaujot apmeklētājiem saglabāt savu informāciju pārlūkprogrammā',
            'show_comment_cookie_consent_help' => 'When enabled, visitors can save their name, email, and website in their browser for future comments.',
            'auto_fill_comment_form' => 'Automātiski aizpildīt komentāra datus pieteikušamies lietotājiem',
            'auto_fill_comment_form_help' => 'Komentāru veidlapa tiks automātiski aizpildīta ar lietotāja datiem, piemēram, pilnu vārdu, e-pastu utt., ja viņi ir pieteikušies.',
            'comment_order' => 'Kārtot komentārus pēc',
            'comment_order_help' => 'Izvēlieties vēlamo secību komentāru attēlošanai sarakstā.',
            'comment_order_choices' => [
                'asc' => 'Vecākie',
                'desc' => 'Jaunākie',
            ],
            'display_admin_badge' => 'Rādīt administratora nozīmīti administratoru komentāriem',
            'display_admin_badge_help' => 'When enabled, comments from admins will show an "Admin" badge next to their name.',
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
            'allow_author_delete' => 'Ļaut autoriem dzēst savus komentārus',
            'allow_author_delete_help' => 'Ja iespējots, pieteikušies lietotāji var dzēst savus komentārus.',
            'primary_color' => 'Primārā krāsa',
            'primary_color_helper' => 'Primārā krāsa pogām, izvēles rūtiņām un nozīmītēm. Atstājiet tukšu, lai izmantotu tēmas primāro krāsu.',
            'primary_color_hover' => 'Primārā virzīšanas krāsa',
            'primary_color_hover_helper' => 'Virzīšanas krāsa pogām. Atstājiet tukšu, lai izmantotu tumšāku primārās krāsas toni.',
        ],
    ],
];
