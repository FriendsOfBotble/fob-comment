<?php

return [
    'common' => [
        'name' => 'Imię',
        'email' => 'E-mail',
        'phone' => 'Telefon',
        'website' => 'Strona internetowa',
        'comment' => 'Komentarz',
        'email_placeholder' => 'Twój adres e-mail nie zostanie opublikowany.',
        'website_placeholder' => 'np. https://example.com',
    ],

    'title' => 'Komentarze',
    'author' => 'Autor',
    'responded_to' => 'Odpowiedź na',
    'permalink' => 'Odnośnik bezpośredni',
    'url' => 'URL',
    'submitted_on' => 'Przesłano',
    'edit_comment' => 'Edytuj komentarz',
    'reply' => 'Odpowiedz',
    'in_reply_to' => 'W odpowiedzi na :name',

    'reply_modal' => [
        'title' => 'Odpowiedz na :comment',
        'cancel' => 'Anuluj',
    ],

    'allow_comments' => 'Zezwól na komentarze',

    'front' => [
        'admin_badge' => 'Administrator',

        'list' => [
            'title' => ':count komentarz|:count komentarze|:count komentarzy',
            'title_singular' => ':count komentarz',
            'title_plural' => ':count komentarzy',
            'reply' => 'Odpowiedz',
            'reply_to' => 'Odpowiedz :name',
            'cancel_reply' => 'Anuluj odpowiedź',
            'waiting_for_approval_message' => 'Twój komentarz oczekuje na moderację. To jest podgląd, Twój komentarz będzie widoczny po zatwierdzeniu.',
        ],

        'form' => [
            'description_email_optional' => 'Your email address will not be published. Email is optional. Required fields are marked *',
            'title' => 'Zostaw komentarz',
            'description' => 'Twój adres e-mail nie zostanie opublikowany. Wymagane pola są oznaczone *',
            'cookie_consent' => 'Zapisz moje imię, e-mail i stronę internetową w tej przeglądarce dla następnego komentarza.',
            'submit' => 'Wyślij komentarz',
        ],

        'comment_success_message' => 'Twój komentarz został pomyślnie wysłany.',
    ],

    'enums' => [
        'statuses' => [
            'pending' => 'Oczekujący',
            'approved' => 'Zatwierdzony',
            'spam' => 'Spam',
            'trash' => 'Kosz',
        ],
    ],

    'settings' => [
        'title' => 'FOB Comment',
        'description' => 'Skonfiguruj ustawienia dla FOB Comment',

        'form' => [
            'enable_recaptcha' => 'Włącz reCAPTCHA',
            'enable_recaptcha_help' => 'Musisz włączyć reCAPTCHA w :url, aby korzystać z tej funkcji.',
            'captcha_setting_label' => 'Ustawienia Captcha',
            'comment_moderation' => 'Komentarze muszą być ręcznie zatwierdzane',
            'comment_moderation_help' => 'Wszystkie komentarze muszą być ręcznie zatwierdzone przez administratora przed wyświetleniem na stronie.',
            'show_comment_cookie_consent' => 'Pokaż pole wyboru plików cookie komentarzy, umożliwiając odwiedzającym zapisywanie informacji w przeglądarce',
            'auto_fill_comment_form' => 'Automatyczne wypełnianie danych komentarza dla zalogowanych użytkowników',
            'auto_fill_comment_form_help' => 'Formularz komentarza zostanie automatycznie wypełniony danymi użytkownika, takimi jak pełne imię i nazwisko, e-mail itp., jeśli są zalogowani.',
            'comment_order' => 'Sortuj komentarze według',
            'comment_order_help' => 'Wybierz preferowaną kolejność wyświetlania komentarzy na liście.',
            'comment_order_choices' => [
                'asc' => 'Najstarsze',
                'desc' => 'Najnowsze',
            ],
            'display_admin_badge' => 'Wyświetl odznakę administratora dla komentarzy administratorów',
            'show_admin_role_name_for_admin_badge' => 'Pokaż nazwę roli administratora dla odznaki administratora',
            'show_admin_role_name_for_admin_badge_helper' => 'Jeśli włączone, odznaka administratora będzie wyświetlać nazwę roli administratora zamiast domyślnego tekstu "Administrator". Jeśli nazwa roli administratora jest pusta, zostanie użyty domyślny tekst. Jeśli użytkownik ma wiele ról, zostanie użyta pierwsza rola.',
            'avatar_provider' => 'Avatar provider',
            'avatar_provider_help' => 'Choose how to generate avatars for comments. Gravatar requires email, UI Avatars generates based on name.',
            'avatar_provider_choices' => [
                'gravatar' => 'Gravatar (Email-based)',
                'ui_avatars' => 'UI Avatars (Name-based)',
            ],
            'email_optional' => 'Make email field optional',
            'email_optional_help' => 'When enabled, visitors can submit comments without providing an email address.',
            'show_website_field' => 'Pokaż pole strony internetowej w formularzu komentarza',
            'show_website_field_help' => 'Po wyłączeniu pole strony internetowej zostanie ukryte w publicznym formularzu komentarzy.',
            'default_avatar' => 'Domyślny awatar',
            'default_avatar_helper' => 'Default avatar for the author when they don\'t have an avatar. If you don\'t select any image, it will be generated using the selected avatar provider. Image size should be 150x150px.',
        ],
    ],
];
