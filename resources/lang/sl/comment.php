<?php

return [
    'common' => [
        'name' => 'Ime',
        'email' => 'E-pošta',
        'phone' => 'Telefon',
        'website' => 'Spletna stran',
        'comment' => 'Komentar',
        'email_placeholder' => 'Vaš e-poštni naslov ne bo objavljen.',
        'name_placeholder' => 'Your name',
        'website_placeholder' => 'npr. https://example.com',
        'comment_placeholder' => 'Write your comment here...',
    ],

    'title' => 'Komentarji',
    'author' => 'Avtor',
    'responded_to' => 'Odgovor na',
    'permalink' => 'Stalna povezava',
    'url' => 'URL',
    'submitted_on' => 'Poslano',
    'edit_comment' => 'Uredi komentar',
    'reply' => 'Odgovori',
    'in_reply_to' => 'Kot odgovor na :name',

    'reply_modal' => [
        'title' => 'Odgovori na :comment',
        'cancel' => 'Prekliči',
    ],

    'allow_comments' => 'Dovoli komentarje',

    'front' => [
        'admin_badge' => 'Skrbnik',

        'list' => [
            'title' => ':count komentar|:count komentarja|:count komentarji|:count komentarjev',
            'title_singular' => ':count komentar',
            'title_plural' => ':count komentarjev',
            'reply' => 'Odgovori',
            'reply_to' => 'Odgovori :name',
            'cancel_reply' => 'Prekliči odgovor',
            'waiting_for_approval_message' => 'Vaš komentar čaka na odobritev. To je predogled, vaš komentar bo viden po odobritvi.',
            'delete' => 'Izbriši',
            'delete_confirm' => 'Ste prepričani, da želite izbrisati ta komentar?',
        ],

        'form' => [
            'description_email_optional' => 'Your email address will not be published. Email is optional. Required fields are marked *',
            'title' => 'Pustite komentar',
            'description' => 'Vaš e-poštni naslov ne bo objavljen. Obvezna polja so označena z *',
            'cookie_consent' => 'Shrani moje ime, e-pošto in spletno stran v ta brskalnik za naslednji komentar.',
            'submit' => 'Pošlji komentar',
            'login_required' => 'Za objavo komentarja morate biti prijavljeni.',
            'login_to_comment' => 'Prijavite se za komentiranje',
        ],

        'comment_success_message' => 'Vaš komentar je bil uspešno poslan.',
        'rate_limit_error' => 'You are commenting too fast. Please wait :seconds seconds before posting another comment.',
        'comment_deleted_message' => 'Vaš komentar je bil uspešno izbrisan.',
        'delete_not_authorized' => 'Nimate dovoljenja za brisanje tega komentarja.',
    ],

    'enums' => [
        'statuses' => [
            'pending' => 'V čakanju',
            'approved' => 'Odobreno',
            'spam' => 'Neželena pošta',
            'trash' => 'Smeti',
        ],
    ],

    'email_templates' => [
        'admin_new_comment_title' => 'Prejeli ste nov komentar',
        'admin_new_comment_message' => ':comment_name je pustil nov komentar',
        'comment_reply_title' => 'Nov odgovor na vaš komentar',
        'comment_reply_message' => ':reply_name je odgovoril na vaš komentar',
        'commented_on' => 'Komentiral na',
        'view_comment' => 'Oglej si komentar',
    ],

    'settings' => [
        'title' => 'FOB Comment',
        'description' => 'Konfigurirajte nastavitve za FOB Comment',

        'email' => [
            'templates' => [
                'title' => 'Komentar',
                'description' => 'E-poštne predloge za obvestila o komentarjih',
                'admin_new_comment' => [
                    'title' => 'Obvestilo skrbniku o novem komentarju',
                    'description' => 'Pošlji e-pošto skrbniku, ko je objavljen nov komentar',
                    'subject' => 'Nov komentar na {{ site_title }}',
                    'comment_name_description' => 'Ime avtorja komentarja',
                    'comment_email_description' => 'E-pošta avtorja komentarja',
                    'comment_content_description' => 'Vsebina komentarja',
                    'comment_reference_description' => 'Stran/objava, ki je bila komentirana',
                    'comment_url_description' => 'URL za ogled komentarja',
                ],
                'comment_reply' => [
                    'title' => 'Obvesti komentatorja o odgovoru',
                    'description' => 'Pošlji e-pošto komentatorju, ko nekdo odgovori na njegov komentar',
                    'subject' => 'Nov odgovor na vaš komentar na {{ site_title }}',
                    'comment_name_description' => 'Ime izvirnega komentatorja',
                    'reply_name_description' => 'Ime avtorja odgovora',
                    'reply_content_description' => 'Vsebina odgovora',
                    'comment_reference_description' => 'Stran/objava, ki je bila komentirana',
                    'comment_url_description' => 'URL za ogled komentarja',
                ],
            ],
        ],

        'form' => [
            'enable_recaptcha' => 'Omogoči reCAPTCHA',
            'enable_recaptcha_help' => 'Za uporabo te funkcije morate omogočiti reCAPTCHA na :url.',
            'captcha_setting_label' => 'Nastavitve Captcha',
            'disable_guest_comment' => 'Onemogoči komentarje gostov',
            'disable_guest_comment_help' => 'Ko je omogočeno, morajo biti uporabniki prijavljeni za objavo komentarjev. To pomaga zmanjšati neželene komentarje.',
            'comment_moderation' => 'Komentarji morajo biti ročno odobreni',
            'comment_moderation_help' => 'Vse komentarje mora ročno odobriti skrbnik, preden se prikažejo na spletni strani.',
            'rate_limit_seconds' => 'Rate limit (seconds)',
            'rate_limit_seconds_help' => 'Minimum time in seconds between comments from the same user. Set to 0 to disable rate limiting.',
            'show_comment_cookie_consent' => 'Prikaži potrditveno polje za piškotke komentarjev, ki obiskovalcem omogoča shranjevanje podatkov v brskalnik',
            'show_comment_cookie_consent_help' => 'When enabled, visitors can save their name, email, and website in their browser for future comments.',
            'auto_fill_comment_form' => 'Samodejno izpolni podatke komentarja za prijavljene uporabnike',
            'auto_fill_comment_form_help' => 'Obrazec za komentarje bo samodejno izpolnjen z uporabniškimi podatki, kot so polno ime, e-pošta itd., če so prijavljeni.',
            'comment_order' => 'Razvrsti komentarje po',
            'comment_order_help' => 'Izberite želeni vrstni red za prikaz komentarjev na seznamu.',
            'comment_order_choices' => [
                'asc' => 'Najstarejši',
                'desc' => 'Najnovejši',
            ],
            'display_admin_badge' => 'Prikaži značko skrbnika za komentarje skrbnikov',
            'display_admin_badge_help' => 'When enabled, comments from admins will show an "Admin" badge next to their name.',
            'show_admin_role_name_for_admin_badge' => 'Prikaži ime vloge skrbnika za značko skrbnika',
            'show_admin_role_name_for_admin_badge_helper' => 'Če je omogočeno, bo značka skrbnika prikazala ime vloge skrbnika namesto privzetega besedila "Skrbnik". Če je ime vloge skrbnika prazno, bo uporabljeno privzeto besedilo. Če ima uporabnik več vlog, bo uporabljena prva vloga.',
            'avatar_provider' => 'Avatar provider',
            'avatar_provider_help' => 'Choose how to generate avatars for comments. Gravatar requires email, UI Avatars generates based on name.',
            'avatar_provider_choices' => [
                'gravatar' => 'Gravatar (Email-based)',
                'ui_avatars' => 'UI Avatars (Name-based)',
            ],
            'email_optional' => 'Make email field optional',
            'email_optional_help' => 'When enabled, visitors can submit comments without providing an email address.',
            'show_website_field' => 'Prikaži polje za spletno stran v obrazcu za komentarje',
            'show_website_field_help' => 'Ko je onemogočeno, bo polje za spletno stran skrito iz javnega obrazca za komentarje.',
            'default_avatar' => 'Privzeti avatar',
            'default_avatar_helper' => 'Default avatar for the author when they don\'t have an avatar. If you don\'t select any image, it will be generated using the selected avatar provider. Image size should be 150x150px.',
            'allow_author_delete' => 'Dovoli avtorjem brisanje svojih komentarjev',
            'allow_author_delete_help' => 'Ko je omogočeno, lahko prijavljeni uporabniki brišejo svoje lastne komentarje.',
            'primary_color' => 'Primarna barva',
            'primary_color_helper' => 'Primarna barva za gumbe, potrditvena polja in značke. Pustite prazno za uporabo primarne barve teme.',
            'primary_color_hover' => 'Primarna barva ob lebdenju',
            'primary_color_hover_helper' => 'Barva ob lebdenju za gumbe. Pustite prazno za temnejši odtenek primarne barve.',
        ],
    ],
];
