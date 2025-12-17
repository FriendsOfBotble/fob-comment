<?php

return [
    'common' => [
        'name' => 'Име',
        'email' => 'Имейл',
        'phone' => 'Телефон',
        'website' => 'Уебсайт',
        'comment' => 'Коментар',
        'email_placeholder' => 'Вашият имейл адрес няма да бъде публикуван.',
        'website_placeholder' => 'напр. https://example.com',
    ],

    'title' => 'Коментари',
    'author' => 'Автор',
    'responded_to' => 'Отговор на',
    'permalink' => 'Постоянна връзка',
    'url' => 'URL',
    'submitted_on' => 'Изпратено на',
    'edit_comment' => 'Редактиране на коментар',
    'reply' => 'Отговор',
    'in_reply_to' => 'В отговор на :name',

    'reply_modal' => [
        'title' => 'Отговор на :comment',
        'cancel' => 'Отказ',
    ],

    'allow_comments' => 'Разреши коментари',

    'front' => [
        'admin_badge' => 'Админ',

        'list' => [
            'title' => ':count коментар|:count коментара',
            'title_singular' => ':count коментар',
            'title_plural' => ':count коментара',
            'reply' => 'Отговор',
            'reply_to' => 'Отговор на :name',
            'cancel_reply' => 'Отказ от отговор',
            'waiting_for_approval_message' => 'Вашият коментар чака одобрение. Това е предварителен преглед, вашият коментар ще бъде видим след одобрение.',
        ],

        'form' => [
            'description_email_optional' => 'Your email address will not be published. Email is optional. Required fields are marked *',
            'title' => 'Оставете коментар',
            'description' => 'Вашият имейл адрес няма да бъде публикуван. Задължителните полета са отбелязани с *',
            'cookie_consent' => 'Запази моето име, имейл и уебсайт в този браузър за следващия път, когато коментирам.',
            'submit' => 'Публикувай коментар',
        ],

        'comment_success_message' => 'Вашият коментар беше изпратен успешно.',
    ],

    'enums' => [
        'statuses' => [
            'pending' => 'Изчакващ',
            'approved' => 'Одобрен',
            'spam' => 'Спам',
            'trash' => 'Кошче',
        ],
    ],

    'settings' => [
        'title' => 'FOB Comment',
        'description' => 'Конфигуриране на настройките за FOB Comment',

        'form' => [
            'enable_recaptcha' => 'Активиране на reCAPTCHA',
            'enable_recaptcha_help' => 'Трябва да активирате reCAPTCHA в :url, за да използвате тази функция.',
            'captcha_setting_label' => 'Настройки на Captcha',
            'comment_moderation' => 'Коментарите трябва да бъдат одобрени ръчно',
            'comment_moderation_help' => 'Всички коментари трябва да бъдат одобрени ръчно от администратор преди да се показват на сайта.',
            'show_comment_cookie_consent' => 'Показване на отметка за бисквитки на коментари, позволявайки на посетителите да запазят информацията си в браузъра',
            'auto_fill_comment_form' => 'Автоматично попълване на данни за коментар за влезли потребители',
            'auto_fill_comment_form_help' => 'Формулярът за коментари ще бъде автоматично попълнен с потребителски данни като пълно име, имейл и др., ако са влезли.',
            'comment_order' => 'Сортиране на коментарите по',
            'comment_order_help' => 'Изберете предпочитания ред за показване на коментари в списъка.',
            'comment_order_choices' => [
                'asc' => 'Най-стари',
                'desc' => 'Най-нови',
            ],
            'display_admin_badge' => 'Показване на админ значка за коментари на администратори',
            'show_admin_role_name_for_admin_badge' => 'Показване на име на админ роля за админ значката',
            'show_admin_role_name_for_admin_badge_helper' => 'Ако е активирано, админ значката ще показва името на админ ролята вместо текста по подразбиране "Админ". Ако името на админ ролята е празно, ще се използва текстът по подразбиране. Ако потребителят има множество роли, ще се използва първата роля.',
            'avatar_provider' => 'Avatar provider',
            'avatar_provider_help' => 'Choose how to generate avatars for comments. Gravatar requires email, UI Avatars generates based on name.',
            'avatar_provider_choices' => [
                'gravatar' => 'Gravatar (Email-based)',
                'ui_avatars' => 'UI Avatars (Name-based)',
            ],
            'email_optional' => 'Make email field optional',
            'email_optional_help' => 'When enabled, visitors can submit comments without providing an email address.',
            'show_website_field' => 'Показване на полето за уебсайт във формата за коментари',
            'show_website_field_help' => 'Когато е изключено, полето за уебсайт ще бъде скрито от публичната форма за коментари.',
            'default_avatar' => 'Аватар по подразбиране',
            'default_avatar_helper' => 'Default avatar for the author when they don\'t have an avatar. If you don\'t select any image, it will be generated using the selected avatar provider. Image size should be 150x150px.',
        ],
    ],
];
