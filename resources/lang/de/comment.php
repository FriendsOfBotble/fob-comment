<?php

return [
    'common' => [
        'name' => 'Name',
        'email' => 'E-Mail',
        'website' => 'Website',
        'comment' => 'Kommentar',
        'email_placeholder' => 'Ihre E-Mail-Adresse wird nicht veröffentlicht.',
        'website_placeholder' => 'z.B. https://example.com',
    ],

    'title' => 'Kommentare',
    'author' => 'Autor',
    'responsed_to' => 'Antwort auf',
    'permalink' => 'Permalink',
    'url' => 'URL',
    'submitted_on' => 'Eingereicht am',
    'edit_comment' => 'Kommentar bearbeiten',
    'reply' => 'Antworten',
    'in_reply_to' => 'Als Antwort auf :name',

    'reply_modal' => [
        'title' => 'Antwort auf :comment',
        'cancel' => 'Abbrechen',
    ],

    'allow_comments' => 'Kommentare erlauben',

    'front' => [
        'admin_badge' => 'Admin',

        'list' => [
            'title' => ':count Kommentar|:count Kommentare',
            'reply' => 'Antworten',
            'reply_to' => 'Antwort an :name',
            'cancel_reply' => 'Antwort abbrechen',
            'waiting_for_approval_message' => 'Ihr Kommentar wartet auf Moderation. Dies ist eine Vorschau, Ihr Kommentar wird nach der Genehmigung sichtbar.',
        ],

        'form' => [
            'title' => 'Kommentar hinterlassen',
            'description' => 'Ihre E-Mail-Adresse wird nicht veröffentlicht. Erforderliche Felder sind mit * markiert',
            'cookie_consent' => 'Meinen Namen, E-Mail und Website in diesem Browser für den nächsten Kommentar speichern.',
            'submit' => 'Kommentar abschicken',
        ],

        'comment_success_message' => 'Ihr Kommentar wurde erfolgreich gesendet.',
    ],

    'enums' => [
        'statuses' => [
            'pending' => 'Ausstehend',
            'approved' => 'Genehmigt',
            'spam' => 'Spam',
            'trash' => 'Papierkorb',
        ],
    ],

    'settings' => [
        'title' => 'FOB Comment',
        'description' => 'Einstellungen für FOB Comment konfigurieren',

        'form' => [
            'enable_recaptcha' => 'reCAPTCHA aktivieren',
            'enable_recaptcha_help' => 'Sie müssen reCAPTCHA in :url aktivieren, um diese Funktion zu nutzen.',
            'captcha_setting_label' => 'Captcha-Einstellungen',
            'comment_moderation' => 'Kommentare müssen manuell genehmigt werden',
            'comment_moderation_help' => 'Alle Kommentare müssen von einem Administrator manuell genehmigt werden, bevor sie im Frontend angezeigt werden.',
            'show_comment_cookie_consent' => 'Kommentar-Cookie-Checkbox anzeigen, damit Besucher ihre Informationen im Browser speichern können',
            'auto_fill_comment_form' => 'Kommentardaten für angemeldete Benutzer automatisch ausfüllen',
            'auto_fill_comment_form_help' => 'Das Kommentarformular wird automatisch mit Benutzerdaten wie vollständigem Namen, E-Mail usw. ausgefüllt, wenn sie angemeldet sind.',
            'comment_order' => 'Kommentare sortieren nach',
            'comment_order_help' => 'Wählen Sie die bevorzugte Reihenfolge für die Anzeige von Kommentaren in der Liste.',
            'comment_order_choices' => [
                'asc' => 'Älteste',
                'desc' => 'Neueste',
            ],
            'display_admin_badge' => 'Admin-Badge für Admin-Kommentare anzeigen',
            'show_admin_role_name_for_admin_badge' => 'Admin-Rollenname für Admin-Badge anzeigen',
            'show_admin_role_name_for_admin_badge_helper' => 'Wenn aktiviert, zeigt das Admin-Badge den Namen der Admin-Rolle anstelle des Standard-Texts "Admin" an. Wenn der Admin-Rollenname leer ist, wird der Standardtext verwendet. Wenn der Benutzer mehrere Rollen hat, wird die erste Rolle verwendet.',
            'default_avatar' => 'Standard-Avatar',
            'default_avatar_helper' => 'Standard-Avatar für den Autor, wenn er keinen Avatar hat. Wenn Sie kein Bild auswählen, wird es mit Gravatar generiert. Die Bildgröße sollte 150x150px betragen.',
        ],
    ],
];