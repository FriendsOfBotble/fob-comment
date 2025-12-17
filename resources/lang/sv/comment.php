<?php

return [
    'common' => [
        'name' => 'Namn',
        'email' => 'E-post',
        'phone' => 'Telefon',
        'website' => 'Webbplats',
        'comment' => 'Kommentar',
        'email_placeholder' => 'Din e-postadress publiceras inte.',
        'website_placeholder' => 't.ex. https://example.com',
    ],

    'title' => 'Kommentarer',
    'author' => 'Författare',
    'responded_to' => 'Svar till',
    'permalink' => 'Permalänk',
    'url' => 'URL',
    'submitted_on' => 'Inskickad',
    'edit_comment' => 'Redigera kommentar',
    'reply' => 'Svara',
    'in_reply_to' => 'Som svar till :name',

    'reply_modal' => [
        'title' => 'Svara på :comment',
        'cancel' => 'Avbryt',
    ],

    'allow_comments' => 'Tillåt kommentarer',

    'front' => [
        'admin_badge' => 'Admin',

        'list' => [
            'title' => ':count kommentar|:count kommentarer',
            'title_singular' => ':count kommentar',
            'title_plural' => ':count kommentarer',
            'reply' => 'Svara',
            'reply_to' => 'Svara :name',
            'cancel_reply' => 'Avbryt svar',
            'waiting_for_approval_message' => 'Din kommentar väntar på godkännande. Detta är en förhandsgranskning, din kommentar kommer att synas efter godkännande.',
        ],

        'form' => [
            'description_email_optional' => 'Din e-postadress publiceras inte. E-post är valfritt. Obligatoriska fält är märkta *',
            'title' => 'Lämna en kommentar',
            'description' => 'Din e-postadress publiceras inte. Obligatoriska fält är märkta *',
            'cookie_consent' => 'Spara mitt namn, e-post och webbplats i denna webbläsare till nästa gång jag kommenterar.',
            'submit' => 'Skicka kommentar',
        ],

        'comment_success_message' => 'Din kommentar har skickats.',
    ],

    'enums' => [
        'statuses' => [
            'pending' => 'Väntar',
            'approved' => 'Godkänd',
            'spam' => 'Spam',
            'trash' => 'Papperskorg',
        ],
    ],

    'settings' => [
        'title' => 'FOB Comment',
        'description' => 'Konfigurera inställningar för FOB Comment',

        'form' => [
            'enable_recaptcha' => 'Aktivera reCAPTCHA',
            'enable_recaptcha_help' => 'Du måste aktivera reCAPTCHA i :url för att använda denna funktion.',
            'captcha_setting_label' => 'Captcha-inställningar',
            'comment_moderation' => 'Kommentarer måste godkännas manuellt',
            'comment_moderation_help' => 'Alla kommentarer måste godkännas manuellt av en administratör innan de visas på webbplatsen.',
            'show_comment_cookie_consent' => 'Visa kryssruta för kommentarscookies, vilket låter besökare spara sin information i webbläsaren',
            'auto_fill_comment_form' => 'Fyll i kommentarsdata automatiskt för inloggade användare',
            'auto_fill_comment_form_help' => 'Kommentarsformuläret fylls i automatiskt med användardata som fullständigt namn, e-post etc. om de är inloggade.',
            'comment_order' => 'Sortera kommentarer efter',
            'comment_order_help' => 'Välj önskad ordning för att visa kommentarer i listan.',
            'comment_order_choices' => [
                'asc' => 'Äldsta',
                'desc' => 'Nyaste',
            ],
            'display_admin_badge' => 'Visa administratörsmärke för administratörskommentarer',
            'show_admin_role_name_for_admin_badge' => 'Visa administratörsrollnamn för administratörsmärket',
            'show_admin_role_name_for_admin_badge_helper' => 'Om aktiverat kommer administratörsmärket att visa administratörsrollnamnet istället för standardtexten "Admin". Om administratörsrollnamnet är tomt används standardtexten. Om användaren har flera roller används den första rollen.',
            'avatar_provider' => 'Avatarleverantör',
            'avatar_provider_help' => 'Välj hur avatarer ska genereras för kommentarer. Gravatar kräver e-post, UI Avatars genererar baserat på namn.',
            'avatar_provider_choices' => [
                'gravatar' => 'Gravatar (E-postbaserad)',
                'ui_avatars' => 'UI Avatars (Namnbaserad)',
            ],
            'email_optional' => 'Gör e-postfältet valfritt',
            'email_optional_help' => 'När aktiverat kan besökare skicka kommentarer utan att ange en e-postadress.',
            'show_website_field' => 'Visa webbplatsfält i kommentarsformuläret',
            'show_website_field_help' => 'När den är inaktiverad döljs webbplatsfältet i det offentliga kommentarsformuläret.',
            'default_avatar' => 'Standardavatar',
            'default_avatar_helper' => 'Standardavatar för författaren när de inte har en avatar. Om du inte väljer någon bild genereras den med den valda avatarleverantören. Bildstorleken bör vara 150x150px.',
        ],
    ],
];
