<?php

return [
    'common' => [
        'name' => 'Pangalan',
        'email' => 'Email',
        'phone' => 'Telepono',
        'website' => 'Website',
        'comment' => 'Komento',
        'email_placeholder' => 'Ang iyong email address ay hindi ilalathala.',
        'website_placeholder' => 'hal. https://example.com',
    ],

    'title' => 'Mga Komento',
    'author' => 'May-akda',
    'responded_to' => 'Tugon sa',
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
            'title_singular' => ':count komento',
            'title_plural' => ':count mga komento',
            'reply' => 'Tumugon',
            'reply_to' => 'Tumugon kay :name',
            'cancel_reply' => 'Kanselahin ang tugon',
            'waiting_for_approval_message' => 'Ang iyong komento ay naghihintay ng pag-apruba. Ito ay preview, ang iyong komento ay makikita pagkatapos itong aprubahan.',
        ],

        'form' => [
            'description_email_optional' => 'Ang iyong email address ay hindi ilalathala. Ang email ay opsyonal. Ang mga kinakailangang field ay minarkahan ng *',
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
            'avatar_provider' => 'Tagapagbigay ng avatar',
            'avatar_provider_help' => 'Pumili kung paano bubuo ng mga avatar para sa mga komento. Ang Gravatar ay nangangailangan ng email, ang UI Avatars ay bumubuo batay sa pangalan.',
            'avatar_provider_choices' => [
                'gravatar' => 'Gravatar (Batay sa email)',
                'ui_avatars' => 'UI Avatars (Batay sa pangalan)',
            ],
            'email_optional' => 'Gawing opsyonal ang email field',
            'email_optional_help' => 'Kapag pinagana, maaaring magsumite ng mga komento ang mga bisita nang hindi nagbibigay ng email address.',
            'show_website_field' => 'Ipakita ang field ng website sa form ng komento',
            'show_website_field_help' => 'Kapag naka-disable, itatago ang field ng website mula sa pampublikong form ng komento.',
            'default_avatar' => 'Default na avatar',
            'default_avatar_helper' => 'Default na avatar para sa may-akda kapag wala silang avatar. Kung hindi ka pumili ng anumang imahe, ito ay bubuin gamit ang napiling avatar provider. Ang sukat ng imahe ay dapat na 150x150px.',
        ],
    ],
];
