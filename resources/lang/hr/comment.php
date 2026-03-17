<?php

return [
    'common' => [
        'name' => 'Ime',
        'email' => 'E-mail',
        'phone' => 'Telefon',
        'website' => 'Web stranica',
        'comment' => 'Komentar',
        'email_placeholder' => 'Vaša e-mail adresa neće biti objavljena.',
        'name_placeholder' => 'Your name',
        'website_placeholder' => 'npr. https://example.com',
        'comment_placeholder' => 'Write your comment here...',
    ],

    'title' => 'Komentari',
    'author' => 'Autor',
    'responded_to' => 'Odgovor na',
    'permalink' => 'Trajna veza',
    'url' => 'URL',
    'submitted_on' => 'Poslano',
    'edit_comment' => 'Uredi komentar',
    'reply' => 'Odgovori',
    'in_reply_to' => 'Kao odgovor na :name',

    'reply_modal' => [
        'title' => 'Odgovori na :comment',
        'cancel' => 'Odustani',
    ],

    'allow_comments' => 'Dozvoli komentare',

    'front' => [
        'admin_badge' => 'Admin',

        'list' => [
            'title' => ':count komentar|:count komentara|:count komentara',
            'title_singular' => ':count komentar',
            'title_plural' => ':count komentara',
            'reply' => 'Odgovori',
            'reply_to' => 'Odgovori :name',
            'cancel_reply' => 'Otkaži odgovor',
            'waiting_for_approval_message' => 'Vaš komentar čeka odobrenje. Ovo je pregled, vaš komentar će biti vidljiv nakon odobrenja.',
            'delete' => 'Obriši',
            'delete_confirm' => 'Jeste li sigurni da želite obrisati ovaj komentar?',
        ],

        'form' => [
            'description_email_optional' => 'Vaša e-mail adresa neće biti objavljena. E-mail je neobavezan. Obavezna polja su označena sa *',
            'title' => 'Ostavite komentar',
            'description' => 'Vaša e-mail adresa neće biti objavljena. Obavezna polja su označena sa *',
            'cookie_consent' => 'Spremi moje ime, e-mail i web stranicu u ovaj preglednik za sljedeći put kada komentiram.',
            'submit' => 'Pošalji komentar',
            'login_required' => 'Morate biti prijavljeni da biste objavili komentar.',
            'login_to_comment' => 'Prijavite se za komentiranje',
        ],

        'comment_success_message' => 'Vaš komentar je uspješno poslan.',
        'rate_limit_error' => 'Komentirate prebrzo. Molimo pričekajte :seconds sekundi prije objave sljedećeg komentara.',
        'comment_deleted_message' => 'Vaš komentar je uspješno obrisan.',
        'delete_not_authorized' => 'Niste ovlašteni obrisati ovaj komentar.',
    ],

    'enums' => [
        'statuses' => [
            'pending' => 'Na čekanju',
            'approved' => 'Odobreno',
            'spam' => 'Spam',
            'trash' => 'Smeće',
        ],
    ],

    'email_templates' => [
        'admin_new_comment_title' => 'Primljen novi komentar',
        'admin_new_comment_message' => ':comment_name je ostavio novi komentar',
        'comment_reply_title' => 'Novi odgovor na vaš komentar',
        'comment_reply_message' => ':reply_name je odgovorio na vaš komentar',
        'commented_on' => 'Komentirao na',
        'view_comment' => 'Pogledaj komentar',
    ],

    'settings' => [
        'title' => 'FOB Comment',
        'description' => 'Konfigurirajte postavke za FOB Comment',

        'email' => [
            'templates' => [
                'title' => 'Komentar',
                'description' => 'Predlošci e-pošte za obavijesti o komentarima',
                'admin_new_comment' => [
                    'title' => 'Obavijest administratoru za novi komentar',
                    'description' => 'Pošalji e-mail administratoru kad se objavi novi komentar',
                    'subject' => 'Novi komentar na {{ site_title }}',
                    'comment_name_description' => 'Ime autora komentara',
                    'comment_email_description' => 'E-mail autora komentara',
                    'comment_content_description' => 'Sadržaj komentara',
                    'comment_reference_description' => 'Stranica/objava na kojoj je komentiran',
                    'comment_url_description' => 'URL za pregled komentara',
                ],
                'comment_reply' => [
                    'title' => 'Obavijesti komentirača o odgovoru',
                    'description' => 'Pošalji e-mail komentiraču kad netko odgovori na njihov komentar',
                    'subject' => 'Novi odgovor na vaš komentar na {{ site_title }}',
                    'comment_name_description' => 'Ime originalnog komentirača',
                    'reply_name_description' => 'Ime autora odgovora',
                    'reply_content_description' => 'Sadržaj odgovora',
                    'comment_reference_description' => 'Stranica/objava na kojoj je komentiran',
                    'comment_url_description' => 'URL za pregled komentara',
                ],
            ],
        ],

        'form' => [
            'enable_recaptcha' => 'Omogući reCAPTCHA',
            'enable_recaptcha_help' => 'Morate omogućiti reCAPTCHA na :url za korištenje ove značajke.',
            'captcha_setting_label' => 'Captcha postavke',
            'disable_guest_comment' => 'Onemogući komentare gostiju',
            'disable_guest_comment_help' => 'Kada je omogućeno, korisnici moraju biti prijavljeni da bi objavili komentare. To pomaže u smanjenju neželjenih komentara.',
            'comment_moderation' => 'Komentari moraju biti ručno odobreni',
            'comment_moderation_help' => 'Svi komentari moraju biti ručno odobreni od strane administratora prije prikazivanja na web stranici.',
            'rate_limit_seconds' => 'Ograničenje brzine (sekunde)',
            'rate_limit_seconds_help' => 'Minimalno vrijeme u sekundama između komentara od istog korisnika. Postavite na 0 za onemogućavanje ograničenja brzine.',
            'show_comment_cookie_consent' => 'Prikaži potvrdni okvir za kolačiće komentara, omogućavajući posjetiteljima da spreme svoje podatke u preglednik',
            'show_comment_cookie_consent_help' => 'Kada je omogućeno, posjetitelji mogu spremiti svoje ime, e-mail i web stranicu u preglednik za buduće komentare.',
            'auto_fill_comment_form' => 'Automatski ispuni podatke komentara za prijavljene korisnike',
            'auto_fill_comment_form_help' => 'Obrazac za komentare će biti automatski ispunjen korisničkim podacima kao što su puno ime, e-mail itd., ako su prijavljeni.',
            'comment_order' => 'Sortiraj komentare po',
            'comment_order_help' => 'Odaberite željeni redoslijed za prikaz komentara na popisu.',
            'comment_order_choices' => [
                'asc' => 'Najstariji',
                'desc' => 'Najnoviji',
            ],
            'display_admin_badge' => 'Prikaži admin značku za komentare administratora',
            'display_admin_badge_help' => 'Kada je omogućeno, komentari administratora prikazivat će "Admin" značku pored njihovog imena.',
            'show_admin_role_name_for_admin_badge' => 'Prikaži naziv admin uloge za admin značku',
            'show_admin_role_name_for_admin_badge_helper' => 'Ako je omogućeno, admin značka će prikazati naziv admin uloge umjesto zadanog teksta "Admin". Ako je naziv admin uloge prazan, koristit će se zadani tekst. Ako korisnik ima više uloga, koristit će se prva uloga.',
            'avatar_provider' => 'Pružatelj avatara',
            'avatar_provider_help' => 'Odaberite kako generirati avatare za komentare. Gravatar zahtijeva e-mail, UI Avatars generira na temelju imena.',
            'avatar_provider_choices' => [
                'gravatar' => 'Gravatar (Temeljeno na e-mailu)',
                'ui_avatars' => 'UI Avatars (Temeljeno na imenu)',
            ],
            'email_optional' => 'Učinite polje e-maila neobaveznim',
            'email_optional_help' => 'Kada je omogućeno, posjetitelji mogu poslati komentare bez navođenja e-mail adrese.',
            'show_website_field' => 'Prikaži polje web stranice u obrascu za komentare',
            'show_website_field_help' => 'Kad je onemogućeno, polje web stranice bit će skriveno iz javnog obrasca za komentare.',
            'default_avatar' => 'Zadani avatar',
            'default_avatar_helper' => 'Zadani avatar za autora kada nemaju avatar. Ako ne odaberete sliku, bit će generirana pomoću odabranog pružatelja avatara. Veličina slike treba biti 150x150px.',
            'allow_author_delete' => 'Dopusti autorima brisanje njihovih komentara',
            'allow_author_delete_help' => 'Kada je omogućeno, prijavljeni korisnici mogu brisati vlastite komentare.',
            'primary_color' => 'Primarna boja',
            'primary_color_helper' => 'Primarna boja za gumbe, potvrdne okvire i značke. Ostavite prazno za korištenje primarne boje teme.',
            'primary_color_hover' => 'Primarna boja prelaska',
            'primary_color_hover_helper' => 'Boja prelaska za gumbe. Ostavite prazno za korištenje tamnijeg tona primarne boje.',
        ],
    ],
];
