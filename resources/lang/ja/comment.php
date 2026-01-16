<?php

return [
    'common' => [
        'name' => '名前',
        'email' => 'メールアドレス',
        'phone' => '電話',
        'website' => 'ウェブサイト',
        'comment' => 'コメント',
        'email_placeholder' => 'メールアドレスは公開されません。',
        'name_placeholder' => 'お名前',
        'website_placeholder' => '例：https://example.com',
        'comment_placeholder' => 'ここにコメントを書いてください...',
    ],

    'title' => 'コメント',
    'author' => '投稿者',
    'responded_to' => '返信先',
    'permalink' => 'パーマリンク',
    'url' => 'URL',
    'submitted_on' => '投稿日',
    'edit_comment' => 'コメントを編集',
    'reply' => '返信',
    'in_reply_to' => ':name への返信',

    'reply_modal' => [
        'title' => ':comment に返信',
        'cancel' => 'キャンセル',
    ],

    'allow_comments' => 'コメントを許可',

    'front' => [
        'admin_badge' => '管理者',

        'list' => [
            'title' => ':count 件のコメント',
            'title_singular' => ':count 件のコメント',
            'title_plural' => ':count 件のコメント',
            'reply' => '返信',
            'reply_to' => ':name に返信',
            'cancel_reply' => '返信をキャンセル',
            'waiting_for_approval_message' => 'あなたのコメントは承認待ちです。これはプレビューで、承認後に表示されます。',
        ],

        'form' => [
            'description_email_optional' => 'Your email address will not be published. Email is optional. Required fields are marked *',
            'title' => 'コメントを残す',
            'description' => 'メールアドレスは公開されません。必須項目は * でマークされています',
            'cookie_consent' => '次回のコメント時のために、名前、メールアドレス、ウェブサイトをこのブラウザに保存する。',
            'submit' => 'コメントを送信',
            'login_required' => 'コメントを投稿するにはログインする必要があります。',
            'login_to_comment' => 'コメントするにはログイン',
        ],

        'comment_success_message' => 'コメントが正常に送信されました。',
        'rate_limit_error' => 'コメントが速すぎます。次のコメントを投稿する前に :seconds 秒お待ちください。',
    ],

    'enums' => [
        'statuses' => [
            'pending' => '保留中',
            'approved' => '承認済み',
            'spam' => 'スパム',
            'trash' => 'ゴミ箱',
        ],
    ],

    'settings' => [
        'title' => 'FOB Comment',
        'description' => 'FOB Comment の設定を構成',

        'form' => [
            'enable_recaptcha' => 'reCAPTCHA を有効化',
            'enable_recaptcha_help' => 'この機能を使用するには、:url で reCAPTCHA を有効にする必要があります。',
            'captcha_setting_label' => 'キャプチャ設定',
            'disable_guest_comment' => 'ゲストコメントを無効にする',
            'disable_guest_comment_help' => '有効にすると、ユーザーはコメントを投稿するためにログインする必要があります。これはスパムコメントを減らすのに役立ちます。',
            'comment_moderation' => 'コメントは手動で承認する必要があります',
            'comment_moderation_help' => 'すべてのコメントはフロントエンドに表示される前に管理者による手動承認が必要です。',
            'rate_limit_seconds' => 'レート制限（秒）',
            'rate_limit_seconds_help' => '同じユーザーからのコメント間の最小時間（秒）。レート制限を無効にするには0に設定してください。',
            'show_comment_cookie_consent' => 'コメントクッキーのチェックボックスを表示し、訪問者がブラウザに情報を保存できるようにする',
            'show_comment_cookie_consent_help' => '有効にすると、訪問者は将来のコメントのために名前、メール、ウェブサイトをブラウザに保存できます。',
            'auto_fill_comment_form' => 'ログインユーザーのコメントデータを自動入力',
            'auto_fill_comment_form_help' => 'ログインしている場合、コメントフォームにユーザーデータ（フルネーム、メールアドレスなど）が自動的に入力されます。',
            'comment_order' => 'コメントの並び順',
            'comment_order_help' => 'リストでコメントを表示する優先順序を選択してください。',
            'comment_order_choices' => [
                'asc' => '古い順',
                'desc' => '新しい順',
            ],
            'display_admin_badge' => '管理者コメントに管理者バッジを表示',
            'display_admin_badge_help' => '有効にすると、管理者のコメントには名前の横に「管理者」バッジが表示されます。',
            'show_admin_role_name_for_admin_badge' => '管理者バッジに管理者ロール名を表示',
            'show_admin_role_name_for_admin_badge_helper' => '有効にすると、管理者バッジはデフォルトの「管理者」テキストの代わりに管理者ロール名を表示します。管理者ロール名が空の場合、デフォルトテキストが使用されます。ユーザーが複数のロールを持つ場合、最初のロールが使用されます。',
            'avatar_provider' => 'Avatar provider',
            'avatar_provider_help' => 'Choose how to generate avatars for comments. Gravatar requires email, UI Avatars generates based on name.',
            'avatar_provider_choices' => [
                'gravatar' => 'Gravatar (Email-based)',
                'ui_avatars' => 'UI Avatars (Name-based)',
            ],
            'email_optional' => 'Make email field optional',
            'email_optional_help' => 'When enabled, visitors can submit comments without providing an email address.',
            'show_website_field' => 'コメントフォームにウェブサイト欄を表示する',
            'show_website_field_help' => '無効にすると、ウェブサイト欄は公開コメントフォームから非表示になります。',
            'default_avatar' => 'デフォルトアバター',
            'default_avatar_helper' => 'Default avatar for the author when they don\'t have an avatar. If you don\'t select any image, it will be generated using the selected avatar provider. Image size should be 150x150px.',
        ],
    ],
];
