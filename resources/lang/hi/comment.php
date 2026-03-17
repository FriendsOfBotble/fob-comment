<?php

return [
    'common' => [
        'name' => 'नाम',
        'email' => 'ईमेल',
        'phone' => 'फ़ोन',
        'website' => 'वेबसाइट',
        'comment' => 'टिप्पणी',
        'email_placeholder' => 'आपका ईमेल पता प्रकाशित नहीं किया जाएगा।',
        'name_placeholder' => 'Your name',
        'website_placeholder' => 'उदा. https://example.com',
        'comment_placeholder' => 'Write your comment here...',
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
            'delete' => 'हटाएं',
            'delete_confirm' => 'क्या आप वाकई इस टिप्पणी को हटाना चाहते हैं?',
        ],

        'form' => [
            'description_email_optional' => 'Your email address will not be published. Email is optional. Required fields are marked *',
            'title' => 'एक टिप्पणी छोड़ें',
            'description' => 'आपका ईमेल पता प्रकाशित नहीं किया जाएगा। आवश्यक फ़ील्ड * से चिह्नित हैं',
            'cookie_consent' => 'अगली बार टिप्पणी करने के लिए इस ब्राउज़र में मेरा नाम, ईमेल और वेबसाइट सहेजें।',
            'submit' => 'टिप्पणी पोस्ट करें',
            'login_required' => 'टिप्पणी पोस्ट करने के लिए आपको लॉग इन करना होगा।',
            'login_to_comment' => 'टिप्पणी करने के लिए लॉग इन करें',
        ],

        'comment_success_message' => 'आपकी टिप्पणी सफलतापूर्वक भेजी गई है।',
        'rate_limit_error' => 'आप बहुत तेज़ी से टिप्पणी कर रहे हैं। कृपया एक और टिप्पणी पोस्ट करने से पहले :seconds सेकंड प्रतीक्षा करें।',
        'comment_deleted_message' => 'आपकी टिप्पणी सफलतापूर्वक हटा दी गई है।',
        'delete_not_authorized' => 'आपको इस टिप्पणी को हटाने का अधिकार नहीं है।',
    ],

    'enums' => [
        'statuses' => [
            'pending' => 'लंबित',
            'approved' => 'स्वीकृत',
            'spam' => 'स्पैम',
            'trash' => 'कचरा',
        ],
    ],

    'email_templates' => [
        'admin_new_comment_title' => 'नई टिप्पणी प्राप्त हुई',
        'admin_new_comment_message' => ':comment_name ने एक नई टिप्पणी की',
        'comment_reply_title' => 'आपकी टिप्पणी का नया जवाब',
        'comment_reply_message' => ':reply_name ने आपकी टिप्पणी का जवाब दिया',
        'commented_on' => 'पर टिप्पणी की',
        'view_comment' => 'टिप्पणी देखें',
    ],

    'settings' => [
        'title' => 'FOB Comment',
        'description' => 'FOB Comment के लिए सेटिंग्स कॉन्फ़िगर करें',

        'email' => [
            'templates' => [
                'title' => 'टिप्पणी',
                'description' => 'टिप्पणी सूचनाओं के लिए ईमेल टेम्पलेट',
                'admin_new_comment' => [
                    'title' => 'नई टिप्पणी के लिए व्यवस्थापक सूचना',
                    'description' => 'नई टिप्पणी पोस्ट होने पर व्यवस्थापक को ईमेल भेजें',
                    'subject' => '{{ site_title }} पर नई टिप्पणी',
                    'comment_name_description' => 'टिप्पणी लेखक का नाम',
                    'comment_email_description' => 'टिप्पणी लेखक का ईमेल',
                    'comment_content_description' => 'टिप्पणी की सामग्री',
                    'comment_reference_description' => 'जिस पृष्ठ/पोस्ट पर टिप्पणी की गई',
                    'comment_url_description' => 'टिप्पणी देखने का URL',
                ],
                'comment_reply' => [
                    'title' => 'जवाब के लिए टिप्पणीकार को सूचित करें',
                    'description' => 'जब कोई उनकी टिप्पणी का जवाब दे तो टिप्पणीकार को ईमेल भेजें',
                    'subject' => '{{ site_title }} पर आपकी टिप्पणी का नया जवाब',
                    'comment_name_description' => 'मूल टिप्पणीकार का नाम',
                    'reply_name_description' => 'जवाब लेखक का नाम',
                    'reply_content_description' => 'जवाब की सामग्री',
                    'comment_reference_description' => 'जिस पृष्ठ/पोस्ट पर टिप्पणी की गई',
                    'comment_url_description' => 'टिप्पणी देखने का URL',
                ],
            ],
        ],

        'form' => [
            'enable_recaptcha' => 'reCAPTCHA सक्षम करें',
            'enable_recaptcha_help' => 'इस सुविधा का उपयोग करने के लिए आपको :url में reCAPTCHA सक्षम करने की आवश्यकता है।',
            'captcha_setting_label' => 'कैप्चा सेटिंग्स',
            'disable_guest_comment' => 'अतिथि टिप्पणियां अक्षम करें',
            'disable_guest_comment_help' => 'सक्षम होने पर, उपयोगकर्ताओं को टिप्पणी पोस्ट करने के लिए लॉग इन करना होगा। यह स्पैम टिप्पणियों को कम करने में मदद करता है।',
            'comment_moderation' => 'टिप्पणियों को मैन्युअल रूप से अनुमोदित किया जाना चाहिए',
            'comment_moderation_help' => 'फ्रंटएंड पर प्रदर्शित होने से पहले सभी टिप्पणियों को एक व्यवस्थापक द्वारा मैन्युअल रूप से अनुमोदित किया जाना चाहिए।',
            'rate_limit_seconds' => 'दर सीमा (सेकंड)',
            'rate_limit_seconds_help' => 'एक ही उपयोगकर्ता की टिप्पणियों के बीच न्यूनतम समय सेकंड में। दर सीमा अक्षम करने के लिए 0 सेट करें।',
            'show_comment_cookie_consent' => 'टिप्पणी कुकीज़ चेकबॉक्स दिखाएं, जो आगंतुकों को ब्राउज़र में अपनी जानकारी सहेजने की अनुमति देता है',
            'show_comment_cookie_consent_help' => 'सक्षम होने पर, आगंतुक भविष्य की टिप्पणियों के लिए अपना नाम, ईमेल और वेबसाइट ब्राउज़र में सहेज सकते हैं।',
            'auto_fill_comment_form' => 'लॉग-इन उपयोगकर्ताओं के लिए टिप्पणी डेटा स्वतः भरें',
            'auto_fill_comment_form_help' => 'यदि वे लॉग इन हैं तो टिप्पणी फॉर्म स्वचालित रूप से उपयोगकर्ता डेटा जैसे पूरा नाम, ईमेल आदि से भर जाएगा।',
            'comment_order' => 'टिप्पणियों को इसके अनुसार क्रमबद्ध करें',
            'comment_order_help' => 'सूची में टिप्पणियों को प्रदर्शित करने के लिए पसंदीदा क्रम चुनें।',
            'comment_order_choices' => [
                'asc' => 'सबसे पुरानी',
                'desc' => 'नवीनतम',
            ],
            'display_admin_badge' => 'व्यवस्थापक टिप्पणियों के लिए व्यवस्थापक बैज प्रदर्शित करें',
            'display_admin_badge_help' => 'सक्षम होने पर, व्यवस्थापकों की टिप्पणियों में उनके नाम के आगे "व्यवस्थापक" बैज दिखेगा।',
            'show_admin_role_name_for_admin_badge' => 'व्यवस्थापक बैज के लिए व्यवस्थापक भूमिका नाम दिखाएं',
            'show_admin_role_name_for_admin_badge_helper' => 'यदि सक्षम है, तो व्यवस्थापक बैज डिफ़ॉल्ट "व्यवस्थापक" टेक्स्ट के बजाय व्यवस्थापक भूमिका नाम प्रदर्शित करेगा। यदि व्यवस्थापक भूमिका नाम खाली है, तो डिफ़ॉल्ट टेक्स्ट का उपयोग किया जाएगा। यदि उपयोगकर्ता के पास कई भूमिकाएं हैं, तो पहली भूमिका का उपयोग किया जाएगा।',
            'avatar_provider' => 'अवतार प्रदाता',
            'avatar_provider_help' => 'चुनें कि टिप्पणियों के लिए अवतार कैसे बनाएं। Gravatar को ईमेल चाहिए, UI Avatars नाम के आधार पर बनाता है।',
            'avatar_provider_choices' => [
                'gravatar' => 'Gravatar (ईमेल आधारित)',
                'ui_avatars' => 'UI Avatars (नाम आधारित)',
            ],
            'email_optional' => 'ईमेल फ़ील्ड को वैकल्पिक बनाएं',
            'email_optional_help' => 'सक्षम होने पर, आगंतुक ईमेल पता दिए बिना टिप्पणियां सबमिट कर सकते हैं।',
            'show_website_field' => 'टिप्पणी फ़ॉर्म में वेबसाइट फ़ील्ड दिखाएं',
            'show_website_field_help' => 'अक्षम होने पर वेबसाइट फ़ील्ड सार्वजनिक टिप्पणी फ़ॉर्म से छिपा रहेगा।',
            'default_avatar' => 'डिफ़ॉल्ट अवतार',
            'default_avatar_helper' => 'लेखक के लिए डिफ़ॉल्ट अवतार जब उनके पास अवतार नहीं है। यदि आप कोई छवि नहीं चुनते हैं, तो इसे चयनित अवतार प्रदाता का उपयोग करके बनाया जाएगा। छवि का आकार 150x150px होना चाहिए।',
            'allow_author_delete' => 'लेखकों को उनकी टिप्पणियां हटाने की अनुमति दें',
            'allow_author_delete_help' => 'सक्षम होने पर, लॉग-इन उपयोगकर्ता अपनी टिप्पणियां हटा सकते हैं।',
            'primary_color' => 'प्राथमिक रंग',
            'primary_color_helper' => 'बटन, चेकबॉक्स और बैज के लिए प्राथमिक रंग। थीम का प्राथमिक रंग उपयोग करने के लिए खाली छोड़ें।',
            'primary_color_hover' => 'प्राथमिक होवर रंग',
            'primary_color_hover_helper' => 'बटन के लिए होवर रंग। प्राथमिक रंग का गहरा शेड उपयोग करने के लिए खाली छोड़ें।',
        ],
    ],
];
