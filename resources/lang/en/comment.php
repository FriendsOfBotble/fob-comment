<?php

return [
    'common' => [
        'name' => 'Name',
        'email' => 'Email',
        'website' => 'Website',
        'comment' => 'Comment',
    ],

    'title' => 'Comments',
    'author' => 'Author',
    'responsed_to' => 'Response to',
    'permalink' => 'Permalink',
    'url' => 'URL',
    'submitted_on' => 'Submitted on',
    'edit_comment' => 'Edit Comment',

    'front' => [
        'list' => [
            'title' => ':count comment|:count comments',
            'reply' => 'Reply',
            'reply_to' => 'Reply to :name',
            'cancel_reply' => 'Cancel reply',
            'waiting_for_approval_message' => 'Your comment is awaiting moderation. This is a preview, your comment will be visible after it has been approved.',
        ],

        'form' => [
            'title' => 'Leave a comment',
            'description' => 'Your email address will not be published. Required fields are marked *',
            'cookie_consent' => 'Save my name, email, and website in this browser for the next time I comment.',
            'submit' => 'Post Comment',
        ],

        'comment_success_message' => 'Your comment has been sent successfully.',
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
        'description' => 'Manage related settings for FOB Comment',

        'form' => [
            'enable_recaptcha' => 'Enable reCAPTCHA',
            'comment_moderation' => 'Comment must be mannually approved',
            'comment_moderation_help' => 'All comments must be mannually approved by admin before displaying on frontend.',
            'show_comment_cookie_consent' => 'Show comments cookies checkbox, allow visitors to save their information in browser',
            'comment_order' => 'Sort comments by',
            'comment_order_help' => 'Choose the preferred order for displaying comments in the list.',
            'comment_order_choices' => [
                'asc' => 'Oldest',
                'desc' => 'Newest',
            ],
        ],
    ],
];
