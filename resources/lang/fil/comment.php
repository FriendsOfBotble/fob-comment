<?php

return [
    'common' => [
        'name' => 'Pangalan',
        'email' => 'Email',
        'phone' => 'Telepono',
        'website' => 'Website',
        'comment' => 'Komento',
        'email_placeholder' => 'Ang iyong email address ay hindi ilalathala.',
        'name_placeholder' => 'Your name',
        'website_placeholder' => 'hal. https://example.com',
        'comment_placeholder' => 'Write your comment here...',
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
            'delete' => 'Burahin',
            'delete_confirm' => 'Sigurado ka bang gusto mong burahin ang komentong ito?',
        ],

        'form' => [
            'description_email_optional' => 'Ang iyong email address ay hindi ilalathala. Ang email ay opsyonal. Ang mga kinakailangang field ay minarkahan ng *',
            'title' => 'Mag-iwan ng komento',
            'description' => 'Ang iyong email address ay hindi ilalathala. Ang mga kinakailangang field ay minarkahan ng *',
            'cookie_consent' => 'I-save ang aking pangalan, email, at website sa browser na ito para sa susunod na aking pagkomento.',
            'submit' => 'I-post ang komento',
            'login_required' => 'Kailangan mong mag-login upang mag-post ng komento.',
            'login_to_comment' => 'Mag-login upang mag-komento',
        ],

        'comment_success_message' => 'Ang iyong komento ay matagumpay na naipadala.',
        'rate_limit_error' => 'Nagko-komento ka nang masyadong mabilis. Mangyaring maghintay ng :seconds segundo bago mag-post ng isa pang komento.',
        'comment_deleted_message' => 'Ang iyong komento ay matagumpay na nabura.',
        'delete_not_authorized' => 'Wala kang pahintulot na burahin ang komentong ito.',
    ],

    'enums' => [
        'statuses' => [
            'pending' => 'Naghihintay',
            'approved' => 'Naaprubahan',
            'spam' => 'Spam',
            'trash' => 'Basura',
        ],
    ],

    'email_templates' => [
        'admin_new_comment_title' => 'Natanggap ang Bagong Komento',
        'admin_new_comment_message' => 'Nag-iwan ng bagong komento si :comment_name',
        'comment_reply_title' => 'Bagong Tugon sa Iyong Komento',
        'comment_reply_message' => 'Tumugon si :reply_name sa iyong komento',
        'commented_on' => 'Nagkomento sa',
        'view_comment' => 'Tingnan ang Komento',
    ],

    'settings' => [
        'title' => 'FOB Comment',
        'description' => 'I-configure ang mga setting para sa FOB Comment',

        'email' => [
            'templates' => [
                'title' => 'Komento',
                'description' => 'Mga email template para sa mga abiso ng komento',
                'admin_new_comment' => [
                    'title' => 'Abiso ng admin para sa bagong komento',
                    'description' => 'Magpadala ng email sa admin kapag may na-post na bagong komento',
                    'subject' => 'Bagong komento sa {{ site_title }}',
                    'comment_name_description' => 'Pangalan ng may-akda ng komento',
                    'comment_email_description' => 'Email ng may-akda ng komento',
                    'comment_content_description' => 'Nilalaman ng komento',
                    'comment_reference_description' => 'Ang pahina/post na pinagkomentuhan',
                    'comment_url_description' => 'URL para tingnan ang komento',
                ],
                'comment_reply' => [
                    'title' => 'Abisuhan ang nagkomento ng tugon',
                    'description' => 'Magpadala ng email sa nagkomento kapag may tumugon sa kanilang komento',
                    'subject' => 'Bagong tugon sa iyong komento sa {{ site_title }}',
                    'comment_name_description' => 'Pangalan ng orihinal na nagkomento',
                    'reply_name_description' => 'Pangalan ng may-akda ng tugon',
                    'reply_content_description' => 'Nilalaman ng tugon',
                    'comment_reference_description' => 'Ang pahina/post na pinagkomentuhan',
                    'comment_url_description' => 'URL para tingnan ang komento',
                ],
            ],
        ],

        'form' => [
            'enable_recaptcha' => 'I-enable ang reCAPTCHA',
            'enable_recaptcha_help' => 'Kailangan mong i-enable ang reCAPTCHA sa :url para magamit ang feature na ito.',
            'captcha_setting_label' => 'Mga setting ng Captcha',
            'disable_guest_comment' => 'Huwag payagan ang mga komento ng bisita',
            'disable_guest_comment_help' => 'Kapag naka-enable, kailangan naka-login ang mga user upang mag-post ng komento. Nakakatulong ito na mabawasan ang spam na mga komento.',
            'comment_moderation' => 'Ang mga komento ay dapat manu-manong aprubahan',
            'comment_moderation_help' => 'Lahat ng komento ay dapat manu-manong aprubahan ng isang administrator bago ipakita sa frontend.',
            'rate_limit_seconds' => 'Rate limit (mga segundo)',
            'rate_limit_seconds_help' => 'Minimum na oras sa segundo sa pagitan ng mga komento mula sa parehong user. Itakda sa 0 para i-disable ang rate limiting.',
            'show_comment_cookie_consent' => 'Ipakita ang checkbox ng mga comment cookies, pinapayagan ang mga bisita na i-save ang kanilang impormasyon sa browser',
            'show_comment_cookie_consent_help' => 'Kapag naka-enable, maaaring i-save ng mga bisita ang kanilang pangalan, email, at website sa kanilang browser para sa mga susunod na komento.',
            'auto_fill_comment_form' => 'Awtomatikong punan ang data ng komento para sa mga naka-log in na user',
            'auto_fill_comment_form_help' => 'Ang form ng komento ay awtomatikong mapupunan ng user data tulad ng buong pangalan, email atbp., kung sila ay naka-log in.',
            'comment_order' => 'Pagbukud-bukurin ang mga komento ayon sa',
            'comment_order_help' => 'Piliin ang gustong pagkakasunud-sunod para sa pagpapakita ng mga komento sa listahan.',
            'comment_order_choices' => [
                'asc' => 'Pinakaluma',
                'desc' => 'Pinakabago',
            ],
            'display_admin_badge' => 'Ipakita ang admin badge para sa mga komento ng admin',
            'display_admin_badge_help' => 'Kapag naka-enable, magpapakita ng "Admin" badge sa tabi ng pangalan ng mga admin sa kanilang mga komento.',
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
            'allow_author_delete' => 'Payagan ang mga may-akda na burahin ang kanilang mga komento',
            'allow_author_delete_help' => 'Kapag naka-enable, maaaring burahin ng mga naka-log in na user ang kanilang sariling mga komento.',
            'primary_color' => 'Pangunahing kulay',
            'primary_color_helper' => 'Pangunahing kulay para sa mga pindutan, checkbox, at badge. Iwanang blangko para gamitin ang pangunahing kulay ng tema.',
            'primary_color_hover' => 'Pangunahing hover na kulay',
            'primary_color_hover_helper' => 'Hover na kulay para sa mga pindutan. Iwanang blangko para gamitin ang mas malalim na lilim ng pangunahing kulay.',
        ],
    ],
];
