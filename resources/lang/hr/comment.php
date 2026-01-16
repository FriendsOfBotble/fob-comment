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
        'rate_limit_error' => 'You are commenting too fast. Please wait :seconds seconds before posting another comment.',
    ],

    'enums' => [
        'statuses' => [
            'pending' => 'Na čekanju',
            'approved' => 'Odobreno',
            'spam' => 'Spam',
            'trash' => 'Smeće',
        ],
    ],

    'settings' => [
        'title' => 'FOB Comment',
        'description' => 'Konfigurirajte postavke za FOB Comment',

        'form' => [
            'enable_recaptcha' => 'Omogući reCAPTCHA',
            'enable_recaptcha_help' => 'Morate omogućiti reCAPTCHA na :url za korištenje ove značajke.',
            'captcha_setting_label' => 'Captcha postavke',
            'disable_guest_comment' => 'Onemogući komentare gostiju',
            'disable_guest_comment_help' => 'Kada je omogućeno, korisnici moraju biti prijavljeni da bi objavili komentare. To pomaže u smanjenju neželjenih komentara.',
            'comment_moderation' => 'Komentari moraju biti ručno odobreni',
            'comment_moderation_help' => 'Svi komentari moraju biti ručno odobreni od strane administratora prije prikazivanja na web stranici.',
            'rate_limit_seconds' => 'Rate limit (seconds)',
            'rate_limit_seconds_help' => 'Minimum time in seconds between comments from the same user. Set to 0 to disable rate limiting.',
            'show_comment_cookie_consent' => 'Prikaži potvrdni okvir za kolačiće komentara, omogućavajući posjetiteljima da spreme svoje podatke u pregljednik',
            'show_comment_cookie_consent_help' => 'When enabled, visitors can save their name, email, and website in their browser for future comments.',
            'auto_fill_comment_form' => 'Automatski ispuni podatke komentara za prijavljene korisnike',
            'auto_fill_comment_form_help' => 'Obrazac za komentare će biti automatski ispunjen korisničkim podacima kao što su puno ime, e-mail itd., ako su prijavljeni.',
            'comment_order' => 'Sortiraj komentare po',
            'comment_order_help' => 'Odaberite željeni redoslijed za prikaz komentara na popisu.',
            'comment_order_choices' => [
                'asc' => 'Najstariji',
                'desc' => 'Najnoviji',
            ],
            'display_admin_badge' => 'Prikaži admin značku za komentare administratora',
            'display_admin_badge_help' => 'When enabled, comments from admins will show an "Admin" badge next to their name.',
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
        ],
    ],
];
