<?php

return [
    'common' => [
        'name' => 'İsim',
        'email' => 'E-posta',
        'phone' => 'Telefon',
        'website' => 'Web sitesi',
        'comment' => 'Yorum',
        'email_placeholder' => 'E-posta adresiniz yayınlanmayacaktır.',
        'name_placeholder' => 'Adınız',
        'website_placeholder' => 'örn. https://example.com',
        'comment_placeholder' => 'Yorumunuzu buraya yazın...',
    ],

    'title' => 'Yorumlar',
    'author' => 'Yazar',
    'responded_to' => 'Yanıt',
    'permalink' => 'Kalıcı bağlantı',
    'url' => 'URL',
    'submitted_on' => 'Gönderilme tarihi',
    'edit_comment' => 'Yorumu Düzenle',
    'reply' => 'Yanıtla',
    'in_reply_to' => ':name için yanıt',

    'reply_modal' => [
        'title' => ':comment yorumunu yanıtla',
        'cancel' => 'İptal',
    ],

    'allow_comments' => 'Yorumlara izin ver',

    'front' => [
        'admin_badge' => 'Yönetici',

        'list' => [
            'title' => ':count yorum',
            'title_singular' => ':count yorum',
            'title_plural' => ':count yorum',
            'reply' => 'Yanıtla',
            'reply_to' => ':name kişisine yanıt ver',
            'cancel_reply' => 'Yanıtı iptal et',
            'waiting_for_approval_message' => 'Yorumunuz moderasyon bekliyor. Bu bir önizlemedir, yorumunuz onaylandıktan sonra görünür olacaktır.',
        ],

        'form' => [
            'description_email_optional' => 'Your email address will not be published. Email is optional. Required fields are marked *',
            'title' => 'Bir yorum bırakın',
            'description' => 'E-posta adresiniz yayınlanmayacaktır. Gerekli alanlar * ile işaretlenmiştir',
            'cookie_consent' => 'Bir sonraki yorumum için bu tarayıcıda adımı, e-posta adresimi ve web sitemi kaydet.',
            'submit' => 'Yorumu Gönder',
            'login_required' => 'Yorum göndermek için giriş yapmalısınız.',
            'login_to_comment' => 'Yorum yapmak için giriş yap',
        ],

        'comment_success_message' => 'Yorumunuz başarıyla gönderildi.',
        'rate_limit_error' => 'Çok hızlı yorum yapıyorsunuz. Lütfen başka bir yorum göndermeden önce :seconds saniye bekleyin.',
    ],

    'enums' => [
        'statuses' => [
            'pending' => 'Beklemede',
            'approved' => 'Onaylandı',
            'spam' => 'Spam',
            'trash' => 'Çöp',
        ],
    ],

    'settings' => [
        'title' => 'FOB Comment',
        'description' => 'FOB Comment için ayarları yapılandırın',

        'form' => [
            'enable_recaptcha' => 'reCAPTCHA\'yı etkinleştir',
            'enable_recaptcha_help' => 'Bu özelliği kullanmak için :url adresinde reCAPTCHA\'yı etkinleştirmeniz gerekir.',
            'captcha_setting_label' => 'Captcha Ayarları',
            'disable_guest_comment' => 'Misafir yorumlarını devre dışı bırak',
            'disable_guest_comment_help' => 'Etkinleştirildiğinde, kullanıcıların yorum göndermek için giriş yapması gerekir. Bu, spam yorumları azaltmaya yardımcı olur.',
            'comment_moderation' => 'Yorumlar manuel olarak onaylanmalıdır',
            'comment_moderation_help' => 'Tüm yorumlar ön yüzde gösterilmeden önce bir yönetici tarafından manuel olarak onaylanmalıdır.',
            'rate_limit_seconds' => 'Hız sınırı (saniye)',
            'rate_limit_seconds_help' => 'Aynı kullanıcıdan gelen yorumlar arasındaki minimum süre (saniye). Hız sınırını devre dışı bırakmak için 0 olarak ayarlayın.',
            'show_comment_cookie_consent' => 'Ziyaretçilerin bilgilerini tarayıcıda kaydetmelerine izin veren yorum çerezleri onay kutusunu göster',
            'show_comment_cookie_consent_help' => 'Etkinleştirildiğinde, ziyaretçiler gelecekteki yorumlar için adlarını, e-postalarını ve web sitelerini tarayıcılarına kaydedebilir.',
            'auto_fill_comment_form' => 'Giriş yapmış kullanıcılar için yorum verilerini otomatik doldur',
            'auto_fill_comment_form_help' => 'Giriş yapmışlarsa yorum formu otomatik olarak kullanıcı verileriyle (tam ad, e-posta vb.) doldurulacaktır.',
            'comment_order' => 'Yorumları sırala',
            'comment_order_help' => 'Listede yorumları görüntülemek için tercih edilen sırayı seçin.',
            'comment_order_choices' => [
                'asc' => 'En eski',
                'desc' => 'En yeni',
            ],
            'display_admin_badge' => 'Yönetici yorumları için yönetici rozetini göster',
            'display_admin_badge_help' => 'Etkinleştirildiğinde, yönetici yorumları isimlerinin yanında "Admin" rozeti gösterecektir.',
            'show_admin_role_name_for_admin_badge' => 'Yönetici rozeti için yönetici rol adını göster',
            'show_admin_role_name_for_admin_badge_helper' => 'Etkinleştirilirse, yönetici rozeti varsayılan "Yönetici" metni yerine yönetici rol adını gösterecektir. Yönetici rol adı boşsa, varsayılan metin kullanılacaktır. Kullanıcının birden fazla rolü varsa, ilk rol kullanılacaktır.',
            'avatar_provider' => 'Avatar provider',
            'avatar_provider_help' => 'Choose how to generate avatars for comments. Gravatar requires email, UI Avatars generates based on name.',
            'avatar_provider_choices' => [
                'gravatar' => 'Gravatar (Email-based)',
                'ui_avatars' => 'UI Avatars (Name-based)',
            ],
            'email_optional' => 'Make email field optional',
            'email_optional_help' => 'When enabled, visitors can submit comments without providing an email address.',
            'show_website_field' => 'Yorum formunda web sitesi alanını göster',
            'show_website_field_help' => 'Devre dışı bırakıldığında web sitesi alanı, herkese açık yorum formundan gizlenecektir.',
            'default_avatar' => 'Varsayılan avatar',
            'default_avatar_helper' => 'Default avatar for the author when they don\'t have an avatar. If you don\'t select any image, it will be generated using the selected avatar provider. Image size should be 150x150px.',
        ],
    ],
];
