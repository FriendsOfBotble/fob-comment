<?php

return [
    'common' => [
        'name' => '姓名',
        'email' => '电子邮箱',
        'phone' => '电话',
        'website' => '网站',
        'comment' => '评论',
        'email_placeholder' => '您的电子邮箱地址不会被公开。',
        'website_placeholder' => '例如：https://example.com',
    ],

    'title' => '评论',
    'author' => '作者',
    'responded_to' => '回复',
    'permalink' => '永久链接',
    'url' => '网址',
    'submitted_on' => '提交于',
    'edit_comment' => '编辑评论',
    'reply' => '回复',
    'in_reply_to' => '回复 :name',

    'reply_modal' => [
        'title' => '回复 :comment',
        'cancel' => '取消',
    ],

    'allow_comments' => '允许评论',

    'front' => [
        'admin_badge' => '管理员',

        'list' => [
            'title' => ':count 条评论',
            'title_singular' => ':count 条评论',
            'title_plural' => ':count 条评论',
            'reply' => '回复',
            'reply_to' => '回复 :name',
            'cancel_reply' => '取消回复',
            'waiting_for_approval_message' => '您的评论正在等待审核。这是预览，您的评论将在批准后显示。',
        ],

        'form' => [
            'title' => '发表评论',
            'description' => '您的电子邮箱地址不会被公开。必填项已用 * 标注',
            'description_email_optional' => '您的电子邮箱地址不会被公开。电子邮箱为可选项。必填项已用 * 标注',
            'cookie_consent' => '在此浏览器中保存我的姓名、电子邮箱和网站，以便下次评论时使用。',
            'submit' => '提交评论',
        ],

        'comment_success_message' => '您的评论已成功发送。',
    ],

    'enums' => [
        'statuses' => [
            'pending' => '待审核',
            'approved' => '已批准',
            'spam' => '垃圾评论',
            'trash' => '回收站',
        ],
    ],

    'settings' => [
        'title' => 'FOB Comment',
        'description' => '配置 FOB Comment 设置',

        'form' => [
            'enable_recaptcha' => '启用 reCAPTCHA',
            'enable_recaptcha_help' => '您需要在 :url 中启用 reCAPTCHA 才能使用此功能。',
            'captcha_setting_label' => '验证码设置',
            'comment_moderation' => '评论必须手动批准',
            'comment_moderation_help' => '所有评论在前端显示之前必须由管理员手动批准。',
            'show_comment_cookie_consent' => '显示评论 cookie 复选框，允许访客在浏览器中保存其信息',
            'auto_fill_comment_form' => '为已登录用户自动填充评论数据',
            'auto_fill_comment_form_help' => '如果用户已登录，评论表单将自动填充用户数据，如全名、电子邮箱等。',
            'comment_order' => '评论排序方式',
            'comment_order_help' => '选择在列表中显示评论的首选顺序。',
            'comment_order_choices' => [
                'asc' => '最旧',
                'desc' => '最新',
            ],
            'display_admin_badge' => '为管理员评论显示管理员徽章',
            'show_admin_role_name_for_admin_badge' => '为管理员徽章显示管理员角色名称',
            'show_admin_role_name_for_admin_badge_helper' => '如果启用，管理员徽章将显示管理员角色名称，而不是默认的"管理员"文本。如果管理员角色名称为空，将使用默认文本。如果用户有多个角色，将使用第一个角色。',
            'avatar_provider' => '头像提供商',
            'avatar_provider_help' => '选择如何为评论生成头像。Gravatar 需要电子邮件，UI Avatars 基于姓名生成。',
            'avatar_provider_choices' => [
                'gravatar' => 'Gravatar（基于电子邮件）',
                'ui_avatars' => 'UI Avatars（基于姓名）',
            ],
            'email_optional' => '将电子邮件字段设为可选',
            'email_optional_help' => '启用后，访客无需提供电子邮件地址即可提交评论。',
            'show_website_field' => '在评论表单中显示网站字段',
            'show_website_field_help' => '禁用时，网站字段将从公开的评论表单中隐藏。',
            'default_avatar' => '默认头像',
            'default_avatar_helper' => '作者没有头像时的默认头像。如果您不选择任何图片，将使用所选头像提供商生成。图片大小应为 150x150px。',
        ],
    ],
];
