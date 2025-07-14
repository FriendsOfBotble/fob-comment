<?php

return [
    'common' => [
        'name' => 'Vardas',
        'email' => 'El. paštas',
        'website' => 'Svetainė',
        'comment' => 'Komentaras',
        'email_placeholder' => 'Jūsų el. pašto adresas nebus skelbiamas.',
        'website_placeholder' => 'pvz. https://example.com',
    ],

    'title' => 'Komentarai',
    'author' => 'Autorius',
    'responsed_to' => 'Atsakymas į',
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
            'reply' => 'Atsakyti',
            'reply_to' => 'Atsakyti :name',
            'cancel_reply' => 'Atšaukti atsakymą',
            'waiting_for_approval_message' => 'Jūsų komentaras laukia patvirtinimo. Tai peržiūra, jūsų komentaras bus matomas po patvirtinimo.',
        ],

        'form' => [
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
            'default_avatar' => 'Numatytasis avataras',
            'default_avatar_helper' => 'Numatytasis avataras autoriui, kai jis neturi avataro. Jei nepasirinksite jokio paveikslėlio, jis bus sugeneruotas naudojant Gravatar. Paveikslėlio dydis turėtų būti 150x150px.',
        ],
    ],
];