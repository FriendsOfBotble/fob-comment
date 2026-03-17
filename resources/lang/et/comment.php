<?php

return [
    'common' => [
        'name' => 'Nimi',
        'email' => 'E-post',
        'phone' => 'Telefon',
        'website' => 'Veebileht',
        'comment' => 'Kommentaar',
        'email_placeholder' => 'Teie e-posti aadressi ei avaldata.',
        'name_placeholder' => 'Your name',
        'website_placeholder' => 'nt. https://example.com',
        'comment_placeholder' => 'Write your comment here...',
    ],

    'title' => 'Kommentaarid',
    'author' => 'Autor',
    'responded_to' => 'Vastus',
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
            'title_singular' => ':count kommentaar',
            'title_plural' => ':count kommentaari',
            'reply' => 'Vasta',
            'reply_to' => 'Vasta :name',
            'cancel_reply' => 'Tühista vastus',
            'waiting_for_approval_message' => 'Teie kommentaar ootab kinnitamist. See on eelvaade, teie kommentaar on nähtav pärast kinnitamist.',
            'delete' => 'Kustuta',
            'delete_confirm' => 'Kas olete kindel, et soovite selle kommentaari kustutada?',
        ],

        'form' => [
            'description_email_optional' => 'Your email address will not be published. Email is optional. Required fields are marked *',
            'title' => 'Jätke kommentaar',
            'description' => 'Teie e-posti aadressi ei avaldata. Kohustuslikud väljad on märgitud *',
            'cookie_consent' => 'Salvesta minu nimi, e-post ja veebileht selles brauseris järgmise kommentaari jaoks.',
            'submit' => 'Postita kommentaar',
            'login_required' => 'Kommentaari postitamiseks peate sisse logima.',
            'login_to_comment' => 'Logi sisse kommenteerimiseks',
        ],

        'comment_success_message' => 'Teie kommentaar on edukalt saadetud.',
        'rate_limit_error' => 'Te kommenteerite liiga kiiresti. Palun oodake :seconds sekundit enne järgmise kommentaari postitamist.',
        'comment_deleted_message' => 'Teie kommentaar on edukalt kustutatud.',
        'delete_not_authorized' => 'Teil pole luba seda kommentaari kustutada.',
    ],

    'enums' => [
        'statuses' => [
            'pending' => 'Ootel',
            'approved' => 'Kinnitatud',
            'spam' => 'Rämpspost',
            'trash' => 'Prügikast',
        ],
    ],

    'email_templates' => [
        'admin_new_comment_title' => 'Uus kommentaar saadud',
        'admin_new_comment_message' => ':comment_name jättis uue kommentaari',
        'comment_reply_title' => 'Uus vastus teie kommentaarile',
        'comment_reply_message' => ':reply_name vastas teie kommentaarile',
        'commented_on' => 'Kommenteeris',
        'view_comment' => 'Vaata kommentaari',
    ],

    'settings' => [
        'title' => 'FOB Comment',
        'description' => 'Seadista FOB Comment sätted',

        'email' => [
            'templates' => [
                'title' => 'Kommentaar',
                'description' => 'E-posti mallid kommentaariteatiste jaoks',
                'admin_new_comment' => [
                    'title' => 'Administraatori teatis uue kommentaari kohta',
                    'description' => 'Saada administraatorile e-kiri, kui uus kommentaar on postitatud',
                    'subject' => 'Uus kommentaar saidil {{ site_title }}',
                    'comment_name_description' => 'Kommentaari autori nimi',
                    'comment_email_description' => 'Kommentaari autori e-post',
                    'comment_content_description' => 'Kommentaari sisu',
                    'comment_reference_description' => 'Leht/postitus, mille kohta kommenteeriti',
                    'comment_url_description' => 'URL kommentaari vaatamiseks',
                ],
                'comment_reply' => [
                    'title' => 'Teavita kommenteerijat vastusest',
                    'description' => 'Saada kommenteerijale e-kiri, kui keegi vastab tema kommentaarile',
                    'subject' => 'Uus vastus teie kommentaarile saidil {{ site_title }}',
                    'comment_name_description' => 'Algse kommenteerija nimi',
                    'reply_name_description' => 'Vastuse autori nimi',
                    'reply_content_description' => 'Vastuse sisu',
                    'comment_reference_description' => 'Leht/postitus, mille kohta kommenteeriti',
                    'comment_url_description' => 'URL kommentaari vaatamiseks',
                ],
            ],
        ],

        'form' => [
            'enable_recaptcha' => 'Luba reCAPTCHA',
            'enable_recaptcha_help' => 'Selle funktsiooni kasutamiseks peate lubama reCAPTCHA aadressil :url.',
            'captcha_setting_label' => 'Captcha sätted',
            'disable_guest_comment' => 'Keela külaliste kommentaarid',
            'disable_guest_comment_help' => 'Kui lubatud, peavad kasutajad kommentaaride postitamiseks sisse logima. See aitab vähendada rämpsposti kommentaare.',
            'comment_moderation' => 'Kommentaarid tuleb käsitsi kinnitada',
            'comment_moderation_help' => 'Kõik kommentaarid peavad enne veebilehel kuvamist olema administraatori poolt käsitsi kinnitatud.',
            'rate_limit_seconds' => 'Kiiruspiirang (sekundid)',
            'rate_limit_seconds_help' => 'Minimaalne aeg sekundites sama kasutaja kommentaaride vahel. Seadke 0, et kiirusepiirang keelata.',
            'show_comment_cookie_consent' => 'Näita kommentaaride küpsiste märkeruutu, võimaldades külastajatel salvestada oma andmed brauserisse',
            'show_comment_cookie_consent_help' => 'Kui lubatud, saavad külastajad salvestada oma nime, e-posti ja veebilehe brauserisse tulevaste kommentaaride jaoks.',
            'auto_fill_comment_form' => 'Täida kommentaari andmed automaatselt sisselogitud kasutajatele',
            'auto_fill_comment_form_help' => 'Kommentaarivorm täidetakse automaatselt kasutaja andmetega nagu täisnimi, e-post jne, kui nad on sisse logitud.',
            'comment_order' => 'Sorteeri kommentaarid',
            'comment_order_help' => 'Valige eelistatud järjekord kommentaaride kuvamiseks nimekirjas.',
            'comment_order_choices' => [
                'asc' => 'Vanemad',
                'desc' => 'Uuemad',
            ],
            'display_admin_badge' => 'Kuva administraatori märk administraatorite kommentaaride jaoks',
            'display_admin_badge_help' => 'Kui lubatud, kuvatakse administraatorite kommentaarides "Admin" märk nende nime kõrval.',
            'show_admin_role_name_for_admin_badge' => 'Näita administraatori rolli nime administraatori märgi jaoks',
            'show_admin_role_name_for_admin_badge_helper' => 'Kui lubatud, kuvab administraatori märk administraatori rolli nime vaikimisi teksti "Admin" asemel. Kui administraatori rolli nimi on tühi, kasutatakse vaikimisi teksti. Kui kasutajal on mitu rolli, kasutatakse esimest rolli.',
            'avatar_provider' => 'Avatari pakkuja',
            'avatar_provider_help' => 'Valige, kuidas luua kommentaaridele avatare. Gravatar nõuab e-posti, UI Avatars loob nime põhjal.',
            'avatar_provider_choices' => [
                'gravatar' => 'Gravatar (e-postipõhine)',
                'ui_avatars' => 'UI Avatars (nimepõhine)',
            ],
            'email_optional' => 'Muuda e-posti väli vabatahtlikuks',
            'email_optional_help' => 'Kui lubatud, saavad külastajad esitada kommentaare ilma e-posti aadressi esitamata.',
            'show_website_field' => 'Näita veebisaidi välja kommentaarivormis',
            'show_website_field_help' => 'Kui see on keelatud, peidetakse veebisaidi väli avalikult kommentaarivormilt.',
            'default_avatar' => 'Vaikimisi avatar',
            'default_avatar_helper' => 'Vaikimisi avatar autori jaoks, kui neil pole avatari. Kui te pilti ei vali, luuakse see valitud avatari pakkuja abil. Pildi suurus peaks olema 150x150px.',
            'allow_author_delete' => 'Luba autoritel oma kommentaare kustutada',
            'allow_author_delete_help' => 'Kui lubatud, saavad sisselogitud kasutajad kustutada oma kommentaare.',
            'primary_color' => 'Põhivärv',
            'primary_color_helper' => 'Põhivärv nuppude, märkeruutude ja märkide jaoks. Jätke tühjaks, et kasutada teema põhivärvi.',
            'primary_color_hover' => 'Põhiline hõljumisevärv',
            'primary_color_hover_helper' => 'Hõljumisevärv nuppude jaoks. Jätke tühjaks, et kasutada põhivärvi tumedamat tooni.',
        ],
    ],
];
