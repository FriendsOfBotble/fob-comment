<?php

return [
    'common' => [
        'name' => '이름',
        'email' => '이메일',
        'phone' => '핸드폰',
        'website' => '웹사이트',
        'comment' => '댓글',
        'email_placeholder' => '이메일 주소는 공개되지 않습니다.',
        'website_placeholder' => '예: https://example.com',
    ],

    'title' => '댓글',
    'author' => '작성자',
    'responded_to' => '답변',
    'permalink' => '고유링크',
    'url' => 'URL',
    'submitted_on' => '작성일',
    'edit_comment' => '댓글 수정',
    'reply' => '답글',
    'in_reply_to' => ':name님에게 답글',

    'reply_modal' => [
        'title' => ':comment에 답글',
        'cancel' => '취소',
    ],

    'allow_comments' => '댓글 허용',

    'front' => [
        'admin_badge' => '관리자',

        'list' => [
            'title' => '댓글 :count개',
            'title_singular' => '댓글 :count개',
            'title_plural' => '댓글 :count개',
            'reply' => '답글',
            'reply_to' => ':name님에게 답글',
            'cancel_reply' => '답글 취소',
            'waiting_for_approval_message' => '댓글이 승인 대기 중입니다. 이것은 미리보기이며, 승인 후 표시됩니다.',
        ],

        'form' => [
            'description_email_optional' => 'Your email address will not be published. Email is optional. Required fields are marked *',
            'title' => '댓글 남기기',
            'description' => '이메일 주소는 공개되지 않습니다. 필수 항목은 *로 표시됩니다',
            'cookie_consent' => '다음 댓글 작성을 위해 이 브라우저에 이름, 이메일, 웹사이트를 저장합니다.',
            'submit' => '댓글 작성',
        ],

        'comment_success_message' => '댓글이 성공적으로 전송되었습니다.',
    ],

    'enums' => [
        'statuses' => [
            'pending' => '대기 중',
            'approved' => '승인됨',
            'spam' => '스팸',
            'trash' => '휴지통',
        ],
    ],

    'settings' => [
        'title' => 'FOB Comment',
        'description' => 'FOB Comment 설정 구성',

        'form' => [
            'enable_recaptcha' => 'reCAPTCHA 활성화',
            'enable_recaptcha_help' => '이 기능을 사용하려면 :url에서 reCAPTCHA를 활성화해야 합니다.',
            'captcha_setting_label' => 'Captcha 설정',
            'comment_moderation' => '댓글은 수동으로 승인되어야 합니다',
            'comment_moderation_help' => '모든 댓글은 프론트엔드에 표시되기 전에 관리자가 수동으로 승인해야 합니다.',
            'show_comment_cookie_consent' => '방문자가 브라우저에 정보를 저장할 수 있도록 댓글 쿠키 체크박스 표시',
            'auto_fill_comment_form' => '로그인한 사용자의 댓글 데이터 자동 입력',
            'auto_fill_comment_form_help' => '로그인한 경우 댓글 양식이 사용자 데이터(전체 이름, 이메일 등)로 자동 입력됩니다.',
            'comment_order' => '댓글 정렬 기준',
            'comment_order_help' => '목록에서 댓글을 표시할 선호하는 순서를 선택하세요.',
            'comment_order_choices' => [
                'asc' => '오래된 순',
                'desc' => '최신 순',
            ],
            'display_admin_badge' => '관리자 댓글에 관리자 배지 표시',
            'show_admin_role_name_for_admin_badge' => '관리자 배지에 관리자 역할 이름 표시',
            'show_admin_role_name_for_admin_badge_helper' => '활성화하면 관리자 배지가 기본 "관리자" 텍스트 대신 관리자 역할 이름을 표시합니다. 관리자 역할 이름이 비어 있으면 기본 텍스트가 사용됩니다. 사용자가 여러 역할을 가진 경우 첫 번째 역할이 사용됩니다.',
            'avatar_provider' => 'Avatar provider',
            'avatar_provider_help' => 'Choose how to generate avatars for comments. Gravatar requires email, UI Avatars generates based on name.',
            'avatar_provider_choices' => [
                'gravatar' => 'Gravatar (Email-based)',
                'ui_avatars' => 'UI Avatars (Name-based)',
            ],
            'email_optional' => 'Make email field optional',
            'email_optional_help' => 'When enabled, visitors can submit comments without providing an email address.',
            'show_website_field' => '댓글 양식에 웹사이트 필드 표시',
            'show_website_field_help' => '비활성화하면 공개 댓글 양식에서 웹사이트 필드가 숨겨집니다.',
            'default_avatar' => '기본 아바타',
            'default_avatar_helper' => 'Default avatar for the author when they don\'t have an avatar. If you don\'t select any image, it will be generated using the selected avatar provider. Image size should be 150x150px.',
        ],
    ],
];
