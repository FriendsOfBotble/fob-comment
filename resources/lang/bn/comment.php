<?php

return [
    'common' => [
        'name' => 'নাম',
        'email' => 'ইমেইল',
        'phone' => 'ফোন',
        'website' => 'ওয়েবসাইট',
        'comment' => 'মন্তব্য',
        'email_placeholder' => 'আপনার ইমেইল ঠিকানা প্রকাশিত হবে না।',
        'website_placeholder' => 'যেমন: https://example.com',
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
        ],

        'form' => [
            'description_email_optional' => 'Your email address will not be published. Email is optional. Required fields are marked *',
            'title' => 'একটি মন্তব্য করুন',
            'description' => 'আপনার ইমেইল ঠিকানা প্রকাশিত হবে না। প্রয়োজনীয় ক্ষেত্রগুলি * দিয়ে চিহ্নিত',
            'cookie_consent' => 'পরবর্তী মন্তব্যের জন্য এই ব্রাউজারে আমার নাম, ইমেইল এবং ওয়েবসাইট সংরক্ষণ করুন।',
            'submit' => 'মন্তব্য পোস্ট করুন',
        ],

        'comment_success_message' => 'আপনার মন্তব্য সফলভাবে পাঠানো হয়েছে।',
    ],

    'enums' => [
        'statuses' => [
            'pending' => 'অমীমাংসিত',
            'approved' => 'অনুমোদিত',
            'spam' => 'স্প্যাম',
            'trash' => 'ট্র্যাশ',
        ],
    ],

    'settings' => [
        'title' => 'FOB Comment',
        'description' => 'FOB Comment এর জন্য সেটিংস কনফিগার করুন',

        'form' => [
            'enable_recaptcha' => 'reCAPTCHA সক্রিয় করুন',
            'enable_recaptcha_help' => 'এই বৈশিষ্ট্যটি ব্যবহার করতে আপনাকে :url এ reCAPTCHA সক্রিয় করতে হবে।',
            'captcha_setting_label' => 'ক্যাপচা সেটিংস',
            'comment_moderation' => 'মন্তব্যগুলি ম্যানুয়ালি অনুমোদিত হতে হবে',
            'comment_moderation_help' => 'ফ্রন্টএন্ডে প্রদর্শনের আগে সমস্ত মন্তব্য একজন অ্যাডমিন দ্বারা ম্যানুয়ালি অনুমোদিত হতে হবে।',
            'show_comment_cookie_consent' => 'মন্তব্য কুকিজ চেকবক্স দেখান, যা দর্শকদের ব্রাউজারে তাদের তথ্য সংরক্ষণ করতে দেয়',
            'auto_fill_comment_form' => 'লগ-ইন করা ব্যবহারকারীদের জন্য মন্তব্য ডেটা স্বয়ংক্রিয়ভাবে পূরণ করুন',
            'auto_fill_comment_form_help' => 'যদি তারা লগ ইন করা থাকে তবে মন্তব্য ফর্মটি স্বয়ংক্রিয়ভাবে ব্যবহারকারীর ডেটা যেমন পূর্ণ নাম, ইমেইল ইত্যাদি দিয়ে পূরণ হবে।',
            'comment_order' => 'মন্তব্যগুলি সাজান',
            'comment_order_help' => 'তালিকায় মন্তব্য প্রদর্শনের জন্য পছন্দের ক্রম নির্বাচন করুন।',
            'comment_order_choices' => [
                'asc' => 'পুরানো',
                'desc' => 'নতুন',
            ],
            'display_admin_badge' => 'অ্যাডমিন মন্তব্যের জন্য অ্যাডমিন ব্যাজ প্রদর্শন করুন',
            'show_admin_role_name_for_admin_badge' => 'অ্যাডমিন ব্যাজের জন্য অ্যাডমিন ভূমিকার নাম দেখান',
            'show_admin_role_name_for_admin_badge_helper' => 'যদি সক্রিয় থাকে, অ্যাডমিন ব্যাজ ডিফল্ট "অ্যাডমিন" টেক্সটের পরিবর্তে অ্যাডমিন ভূমিকার নাম প্রদর্শন করবে। যদি অ্যাডমিন ভূমিকার নাম খালি থাকে, ডিফল্ট টেক্সট ব্যবহার করা হবে। যদি ব্যবহারকারীর একাধিক ভূমিকা থাকে, প্রথম ভূমিকা ব্যবহার করা হবে।',
            'avatar_provider' => 'Avatar provider',
            'avatar_provider_help' => 'Choose how to generate avatars for comments. Gravatar requires email, UI Avatars generates based on name.',
            'avatar_provider_choices' => [
                'gravatar' => 'Gravatar (Email-based)',
                'ui_avatars' => 'UI Avatars (Name-based)',
            ],
            'email_optional' => 'Make email field optional',
            'email_optional_help' => 'When enabled, visitors can submit comments without providing an email address.',
            'show_website_field' => 'মন্তব্য ফর্মে ওয়েবসাইট ফিল্ড দেখান',
            'show_website_field_help' => 'নিষ্ক্রিয় করলে, ওয়েবসাইট ফিল্ডটি পাবলিক মন্তব্য ফর্ম থেকে লুকানো থাকবে।',
            'default_avatar' => 'ডিফল্ট অবতার',
            'default_avatar_helper' => 'Default avatar for the author when they don\'t have an avatar. If you don\'t select any image, it will be generated using the selected avatar provider. Image size should be 150x150px.',
        ],
    ],
];
