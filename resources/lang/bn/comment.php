<?php

return [
    'common' => [
        'name' => 'নাম',
        'email' => 'ইমেইল',
        'phone' => 'ফোন',
        'website' => 'ওয়েবসাইট',
        'comment' => 'মন্তব্য',
        'email_placeholder' => 'আপনার ইমেইল ঠিকানা প্রকাশিত হবে না।',
        'name_placeholder' => 'Your name',
        'website_placeholder' => 'যেমন: https://example.com',
        'comment_placeholder' => 'Write your comment here...',
    ],

    'title' => 'মন্তব্যসমূহ',
    'author' => 'লেখক',
    'responded_to' => 'প্রতিক্রিয়া',
    'permalink' => 'পার্মালিংক',
    'url' => 'ইউআরএল',
    'submitted_on' => 'জমা দেওয়া হয়েছে',
    'edit_comment' => 'মন্তব্য সম্পাদনা করুন',
    'reply' => 'উত্তর',
    'in_reply_to' => ':name এর উত্তরে',

    'reply_modal' => [
        'title' => ':comment এর উত্তর দিন',
        'cancel' => 'বাতিল',
    ],

    'allow_comments' => 'মন্তব্যের অনুমতি দিন',

    'front' => [
        'admin_badge' => 'অ্যাডমিন',

        'list' => [
            'title' => ':count টি মন্তব্য',
            'title_singular' => ':count টি মন্তব্য',
            'title_plural' => ':count টি মন্তব্য',
            'reply' => 'উত্তর',
            'reply_to' => ':name কে উত্তর দিন',
            'cancel_reply' => 'উত্তর বাতিল করুন',
            'waiting_for_approval_message' => 'আপনার মন্তব্য অনুমোদনের অপেক্ষায় রয়েছে। এটি একটি পূর্বরূপ, অনুমোদনের পরে আপনার মন্তব্য দৃশ্যমান হবে।',
            'delete' => 'মুছুন',
            'delete_confirm' => 'আপনি কি নিশ্চিত যে এই মন্তব্যটি মুছতে চান?',
        ],

        'form' => [
            'description_email_optional' => 'Your email address will not be published. Email is optional. Required fields are marked *',
            'title' => 'একটি মন্তব্য করুন',
            'description' => 'আপনার ইমেইল ঠিকানা প্রকাশিত হবে না। প্রয়োজনীয় ক্ষেত্রগুলি * দিয়ে চিহ্নিত',
            'cookie_consent' => 'পরবর্তী মন্তব্যের জন্য এই ব্রাউজারে আমার নাম, ইমেইল এবং ওয়েবসাইট সংরক্ষণ করুন।',
            'submit' => 'মন্তব্য পোস্ট করুন',
            'login_required' => 'মন্তব্য পোস্ট করতে আপনাকে লগ ইন করতে হবে।',
            'login_to_comment' => 'মন্তব্য করতে লগ ইন করুন',
        ],

        'comment_success_message' => 'আপনার মন্তব্য সফলভাবে পাঠানো হয়েছে।',
        'rate_limit_error' => 'আপনি খুব দ্রুত মন্তব্য করছেন। আরেকটি মন্তব্য পোস্ট করার আগে :seconds সেকেন্ড অপেক্ষা করুন।',
        'comment_deleted_message' => 'আপনার মন্তব্য সফলভাবে মুছে ফেলা হয়েছে।',
        'delete_not_authorized' => 'এই মন্তব্যটি মুছতে আপনি অনুমোদিত নন।',
    ],

    'enums' => [
        'statuses' => [
            'pending' => 'অমীমাংসিত',
            'approved' => 'অনুমোদিত',
            'spam' => 'স্প্যাম',
            'trash' => 'ট্র্যাশ',
        ],
    ],

    'email_templates' => [
        'admin_new_comment_title' => 'নতুন মন্তব্য পাওয়া গেছে',
        'admin_new_comment_message' => ':comment_name একটি নতুন মন্তব্য করেছেন',
        'comment_reply_title' => 'আপনার মন্তব্যে নতুন উত্তর',
        'comment_reply_message' => ':reply_name আপনার মন্তব্যে উত্তর দিয়েছেন',
        'commented_on' => 'মন্তব্য করেছেন',
        'view_comment' => 'মন্তব্য দেখুন',
    ],

    'settings' => [
        'title' => 'FOB Comment',
        'description' => 'FOB Comment এর জন্য সেটিংস কনফিগার করুন',

        'email' => [
            'templates' => [
                'title' => 'মন্তব্য',
                'description' => 'মন্তব্য বিজ্ঞপ্তির জন্য ইমেইল টেমপ্লেট',
                'admin_new_comment' => [
                    'title' => 'নতুন মন্তব্যের জন্য অ্যাডমিন বিজ্ঞপ্তি',
                    'description' => 'নতুন মন্তব্য পোস্ট হলে অ্যাডমিনকে ইমেইল পাঠান',
                    'subject' => '{{ site_title }}-এ নতুন মন্তব্য',
                    'comment_name_description' => 'মন্তব্যকারীর নাম',
                    'comment_email_description' => 'মন্তব্যকারীর ইমেইল',
                    'comment_content_description' => 'মন্তব্যের বিষয়বস্তু',
                    'comment_reference_description' => 'যে পেজ/পোস্টে মন্তব্য করা হয়েছে',
                    'comment_url_description' => 'মন্তব্য দেখার URL',
                ],
                'comment_reply' => [
                    'title' => 'উত্তরের জন্য মন্তব্যকারীকে বিজ্ঞপ্তি',
                    'description' => 'কেউ উত্তর দিলে মন্তব্যকারীকে ইমেইল পাঠান',
                    'subject' => '{{ site_title }}-এ আপনার মন্তব্যে নতুন উত্তর',
                    'comment_name_description' => 'মূল মন্তব্যকারীর নাম',
                    'reply_name_description' => 'উত্তরদাতার নাম',
                    'reply_content_description' => 'উত্তরের বিষয়বস্তু',
                    'comment_reference_description' => 'যে পেজ/পোস্টে মন্তব্য করা হয়েছে',
                    'comment_url_description' => 'মন্তব্য দেখার URL',
                ],
            ],
        ],

        'form' => [
            'enable_recaptcha' => 'reCAPTCHA সক্রিয় করুন',
            'enable_recaptcha_help' => 'এই বৈশিষ্ট্যটি ব্যবহার করতে আপনাকে :url এ reCAPTCHA সক্রিয় করতে হবে।',
            'captcha_setting_label' => 'ক্যাপচা সেটিংস',
            'disable_guest_comment' => 'অতিথি মন্তব্য নিষ্ক্রিয় করুন',
            'disable_guest_comment_help' => 'সক্রিয় করা হলে, ব্যবহারকারীদের মন্তব্য পোস্ট করতে লগ ইন করতে হবে। এটি স্প্যাম মন্তব্য কমাতে সাহায্য করে।',
            'comment_moderation' => 'মন্তব্যগুলি ম্যানুয়ালি অনুমোদিত হতে হবে',
            'comment_moderation_help' => 'ফ্রন্টএন্ডে প্রদর্শনের আগে সমস্ত মন্তব্য একজন অ্যাডমিন দ্বারা ম্যানুয়ালি অনুমোদিত হতে হবে।',
            'rate_limit_seconds' => 'রেট সীমা (সেকেন্ড)',
            'rate_limit_seconds_help' => 'একই ব্যবহারকারীর মন্তব্যের মধ্যে ন্যূনতম সময় সেকেন্ডে। রেট সীমা নিষ্ক্রিয় করতে 0 সেট করুন।',
            'show_comment_cookie_consent' => 'মন্তব্য কুকিজ চেকবক্স দেখান, যা দর্শকদের ব্রাউজারে তাদের তথ্য সংরক্ষণ করতে দেয়',
            'show_comment_cookie_consent_help' => 'সক্রিয় করা হলে, দর্শকরা ভবিষ্যতের মন্তব্যের জন্য তাদের নাম, ইমেইল এবং ওয়েবসাইট ব্রাউজারে সংরক্ষণ করতে পারবেন।',
            'auto_fill_comment_form' => 'লগ-ইন করা ব্যবহারকারীদের জন্য মন্তব্য ডেটা স্বয়ংক্রিয়ভাবে পূরণ করুন',
            'auto_fill_comment_form_help' => 'যদি তারা লগ ইন করা থাকে তবে মন্তব্য ফর্মটি স্বয়ংক্রিয়ভাবে ব্যবহারকারীর ডেটা যেমন পূর্ণ নাম, ইমেইল ইত্যাদি দিয়ে পূরণ হবে।',
            'comment_order' => 'মন্তব্যগুলি সাজান',
            'comment_order_help' => 'তালিকায় মন্তব্য প্রদর্শনের জন্য পছন্দের ক্রম নির্বাচন করুন।',
            'comment_order_choices' => [
                'asc' => 'পুরানো',
                'desc' => 'নতুন',
            ],
            'display_admin_badge' => 'অ্যাডমিন মন্তব্যের জন্য অ্যাডমিন ব্যাজ প্রদর্শন করুন',
            'display_admin_badge_help' => 'সক্রিয় করা হলে, অ্যাডমিনদের মন্তব্যে তাদের নামের পাশে "অ্যাডমিন" ব্যাজ দেখানো হবে।',
            'show_admin_role_name_for_admin_badge' => 'অ্যাডমিন ব্যাজের জন্য অ্যাডমিন ভূমিকার নাম দেখান',
            'show_admin_role_name_for_admin_badge_helper' => 'যদি সক্রিয় থাকে, অ্যাডমিন ব্যাজ ডিফল্ট "অ্যাডমিন" টেক্সটের পরিবর্তে অ্যাডমিন ভূমিকার নাম প্রদর্শন করবে। যদি অ্যাডমিন ভূমিকার নাম খালি থাকে, ডিফল্ট টেক্সট ব্যবহার করা হবে। যদি ব্যবহারকারীর একাধিক ভূমিকা থাকে, প্রথম ভূমিকা ব্যবহার করা হবে।',
            'avatar_provider' => 'অবতার প্রদানকারী',
            'avatar_provider_help' => 'মন্তব্যের জন্য অবতার তৈরির পদ্ধতি নির্বাচন করুন। Gravatar ইমেইল প্রয়োজন, UI Avatars নাম ভিত্তিক তৈরি করে।',
            'avatar_provider_choices' => [
                'gravatar' => 'Gravatar (ইমেইল ভিত্তিক)',
                'ui_avatars' => 'UI Avatars (নাম ভিত্তিক)',
            ],
            'email_optional' => 'ইমেইল ফিল্ড ঐচ্ছিক করুন',
            'email_optional_help' => 'সক্রিয় করা হলে, দর্শকরা ইমেইল ঠিকানা না দিয়েও মন্তব্য জমা দিতে পারবেন।',
            'show_website_field' => 'মন্তব্য ফর্মে ওয়েবসাইট ফিল্ড দেখান',
            'show_website_field_help' => 'নিষ্ক্রিয় করলে, ওয়েবসাইট ফিল্ডটি পাবলিক মন্তব্য ফর্ম থেকে লুকানো থাকবে।',
            'default_avatar' => 'ডিফল্ট অবতার',
            'default_avatar_helper' => 'লেখকের ডিফল্ট অবতার যখন তাদের কোনো অবতার নেই। যদি কোনো ছবি না বেছে নেন, তাহলে নির্বাচিত অবতার প্রদানকারী ব্যবহার করে তৈরি হবে। ছবির আকার 150x150px হওয়া উচিত।',
            'allow_author_delete' => 'লেখকদের তাদের মন্তব্য মুছতে দিন',
            'allow_author_delete_help' => 'সক্রিয় করা হলে, লগ-ইন করা ব্যবহারকারীরা তাদের নিজস্ব মন্তব্য মুছতে পারবেন।',
            'primary_color' => 'প্রাথমিক রঙ',
            'primary_color_helper' => 'বোতাম, চেকবক্স এবং ব্যাজের জন্য প্রাথমিক রঙ। থিমের প্রাথমিক রঙ ব্যবহার করতে খালি রাখুন।',
            'primary_color_hover' => 'প্রাথমিক হোভার রঙ',
            'primary_color_hover_helper' => 'বোতামের জন্য হোভার রঙ। প্রাথমিক রঙের গাঢ় ছায়া ব্যবহার করতে খালি রাখুন।',
        ],
    ],
];
