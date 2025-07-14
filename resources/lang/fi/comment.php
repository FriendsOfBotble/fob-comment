<?php

return [
    'common' => [
        'name' => 'Nimi',
        'email' => 'Sähköposti',
        'website' => 'Verkkosivusto',
        'comment' => 'Kommentti',
        'email_placeholder' => 'Sähköpostiosoitettasi ei julkaista.',
        'website_placeholder' => 'esim. https://example.com',
    ],

    'title' => 'Kommentit',
    'author' => 'Kirjoittaja',
    'responsed_to' => 'Vastaus',
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
            'reply' => 'Vastaa',
            'reply_to' => 'Vastaa käyttäjälle :name',
            'cancel_reply' => 'Peruuta vastaus',
            'waiting_for_approval_message' => 'Kommenttisi odottaa hyväksyntää. Tämä on esikatselu, kommenttisi näkyy hyväksynnän jälkeen.',
        ],

        'form' => [
            'title' => 'Jätä kommentti',
            'description' => 'Sähköpostiosoitettasi ei julkaista. Pakolliset kentät on merkitty *',
            'cookie_consent' => 'Tallenna nimeni, sähköpostini ja verkkosivustoni tähän selaimeen seuraavaa kommenttiani varten.',
            'submit' => 'Lähetä kommentti',
        ],

        'comment_success_message' => 'Kommenttisi on lähetetty onnistuneesti.',
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
            'comment_moderation' => 'Kommentit on hyväksyttävä manuaalisesti',
            'comment_moderation_help' => 'Kaikki kommentit on hyväksyttävä manuaalisesti ylläpitäjän toimesta ennen niiden näyttämistä sivustolla.',
            'show_comment_cookie_consent' => 'Näytä kommenttievästeiden valintaruutu, joka sallii vierailijoiden tallentaa tietonsa selaimeen',
            'auto_fill_comment_form' => 'Täytä kommenttitiedot automaattisesti kirjautuneille käyttäjille',
            'auto_fill_comment_form_help' => 'Kommenttilomake täytetään automaattisesti käyttäjän tiedoilla, kuten koko nimi, sähköposti jne., jos he ovat kirjautuneet sisään.',
            'comment_order' => 'Lajittele kommentit',
            'comment_order_help' => 'Valitse haluttu järjestys kommenttien näyttämiseen listassa.',
            'comment_order_choices' => [
                'asc' => 'Vanhimmat',
                'desc' => 'Uusimmat',
            ],
            'display_admin_badge' => 'Näytä ylläpitäjämerkki ylläpitäjien kommenteissa',
            'show_admin_role_name_for_admin_badge' => 'Näytä ylläpitäjäroolin nimi ylläpitäjämerkissä',
            'show_admin_role_name_for_admin_badge_helper' => 'Jos käytössä, ylläpitäjämerkki näyttää ylläpitäjäroolin nimen oletustekstin "Ylläpitäjä" sijaan. Jos ylläpitäjäroolin nimi on tyhjä, käytetään oletustekstiä. Jos käyttäjällä on useita rooleja, käytetään ensimmäistä roolia.',
            'default_avatar' => 'Oletusavatar',
            'default_avatar_helper' => 'Oletusavatar kirjoittajalle, kun hänellä ei ole avataria. Jos et valitse mitään kuvaa, se luodaan Gravatarin avulla. Kuvan koon tulisi olla 150x150px.',
        ],
    ],
];