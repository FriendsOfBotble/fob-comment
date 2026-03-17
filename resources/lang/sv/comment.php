<?php

return [
    'common' => [
        'name' => 'Namn',
        'email' => 'E-post',
        'phone' => 'Telefon',
        'website' => 'Webbplats',
        'comment' => 'Kommentar',
        'email_placeholder' => 'Din e-postadress publiceras inte.',
        'name_placeholder' => 'Your name',
        'website_placeholder' => 't.ex. https://example.com',
        'comment_placeholder' => 'Write your comment here...',
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
            'delete' => 'Radera',
            'delete_confirm' => 'Är du säker på att du vill radera denna kommentar?',
        ],

        'form' => [
            'description_email_optional' => 'Din e-postadress publiceras inte. E-post är valfritt. Obligatoriska fält är märkta *',
            'title' => 'Lämna en kommentar',
            'description' => 'Din e-postadress publiceras inte. Obligatoriska fält är märkta *',
            'cookie_consent' => 'Spara mitt namn, e-post och webbplats i denna webbläsare till nästa gång jag kommenterar.',
            'submit' => 'Skicka kommentar',
            'login_required' => 'Du måste vara inloggad för att publicera en kommentar.',
            'login_to_comment' => 'Logga in för att kommentera',
        ],

        'comment_success_message' => 'Din kommentar har skickats.',
        'rate_limit_error' => 'You are commenting too fast. Please wait :seconds seconds before posting another comment.',
        'comment_deleted_message' => 'Din kommentar har raderats.',
        'delete_not_authorized' => 'Du är inte behörig att radera denna kommentar.',
    ],

    'enums' => [
        'statuses' => [
            'pending' => 'Väntar',
            'approved' => 'Godkänd',
            'spam' => 'Spam',
            'trash' => 'Papperskorg',
        ],
    ],

    'email_templates' => [
        'admin_new_comment_title' => 'Ny kommentar mottagen',
        'admin_new_comment_message' => ':comment_name lämnade en ny kommentar',
        'comment_reply_title' => 'Nytt svar på din kommentar',
        'comment_reply_message' => ':reply_name svarade på din kommentar',
        'commented_on' => 'Kommenterade på',
        'view_comment' => 'Visa kommentar',
    ],

    'settings' => [
        'title' => 'FOB Comment',
        'description' => 'Konfigurera inställningar för FOB Comment',

        'email' => [
            'templates' => [
                'title' => 'Kommentar',
                'description' => 'E-postmallar för kommentarsaviseringar',
                'admin_new_comment' => [
                    'title' => 'Adminavisering för ny kommentar',
                    'description' => 'Skicka e-post till admin när en ny kommentar publiceras',
                    'subject' => 'Ny kommentar på {{ site_title }}',
                    'comment_name_description' => 'Kommentarsförfattarens namn',
                    'comment_email_description' => 'Kommentarsförfattarens e-post',
                    'comment_content_description' => 'Kommentarsinnehåll',
                    'comment_reference_description' => 'Sidan/inlägget som kommenteras',
                    'comment_url_description' => 'URL för att visa kommentaren',
                ],
                'comment_reply' => [
                    'title' => 'Meddela kommentator om svar',
                    'description' => 'Skicka e-post till kommentator när någon svarar på deras kommentar',
                    'subject' => 'Nytt svar på din kommentar på {{ site_title }}',
                    'comment_name_description' => 'Ursprunglig kommentators namn',
                    'reply_name_description' => 'Svarsförfattarens namn',
                    'reply_content_description' => 'Svarsinnehåll',
                    'comment_reference_description' => 'Sidan/inlägget som kommenteras',
                    'comment_url_description' => 'URL för att visa kommentaren',
                ],
            ],
        ],

        'form' => [
            'enable_recaptcha' => 'Aktivera reCAPTCHA',
            'enable_recaptcha_help' => 'Du måste aktivera reCAPTCHA i :url för att använda denna funktion.',
            'captcha_setting_label' => 'Captcha-inställningar',
            'disable_guest_comment' => 'Inaktivera gästkommentarer',
            'disable_guest_comment_help' => 'När aktiverat måste användare vara inloggade för att publicera kommentarer. Detta hjälper till att minska skräppostkommentarer.',
            'comment_moderation' => 'Kommentarer måste godkännas manuellt',
            'comment_moderation_help' => 'Alla kommentarer måste godkännas manuellt av en administratör innan de visas på webbplatsen.',
            'rate_limit_seconds' => 'Rate limit (seconds)',
            'rate_limit_seconds_help' => 'Minimum time in seconds between comments from the same user. Set to 0 to disable rate limiting.',
            'show_comment_cookie_consent' => 'Visa kryssruta för kommentarscookies, vilket låter besökare spara sin information i webbläsaren',
            'show_comment_cookie_consent_help' => 'When enabled, visitors can save their name, email, and website in their browser for future comments.',
            'auto_fill_comment_form' => 'Fyll i kommentarsdata automatiskt för inloggade användare',
            'auto_fill_comment_form_help' => 'Kommentarsformuläret fylls i automatiskt med användardata som fullständigt namn, e-post etc. om de är inloggade.',
            'comment_order' => 'Sortera kommentarer efter',
            'comment_order_help' => 'Välj önskad ordning för att visa kommentarer i listan.',
            'comment_order_choices' => [
                'asc' => 'Äldsta',
                'desc' => 'Nyaste',
            ],
            'display_admin_badge' => 'Visa administratörsmärke för administratörskommentarer',
            'display_admin_badge_help' => 'When enabled, comments from admins will show an "Admin" badge next to their name.',
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
            'allow_author_delete' => 'Tillåt författare att radera sina kommentarer',
            'allow_author_delete_help' => 'När aktiverat kan inloggade användare radera sina egna kommentarer.',
            'primary_color' => 'Primärfärg',
            'primary_color_helper' => 'Primärfärg för knappar, kryssrutor och märken. Lämna tomt för att använda temats primärfärg.',
            'primary_color_hover' => 'Primär hoverfärg',
            'primary_color_hover_helper' => 'Hoverfärg för knappar. Lämna tomt för att använda en mörkare nyans av primärfärgen.',
        ],
    ],
];
