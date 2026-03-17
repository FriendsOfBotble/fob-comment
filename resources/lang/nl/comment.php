<?php

return [
    'common' => [
        'name' => 'Naam',
        'email' => 'E-mail',
        'phone' => 'Telefoon',
        'website' => 'Website',
        'comment' => 'Reactie',
        'email_placeholder' => 'Je e-mailadres wordt niet gepubliceerd.',
        'name_placeholder' => 'Uw naam',
        'website_placeholder' => 'bijv. https://example.com',
        'comment_placeholder' => 'Schrijf hier uw opmerking...',
    ],

    'title' => 'Reacties',
    'author' => 'Auteur',
    'responded_to' => 'Reactie op',
    'permalink' => 'Permalink',
    'url' => 'URL',
    'submitted_on' => 'Ingediend op',
    'edit_comment' => 'Reactie bewerken',
    'reply' => 'Beantwoorden',
    'in_reply_to' => 'Als antwoord op :name',

    'reply_modal' => [
        'title' => 'Antwoord op :comment',
        'cancel' => 'Annuleren',
    ],

    'allow_comments' => 'Reacties toestaan',

    'front' => [
        'admin_badge' => 'Beheerder',

        'list' => [
            'title' => ':count reactie|:count reacties',
            'title_singular' => ':count reactie',
            'title_plural' => ':count reacties',
            'reply' => 'Beantwoorden',
            'reply_to' => 'Antwoord aan :name',
            'cancel_reply' => 'Antwoord annuleren',
            'delete' => 'Verwijderen',
            'delete_confirm' => 'Weet u zeker dat u deze reactie wilt verwijderen?',
            'waiting_for_approval_message' => 'Je reactie wacht op goedkeuring. Dit is een voorbeeld, je reactie wordt zichtbaar na goedkeuring.',
        ],

        'form' => [
            'description_email_optional' => 'Je e-mailadres wordt niet gepubliceerd. E-mail is optioneel. Verplichte velden zijn gemarkeerd met *',
            'title' => 'Laat een reactie achter',
            'description' => 'Je e-mailadres wordt niet gepubliceerd. Verplichte velden zijn gemarkeerd met *',
            'cookie_consent' => 'Bewaar mijn naam, e-mail en website in deze browser voor de volgende keer wanneer ik een reactie plaats.',
            'submit' => 'Reactie plaatsen',
            'login_required' => 'U moet ingelogd zijn om een reactie te plaatsen.',
            'login_to_comment' => 'Inloggen om te reageren',
        ],

        'comment_success_message' => 'Je reactie is succesvol verzonden.',
        'rate_limit_error' => 'U reageert te snel. Wacht :seconds seconden voordat u nog een reactie plaatst.',
        'comment_deleted_message' => 'Uw reactie is succesvol verwijderd.',
        'delete_not_authorized' => 'U bent niet gemachtigd om deze reactie te verwijderen.',
    ],

    'enums' => [
        'statuses' => [
            'pending' => 'In afwachting',
            'approved' => 'Goedgekeurd',
            'spam' => 'Spam',
            'trash' => 'Prullenbak',
        ],
    ],

    'email_templates' => [
        'admin_new_comment_title' => 'Nieuwe reactie ontvangen',
        'admin_new_comment_message' => ':comment_name heeft een nieuwe reactie achtergelaten',
        'comment_reply_title' => 'Nieuw antwoord op uw reactie',
        'comment_reply_message' => ':reply_name heeft op uw reactie gereageerd',
        'commented_on' => 'Gereageerd op',
        'view_comment' => 'Reactie bekijken',
    ],

    'settings' => [
        'title' => 'FOB Comment',
        'description' => 'Configureer instellingen voor FOB Comment',

        'email' => [
            'templates' => [
                'title' => 'Reactie',
                'description' => 'E-mailsjablonen voor reactiemeldingen',
                'admin_new_comment' => [
                    'title' => 'Beheerdersmelding voor nieuwe reactie',
                    'description' => 'Stuur een e-mail naar de beheerder wanneer een nieuwe reactie wordt geplaatst',
                    'subject' => 'Nieuwe reactie op {{ site_title }}',
                    'comment_name_description' => 'Naam van de auteur van de reactie',
                    'comment_email_description' => 'E-mail van de auteur van de reactie',
                    'comment_content_description' => 'Inhoud van de reactie',
                    'comment_reference_description' => 'De pagina/post waarop gereageerd wordt',
                    'comment_url_description' => 'URL om de reactie te bekijken',
                ],
                'comment_reply' => [
                    'title' => 'Reageerder op de hoogte stellen van een antwoord',
                    'description' => 'Stuur een e-mail naar de reageerder wanneer iemand op zijn reactie antwoordt',
                    'subject' => 'Nieuw antwoord op uw reactie op {{ site_title }}',
                    'comment_name_description' => 'Naam van de oorspronkelijke reageerder',
                    'reply_name_description' => 'Naam van de auteur van het antwoord',
                    'reply_content_description' => 'Inhoud van het antwoord',
                    'comment_reference_description' => 'De pagina/post waarop gereageerd wordt',
                    'comment_url_description' => 'URL om de reactie te bekijken',
                ],
            ],
        ],

        'form' => [
            'enable_recaptcha' => 'reCAPTCHA inschakelen',
            'enable_recaptcha_help' => 'Je moet reCAPTCHA inschakelen in :url om deze functie te gebruiken.',
            'captcha_setting_label' => 'Captcha-instellingen',
            'disable_guest_comment' => 'Gastreacties uitschakelen',
            'disable_guest_comment_help' => 'Wanneer ingeschakeld, moeten gebruikers ingelogd zijn om reacties te plaatsen. Dit helpt om spam reacties te verminderen.',
            'comment_moderation' => 'Reacties moeten handmatig worden goedgekeurd',
            'comment_moderation_help' => 'Alle reacties moeten handmatig door een beheerder worden goedgekeurd voordat ze op de frontend worden weergegeven.',
            'rate_limit_seconds' => 'Snelheidslimiet (seconden)',
            'rate_limit_seconds_help' => 'Minimale tijd in seconden tussen reacties van dezelfde gebruiker. Stel in op 0 om de snelheidslimiet uit te schakelen.',
            'show_comment_cookie_consent' => 'Toon cookie-checkbox voor reacties, zodat bezoekers hun informatie in de browser kunnen opslaan',
            'show_comment_cookie_consent_help' => 'Indien ingeschakeld, kunnen bezoekers hun naam, e-mail en website opslaan in hun browser voor toekomstige reacties.',
            'auto_fill_comment_form' => 'Automatisch reactiegegevens invullen voor ingelogde gebruikers',
            'auto_fill_comment_form_help' => 'Het reactieformulier wordt automatisch ingevuld met gebruikersgegevens zoals volledige naam, e-mail, enz., als ze zijn ingelogd.',
            'comment_order' => 'Sorteer reacties op',
            'comment_order_help' => 'Kies de gewenste volgorde voor het weergeven van reacties in de lijst.',
            'comment_order_choices' => [
                'asc' => 'Oudste',
                'desc' => 'Nieuwste',
            ],
            'display_admin_badge' => 'Beheerderbadge weergeven voor beheerdersreacties',
            'display_admin_badge_help' => 'Indien ingeschakeld, tonen reacties van beheerders een "Admin"-badge naast hun naam.',
            'show_admin_role_name_for_admin_badge' => 'Toon beheerdersrolnaam voor beheerderbadge',
            'show_admin_role_name_for_admin_badge_helper' => 'Indien ingeschakeld, zal de beheerderbadge de naam van de beheerdersrol weergeven in plaats van de standaardtekst "Beheerder". Als de beheerdersrolnaam leeg is, wordt de standaardtekst gebruikt. Als de gebruiker meerdere rollen heeft, wordt de eerste rol gebruikt.',
            'avatar_provider' => 'Avatar-provider',
            'avatar_provider_help' => 'Kies hoe avatars voor reacties worden gegenereerd. Gravatar vereist e-mail, UI Avatars genereert op basis van naam.',
            'avatar_provider_choices' => [
                'gravatar' => 'Gravatar (Op basis van e-mail)',
                'ui_avatars' => 'UI Avatars (Op basis van naam)',
            ],
            'email_optional' => 'E-mailveld optioneel maken',
            'email_optional_help' => 'Wanneer ingeschakeld, kunnen bezoekers reacties indienen zonder een e-mailadres op te geven.',
            'show_website_field' => 'Websiteveld weergeven in het reactieformulier',
            'show_website_field_help' => 'Wanneer uitgeschakeld, wordt het websiteveld verborgen op het openbare reactieformulier.',
            'default_avatar' => 'Standaard avatar',
            'default_avatar_helper' => 'Standaard avatar voor de auteur wanneer ze geen avatar hebben. Als je geen afbeelding selecteert, wordt deze gegenereerd met behulp van de geselecteerde avatar-provider. Afbeeldingsgrootte moet 150x150px zijn.',
            'allow_author_delete' => 'Auteurs toestaan hun reacties te verwijderen',
            'allow_author_delete_help' => 'Wanneer ingeschakeld, kunnen ingelogde gebruikers hun eigen reacties verwijderen.',
            'primary_color' => 'Primaire kleur',
            'primary_color_helper' => 'Primaire kleur voor knoppen, selectievakjes en badges. Laat leeg om de primaire kleur van het thema te gebruiken.',
            'primary_color_hover' => 'Primaire zweefkleur',
            'primary_color_hover_helper' => 'Zweefkleur voor knoppen. Laat leeg om een donkerdere tint van de primaire kleur te gebruiken.',
        ],
    ],
];
