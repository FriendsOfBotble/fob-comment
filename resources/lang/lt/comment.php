<?php

return [
    'common' => [
        'name' => 'Vardas',
        'email' => 'El. paštas',
        'phone' => 'Telefonas',
        'website' => 'Svetainė',
        'comment' => 'Komentaras',
        'email_placeholder' => 'Jūsų el. pašto adresas nebus skelbiamas.',
        'website_placeholder' => 'pvz. https://example.com',
    ],

    'title' => 'Komentarai',
    'author' => 'Autorius',
    'responded_to' => 'Atsakymas į',
    'permalink' => 'Nuolatinė nuoroda',
    'url' => 'URL',
    'submitted_on' => 'Pateikta',
    'edit_comment' => 'Redaguoti komentarą',
    'reply' => 'Atsakyti',
    'in_reply_to' => 'Atsakant į :name',

    'reply_modal' => [
        'title' => 'Atsakyti į :comment',
        'cancel' => 'Atšaukti',
    ],

    'allow_comments' => 'Leisti komentarus',

    'front' => [
        'admin_badge' => 'Administratorius',

        'list' => [
            'title' => ':count komentaras|:count komentarai|:count komentarų',
            'title_singular' => ':count komentaras',
            'title_plural' => ':count komentarų',
            'reply' => 'Atsakyti',
            'reply_to' => 'Atsakyti :name',
            'cancel_reply' => 'Atšaukti atsakymą',
            'waiting_for_approval_message' => 'Jūsų komentaras laukia patvirtinimo. Tai peržiūra, jūsų komentaras bus matomas po patvirtinimo.',
        ],

        'form' => [
            'description_email_optional' => 'Your email address will not be published. Email is optional. Required fields are marked *',
            'title' => 'Palikite komentarą',
            'description' => 'Jūsų el. pašto adresas nebus skelbiamas. Privalomi laukai pažymėti *',
            'cookie_consent' => 'Išsaugoti mano vardą, el. paštą ir svetainę šioje naršyklėje kitam kartui, kai komentuosiu.',
            'submit' => 'Paskelbti komentarą',
        ],

        'comment_success_message' => 'Jūsų komentaras sėkmingai išsiųstas.',
    ],

    'enums' => [
        'statuses' => [
            'pending' => 'Laukiama',
            'approved' => 'Patvirtinta',
            'spam' => 'Šlamštas',
            'trash' => 'Šiukšlės',
        ],
    ],

    'settings' => [
        'title' => 'FOB Comment',
        'description' => 'Konfigūruoti FOB Comment nustatymus',

        'form' => [
            'enable_recaptcha' => 'Įjungti reCAPTCHA',
            'enable_recaptcha_help' => 'Turite įjungti reCAPTCHA :url, kad galėtumėte naudoti šią funkciją.',
            'captcha_setting_label' => 'Captcha nustatymai',
            'comment_moderation' => 'Komentarai turi būti patvirtinti rankiniu būdu',
            'comment_moderation_help' => 'Visi komentarai turi būti rankiniu būdu patvirtinti administratoriaus prieš rodant svetainėje.',
            'show_comment_cookie_consent' => 'Rodyti komentarų slapukų žymimąjį laukelį, leidžiantį lankytojams išsaugoti savo informaciją naršyklėje',
            'auto_fill_comment_form' => 'Automatiškai užpildyti komentaro duomenis prisijungusiems vartotojams',
            'auto_fill_comment_form_help' => 'Komentaro forma bus automatiškai užpildyta vartotojo duomenimis, tokiais kaip vardas, el. paštas ir kt., jei jie yra prisijungę.',
            'comment_order' => 'Rūšiuoti komentarus pagal',
            'comment_order_help' => 'Pasirinkite pageidaujamą tvarką komentarų rodymui sąraše.',
            'comment_order_choices' => [
                'asc' => 'Seniausi',
                'desc' => 'Naujausi',
            ],
            'display_admin_badge' => 'Rodyti administratoriaus ženklelį administratorių komentarams',
            'show_admin_role_name_for_admin_badge' => 'Rodyti administratoriaus vaidmens pavadinimą administratoriaus ženklelyje',
            'show_admin_role_name_for_admin_badge_helper' => 'Jei įjungta, administratoriaus ženklelis rodys administratoriaus vaidmens pavadinimą vietoj numatytojo teksto "Administratorius". Jei administratoriaus vaidmens pavadinimas tuščias, bus naudojamas numatytasis tekstas. Jei vartotojas turi kelis vaidmenis, bus naudojamas pirmasis vaidmuo.',
            'avatar_provider' => 'Avatar provider',
            'avatar_provider_help' => 'Choose how to generate avatars for comments. Gravatar requires email, UI Avatars generates based on name.',
            'avatar_provider_choices' => [
                'gravatar' => 'Gravatar (Email-based)',
                'ui_avatars' => 'UI Avatars (Name-based)',
            ],
            'email_optional' => 'Make email field optional',
            'email_optional_help' => 'When enabled, visitors can submit comments without providing an email address.',
            'show_website_field' => 'Rodyti svetainės lauką komentaro formoje',
            'show_website_field_help' => 'Kai išjungta, svetainės laukas bus paslėptas viešojoje komentaro formoje.',
            'default_avatar' => 'Numatytasis avataras',
            'default_avatar_helper' => 'Default avatar for the author when they don\'t have an avatar. If you don\'t select any image, it will be generated using the selected avatar provider. Image size should be 150x150px.',
        ],
    ],
];
