<?php

return [
    'common' => [
        'name' => 'Име',
        'email' => 'Имејл',
        'phone' => 'Телефон',
        'website' => 'Веб сајт',
        'comment' => 'Коментар',
        'email_placeholder' => 'Ваша имејл адреса неће бити објављена.',
        'name_placeholder' => 'Your name',
        'website_placeholder' => 'нпр. https://example.com',
        'comment_placeholder' => 'Write your comment here...',
    ],

    'title' => 'Коментари',
    'author' => 'Аутор',
    'responded_to' => 'Одговор на',
    'permalink' => 'Стална веза',
    'url' => 'URL',
    'submitted_on' => 'Послато',
    'edit_comment' => 'Измени коментар',
    'reply' => 'Одговори',
    'in_reply_to' => 'Као одговор на :name',

    'reply_modal' => [
        'title' => 'Одговори на :comment',
        'cancel' => 'Откажи',
    ],

    'allow_comments' => 'Дозволи коментаре',

    'front' => [
        'admin_badge' => 'Админ',

        'list' => [
            'title' => ':count коментар|:count коментара|:count коментара',
            'title_singular' => ':count коментар',
            'title_plural' => ':count коментара',
            'reply' => 'Одговори',
            'reply_to' => 'Одговори :name',
            'cancel_reply' => 'Откажи одговор',
            'waiting_for_approval_message' => 'Ваш коментар чека одобрење. Ово је преглед, ваш коментар ће бити видљив након одобрења.',
            'delete' => 'Обриши',
            'delete_confirm' => 'Да ли сте сигурни да желите да обришете овај коментар?',
        ],

        'form' => [
            'description_email_optional' => 'Your email address will not be published. Email is optional. Required fields are marked *',
            'title' => 'Оставите коментар',
            'description' => 'Ваша имејл адреса неће бити објављена. Обавезна поља су означена са *',
            'cookie_consent' => 'Сачувај моје ime, имејл и веб сајт у овом прегледачу за следећи пут када коментаришем.',
            'submit' => 'Пошаљи коментар',
            'login_required' => 'Морате бити пријављени да бисте објавили коментар.',
            'login_to_comment' => 'Пријавите се да коментаришете',
        ],

        'comment_success_message' => 'Ваш коментар је успешно послат.',
        'rate_limit_error' => 'You are commenting too fast. Please wait :seconds seconds before posting another comment.',
        'comment_deleted_message' => 'Ваш коментар је успешно обрисан.',
        'delete_not_authorized' => 'Нисте овлашћени да обришете овај коментар.',
    ],

    'enums' => [
        'statuses' => [
            'pending' => 'На чекању',
            'approved' => 'Одобрено',
            'spam' => 'Спам',
            'trash' => 'Отпад',
        ],
    ],

    'email_templates' => [
        'admin_new_comment_title' => 'Примљен нови коментар',
        'admin_new_comment_message' => ':comment_name је оставио нови коментар',
        'comment_reply_title' => 'Нови одговор на ваш коментар',
        'comment_reply_message' => ':reply_name је одговорио на ваш коментар',
        'commented_on' => 'Коментарисано на',
        'view_comment' => 'Погледај коментар',
    ],

    'settings' => [
        'title' => 'FOB Comment',
        'description' => 'Конфигуришите подешавања за FOB Comment',

        'email' => [
            'templates' => [
                'title' => 'Коментар',
                'description' => 'Шаблони е-поште за обавештења о коментарима',
                'admin_new_comment' => [
                    'title' => 'Обавештење администратора о новом коментару',
                    'description' => 'Пошаљи е-пошту администратору када је објављен нови коментар',
                    'subject' => 'Нови коментар на {{ site_title }}',
                    'comment_name_description' => 'Ime аутора коментара',
                    'comment_email_description' => 'Имејл аутора коментара',
                    'comment_content_description' => 'Садржај коментара',
                    'comment_reference_description' => 'Страница/чланак на коме је коментарисано',
                    'comment_url_description' => 'URL за преглед коментара',
                ],
                'comment_reply' => [
                    'title' => 'Обавести коментатора о одговору',
                    'description' => 'Пошаљи е-пошту коментатору када неко одговори на његов коментар',
                    'subject' => 'Нови одговор на ваш коментар на {{ site_title }}',
                    'comment_name_description' => 'Ime оригиналног коментатора',
                    'reply_name_description' => 'Ime аутора одговора',
                    'reply_content_description' => 'Садржај одговора',
                    'comment_reference_description' => 'Страница/чланак на коме је коментарисано',
                    'comment_url_description' => 'URL за преглед коментара',
                ],
            ],
        ],

        'form' => [
            'enable_recaptcha' => 'Омогући reCAPTCHA',
            'enable_recaptcha_help' => 'Морате омогућити reCAPTCHA на :url да бисте користили ову функцију.',
            'captcha_setting_label' => 'Captcha подешавања',
            'disable_guest_comment' => 'Онемогући коментаре гостију',
            'disable_guest_comment_help' => 'Када је омогућено, корисници морају бити пријављени да би објавили коментаре. Ово помаже у смањењу нежељених коментара.',
            'comment_moderation' => 'Коментари морају бити ручно одобрени',
            'comment_moderation_help' => 'Сви коментари морају бити ручно одобрени од стране администратора пре приказивања на сајту.',
            'rate_limit_seconds' => 'Rate limit (seconds)',
            'rate_limit_seconds_help' => 'Minimum time in seconds between comments from the same user. Set to 0 to disable rate limiting.',
            'show_comment_cookie_consent' => 'Прикажи поље за колачиће коментара, омогућавајући посетиоцима да сачувају своје податке у прегледачу',
            'show_comment_cookie_consent_help' => 'When enabled, visitors can save their name, email, and website in their browser for future comments.',
            'auto_fill_comment_form' => 'Аутоматски попуни податке коментара за пријављене кориснике',
            'auto_fill_comment_form_help' => 'Образац за коментаре ће бити аутоматски попуњен корисничким подацима као што су пуно ime, имејл итд., ако су пријављени.',
            'comment_order' => 'Сортирај коментаре по',
            'comment_order_help' => 'Изаберите жељени редослед за приказ коментара у листи.',
            'comment_order_choices' => [
                'asc' => 'Најстарији',
                'desc' => 'Најновији',
            ],
            'display_admin_badge' => 'Прикажи админ значку за коментаре администратора',
            'display_admin_badge_help' => 'When enabled, comments from admins will show an "Admin" badge next to their name.',
            'show_admin_role_name_for_admin_badge' => 'Прикажи назив админ улоге за админ значку',
            'show_admin_role_name_for_admin_badge_helper' => 'Ако је омогућено, админ значка ће приказати назив админ улоге уместо подразумеваног текста "Админ". Ако је назив админ улоге празан, користиће се подразумевани текст. Ако корисник има више улога, користиће се прва улога.',
            'avatar_provider' => 'Avatar provider',
            'avatar_provider_help' => 'Choose how to generate avatars for comments. Gravatar requires email, UI Avatars generates based on name.',
            'avatar_provider_choices' => [
                'gravatar' => 'Gravatar (Email-based)',
                'ui_avatars' => 'UI Avatars (Name-based)',
            ],
            'email_optional' => 'Make email field optional',
            'email_optional_help' => 'When enabled, visitors can submit comments without providing an email address.',
            'show_website_field' => 'Прикажи поље за веб-сајт у форми за коментаре',
            'show_website_field_help' => 'Када је онемогућено, поље за веб-сајт биће сакривено са јавне форме за коментаре.',
            'default_avatar' => 'Подразумевани аватар',
            'default_avatar_helper' => 'Default avatar for the author when they don\'t have an avatar. If you don\'t select any image, it will be generated using the selected avatar provider. Image size should be 150x150px.',
            'allow_author_delete' => 'Дозволи ауторима да бришу своје коментаре',
            'allow_author_delete_help' => 'Када је омогућено, пријављени корисници могу да бришу своје сопствене коментаре.',
            'primary_color' => 'Примарна боја',
            'primary_color_helper' => 'Примарна боја за дугмад, поља за потврду и значке. Оставите празно да бисте користили примарну боју теме.',
            'primary_color_hover' => 'Примарна боја при преласку мишем',
            'primary_color_hover_helper' => 'Боја при преласку мишем за дугмад. Оставите празно да бисте користили тамнији тон примарне боје.',
        ],
    ],
];
