<?php

return [
    'common' => [
        'name' => 'नाम',
        'email' => 'ईमेल',
        'phone' => 'फ़ोन',
        'website' => 'वेबसाइट',
        'comment' => 'टिप्पणी',
        'email_placeholder' => 'आपका ईमेल पता प्रकाशित नहीं किया जाएगा।',
        'website_placeholder' => 'उदा. https://example.com',
    ],

    'title' => 'टिप्पणियाँ',
    'author' => 'लेखक',
    'responded_to' => 'के जवाब में',
    'permalink' => 'परमालिंक',
    'url' => 'यूआरएल',
    'submitted_on' => 'प्रस्तुत किया गया',
    'edit_comment' => 'टिप्पणी संपादित करें',
    'reply' => 'जवाब दें',
    'in_reply_to' => ':name के जवाब में',

    'reply_modal' => [
        'title' => ':comment का जवाब दें',
        'cancel' => 'रद्द करें',
    ],

    'allow_comments' => 'टिप्पणियों की अनुमति दें',

    'front' => [
        'admin_badge' => 'व्यवस्थापक',

        'list' => [
            'title' => ':count टिप्पणी|:count टिप्पणियाँ',
            'title_singular' => ':count टिप्पणी',
            'title_plural' => ':count टिप्पणियाँ',
            'reply' => 'जवाब दें',
            'reply_to' => ':name को जवाब दें',
            'cancel_reply' => 'जवाब रद्द करें',
            'waiting_for_approval_message' => 'आपकी टिप्पणी मॉडरेशन की प्रतीक्षा कर रही है। यह एक पूर्वावलोकन है, आपकी टिप्पणी अनुमोदन के बाद दिखाई देगी।',
        ],

        'form' => [
            'description_email_optional' => 'Your email address will not be published. Email is optional. Required fields are marked *',
            'title' => 'एक टिप्पणी छोड़ें',
            'description' => 'आपका ईमेल पता प्रकाशित नहीं किया जाएगा। आवश्यक फ़ील्ड * से चिह्नित हैं',
            'cookie_consent' => 'अगली बार टिप्पणी करने के लिए इस ब्राउज़र में मेरा नाम, ईमेल और वेबसाइट सहेजें।',
            'submit' => 'टिप्पणी पोस्ट करें',
        ],

        'comment_success_message' => 'आपकी टिप्पणी सफलतापूर्वक भेजी गई है।',
    ],

    'enums' => [
        'statuses' => [
            'pending' => 'लंबित',
            'approved' => 'स्वीकृत',
            'spam' => 'स्पैम',
            'trash' => 'कचरा',
        ],
    ],

    'settings' => [
        'title' => 'FOB Comment',
        'description' => 'FOB Comment के लिए सेटिंग्स कॉन्फ़िगर करें',

        'form' => [
            'enable_recaptcha' => 'reCAPTCHA सक्षम करें',
            'enable_recaptcha_help' => 'इस सुविधा का उपयोग करने के लिए आपको :url में reCAPTCHA सक्षम करने की आवश्यकता है।',
            'captcha_setting_label' => 'कैप्चा सेटिंग्स',
            'comment_moderation' => 'टिप्पणियों को मैन्युअल रूप से अनुमोदित किया जाना चाहिए',
            'comment_moderation_help' => 'फ्रंटएंड पर प्रदर्शित होने से पहले सभी टिप्पणियों को एक व्यवस्थापक द्वारा मैन्युअल रूप से अनुमोदित किया जाना चाहिए।',
            'show_comment_cookie_consent' => 'टिप्पणी कुकीज़ चेकबॉक्स दिखाएं, जो आगंतुकों को ब्राउज़र में अपनी जानकारी सहेजने की अनुमति देता है',
            'auto_fill_comment_form' => 'लॉग-इन उपयोगकर्ताओं के लिए टिप्पणी डेटा स्वतः भरें',
            'auto_fill_comment_form_help' => 'यदि वे लॉग इन हैं तो टिप्पणी फॉर्म स्वचालित रूप से उपयोगकर्ता डेटा जैसे पूरा नाम, ईमेल आदि से भर जाएगा।',
            'comment_order' => 'टिप्पणियों को इसके अनुसार क्रमबद्ध करें',
            'comment_order_help' => 'सूची में टिप्पणियों को प्रदर्शित करने के लिए पसंदीदा क्रम चुनें।',
            'comment_order_choices' => [
                'asc' => 'सबसे पुरानी',
                'desc' => 'नवीनतम',
            ],
            'display_admin_badge' => 'व्यवस्थापक टिप्पणियों के लिए व्यवस्थापक बैज प्रदर्शित करें',
            'show_admin_role_name_for_admin_badge' => 'व्यवस्थापक बैज के लिए व्यवस्थापक भूमिका नाम दिखाएं',
            'show_admin_role_name_for_admin_badge_helper' => 'यदि सक्षम है, तो व्यवस्थापक बैज डिफ़ॉल्ट "व्यवस्थापक" टेक्स्ट के बजाय व्यवस्थापक भूमिका नाम प्रदर्शित करेगा। यदि व्यवस्थापक भूमिका नाम खाली है, तो डिफ़ॉल्ट टेक्स्ट का उपयोग किया जाएगा। यदि उपयोगकर्ता के पास कई भूमिकाएं हैं, तो पहली भूमिका का उपयोग किया जाएगा।',
            'avatar_provider' => 'Avatar provider',
            'avatar_provider_help' => 'Choose how to generate avatars for comments. Gravatar requires email, UI Avatars generates based on name.',
            'avatar_provider_choices' => [
                'gravatar' => 'Gravatar (Email-based)',
                'ui_avatars' => 'UI Avatars (Name-based)',
            ],
            'email_optional' => 'Make email field optional',
            'email_optional_help' => 'When enabled, visitors can submit comments without providing an email address.',
            'show_website_field' => 'टिप्पणी फ़ॉर्म में वेबसाइट फ़ील्ड दिखाएं',
            'show_website_field_help' => 'अक्षम होने पर वेबसाइट फ़ील्ड सार्वजनिक टिप्पणी फ़ॉर्म से छिपा रहेगा।',
            'default_avatar' => 'डिफ़ॉल्ट अवतार',
            'default_avatar_helper' => 'Default avatar for the author when they don\'t have an avatar. If you don\'t select any image, it will be generated using the selected avatar provider. Image size should be 150x150px.',
        ],
    ],
];
