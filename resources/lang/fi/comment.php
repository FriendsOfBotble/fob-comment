<?php

return [
    'common' => [
        'name' => 'Nimi',
        'email' => 'Sähköposti',
        'phone' => 'Puhelin',
        'website' => 'Verkkosivusto',
        'comment' => 'Kommentti',
        'email_placeholder' => 'Sähköpostiosoitettasi ei julkaista.',
        'name_placeholder' => 'Your name',
        'website_placeholder' => 'esim. https://example.com',
        'comment_placeholder' => 'Write your comment here...',
    ],

    'title' => 'Kommentit',
    'author' => 'Kirjoittaja',
    'responded_to' => 'Vastaus',
    'permalink' => 'Pysyvä linkki',
    'url' => 'URL',
    'submitted_on' => 'Lähetetty',
    'edit_comment' => 'Muokkaa kommenttia',
    'reply' => 'Vastaa',
    'in_reply_to' => 'Vastauksena käyttäjälle :name',

    'reply_modal' => [
        'title' => 'Vastaa kommenttiin :comment',
        'cancel' => 'Peruuta',
    ],

    'allow_comments' => 'Salli kommentit',

    'front' => [
        'admin_badge' => 'Ylläpitäjä',

        'list' => [
            'title' => ':count kommentti|:count kommenttia',
            'title_singular' => ':count kommentti',
            'title_plural' => ':count kommenttia',
            'reply' => 'Vastaa',
            'reply_to' => 'Vastaa käyttäjälle :name',
            'cancel_reply' => 'Peruuta vastaus',
            'waiting_for_approval_message' => 'Kommenttisi odottaa hyväksyntää. Tämä on esikatselu, kommenttisi näkyy hyväksynnän jälkeen.',
        ],

        'form' => [
            'description_email_optional' => 'Your email address will not be published. Email is optional. Required fields are marked *',
            'title' => 'Jätä kommentti',
            'description' => 'Sähköpostiosoitettasi ei julkaista. Pakolliset kentät on merkitty *',
            'cookie_consent' => 'Tallenna nimeni, sähköpostini ja verkkosivustoni tähän selaimeen seuraavaa kommenttiani varten.',
            'submit' => 'Lähetä kommentti',
            'login_required' => 'Sinun on kirjauduttava sisään lähettääksesi kommentin.',
            'login_to_comment' => 'Kirjaudu sisään kommentoidaksesi',
        ],

        'comment_success_message' => 'Kommenttisi on lähetetty onnistuneesti.',
        'rate_limit_error' => 'You are commenting too fast. Please wait :seconds seconds before posting another comment.',
    ],

    'enums' => [
        'statuses' => [
            'pending' => 'Odottaa',
            'approved' => 'Hyväksytty',
            'spam' => 'Roskaposti',
            'trash' => 'Roskakori',
        ],
    ],

    'settings' => [
        'title' => 'FOB Comment',
        'description' => 'Määritä asetukset FOB Commentille',

        'form' => [
            'enable_recaptcha' => 'Ota käyttöön reCAPTCHA',
            'enable_recaptcha_help' => 'Sinun täytyy ottaa käyttöön reCAPTCHA osoitteessa :url käyttääksesi tätä ominaisuutta.',
            'captcha_setting_label' => 'Captcha-asetukset',
            'disable_guest_comment' => 'Poista vieraskommentit käytöstä',
            'disable_guest_comment_help' => 'Kun tämä on käytössä, käyttäjien on oltava kirjautuneina kommentoidakseen. Tämä auttaa vähentämään roskapostikommentteja.',
            'comment_moderation' => 'Kommentit on hyväksyttävä manuaalisesti',
            'comment_moderation_help' => 'Kaikki kommentit on hyväksyttävä manuaalisesti ylläpitäjän toimesta ennen niiden näyttämistä sivustolla.',
            'rate_limit_seconds' => 'Rate limit (seconds)',
            'rate_limit_seconds_help' => 'Minimum time in seconds between comments from the same user. Set to 0 to disable rate limiting.',
            'show_comment_cookie_consent' => 'Näytä kommenttievästeiden valintaruutu, joka sallii vierailijoiden tallentaa tietonsa selaimeen',
            'show_comment_cookie_consent_help' => 'When enabled, visitors can save their name, email, and website in their browser for future comments.',
            'auto_fill_comment_form' => 'Täytä kommenttitiedot automaattisesti kirjautuneille käyttäjille',
            'auto_fill_comment_form_help' => 'Kommenttilomake täytetään automaattisesti käyttäjän tiedoilla, kuten koko nimi, sähköposti jne., jos he ovat kirjautuneet sisään.',
            'comment_order' => 'Lajittele kommentit',
            'comment_order_help' => 'Valitse haluttu järjestys kommenttien näyttämiseen listassa.',
            'comment_order_choices' => [
                'asc' => 'Vanhimmat',
                'desc' => 'Uusimmat',
            ],
            'display_admin_badge' => 'Näytä ylläpitäjämerkki ylläpitäjien kommenteissa',
            'display_admin_badge_help' => 'When enabled, comments from admins will show an "Admin" badge next to their name.',
            'show_admin_role_name_for_admin_badge' => 'Näytä ylläpitäjäroolin nimi ylläpitäjämerkissä',
            'show_admin_role_name_for_admin_badge_helper' => 'Jos käytössä, ylläpitäjämerkki näyttää ylläpitäjäroolin nimen oletustekstin "Ylläpitäjä" sijaan. Jos ylläpitäjäroolin nimi on tyhjä, käytetään oletustekstiä. Jos käyttäjällä on useita rooleja, käytetään ensimmäistä roolia.',
            'avatar_provider' => 'Avatar provider',
            'avatar_provider_help' => 'Choose how to generate avatars for comments. Gravatar requires email, UI Avatars generates based on name.',
            'avatar_provider_choices' => [
                'gravatar' => 'Gravatar (Email-based)',
                'ui_avatars' => 'UI Avatars (Name-based)',
            ],
            'email_optional' => 'Make email field optional',
            'email_optional_help' => 'When enabled, visitors can submit comments without providing an email address.',
            'show_website_field' => 'Näytä verkkosivukenttä kommenttilomakkeessa',
            'show_website_field_help' => 'Kun poistettu käytöstä, verkkosivukenttä piilotetaan julkisesta kommenttilomakkeesta.',
            'default_avatar' => 'Oletusavatar',
            'default_avatar_helper' => 'Default avatar for the author when they don\'t have an avatar. If you don\'t select any image, it will be generated using the selected avatar provider. Image size should be 150x150px.',
        ],
    ],
];
