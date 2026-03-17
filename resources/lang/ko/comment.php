<?php

return [
    'common' => [
        'name' => '이름',
        'email' => '이메일',
        'phone' => '핸드폰',
        'website' => '웹사이트',
        'comment' => '댓글',
        'email_placeholder' => '이메일 주소는 공개되지 않습니다.',
        'name_placeholder' => '이름',
        'website_placeholder' => '예: https://example.com',
        'comment_placeholder' => '여기에 댓글을 작성하세요...',
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
            'delete' => '삭제',
            'delete_confirm' => '이 댓글을 삭제하시겠습니까?',
            'waiting_for_approval_message' => '댓글이 승인 대기 중입니다. 이것은 미리보기이며, 승인 후 표시됩니다.',
        ],

        'form' => [
            'description_email_optional' => '이메일 주소는 공개되지 않습니다. 이메일은 선택 사항입니다. 필수 항목은 *로 표시됩니다',
            'title' => '댓글 남기기',
            'description' => '이메일 주소는 공개되지 않습니다. 필수 항목은 *로 표시됩니다',
            'cookie_consent' => '다음 댓글 작성을 위해 이 브라우저에 이름, 이메일, 웹사이트를 저장합니다.',
            'submit' => '댓글 작성',
            'login_required' => '댓글을 게시하려면 로그인해야 합니다.',
            'login_to_comment' => '댓글 작성을 위해 로그인',
        ],

        'comment_success_message' => '댓글이 성공적으로 전송되었습니다.',
        'rate_limit_error' => '댓글을 너무 빨리 작성하고 있습니다. 다른 댓글을 게시하기 전에 :seconds초 기다려 주세요.',
        'comment_deleted_message' => '댓글이 성공적으로 삭제되었습니다.',
        'delete_not_authorized' => '이 댓글을 삭제할 권한이 없습니다.',
    ],

    'enums' => [
        'statuses' => [
            'pending' => '대기 중',
            'approved' => '승인됨',
            'spam' => '스팸',
            'trash' => '휴지통',
        ],
    ],

    'email_templates' => [
        'admin_new_comment_title' => '새 댓글이 도착했습니다',
        'admin_new_comment_message' => ':comment_name님이 새 댓글을 남겼습니다',
        'comment_reply_title' => '댓글에 새 답글이 달렸습니다',
        'comment_reply_message' => ':reply_name님이 회원님의 댓글에 답글을 달았습니다',
        'commented_on' => '댓글 작성 위치',
        'view_comment' => '댓글 보기',
    ],

    'settings' => [
        'title' => 'FOB Comment',
        'description' => 'FOB Comment 설정 구성',

        'email' => [
            'templates' => [
                'title' => '댓글',
                'description' => '댓글 알림을 위한 이메일 템플릿',
                'admin_new_comment' => [
                    'title' => '새 댓글에 대한 관리자 알림',
                    'description' => '새 댓글이 게시되면 관리자에게 이메일 전송',
                    'subject' => '{{ site_title }}에 새 댓글',
                    'comment_name_description' => '댓글 작성자 이름',
                    'comment_email_description' => '댓글 작성자 이메일',
                    'comment_content_description' => '댓글 내용',
                    'comment_reference_description' => '댓글이 달린 페이지/게시물',
                    'comment_url_description' => '댓글을 보기 위한 URL',
                ],
                'comment_reply' => [
                    'title' => '답글에 대해 댓글 작성자에게 알림',
                    'description' => '누군가 댓글에 답글을 달면 댓글 작성자에게 이메일 전송',
                    'subject' => '{{ site_title }}에서 회원님의 댓글에 새 답글',
                    'comment_name_description' => '원래 댓글 작성자 이름',
                    'reply_name_description' => '답글 작성자 이름',
                    'reply_content_description' => '답글 내용',
                    'comment_reference_description' => '댓글이 달린 페이지/게시물',
                    'comment_url_description' => '댓글을 보기 위한 URL',
                ],
            ],
        ],

        'form' => [
            'enable_recaptcha' => 'reCAPTCHA 활성화',
            'enable_recaptcha_help' => '이 기능을 사용하려면 :url에서 reCAPTCHA를 활성화해야 합니다.',
            'captcha_setting_label' => 'Captcha 설정',
            'disable_guest_comment' => '게스트 댓글 비활성화',
            'disable_guest_comment_help' => '활성화하면 사용자가 댓글을 게시하려면 로그인해야 합니다. 이는 스팸 댓글을 줄이는 데 도움이 됩니다.',
            'comment_moderation' => '댓글은 수동으로 승인되어야 합니다',
            'comment_moderation_help' => '모든 댓글은 프론트엔드에 표시되기 전에 관리자가 수동으로 승인해야 합니다.',
            'rate_limit_seconds' => '속도 제한 (초)',
            'rate_limit_seconds_help' => '동일한 사용자의 댓글 사이의 최소 시간(초). 속도 제한을 비활성화하려면 0으로 설정하세요.',
            'show_comment_cookie_consent' => '방문자가 브라우저에 정보를 저장할 수 있도록 댓글 쿠키 체크박스 표시',
            'show_comment_cookie_consent_help' => '활성화하면 방문자가 향후 댓글을 위해 이름, 이메일, 웹사이트를 브라우저에 저장할 수 있습니다.',
            'auto_fill_comment_form' => '로그인한 사용자의 댓글 데이터 자동 입력',
            'auto_fill_comment_form_help' => '로그인한 경우 댓글 양식이 사용자 데이터(전체 이름, 이메일 등)로 자동 입력됩니다.',
            'comment_order' => '댓글 정렬 기준',
            'comment_order_help' => '목록에서 댓글을 표시할 선호하는 순서를 선택하세요.',
            'comment_order_choices' => [
                'asc' => '오래된 순',
                'desc' => '최신 순',
            ],
            'display_admin_badge' => '관리자 댓글에 관리자 배지 표시',
            'display_admin_badge_help' => '활성화하면 관리자의 댓글에 이름 옆에 "관리자" 배지가 표시됩니다.',
            'show_admin_role_name_for_admin_badge' => '관리자 배지에 관리자 역할 이름 표시',
            'show_admin_role_name_for_admin_badge_helper' => '활성화하면 관리자 배지가 기본 "관리자" 텍스트 대신 관리자 역할 이름을 표시합니다. 관리자 역할 이름이 비어 있으면 기본 텍스트가 사용됩니다. 사용자가 여러 역할을 가진 경우 첫 번째 역할이 사용됩니다.',
            'avatar_provider' => '아바타 제공업체',
            'avatar_provider_help' => '댓글에 대한 아바타 생성 방법을 선택하세요. Gravatar는 이메일이 필요하고, UI Avatars는 이름 기반으로 생성합니다.',
            'avatar_provider_choices' => [
                'gravatar' => 'Gravatar (이메일 기반)',
                'ui_avatars' => 'UI Avatars (이름 기반)',
            ],
            'email_optional' => '이메일 필드를 선택 사항으로 만들기',
            'email_optional_help' => '활성화하면 방문자가 이메일 주소 없이 댓글을 제출할 수 있습니다.',
            'show_website_field' => '댓글 양식에 웹사이트 필드 표시',
            'show_website_field_help' => '비활성화하면 공개 댓글 양식에서 웹사이트 필드가 숨겨집니다.',
            'default_avatar' => '기본 아바타',
            'default_avatar_helper' => '작성자에게 아바타가 없을 때의 기본 아바타입니다. 이미지를 선택하지 않으면 선택한 아바타 제공업체를 사용하여 생성됩니다. 이미지 크기는 150x150px여야 합니다.',
            'allow_author_delete' => '작성자가 자신의 댓글을 삭제하도록 허용',
            'allow_author_delete_help' => '활성화하면 로그인한 사용자가 자신의 댓글을 삭제할 수 있습니다.',
            'primary_color' => '기본 색상',
            'primary_color_helper' => '버튼, 체크박스, 배지의 기본 색상입니다. 테마의 기본 색상을 사용하려면 비워두세요.',
            'primary_color_hover' => '기본 호버 색상',
            'primary_color_hover_helper' => '버튼의 호버 색상입니다. 기본 색상의 더 어두운 음영을 사용하려면 비워두세요.',
        ],
    ],
];
