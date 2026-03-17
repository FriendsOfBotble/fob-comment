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
            'delete' => 'Törlés',
            'delete_confirm' => 'Biztosan törölni szeretnéd ezt a hozzászólást?',
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
        'rate_limit_error' => 'Túl gyorsan hozzászólsz. Kérjük, várj :seconds másodpercet a következő hozzászólás előtt.',
        'comment_deleted_message' => 'A hozzászólásod sikeresen törölve.',
        'delete_not_authorized' => 'Nincs jogosultságod törölni ezt a hozzászólást.',
    ],

    'enums' => [
        'statuses' => [
            'pending' => 'Függőben',
            'approved' => 'Jóváhagyva',
            'spam' => 'Spam',
            'trash' => 'Lomtár',
        ],
    ],

    'email_templates' => [
        'admin_new_comment_title' => 'Új hozzászólás érkezett',
        'admin_new_comment_message' => ':comment_name új hozzászólást hagyott',
        'comment_reply_title' => 'Új válasz a hozzászólásodra',
        'comment_reply_message' => ':reply_name válaszolt a hozzászólásodra',
        'commented_on' => 'Hozzászólt',
        'view_comment' => 'Hozzászólás megtekintése',
    ],

    'settings' => [
        'title' => 'FOB Comment',
        'description' => 'FOB Comment beállítások konfigurálása',

        'email' => [
            'templates' => [
                'title' => 'Hozzászólás',
                'description' => 'E-mail sablonok hozzászólás-értesítésekhez',
                'admin_new_comment' => [
                    'title' => 'Adminisztrátori értesítés új hozzászólásról',
                    'description' => 'E-mail küldése az adminisztrátornak új hozzászólás esetén',
                    'subject' => 'Új hozzászólás a(z) {{ site_title }} oldalon',
                    'comment_name_description' => 'Hozzászóló neve',
                    'comment_email_description' => 'Hozzászóló e-mail címe',
                    'comment_content_description' => 'Hozzászólás tartalma',
                    'comment_reference_description' => 'Az oldal/bejegyzés, amelyhez hozzászóltak',
                    'comment_url_description' => 'URL a hozzászólás megtekintéséhez',
                ],
                'comment_reply' => [
                    'title' => 'Értesítés a hozzászólónak válaszról',
                    'description' => 'E-mail küldése a hozzászólónak, ha valaki válaszol a hozzászólására',
                    'subject' => 'Új válasz a hozzászólásodra a(z) {{ site_title }} oldalon',
                    'comment_name_description' => 'Eredeti hozzászóló neve',
                    'reply_name_description' => 'Válaszoló neve',
                    'reply_content_description' => 'Válasz tartalma',
                    'comment_reference_description' => 'Az oldal/bejegyzés, amelyhez hozzászóltak',
                    'comment_url_description' => 'URL a hozzászólás megtekintéséhez',
                ],
            ],
        ],

        'form' => [
            'enable_recaptcha' => 'reCAPTCHA engedélyezése',
            'enable_recaptcha_help' => 'Engedélyezned kell a reCAPTCHA-t itt: :url a funkció használatához.',
            'captcha_setting_label' => 'Captcha beállítások',
            'disable_guest_comment' => 'Vendég hozzászólások letiltása',
            'disable_guest_comment_help' => 'Ha engedélyezve van, a felhasználóknak be kell jelentkezniük a hozzászólás közzétételéhez. Ez segít csökkenteni a spam hozzászólásokat.',
            'comment_moderation' => 'A hozzászólásokat kézzel kell jóváhagyni',
            'comment_moderation_help' => 'Minden hozzászólást kézzel kell jóváhagynia egy adminisztrátornak, mielőtt megjelenne az oldalon.',
            'rate_limit_seconds' => 'Sebességkorlát (másodperc)',
            'rate_limit_seconds_help' => 'Minimális idő másodpercekben az azonos felhasználótól érkező hozzászólások között. Állítsd 0-ra a sebességkorlát letiltásához.',
            'show_comment_cookie_consent' => 'Hozzászólás cookie jelölőnégyzet megjelenítése, amely lehetővé teszi a látogatóknak, hogy elmentsék adataikat a böngészőben',
            'show_comment_cookie_consent_help' => 'Ha engedélyezve van, a látogatók elmenthetik nevüket, e-mail címüket és weboldalukat a böngészőben a jövőbeni hozzászólásokhoz.',
            'auto_fill_comment_form' => 'Hozzászólási adatok automatikus kitöltése bejelentkezett felhasználók számára',
            'auto_fill_comment_form_help' => 'A hozzászólás űrlap automatikusan kitöltődik a felhasználó adataival, mint teljes név, e-mail stb., ha be vannak jelentkezve.',
            'comment_order' => 'Hozzászólások rendezése',
            'comment_order_help' => 'Válaszd ki a preferált sorrendet a hozzászólások megjelenítéséhez a listában.',
            'comment_order_choices' => [
                'asc' => 'Legrégebbi',
                'desc' => 'Legújabb',
            ],
            'display_admin_badge' => 'Admin jelvény megjelenítése az adminisztrátorok hozzászólásainál',
            'display_admin_badge_help' => 'Ha engedélyezve van, az adminisztrátorok hozzászólásainál "Admin" jelvény jelenik meg a nevük mellett.',
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
            'allow_author_delete' => 'Szerzők saját hozzászólásainak törlésének engedélyezése',
            'allow_author_delete_help' => 'Ha engedélyezve van, a bejelentkezett felhasználók törölhetik saját hozzászólásaikat.',
            'primary_color' => 'Elsődleges szín',
            'primary_color_helper' => 'Elsődleges szín a gombokhoz, jelölőnégyzetekhez és jelvényekhez. Hagyd üresen a téma elsődleges színének használatához.',
            'primary_color_hover' => 'Elsődleges rámutatási szín',
            'primary_color_hover_helper' => 'Rámutatási szín a gombokhoz. Hagyd üresen az elsődleges szín sötétebb árnyalatának használatához.',
        ],
    ],
];
