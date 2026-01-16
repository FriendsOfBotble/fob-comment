<?php

return [
    'common' => [
        'name' => 'Nome',
        'email' => 'Email',
        'phone' => 'Telefono',
        'website' => 'Sito web',
        'comment' => 'Commento',
        'email_placeholder' => 'Il tuo indirizzo email non sarà pubblicato.',
        'name_placeholder' => 'Il tuo nome',
        'website_placeholder' => 'es. https://example.com',
        'comment_placeholder' => 'Scrivi il tuo commento qui...',
    ],

    'title' => 'Commenti',
    'author' => 'Autore',
    'responded_to' => 'Risposta a',
    'permalink' => 'Permalink',
    'url' => 'URL',
    'submitted_on' => 'Inviato il',
    'edit_comment' => 'Modifica commento',
    'reply' => 'Rispondi',
    'in_reply_to' => 'In risposta a :name',

    'reply_modal' => [
        'title' => 'Rispondi a :comment',
        'cancel' => 'Annulla',
    ],

    'allow_comments' => 'Consenti commenti',

    'front' => [
        'admin_badge' => 'Admin',

        'list' => [
            'title' => ':count commento|:count commenti',
            'title_singular' => ':count commento',
            'title_plural' => ':count commenti',
            'reply' => 'Rispondi',
            'reply_to' => 'Rispondi a :name',
            'cancel_reply' => 'Annulla risposta',
            'waiting_for_approval_message' => 'Il tuo commento è in attesa di moderazione. Questa è un\'anteprima, il tuo commento sarà visibile dopo l\'approvazione.',
        ],

        'form' => [
            'description_email_optional' => 'Il tuo indirizzo email non sarà pubblicato. L\'email è opzionale. I campi obbligatori sono contrassegnati con *',
            'title' => 'Lascia un commento',
            'description' => 'Il tuo indirizzo email non sarà pubblicato. I campi obbligatori sono contrassegnati con *',
            'cookie_consent' => 'Salva il mio nome, email e sito web in questo browser per il prossimo commento.',
            'submit' => 'Invia commento',
            'login_required' => 'Devi essere autenticato per pubblicare un commento.',
            'login_to_comment' => 'Accedi per commentare',
        ],

        'comment_success_message' => 'Il tuo commento è stato inviato con successo.',
        'rate_limit_error' => 'Stai commentando troppo velocemente. Attendi :seconds secondi prima di pubblicare un altro commento.',
    ],

    'enums' => [
        'statuses' => [
            'pending' => 'In attesa',
            'approved' => 'Approvato',
            'spam' => 'Spam',
            'trash' => 'Cestino',
        ],
    ],

    'settings' => [
        'title' => 'FOB Comment',
        'description' => 'Configura le impostazioni per FOB Comment',

        'form' => [
            'enable_recaptcha' => 'Abilita reCAPTCHA',
            'enable_recaptcha_help' => 'Devi abilitare reCAPTCHA in :url per utilizzare questa funzione.',
            'captcha_setting_label' => 'Impostazioni Captcha',
            'disable_guest_comment' => 'Disabilita commenti degli ospiti',
            'disable_guest_comment_help' => 'Quando abilitato, gli utenti devono essere autenticati per pubblicare commenti. Questo aiuta a ridurre i commenti spam.',
            'comment_moderation' => 'I commenti devono essere approvati manualmente',
            'comment_moderation_help' => 'Tutti i commenti devono essere approvati manualmente da un amministratore prima di essere visualizzati sul frontend.',
            'rate_limit_seconds' => 'Limite di frequenza (secondi)',
            'rate_limit_seconds_help' => 'Tempo minimo in secondi tra i commenti dello stesso utente. Imposta su 0 per disabilitare il limite di frequenza.',
            'show_comment_cookie_consent' => 'Mostra la casella di controllo dei cookie dei commenti, consentendo ai visitatori di salvare le loro informazioni nel browser',
            'show_comment_cookie_consent_help' => 'Quando abilitato, i visitatori possono salvare il loro nome, email e sito web nel browser per i commenti futuri.',
            'auto_fill_comment_form' => 'Compila automaticamente i dati del commento per gli utenti connessi',
            'auto_fill_comment_form_help' => 'Il modulo dei commenti verrà compilato automaticamente con i dati dell\'utente come nome completo, email, ecc., se sono connessi.',
            'comment_order' => 'Ordina i commenti per',
            'comment_order_help' => 'Scegli l\'ordine preferito per visualizzare i commenti nell\'elenco.',
            'comment_order_choices' => [
                'asc' => 'Più vecchi',
                'desc' => 'Più recenti',
            ],
            'display_admin_badge' => 'Mostra il badge admin per i commenti degli amministratori',
            'display_admin_badge_help' => 'Quando abilitato, i commenti degli amministratori mostreranno un badge "Admin" accanto al loro nome.',
            'show_admin_role_name_for_admin_badge' => 'Mostra il nome del ruolo admin per il badge admin',
            'show_admin_role_name_for_admin_badge_helper' => 'Se abilitato, il badge admin mostrerà il nome del ruolo admin invece del testo predefinito "Admin". Se il nome del ruolo admin è vuoto, verrà utilizzato il testo predefinito. Se l\'utente ha più ruoli, verrà utilizzato il primo ruolo.',
            'avatar_provider' => 'Provider avatar',
            'avatar_provider_help' => 'Scegli come generare gli avatar per i commenti. Gravatar richiede l\'email, UI Avatars genera in base al nome.',
            'avatar_provider_choices' => [
                'gravatar' => 'Gravatar (Basato su email)',
                'ui_avatars' => 'UI Avatars (Basato sul nome)',
            ],
            'email_optional' => 'Rendi il campo email opzionale',
            'email_optional_help' => 'Quando abilitato, i visitatori possono inviare commenti senza fornire un indirizzo email.',
            'show_website_field' => 'Mostra il campo sito web nel modulo dei commenti',
            'show_website_field_help' => 'Quando è disabilitato, il campo sito web verrà nascosto dal modulo dei commenti pubblico.',
            'default_avatar' => 'Avatar predefinito',
            'default_avatar_helper' => 'Avatar predefinito per l\'autore quando non ha un avatar. Se non selezioni alcuna immagine, verrà generata utilizzando Gravatar. La dimensione dell\'immagine dovrebbe essere 150x150px.',
        ],
    ],
];
