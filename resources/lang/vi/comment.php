<?php

return [
    'common' => [
        'name' => 'Tên',
        'email' => 'Email',
        'phone' => 'Điện thoại',
        'website' => 'Website',
        'comment' => 'Bình luận',
        'email_placeholder' => 'Địa chỉ email của bạn sẽ không được công khai.',
        'website_placeholder' => 'ví dụ: https://example.com',
    ],

    'title' => 'Bình luận',
    'author' => 'Tác giả',
    'responded_to' => 'Phản hồi tới',
    'permalink' => 'Liên kết cố định',
    'url' => 'URL',
    'submitted_on' => 'Gửi lúc',
    'edit_comment' => 'Chỉnh sửa bình luận',
    'reply' => 'Trả lời',
    'in_reply_to' => 'Trả lời :name',

    'reply_modal' => [
        'title' => 'Trả lời :comment',
        'cancel' => 'Hủy',
    ],

    'allow_comments' => 'Cho phép bình luận',

    'front' => [
        'admin_badge' => 'Quản trị viên',

        'list' => [
            'title' => ':count bình luận',
            'title_singular' => ':count bình luận',
            'title_plural' => ':count bình luận',
            'reply' => 'Trả lời',
            'reply_to' => 'Trả lời :name',
            'cancel_reply' => 'Hủy trả lời',
            'waiting_for_approval_message' => 'Bình luận của bạn đang chờ kiểm duyệt. Đây là bản xem trước, bình luận của bạn sẽ hiển thị sau khi được phê duyệt.',
        ],

        'form' => [
            'title' => 'Để lại bình luận',
            'description' => 'Địa chỉ email của bạn sẽ không được công khai. Các trường bắt buộc được đánh dấu *',
            'description_email_optional' => 'Địa chỉ email của bạn sẽ không được công khai. Email là tùy chọn. Các trường bắt buộc được đánh dấu *',
            'cookie_consent' => 'Lưu tên, email và website của tôi trong trình duyệt này cho lần bình luận tiếp theo.',
            'submit' => 'Gửi bình luận',
        ],

        'comment_success_message' => 'Bình luận của bạn đã được gửi thành công.',
    ],

    'enums' => [
        'statuses' => [
            'pending' => 'Đang chờ',
            'approved' => 'Đã duyệt',
            'spam' => 'Spam',
            'trash' => 'Thùng rác',
        ],
    ],

    'settings' => [
        'title' => 'Bình luận',
        'description' => 'Cấu hình cài đặt cho FOB Comment',

        'form' => [
            'enable_recaptcha' => 'Bật reCAPTCHA',
            'enable_recaptcha_help' => 'Bạn cần bật reCAPTCHA trong :url để sử dụng tính năng này.',
            'captcha_setting_label' => 'Cài đặt Captcha',
            'comment_moderation' => 'Bình luận phải được phê duyệt thủ công',
            'comment_moderation_help' => 'Tất cả bình luận phải được quản trị viên phê duyệt thủ công trước khi hiển thị trên giao diện người dùng.',
            'show_comment_cookie_consent' => 'Hiển thị hộp kiểm cookie bình luận, cho phép khách truy cập lưu thông tin của họ trong trình duyệt',
            'auto_fill_comment_form' => 'Tự động điền dữ liệu bình luận cho người dùng đã đăng nhập',
            'auto_fill_comment_form_help' => 'Biểu mẫu bình luận sẽ tự động được điền với dữ liệu người dùng như tên đầy đủ, email, v.v., nếu họ đã đăng nhập.',
            'comment_order' => 'Sắp xếp bình luận theo',
            'comment_order_help' => 'Chọn thứ tự ưu tiên để hiển thị bình luận trong danh sách.',
            'comment_order_choices' => [
                'asc' => 'Cũ nhất',
                'desc' => 'Mới nhất',
            ],
            'display_admin_badge' => 'Hiển thị huy hiệu quản trị viên cho bình luận của quản trị viên',
            'show_admin_role_name_for_admin_badge' => 'Hiển thị tên vai trò quản trị viên cho huy hiệu quản trị viên',
            'show_admin_role_name_for_admin_badge_helper' => 'Nếu được bật, huy hiệu quản trị viên sẽ hiển thị tên vai trò quản trị viên thay vì văn bản mặc định "Quản trị viên". Nếu tên vai trò quản trị viên trống, văn bản mặc định sẽ được sử dụng. Nếu người dùng có nhiều vai trò, vai trò đầu tiên sẽ được sử dụng.',
            'avatar_provider' => 'Nhà cung cấp ảnh đại diện',
            'avatar_provider_help' => 'Chọn cách tạo ảnh đại diện cho bình luận. Gravatar yêu cầu email, UI Avatars tạo dựa trên tên.',
            'avatar_provider_choices' => [
                'gravatar' => 'Gravatar (Dựa trên email)',
                'ui_avatars' => 'UI Avatars (Dựa trên tên)',
            ],
            'email_optional' => 'Làm trường email tùy chọn',
            'email_optional_help' => 'Khi được bật, khách truy cập có thể gửi bình luận mà không cần cung cấp địa chỉ email.',
            'show_website_field' => 'Hiển thị trường website trong biểu mẫu bình luận',
            'show_website_field_help' => 'Khi tắt, trường website sẽ bị ẩn khỏi biểu mẫu bình luận công khai.',
            'default_avatar' => 'Ảnh đại diện mặc định',
            'default_avatar_helper' => 'Ảnh đại diện mặc định cho tác giả khi họ không có ảnh đại diện. Nếu bạn không chọn bất kỳ hình ảnh nào, nó sẽ được tạo bằng nhà cung cấp ảnh đại diện đã chọn. Kích thước hình ảnh nên là 150x150px.',
        ],
    ],
];
