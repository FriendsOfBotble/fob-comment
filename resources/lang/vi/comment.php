<?php

return [
    'common' => [
        'name' => 'Tên',
        'email' => 'Email',
        'phone' => 'Điện thoại',
        'website' => 'Website',
        'comment' => 'Bình luận',
        'name_placeholder' => 'Tên của bạn',
        'email_placeholder' => 'Địa chỉ email của bạn sẽ không được công khai.',
        'website_placeholder' => 'ví dụ: https://example.com',
        'comment_placeholder' => 'Viết bình luận của bạn ở đây...',
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
            'delete' => 'Xóa',
            'delete_confirm' => 'Bạn có chắc chắn muốn xóa bình luận này không?',
            'waiting_for_approval_message' => 'Bình luận của bạn đang chờ kiểm duyệt. Đây là bản xem trước, bình luận của bạn sẽ hiển thị sau khi được phê duyệt.',
        ],

        'form' => [
            'title' => 'Để lại bình luận',
            'description' => 'Địa chỉ email của bạn sẽ không được công khai. Các trường bắt buộc được đánh dấu *',
            'description_email_optional' => 'Địa chỉ email của bạn sẽ không được công khai. Email là tùy chọn. Các trường bắt buộc được đánh dấu *',
            'cookie_consent' => 'Lưu tên, email và website của tôi trong trình duyệt này cho lần bình luận tiếp theo.',
            'submit' => 'Gửi bình luận',
            'login_required' => 'Bạn phải đăng nhập để đăng bình luận.',
            'login_to_comment' => 'Đăng nhập để bình luận',
        ],

        'comment_success_message' => 'Bình luận của bạn đã được gửi thành công.',
        'rate_limit_error' => 'Bạn đang bình luận quá nhanh. Vui lòng đợi :seconds giây trước khi đăng bình luận khác.',
        'comment_deleted_message' => 'Bình luận của bạn đã được xóa thành công.',
        'delete_not_authorized' => 'Bạn không có quyền xóa bình luận này.',
    ],

    'enums' => [
        'statuses' => [
            'pending' => 'Đang chờ',
            'approved' => 'Đã duyệt',
            'spam' => 'Spam',
            'trash' => 'Thùng rác',
        ],
    ],

    'email_templates' => [
        'admin_new_comment_title' => 'Nhận được bình luận mới',
        'admin_new_comment_message' => ':comment_name đã để lại một bình luận mới',
        'comment_reply_title' => 'Có người trả lời bình luận của bạn',
        'comment_reply_message' => ':reply_name đã trả lời bình luận của bạn',
        'commented_on' => 'Đã bình luận về',
        'view_comment' => 'Xem bình luận',
    ],

    'settings' => [
        'title' => 'Bình luận',
        'description' => 'Cấu hình cài đặt cho FOB Comment',

        'email' => [
            'templates' => [
                'title' => 'Bình luận',
                'description' => 'Mẫu email thông báo bình luận',
                'admin_new_comment' => [
                    'title' => 'Thông báo quản trị viên về bình luận mới',
                    'description' => 'Gửi email cho quản trị viên khi có bình luận mới',
                    'subject' => 'Bình luận mới trên {{ site_title }}',
                    'comment_name_description' => 'Tên tác giả bình luận',
                    'comment_email_description' => 'Email tác giả bình luận',
                    'comment_content_description' => 'Nội dung bình luận',
                    'comment_reference_description' => 'Trang/bài viết được bình luận',
                    'comment_url_description' => 'URL để xem bình luận',
                ],
                'comment_reply' => [
                    'title' => 'Thông báo người bình luận khi có phản hồi',
                    'description' => 'Gửi email cho người bình luận khi có người trả lời bình luận của họ',
                    'subject' => 'Có người trả lời bình luận của bạn trên {{ site_title }}',
                    'comment_name_description' => 'Tên người bình luận gốc',
                    'reply_name_description' => 'Tên tác giả trả lời',
                    'reply_content_description' => 'Nội dung trả lời',
                    'comment_reference_description' => 'Trang/bài viết được bình luận',
                    'comment_url_description' => 'URL để xem bình luận',
                ],
            ],
        ],

        'form' => [
            'enable_recaptcha' => 'Bật reCAPTCHA',
            'enable_recaptcha_help' => 'Bạn cần bật reCAPTCHA trong :url để sử dụng tính năng này.',
            'captcha_setting_label' => 'Cài đặt Captcha',
            'disable_guest_comment' => 'Vô hiệu hóa bình luận của khách',
            'disable_guest_comment_help' => 'Khi được bật, người dùng phải đăng nhập để đăng bình luận. Điều này giúp giảm bình luận rác.',
            'comment_moderation' => 'Bình luận phải được phê duyệt thủ công',
            'comment_moderation_help' => 'Tất cả bình luận phải được quản trị viên phê duyệt thủ công trước khi hiển thị trên giao diện người dùng.',
            'rate_limit_seconds' => 'Giới hạn tốc độ (giây)',
            'rate_limit_seconds_help' => 'Thời gian tối thiểu tính bằng giây giữa các bình luận từ cùng một người dùng. Đặt thành 0 để tắt giới hạn tốc độ.',
            'show_comment_cookie_consent' => 'Hiển thị hộp kiểm cookie bình luận',
            'show_comment_cookie_consent_help' => 'Khi bật, khách truy cập có thể lưu tên, email và website trong trình duyệt cho các bình luận sau.',
            'auto_fill_comment_form' => 'Tự động điền dữ liệu bình luận cho người dùng đã đăng nhập',
            'auto_fill_comment_form_help' => 'Biểu mẫu bình luận sẽ tự động được điền với dữ liệu người dùng như tên đầy đủ, email, v.v., nếu họ đã đăng nhập.',
            'comment_order' => 'Sắp xếp bình luận theo',
            'comment_order_help' => 'Chọn thứ tự ưu tiên để hiển thị bình luận trong danh sách.',
            'comment_order_choices' => [
                'asc' => 'Cũ nhất',
                'desc' => 'Mới nhất',
            ],
            'display_admin_badge' => 'Hiển thị huy hiệu quản trị viên cho bình luận của quản trị viên',
            'display_admin_badge_help' => 'Khi bật, bình luận của quản trị viên sẽ hiển thị huy hiệu "Quản trị viên" bên cạnh tên của họ.',
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
            'allow_author_delete' => 'Cho phép tác giả xóa bình luận của họ',
            'allow_author_delete_help' => 'Khi được bật, người dùng đã đăng nhập có thể xóa bình luận của chính họ.',
            'primary_color' => 'Màu chủ đạo',
            'primary_color_helper' => 'Màu chủ đạo cho các nút, hộp kiểm và huy hiệu. Để trống để sử dụng màu chủ đạo của giao diện.',
            'primary_color_hover' => 'Màu hover chủ đạo',
            'primary_color_hover_helper' => 'Màu hover cho các nút. Để trống để sử dụng màu tối hơn của màu chủ đạo.',
        ],
    ],
];
