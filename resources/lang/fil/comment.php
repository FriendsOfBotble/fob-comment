<?php

return [
    'common' => [
        'name' => 'Pangalan',
        'email' => 'Email',
        'website' => 'Website',
        'comment' => 'Komento',
        'email_placeholder' => 'Ang iyong email address ay hindi ilalathala.',
        'website_placeholder' => 'hal. https://example.com',
    ],

    'title' => 'Mga Komento',
    'author' => 'May-akda',
    'responsed_to' => 'Tugon sa',
    'permalink' => 'Permalink',
    'url' => 'URL',
    'submitted_on' => 'Isinumite noong',
    'edit_comment' => 'I-edit ang komento',
    'reply' => 'Tumugon',
    'in_reply_to' => 'Bilang tugon kay :name',

    'reply_modal' => [
        'title' => 'Tumugon sa :comment',
        'cancel' => 'Kanselahin',
    ],

    'allow_comments' => 'Payagan ang mga komento',

    'front' => [
        'admin_badge' => 'Admin',

        'list' => [
            'title' => ':count komento|:count mga komento',
            'reply' => 'Tumugon',
            'reply_to' => 'Tumugon kay :name',
            'cancel_reply' => 'Kanselahin ang tugon',
            'waiting_for_approval_message' => 'Ang iyong komento ay naghihintay ng pag-apruba. Ito ay preview, ang iyong komento ay makikita pagkatapos itong aprubahan.',
        ],

        'form' => [
            'description_email_optional' => 'Your email address will not be published. Email is optional. Required fields are marked *',
            'title' => 'Mag-iwan ng komento',
            'description' => 'Ang iyong email address ay hindi ilalathala. Ang mga kinakailangang field ay minarkahan ng *',
            'cookie_consent' => 'I-save ang aking pangalan, email, at website sa browser na ito para sa susunod na aking pagkomento.',
            'submit' => 'I-post ang komento',
        ],

        'comment_success_message' => 'Ang iyong komento ay matagumpay na naipadala.',
    ],

    'enums' => [
        'statuses' => [
            'pending' => 'Naghihintay',
            'approved' => 'Naaprubahan',
            'spam' => 'Spam',
            'trash' => 'Basura',
        ],
    ],

    'settings' => [
        'title' => 'FOB Comment',
        'description' => 'I-configure ang mga setting para sa FOB Comment',

        'form' => [
            'enable_recaptcha' => 'I-enable ang reCAPTCHA',
            'enable_recaptcha_help' => 'Kailangan mong i-enable ang reCAPTCHA sa :url para magamit ang feature na ito.',
            'captcha_setting_label' => 'Mga setting ng Captcha',
            'comment_moderation' => 'Ang mga komento ay dapat manu-manong aprubahan',
            'comment_moderation_help' => 'Lahat ng komento ay dapat manu-manong aprubahan ng isang administrator bago ipakita sa frontend.',
            'show_comment_cookie_consent' => 'Ipakita ang checkbox ng mga comment cookies, pinapayagan ang mga bisita na i-save ang kanilang impormasyon sa browser',
            'auto_fill_comment_form' => 'Awtomatikong punan ang data ng komento para sa mga naka-log in na user',
            'auto_fill_comment_form_help' => 'Ang form ng komento ay awtomatikong mapupunan ng user data tulad ng buong pangalan, email atbp., kung sila ay naka-log in.',
            'comment_order' => 'Pagbukud-bukurin ang mga komento ayon sa',
            'comment_order_help' => 'Piliin ang gustong pagkakasunud-sunod para sa pagpapakita ng mga komento sa listahan.',
            'comment_order_choices' => [
                'asc' => 'Pinakaluma',
                'desc' => 'Pinakabago',
            ],
            'display_admin_badge' => 'Ipakita ang admin badge para sa mga komento ng admin',
            'show_admin_role_name_for_admin_badge' => 'Ipakita ang pangalan ng admin role para sa admin badge',
            'show_admin_role_name_for_admin_badge_helper' => 'Kung naka-enable, ang admin badge ay magpapakita ng pangalan ng admin role sa halip ng default na text na "Admin". Kung walang laman ang pangalan ng admin role, gagamitin ang default na text. Kung ang user ay may maraming role, gagamitin ang unang role.',
            'avatar_provider' => 'Avatar provider',
            'avatar_provider_help' => 'Choose how to generate avatars for comments. Gravatar requires email, UI Avatars generates based on name.',
            'avatar_provider_choices' => [
                'gravatar' => 'Gravatar (Email-based)',
                'ui_avatars' => 'UI Avatars (Name-based)',
            ],
            'email_optional' => 'Make email field optional',
            'email_optional_help' => 'When enabled, visitors can submit comments without providing an email address.',
            'default_avatar' => 'Default na avatar',
            'default_avatar_helper' => 'Default avatar for the author when they don\'t have an avatar. If you don\'t select any image, it will be generated using the selected avatar provider. Image size should be 150x150px.',
        ],
    ],
];
