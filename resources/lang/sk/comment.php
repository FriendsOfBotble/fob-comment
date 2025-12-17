<?php

return [
    'common' => [
        'name' => 'Meno',
        'email' => 'E-mail',
        'phone' => 'Telefón',
        'website' => 'Webová stránka',
        'comment' => 'Komentár',
        'email_placeholder' => 'Vaša e-mailová adresa nebude zverejnená.',
        'website_placeholder' => 'napr. https://example.com',
    ],

    'title' => 'Komentáre',
    'author' => 'Autor',
    'responded_to' => 'Odpoveď na',
    'permalink' => 'Trvalý odkaz',
    'url' => 'URL',
    'submitted_on' => 'Odoslané',
    'edit_comment' => 'Upraviť komentár',
    'reply' => 'Odpovedať',
    'in_reply_to' => 'V odpovedi na :name',

    'reply_modal' => [
        'title' => 'Odpovedať na :comment',
        'cancel' => 'Zrušiť',
    ],

    'allow_comments' => 'Povoliť komentáre',

    'front' => [
        'admin_badge' => 'Správca',

        'list' => [
            'title' => ':count komentár|:count komentáre|:count komentárov',
            'title_singular' => ':count komentár',
            'title_plural' => ':count komentárov',
            'reply' => 'Odpovedať',
            'reply_to' => 'Odpovedať :name',
            'cancel_reply' => 'Zrušiť odpoveď',
            'waiting_for_approval_message' => 'Váš komentár čaká na schválenie. Toto je náhľad, váš komentár bude viditeľný po schválení.',
        ],

        'form' => [
            'description_email_optional' => 'Your email address will not be published. Email is optional. Required fields are marked *',
            'title' => 'Napísať komentár',
            'description' => 'Vaša e-mailová adresa nebude zverejnená. Povinné polia sú označené *',
            'cookie_consent' => 'Uložiť moje meno, e-mail a webovú stránku v tomto prehliadači pre ďalší komentár.',
            'submit' => 'Odoslať komentár',
        ],

        'comment_success_message' => 'Váš komentár bol úspešne odoslaný.',
    ],

    'enums' => [
        'statuses' => [
            'pending' => 'Čaká na schválenie',
            'approved' => 'Schválené',
            'spam' => 'Spam',
            'trash' => 'Kôš',
        ],
    ],

    'settings' => [
        'title' => 'FOB Comment',
        'description' => 'Konfigurácia nastavení pre FOB Comment',

        'form' => [
            'enable_recaptcha' => 'Povoliť reCAPTCHA',
            'enable_recaptcha_help' => 'Pre použitie tejto funkcie musíte povoliť reCAPTCHA na :url.',
            'captcha_setting_label' => 'Nastavenia Captcha',
            'comment_moderation' => 'Komentáre musia byť schválené manuálne',
            'comment_moderation_help' => 'Všetky komentáre musia byť manuálne schválené správcom pred zobrazením na webe.',
            'show_comment_cookie_consent' => 'Zobraziť zaškrtávacie políčko cookies komentárov, umožňujúce návštevníkom uložiť svoje informácie v prehliadači',
            'auto_fill_comment_form' => 'Automaticky vyplniť údaje komentára pre prihlásených používateľov',
            'auto_fill_comment_form_help' => 'Formulár komentára bude automaticky vyplnený používateľskými údajmi ako celé meno, e-mail atď., ak sú prihlásení.',
            'comment_order' => 'Zoradiť komentáre podľa',
            'comment_order_help' => 'Vyberte preferované poradie pre zobrazenie komentárov v zozname.',
            'comment_order_choices' => [
                'asc' => 'Najstaršie',
                'desc' => 'Najnovšie',
            ],
            'display_admin_badge' => 'Zobraziť odznak správcu pre komentáre správcov',
            'show_admin_role_name_for_admin_badge' => 'Zobraziť názov roly správcu pre odznak správcu',
            'show_admin_role_name_for_admin_badge_helper' => 'Ak je povolené, odznak správcu zobrazí názov roly správcu namiesto predvoleného textu "Správca". Ak je názov roly správcu prázdny, použije sa predvolený text. Ak má používateľ viacero rolí, použije sa prvá rola.',
            'avatar_provider' => 'Avatar provider',
            'avatar_provider_help' => 'Choose how to generate avatars for comments. Gravatar requires email, UI Avatars generates based on name.',
            'avatar_provider_choices' => [
                'gravatar' => 'Gravatar (Email-based)',
                'ui_avatars' => 'UI Avatars (Name-based)',
            ],
            'email_optional' => 'Make email field optional',
            'email_optional_help' => 'When enabled, visitors can submit comments without providing an email address.',
            'show_website_field' => 'Zobraziť pole webu vo formulári komentára',
            'show_website_field_help' => 'Keď je vypnuté, pole webu bude skryté z verejného formulára komentárov.',
            'default_avatar' => 'Predvolený avatar',
            'default_avatar_helper' => 'Default avatar for the author when they don\'t have an avatar. If you don\'t select any image, it will be generated using the selected avatar provider. Image size should be 150x150px.',
        ],
    ],
];
