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
            'delete' => 'Poista',
            'delete_confirm' => 'Haluatko varmasti poistaa tämän kommentin?',
        ],

        'form' => [
            'description_email_optional' => 'Your email address will not be published. Email is optional. Required fields are marked *',
            'title' => 'Jätä kommentti',
            'description' => 'Sähköpostiosoitettasi ei julkaista. Pakolliset kentät on merkitty *',
            'cookie_consent' => 'Tallenna nimeni, sähköpostini ja verkkosivustoni tähän selaimeen seuraavaa kommenttiini varten.',
            'submit' => 'Lähetä kommentti',
            'login_required' => 'Sinun on kirjauduttava sisään lähettääksesi kommentin.',
            'login_to_comment' => 'Kirjaudu sisään kommentoidaksesi',
        ],

        'comment_success_message' => 'Kommenttisi on lähetetty onnistuneesti.',
        'rate_limit_error' => 'Kommentoit liian nopeasti. Odota :seconds sekuntia ennen seuraavan kommentin lähettämistä.',
        'comment_deleted_message' => 'Kommenttisi on poistettu onnistuneesti.',
        'delete_not_authorized' => 'Sinulla ei ole oikeutta poistaa tätä kommenttia.',
    ],

    'enums' => [
        'statuses' => [
            'pending' => 'Odottaa',
            'approved' => 'Hyväksytty',
            'spam' => 'Roskaposti',
            'trash' => 'Roskakori',
        ],
    ],

    'email_templates' => [
        'admin_new_comment_title' => 'Uusi kommentti vastaanotettu',
        'admin_new_comment_message' => ':comment_name jätti uuden kommentin',
        'comment_reply_title' => 'Uusi vastaus kommenttiisi',
        'comment_reply_message' => ':reply_name vastasi kommenttiisi',
        'commented_on' => 'Kommentoi',
        'view_comment' => 'Näytä kommentti',
    ],

    'settings' => [
        'title' => 'FOB Comment',
        'description' => 'Määritä asetukset FOB Commentille',

        'email' => [
            'templates' => [
                'title' => 'Kommentti',
                'description' => 'Sähköpostimallit kommentti-ilmoituksille',
                'admin_new_comment' => [
                    'title' => 'Ylläpitäjän ilmoitus uudesta kommentista',
                    'description' => 'Lähetä sähköposti ylläpitäjälle, kun uusi kommentti on julkaistu',
                    'subject' => 'Uusi kommentti sivustolla {{ site_title }}',
                    'comment_name_description' => 'Kommentin kirjoittajan nimi',
                    'comment_email_description' => 'Kommentin kirjoittajan sähköposti',
                    'comment_content_description' => 'Kommentin sisältö',
                    'comment_reference_description' => 'Sivu/julkaisu, johon kommentoitiin',
                    'comment_url_description' => 'URL kommentin tarkasteluun',
                ],
                'comment_reply' => [
                    'title' => 'Ilmoita kommentoijalle vastauksesta',
                    'description' => 'Lähetä sähköposti kommentoijalle, kun joku vastaa hänen kommenttiinsa',
                    'subject' => 'Uusi vastaus kommenttiisi sivustolla {{ site_title }}',
                    'comment_name_description' => 'Alkuperäisen kommentoijan nimi',
                    'reply_name_description' => 'Vastaajan nimi',
                    'reply_content_description' => 'Vastauksen sisältö',
                    'comment_reference_description' => 'Sivu/julkaisu, johon kommentoitiin',
                    'comment_url_description' => 'URL kommentin tarkasteluun',
                ],
            ],
        ],

        'form' => [
            'enable_recaptcha' => 'Ota käyttöön reCAPTCHA',
            'enable_recaptcha_help' => 'Sinun täytyy ottaa käyttöön reCAPTCHA osoitteessa :url käyttääksesi tätä ominaisuutta.',
            'captcha_setting_label' => 'Captcha-asetukset',
            'disable_guest_comment' => 'Poista vieraskommentit käytöstä',
            'disable_guest_comment_help' => 'Kun tämä on käytössä, käyttäjien on oltava kirjautuneina kommentoidakseen. Tämä auttaa vähentämään roskapostikommentteja.',
            'comment_moderation' => 'Kommentit on hyväksyttävä manuaalisesti',
            'comment_moderation_help' => 'Kaikki kommentit on hyväksyttävä manuaalisesti ylläpitäjän toimesta ennen niiden näyttämistä sivustolla.',
            'rate_limit_seconds' => 'Nopeusrajoitus (sekuntia)',
            'rate_limit_seconds_help' => 'Vähimmäisaika sekunteina kommenttien välillä samalta käyttäjältä. Aseta 0 nopeusrajoituksen poistamiseksi käytöstä.',
            'show_comment_cookie_consent' => 'Näytä kommenttievästeiden valintaruutu, joka sallii vierailijoiden tallentaa tietonsa selaimeen',
            'show_comment_cookie_consent_help' => 'Kun käytössä, vierailijat voivat tallentaa nimensä, sähköpostinsa ja verkkosivustonsa selaimeen tulevia kommentteja varten.',
            'auto_fill_comment_form' => 'Täytä kommenttitiedot automaattisesti kirjautuneille käyttäjille',
            'auto_fill_comment_form_help' => 'Kommenttilomake täytetään automaattisesti käyttäjän tiedoilla, kuten koko nimi, sähköposti jne., jos he ovat kirjautuneet sisään.',
            'comment_order' => 'Lajittele kommentit',
            'comment_order_help' => 'Valitse haluttu järjestys kommenttien näyttämiseen listassa.',
            'comment_order_choices' => [
                'asc' => 'Vanhimmat',
                'desc' => 'Uusimmat',
            ],
            'display_admin_badge' => 'Näytä ylläpitäjämerkki ylläpitäjien kommenteissa',
            'display_admin_badge_help' => 'Kun käytössä, ylläpitäjien kommenteissa näkyy "Ylläpitäjä"-merkki heidän nimensä vieressä.',
            'show_admin_role_name_for_admin_badge' => 'Näytä ylläpitäjäroolin nimi ylläpitäjämerkissä',
            'show_admin_role_name_for_admin_badge_helper' => 'Jos käytössä, ylläpitäjämerkki näyttää ylläpitäjäroolin nimen oletustekstin "Ylläpitäjä" sijaan. Jos ylläpitäjäroolin nimi on tyhjä, käytetään oletustekstiä. Jos käyttäjällä on useita rooleja, käytetään ensimmäistä roolia.',
            'avatar_provider' => 'Avatarin tarjoaja',
            'avatar_provider_help' => 'Valitse, miten avatarit luodaan kommentteja varten. Gravatar vaatii sähköpostin, UI Avatars luo nimen perusteella.',
            'avatar_provider_choices' => [
                'gravatar' => 'Gravatar (sähköpostipohjainen)',
                'ui_avatars' => 'UI Avatars (nimipohjainen)',
            ],
            'email_optional' => 'Tee sähköpostikenttä valinnaiseksi',
            'email_optional_help' => 'Kun käytössä, vierailijat voivat lähettää kommentteja ilman sähköpostiosoitetta.',
            'show_website_field' => 'Näytä verkkosivukenttä kommenttilomakkeessa',
            'show_website_field_help' => 'Kun poistettu käytöstä, verkkosivukenttä piilotetaan julkisesta kommenttilomakkeesta.',
            'default_avatar' => 'Oletusavatar',
            'default_avatar_helper' => 'Oletusavatar kirjoittajalle, kun heillä ei ole avataria. Jos et valitse kuvaa, se luodaan valitun avatarin tarjoajan avulla. Kuvan koon tulisi olla 150x150px.',
            'allow_author_delete' => 'Salli kirjoittajien poistaa kommenttinsa',
            'allow_author_delete_help' => 'Kun käytössä, kirjautuneet käyttäjät voivat poistaa omat kommenttinsa.',
            'primary_color' => 'Pääväri',
            'primary_color_helper' => 'Pääväri painikkeille, valintaruuduille ja merkeille. Jätä tyhjäksi käyttääksesi teeman pääväriä.',
            'primary_color_hover' => 'Pääväri hover-tilassa',
            'primary_color_hover_helper' => 'Hover-väri painikkeille. Jätä tyhjäksi käyttääksesi päävärin tummempaa sävyä.',
        ],
    ],
];
