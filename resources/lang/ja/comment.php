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
            'delete' => '削除',
            'delete_confirm' => 'このコメントを削除してもよろしいですか？',
            'waiting_for_approval_message' => 'あなたのコメントは承認待ちです。これはプレビューで、承認後に表示されます。',
        ],

        'form' => [
            'description_email_optional' => 'メールアドレスは公開されません。メールは任意です。必須項目は * でマークされています',
            'title' => 'コメントを残す',
            'description' => 'メールアドレスは公開されません。必須項目は * でマークされています',
            'cookie_consent' => '次回のコメント時のために、名前、メールアドレス、ウェブサイトをこのブラウザに保存する。',
            'submit' => 'コメントを送信',
            'login_required' => 'コメントを投稿するにはログインする必要があります。',
            'login_to_comment' => 'コメントするにはログイン',
        ],

        'comment_success_message' => 'コメントが正常に送信されました。',
        'rate_limit_error' => 'コメントが速すぎます。次のコメントを投稿する前に :seconds 秒お待ちください。',
        'comment_deleted_message' => 'コメントが正常に削除されました。',
        'delete_not_authorized' => 'このコメントを削除する権限がありません。',
    ],

    'enums' => [
        'statuses' => [
            'pending' => '保留中',
            'approved' => '承認済み',
            'spam' => 'スパム',
            'trash' => 'ゴミ箱',
        ],
    ],

    'email_templates' => [
        'admin_new_comment_title' => '新しいコメントが届きました',
        'admin_new_comment_message' => ':comment_name が新しいコメントを残しました',
        'comment_reply_title' => 'コメントへの新しい返信',
        'comment_reply_message' => ':reply_name があなたのコメントに返信しました',
        'commented_on' => 'コメント先',
        'view_comment' => 'コメントを表示',
    ],

    'settings' => [
        'title' => 'FOB Comment',
        'description' => 'FOB Comment の設定を構成',

        'email' => [
            'templates' => [
                'title' => 'コメント',
                'description' => 'コメント通知用のメールテンプレート',
                'admin_new_comment' => [
                    'title' => '新しいコメントの管理者通知',
                    'description' => '新しいコメントが投稿されたときに管理者にメールを送信',
                    'subject' => '{{ site_title }} に新しいコメント',
                    'comment_name_description' => 'コメント投稿者の名前',
                    'comment_email_description' => 'コメント投稿者のメールアドレス',
                    'comment_content_description' => 'コメントの内容',
                    'comment_reference_description' => 'コメントされたページ/投稿',
                    'comment_url_description' => 'コメントを表示するURL',
                ],
                'comment_reply' => [
                    'title' => '返信をコメント投稿者に通知',
                    'description' => '誰かが返信したときにコメント投稿者にメールを送信',
                    'subject' => '{{ site_title }} であなたのコメントへの新しい返信',
                    'comment_name_description' => '元のコメント投稿者の名前',
                    'reply_name_description' => '返信者の名前',
                    'reply_content_description' => '返信の内容',
                    'comment_reference_description' => 'コメントされたページ/投稿',
                    'comment_url_description' => 'コメントを表示するURL',
                ],
            ],
        ],

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
            'avatar_provider' => 'アバタープロバイダー',
            'avatar_provider_help' => 'コメントのアバター生成方法を選択してください。Gravatar はメールが必要で、UI Avatars は名前に基づいて生成します。',
            'avatar_provider_choices' => [
                'gravatar' => 'Gravatar（メールベース）',
                'ui_avatars' => 'UI Avatars（名前ベース）',
            ],
            'email_optional' => 'メールフィールドを任意にする',
            'email_optional_help' => '有効にすると、訪問者はメールアドレスを提供せずにコメントを送信できます。',
            'show_website_field' => 'コメントフォームにウェブサイト欄を表示する',
            'show_website_field_help' => '無効にすると、ウェブサイト欄は公開コメントフォームから非表示になります。',
            'default_avatar' => 'デフォルトアバター',
            'default_avatar_helper' => '著者にアバターがない場合のデフォルトアバター。画像を選択しない場合、選択したアバタープロバイダーを使用して生成されます。画像サイズは150x150pxである必要があります。',
            'allow_author_delete' => '投稿者が自分のコメントを削除することを許可する',
            'allow_author_delete_help' => '有効にすると、ログインしているユーザーは自分のコメントを削除できます。',
            'primary_color' => 'プライマリカラー',
            'primary_color_helper' => 'ボタン、チェックボックス、バッジのプライマリカラー。空白のままにするとテーマのプライマリカラーが使用されます。',
            'primary_color_hover' => 'プライマリホバーカラー',
            'primary_color_hover_helper' => 'ボタンのホバーカラー。空白のままにするとプライマリカラーの暗い色調が使用されます。',
        ],
    ],
];
