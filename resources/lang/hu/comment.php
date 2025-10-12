<?php

return [
    'common' => [
        'name' => 'Név',
        'email' => 'E-mail',
        'website' => 'Weboldal',
        'comment' => 'Hozzászólás',
        'email_placeholder' => 'Az e-mail címed nem lesz nyilvános.',
        'website_placeholder' => 'pl. https://example.com',
    ],

    'title' => 'Hozzászólások',
    'author' => 'Szerző',
    'responsed_to' => 'Válasz',
    'permalink' => 'Állandó hivatkozás',
    'url' => 'URL',
    'submitted_on' => 'Beküldve',
    'edit_comment' => 'Hozzászólás szerkesztése',
    'reply' => 'Válasz',
    'in_reply_to' => 'Válasz :name részére',

    'reply_modal' => [
        'title' => 'Válasz erre: :comment',
        'cancel' => 'Mégse',
    ],

    'allow_comments' => 'Hozzászólások engedélyezése',

    'front' => [
        'admin_badge' => 'Admin',

        'list' => [
            'title' => ':count hozzászólás',
            'reply' => 'Válasz',
            'reply_to' => 'Válasz :name részére',
            'cancel_reply' => 'Válasz törlése',
            'waiting_for_approval_message' => 'A hozzászólásod moderálásra vár. Ez egy előnézet, a hozzászólásod jóváhagyás után lesz látható.',
        ],

        'form' => [
            'description_email_optional' => 'Your email address will not be published. Email is optional. Required fields are marked *',
            'title' => 'Szólj hozzá',
            'description' => 'Az e-mail címed nem lesz nyilvános. A kötelező mezőket * jellel jelöltük',
            'cookie_consent' => 'Mentsd el a nevem, e-mail címem és weboldalam ebben a böngészőben a következő hozzászólásomhoz.',
            'submit' => 'Hozzászólás elküldése',
        ],

        'comment_success_message' => 'A hozzászólásod sikeresen elküldve.',
    ],

    'enums' => [
        'statuses' => [
            'pending' => 'Függőben',
            'approved' => 'Jóváhagyva',
            'spam' => 'Spam',
            'trash' => 'Lomtár',
        ],
    ],

    'settings' => [
        'title' => 'FOB Comment',
        'description' => 'FOB Comment beállítások konfigurálása',

        'form' => [
            'enable_recaptcha' => 'reCAPTCHA engedélyezése',
            'enable_recaptcha_help' => 'Engedélyezned kell a reCAPTCHA-t itt: :url a funkció használatához.',
            'captcha_setting_label' => 'Captcha beállítások',
            'comment_moderation' => 'A hozzászólásokat kézzel kell jóváhagyni',
            'comment_moderation_help' => 'Minden hozzászólást kézzel kell jóváhagynia egy adminisztrátornak, mielőtt megjelenne az oldalon.',
            'show_comment_cookie_consent' => 'Hozzászólás cookie jelölőnégyzet megjelenítése, amely lehetővé teszi a látogatóknak, hogy elmentsék adataikat a böngészőben',
            'auto_fill_comment_form' => 'Hozzászólási adatok automatikus kitöltése bejelentkezett felhasználók számára',
            'auto_fill_comment_form_help' => 'A hozzászólás űrlap automatikusan kitöltődik a felhasználó adataival, mint teljes név, e-mail stb., ha be vannak jelentkezve.',
            'comment_order' => 'Hozzászólások rendezése',
            'comment_order_help' => 'Válaszd ki a preferált sorrendet a hozzászólások megjelenítéséhez a listában.',
            'comment_order_choices' => [
                'asc' => 'Legrégebbi',
                'desc' => 'Legújabb',
            ],
            'display_admin_badge' => 'Admin jelvény megjelenítése az adminisztrátorok hozzászólásainál',
            'show_admin_role_name_for_admin_badge' => 'Admin szerepkör név megjelenítése az admin jelvénynél',
            'show_admin_role_name_for_admin_badge_helper' => 'Ha engedélyezve van, az admin jelvény az admin szerepkör nevét jeleníti meg az alapértelmezett "Admin" szöveg helyett. Ha az admin szerepkör neve üres, az alapértelmezett szöveg kerül felhasználásra. Ha a felhasználónak több szerepköre van, az első szerepkör kerül felhasználásra.',
            'avatar_provider' => 'Avatar provider',
            'avatar_provider_help' => 'Choose how to generate avatars for comments. Gravatar requires email, UI Avatars generates based on name.',
            'avatar_provider_choices' => [
                'gravatar' => 'Gravatar (Email-based)',
                'ui_avatars' => 'UI Avatars (Name-based)',
            ],
            'email_optional' => 'Make email field optional',
            'email_optional_help' => 'When enabled, visitors can submit comments without providing an email address.',
            'default_avatar' => 'Alapértelmezett avatar',
            'default_avatar_helper' => 'Default avatar for the author when they don\'t have an avatar. If you don\'t select any image, it will be generated using the selected avatar provider. Image size should be 150x150px.',
        ],
    ],
];
