<?php

return [
    'common' => [
        'name' => 'Név',
        'email' => 'E-mail',
        'phone' => 'Telefon',
        'website' => 'Weboldal',
        'comment' => 'Hozzászólás',
        'email_placeholder' => 'Az e-mail címed nem lesz nyilvános.',
        'name_placeholder' => 'Your name',
        'website_placeholder' => 'pl. https://example.com',
        'comment_placeholder' => 'Write your comment here...',
    ],

    'title' => 'Hozzászólások',
    'author' => 'Szerző',
    'responded_to' => 'Válasz',
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
            'title_singular' => ':count hozzászólás',
            'title_plural' => ':count hozzászólás',
            'reply' => 'Válasz',
            'reply_to' => 'Válasz :name részére',
            'cancel_reply' => 'Válasz törlése',
            'waiting_for_approval_message' => 'A hozzászólásod moderálásra vár. Ez egy előnézet, a hozzászólásod jóváhagyás után lesz látható.',
        ],

        'form' => [
            'description_email_optional' => 'Az e-mail címed nem lesz nyilvános. Az e-mail opcionális. A kötelező mezőket * jellel jelöltük',
            'title' => 'Szólj hozzá',
            'description' => 'Az e-mail címed nem lesz nyilvános. A kötelező mezőket * jellel jelöltük',
            'cookie_consent' => 'Mentsd el a nevem, e-mail címem és weboldalam ebben a böngészőben a következő hozzászólásomhoz.',
            'submit' => 'Hozzászólás elküldése',
            'login_required' => 'Be kell jelentkezned a hozzászólás közzétételéhez.',
            'login_to_comment' => 'Jelentkezz be a hozzászóláshoz',
        ],

        'comment_success_message' => 'A hozzászólásod sikeresen elküldve.',
        'rate_limit_error' => 'You are commenting too fast. Please wait :seconds seconds before posting another comment.',
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
            'disable_guest_comment' => 'Vendég hozzászólások letiltása',
            'disable_guest_comment_help' => 'Ha engedélyezve van, a felhasználóknak be kell jelentkezniük a hozzászólás közzétételéhez. Ez segít csökkenteni a spam hozzászólásokat.',
            'comment_moderation' => 'A hozzászólásokat kézzel kell jóváhagyni',
            'comment_moderation_help' => 'Minden hozzászólást kézzel kell jóváhagynia egy adminisztrátornak, mielőtt megjelenne az oldalon.',
            'rate_limit_seconds' => 'Rate limit (seconds)',
            'rate_limit_seconds_help' => 'Minimum time in seconds between comments from the same user. Set to 0 to disable rate limiting.',
            'show_comment_cookie_consent' => 'Hozzászólás cookie jelölőnégyzet megjelenítése, amely lehetővé teszi a látogatóknak, hogy elmentsék adataikat a böngészőben',
            'show_comment_cookie_consent_help' => 'When enabled, visitors can save their name, email, and website in their browser for future comments.',
            'auto_fill_comment_form' => 'Hozzászólási adatok automatikus kitöltése bejelentkezett felhasználók számára',
            'auto_fill_comment_form_help' => 'A hozzászólás űrlap automatikusan kitöltődik a felhasználó adataival, mint teljes név, e-mail stb., ha be vannak jelentkezve.',
            'comment_order' => 'Hozzászólások rendezése',
            'comment_order_help' => 'Válaszd ki a preferált sorrendet a hozzászólások megjelenítéséhez a listában.',
            'comment_order_choices' => [
                'asc' => 'Legrégebbi',
                'desc' => 'Legújabb',
            ],
            'display_admin_badge' => 'Admin jelvény megjelenítése az adminisztrátorok hozzászólásainál',
            'display_admin_badge_help' => 'When enabled, comments from admins will show an "Admin" badge next to their name.',
            'show_admin_role_name_for_admin_badge' => 'Admin szerepkör név megjelenítése az admin jelvénynél',
            'show_admin_role_name_for_admin_badge_helper' => 'Ha engedélyezve van, az admin jelvény az admin szerepkör nevét jeleníti meg az alapértelmezett "Admin" szöveg helyett. Ha az admin szerepkör neve üres, az alapértelmezett szöveg kerül felhasználásra. Ha a felhasználónak több szerepköre van, az első szerepkör kerül felhasználásra.',
            'avatar_provider' => 'Avatar szolgáltató',
            'avatar_provider_help' => 'Válaszd ki, hogyan generálódjanak az avatarok a hozzászólásokhoz. A Gravatar e-mailt igényel, a UI Avatars név alapján generál.',
            'avatar_provider_choices' => [
                'gravatar' => 'Gravatar (E-mail alapú)',
                'ui_avatars' => 'UI Avatars (Név alapú)',
            ],
            'email_optional' => 'E-mail mező opcionálissá tétele',
            'email_optional_help' => 'Ha engedélyezve van, a látogatók e-mail cím megadása nélkül is beküldhetnek hozzászólásokat.',
            'show_website_field' => 'Webhelymező megjelenítése a hozzászólás űrlapon',
            'show_website_field_help' => 'Letiltáskor a webhelymező elrejtésre kerül a nyilvános hozzászólás űrlapról.',
            'default_avatar' => 'Alapértelmezett avatar',
            'default_avatar_helper' => 'Alapértelmezett avatar a szerzőnek, ha nincs avatarja. Ha nem választasz képet, a kiválasztott avatar szolgáltató segítségével lesz generálva. A kép mérete 150x150px kell legyen.',
        ],
    ],
];
