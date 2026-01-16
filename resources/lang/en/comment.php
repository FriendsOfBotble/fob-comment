<?php

return [
    'common' => [
        'name' => 'Name',
        'email' => 'Email',
        'phone' => 'Phone',
        'website' => 'Website',
        'comment' => 'Comment',
        'name_placeholder' => 'Your name',
        'email_placeholder' => 'Your email address will not be published.',
        'website_placeholder' => 'e.g. https://example.com',
        'comment_placeholder' => 'Write your comment here...',
    ],

    'title' => 'Comments',
    'author' => 'Author',
    'responded_to' => 'Response to',
    'permalink' => 'Permalink',
    'url' => 'URL',
    'submitted_on' => 'Submitted on',
    'edit_comment' => 'Edit Comment',
    'reply' => 'Reply',
    'in_reply_to' => 'In reply to :name',

    'reply_modal' => [
        'title' => 'Reply to :comment',
        'cancel' => 'Cancel',
    ],

    'allow_comments' => 'Allow comments',

    'front' => [
        'admin_badge' => 'Admin',

        'list' => [
            'title' => ':count comment|:count comments',
            'title_singular' => ':count comment',
            'title_plural' => ':count comments',
            'reply' => 'Reply',
            'reply_to' => 'Reply to :name',
            'cancel_reply' => 'Cancel reply',
            'delete' => 'Delete',
            'delete_confirm' => 'Are you sure you want to delete this comment?',
            'waiting_for_approval_message' => 'Your comment is awaiting moderation. This is a preview, your comment will be visible after it has been approved.',
        ],

        'form' => [
            'title' => 'Leave a comment',
            'description' => 'Your email address will not be published. Required fields are marked *',
            'description_email_optional' => 'Your email address will not be published. Email is optional. Required fields are marked *',
            'cookie_consent' => 'Save my name, email, and website in this browser for the next time I comment.',
            'submit' => 'Post Comment',
            'login_required' => 'You must be logged in to post a comment.',
            'login_to_comment' => 'Log in to comment',
        ],

        'comment_success_message' => 'Your comment has been sent successfully.',
        'comment_deleted_message' => 'Your comment has been deleted successfully.',
        'delete_not_authorized' => 'You are not authorized to delete this comment.',
        'rate_limit_error' => 'You are commenting too fast. Please wait :seconds seconds before posting another comment.',
    ],

    'enums' => [
        'statuses' => [
            'pending' => 'Pending',
            'approved' => 'Approved',
            'spam' => 'Spam',
            'trash' => 'Trash',
        ],
    ],

    'settings' => [
        'title' => 'FOB Comment',
        'description' => 'Configure settings for FOB Comment',

        'form' => [
            'enable_recaptcha' => 'Enable reCAPTCHA',
            'enable_recaptcha_help' => 'You need to enable reCAPTCHA in :url to use this feature.',
            'captcha_setting_label' => 'Captcha Settings',
            'disable_guest_comment' => 'Disable guest comments',
            'disable_guest_comment_help' => 'When enabled, users must be logged in to post comments. This helps reduce spam comments.',
            'comment_moderation' => 'Comments must be manually approved',
            'comment_moderation_help' => 'All comments must be manually approved by an admin before displaying on the frontend.',
            'rate_limit_seconds' => 'Rate limit (seconds)',
            'rate_limit_seconds_help' => 'Minimum time in seconds between comments from the same user. Set to 0 to disable rate limiting.',
            'show_comment_cookie_consent' => 'Show comments cookies checkbox',
            'show_comment_cookie_consent_help' => 'When enabled, visitors can save their name, email, and website in their browser for future comments.',
            'email_optional' => 'Make email field optional',
            'email_optional_help' => 'When enabled, visitors can submit comments without providing an email address.',
            'show_website_field' => 'Show website field in comment form',
            'show_website_field_help' => 'When disabled, the website field will be hidden from the public comment form.',
            'auto_fill_comment_form' => 'Auto-fill comment data for logged-in users',
            'auto_fill_comment_form_help' => 'The comment form will be automatically filled with user data such as full name, email, etc., if they are logged in.',
            'comment_order' => 'Sort comments by',
            'comment_order_help' => 'Choose the preferred order for displaying comments in the list.',
            'comment_order_choices' => [
                'asc' => 'Oldest',
                'desc' => 'Newest',
            ],
            'display_admin_badge' => 'Display admin badge for admin comments',
            'display_admin_badge_help' => 'When enabled, comments from admins will show an "Admin" badge next to their name.',
            'show_admin_role_name_for_admin_badge' => 'Show admin role name for admin badge',
            'show_admin_role_name_for_admin_badge_helper' => 'If enabled, the admin badge will display the admin role name instead of the default "Admin" text. If the admin role name is empty, the default text will be used. If user has multiple roles, the first role will be used.',
            'avatar_provider' => 'Avatar provider',
            'avatar_provider_help' => 'Choose how to generate avatars for comments. Gravatar requires email, UI Avatars generates based on name.',
            'avatar_provider_choices' => [
                'gravatar' => 'Gravatar (Email-based)',
                'ui_avatars' => 'UI Avatars (Name-based)',
            ],
            'default_avatar' => 'Default avatar',
            'default_avatar_helper' => 'Default avatar for author when they do not have an avatar. If you do not select any image, it will be generated using the selected avatar provider. Image size should be 150x150px.',
            'allow_author_delete' => 'Allow authors to delete their comments',
            'allow_author_delete_help' => 'When enabled, logged-in users can delete their own comments.',
            'primary_color' => 'Primary color',
            'primary_color_helper' => 'Primary color for buttons, checkboxes and badges. Leave empty to use theme\'s primary color.',
            'primary_color_hover' => 'Primary hover color',
            'primary_color_hover_helper' => 'Hover color for buttons. Leave empty to use a darker shade of the primary color.',
        ],
    ],
];
