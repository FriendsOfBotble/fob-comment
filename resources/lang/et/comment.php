<?php

return [
    'common' => [
        'name' => 'Nimi',
        'email' => 'E-post',
        'website' => 'Veebileht',
        'comment' => 'Kommentaar',
        'email_placeholder' => 'Teie e-posti aadressi ei avaldata.',
        'website_placeholder' => 'nt. https://example.com',
    ],

    'title' => 'Kommentaarid',
    'author' => 'Autor',
    'responsed_to' => 'Vastus',
    'permalink' => 'Püsilink',
    'url' => 'URL',
    'submitted_on' => 'Esitatud',
    'edit_comment' => 'Muuda kommentaari',
    'reply' => 'Vasta',
    'in_reply_to' => 'Vastuseks :name',

    'reply_modal' => [
        'title' => 'Vasta kommentaarile :comment',
        'cancel' => 'Tühista',
    ],

    'allow_comments' => 'Luba kommentaarid',

    'front' => [
        'admin_badge' => 'Admin',

        'list' => [
            'title' => ':count kommentaar|:count kommentaari',
            'reply' => 'Vasta',
            'reply_to' => 'Vasta :name',
            'cancel_reply' => 'Tühista vastus',
            'waiting_for_approval_message' => 'Teie kommentaar ootab kinnitamist. See on eelvaade, teie kommentaar on nähtav pärast kinnitamist.',
        ],

        'form' => [
            'title' => 'Jätke kommentaar',
            'description' => 'Teie e-posti aadressi ei avaldata. Kohustuslikud väljad on märgitud *',
            'cookie_consent' => 'Salvesta minu nimi, e-post ja veebileht selles brauseris järgmise kommentaari jaoks.',
            'submit' => 'Postita kommentaar',
        ],

        'comment_success_message' => 'Teie kommentaar on edukalt saadetud.',
    ],

    'enums' => [
        'statuses' => [
            'pending' => 'Ootel',
            'approved' => 'Kinnitatud',
            'spam' => 'Rämpspost',
            'trash' => 'Prügikast',
        ],
    ],

    'settings' => [
        'title' => 'FOB Comment',
        'description' => 'Seadista FOB Comment sätted',

        'form' => [
            'enable_recaptcha' => 'Luba reCAPTCHA',
            'enable_recaptcha_help' => 'Selle funktsiooni kasutamiseks peate lubama reCAPTCHA aadressil :url.',
            'captcha_setting_label' => 'Captcha sätted',
            'comment_moderation' => 'Kommentaarid tuleb käsitsi kinnitada',
            'comment_moderation_help' => 'Kõik kommentaarid peavad enne veebilehel kuvamist olema administraatori poolt käsitsi kinnitatud.',
            'show_comment_cookie_consent' => 'Näita kommentaaride küpsiste märkeruutu, võimaldades külastajatel salvestada oma andmed brauserisse',
            'auto_fill_comment_form' => 'Täida kommentaari andmed automaatselt sisselogitud kasutajatele',
            'auto_fill_comment_form_help' => 'Kommentaarivorm täidetakse automaatselt kasutaja andmetega nagu täisnimi, e-post jne, kui nad on sisse logitud.',
            'comment_order' => 'Sorteeri kommentaarid',
            'comment_order_help' => 'Valige eelistatud järjekord kommentaaride kuvamiseks nimekirjas.',
            'comment_order_choices' => [
                'asc' => 'Vanemad',
                'desc' => 'Uuemad',
            ],
            'display_admin_badge' => 'Kuva administraatori märk administraatorite kommentaaride jaoks',
            'show_admin_role_name_for_admin_badge' => 'Näita administraatori rolli nime administraatori märgi jaoks',
            'show_admin_role_name_for_admin_badge_helper' => 'Kui lubatud, kuvab administraatori märk administraatori rolli nime vaikimisi teksti "Admin" asemel. Kui administraatori rolli nimi on tühi, kasutatakse vaikimisi teksti. Kui kasutajal on mitu rolli, kasutatakse esimest rolli.',
            'default_avatar' => 'Vaikimisi avatar',
            'default_avatar_helper' => 'Vaikimisi avatar autorile, kui tal ei ole avatari. Kui te ei vali ühtegi pilti, genereeritakse see Gravatari abil. Pildi suurus peaks olema 150x150px.',
        ],
    ],
];