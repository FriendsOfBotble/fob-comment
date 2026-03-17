<?php

return [
    'common' => [
        'name' => 'Imię',
        'email' => 'E-mail',
        'phone' => 'Telefon',
        'website' => 'Strona internetowa',
        'comment' => 'Komentarz',
        'email_placeholder' => 'Twój adres e-mail nie zostanie opublikowany.',
        'name_placeholder' => 'Twoje imię',
        'website_placeholder' => 'np. https://example.com',
        'comment_placeholder' => 'Napisz swój komentarz tutaj...',
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
            'delete' => 'Usuń',
            'delete_confirm' => 'Czy na pewno chcesz usunąć ten komentarz?',
            'waiting_for_approval_message' => 'Twój komentarz oczekuje na moderację. To jest podgląd, Twój komentarz będzie widoczny po zatwierdzeniu.',
        ],

        'form' => [
            'description_email_optional' => 'Twój adres e-mail nie zostanie opublikowany. E-mail jest opcjonalny. Wymagane pola są oznaczone *',
            'title' => 'Zostaw komentarz',
            'description' => 'Twój adres e-mail nie zostanie opublikowany. Wymagane pola są oznaczone *',
            'cookie_consent' => 'Zapisz moje imię, e-mail i stronę internetową w tej przeglądarce dla następnego komentarza.',
            'submit' => 'Wyślij komentarz',
            'login_required' => 'Musisz być zalogowany, aby opublikować komentarz.',
            'login_to_comment' => 'Zaloguj się, aby skomentować',
        ],

        'comment_success_message' => 'Twój komentarz został pomyślnie wysłany.',
        'rate_limit_error' => 'Komentujesz zbyt szybko. Poczekaj :seconds sekund przed opublikowaniem kolejnego komentarza.',
        'comment_deleted_message' => 'Twój komentarz został pomyślnie usunięty.',
        'delete_not_authorized' => 'Nie masz uprawnień do usunięcia tego komentarza.',
    ],

    'enums' => [
        'statuses' => [
            'pending' => 'Oczekujący',
            'approved' => 'Zatwierdzony',
            'spam' => 'Spam',
            'trash' => 'Kosz',
        ],
    ],

    'email_templates' => [
        'admin_new_comment_title' => 'Otrzymano nowy komentarz',
        'admin_new_comment_message' => ':comment_name dodał nowy komentarz',
        'comment_reply_title' => 'Nowa odpowiedź na Twój komentarz',
        'comment_reply_message' => ':reply_name odpowiedział na Twój komentarz',
        'commented_on' => 'Skomentował na',
        'view_comment' => 'Zobacz komentarz',
    ],

    'settings' => [
        'title' => 'FOB Comment',
        'description' => 'Skonfiguruj ustawienia dla FOB Comment',

        'email' => [
            'templates' => [
                'title' => 'Komentarz',
                'description' => 'Szablony e-mail dla powiadomień o komentarzach',
                'admin_new_comment' => [
                    'title' => 'Powiadomienie administratora o nowym komentarzu',
                    'description' => 'Wyślij e-mail do administratora po opublikowaniu nowego komentarza',
                    'subject' => 'Nowy komentarz na {{ site_title }}',
                    'comment_name_description' => 'Imię autora komentarza',
                    'comment_email_description' => 'E-mail autora komentarza',
                    'comment_content_description' => 'Treść komentarza',
                    'comment_reference_description' => 'Strona/wpis, który jest komentowany',
                    'comment_url_description' => 'URL do wyświetlenia komentarza',
                ],
                'comment_reply' => [
                    'title' => 'Powiadom komentującego o odpowiedzi',
                    'description' => 'Wyślij e-mail do komentującego, gdy ktoś odpowie na jego komentarz',
                    'subject' => 'Nowa odpowiedź na Twój komentarz na {{ site_title }}',
                    'comment_name_description' => 'Imię oryginalnego komentującego',
                    'reply_name_description' => 'Imię autora odpowiedzi',
                    'reply_content_description' => 'Treść odpowiedzi',
                    'comment_reference_description' => 'Strona/wpis, który jest komentowany',
                    'comment_url_description' => 'URL do wyświetlenia komentarza',
                ],
            ],
        ],

        'form' => [
            'enable_recaptcha' => 'Włącz reCAPTCHA',
            'enable_recaptcha_help' => 'Musisz włączyć reCAPTCHA w :url, aby korzystać z tej funkcji.',
            'captcha_setting_label' => 'Ustawienia Captcha',
            'disable_guest_comment' => 'Wyłącz komentarze gości',
            'disable_guest_comment_help' => 'Gdy włączone, użytkownicy muszą być zalogowani, aby publikować komentarze. Pomaga to zmniejszyć spam w komentarzach.',
            'comment_moderation' => 'Komentarze muszą być ręcznie zatwierdzane',
            'comment_moderation_help' => 'Wszystkie komentarze muszą być ręcznie zatwierdzone przez administratora przed wyświetleniem na stronie.',
            'rate_limit_seconds' => 'Limit szybkości (sekundy)',
            'rate_limit_seconds_help' => 'Minimalny czas w sekundach między komentarzami tego samego użytkownika. Ustaw na 0, aby wyłączyć limit szybkości.',
            'show_comment_cookie_consent' => 'Pokaż pole wyboru plików cookie komentarzy, umożliwiając odwiedzającym zapisywanie informacji w przeglądarce',
            'show_comment_cookie_consent_help' => 'Po włączeniu odwiedzający mogą zapisać swoje imię, email i stronę internetową w przeglądarce dla przyszłych komentarzy.',
            'auto_fill_comment_form' => 'Automatyczne wypełnianie danych komentarza dla zalogowanych użytkowników',
            'auto_fill_comment_form_help' => 'Formularz komentarza zostanie automatycznie wypełniony danymi użytkownika, takimi jak pełne imię i nazwisko, e-mail itp., jeśli są zalogowani.',
            'comment_order' => 'Sortuj komentarze według',
            'comment_order_help' => 'Wybierz preferowaną kolejność wyświetlania komentarzy na liście.',
            'comment_order_choices' => [
                'asc' => 'Najstarsze',
                'desc' => 'Najnowsze',
            ],
            'display_admin_badge' => 'Wyświetl odznakę administratora dla komentarzy administratorów',
            'display_admin_badge_help' => 'Po włączeniu komentarze administratorów będą wyświetlać odznakę "Admin" obok ich nazwy.',
            'show_admin_role_name_for_admin_badge' => 'Pokaż nazwę roli administratora dla odznaki administratora',
            'show_admin_role_name_for_admin_badge_helper' => 'Jeśli włączone, odznaka administratora będzie wyświetlać nazwę roli administratora zamiast domyślnego tekstu "Administrator". Jeśli nazwa roli administratora jest pusta, zostanie użyty domyślny tekst. Jeśli użytkownik ma wiele ról, zostanie użyta pierwsza rola.',
            'avatar_provider' => 'Dostawca awatara',
            'avatar_provider_help' => 'Wybierz, jak generować awatary dla komentarzy. Gravatar wymaga adresu e-mail, UI Avatars generuje na podstawie imienia.',
            'avatar_provider_choices' => [
                'gravatar' => 'Gravatar (Oparty na e-mailu)',
                'ui_avatars' => 'UI Avatars (Oparty na imieniu)',
            ],
            'email_optional' => 'Ustaw pole e-mail jako opcjonalne',
            'email_optional_help' => 'Gdy włączone, odwiedzający mogą przesyłać komentarze bez podawania adresu e-mail.',
            'show_website_field' => 'Pokaż pole strony internetowej w formularzu komentarza',
            'show_website_field_help' => 'Po wyłączeniu pole strony internetowej zostanie ukryte w publicznym formularzu komentarzy.',
            'default_avatar' => 'Domyślny awatar',
            'default_avatar_helper' => 'Domyślny awatar dla autora, gdy nie ma awatara. Jeśli nie wybierzesz żadnego obrazu, zostanie wygenerowany przy użyciu wybranego dostawcy awatarów. Rozmiar obrazu powinien wynosić 150x150px.',
            'allow_author_delete' => 'Zezwól autorom na usuwanie swoich komentarzy',
            'allow_author_delete_help' => 'Gdy włączone, zalogowani użytkownicy mogą usuwać własne komentarze.',
            'primary_color' => 'Kolor podstawowy',
            'primary_color_helper' => 'Kolor podstawowy dla przycisków, pól wyboru i odznak. Pozostaw puste, aby użyć koloru podstawowego motywu.',
            'primary_color_hover' => 'Podstawowy kolor najechania',
            'primary_color_hover_helper' => 'Kolor najechania dla przycisków. Pozostaw puste, aby użyć ciemniejszego odcienia koloru podstawowego.',
        ],
    ],
];
