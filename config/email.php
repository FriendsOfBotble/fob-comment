<?php

return [
    'name' => 'plugins/fob-comment::comment.settings.email.templates.title',
    'description' => 'plugins/fob-comment::comment.settings.email.templates.description',
    'templates' => [
        'admin_new_comment' => [
            'title' => 'plugins/fob-comment::comment.settings.email.templates.admin_new_comment.title',
            'description' => 'plugins/fob-comment::comment.settings.email.templates.admin_new_comment.description',
            'subject' => 'plugins/fob-comment::comment.settings.email.templates.admin_new_comment.subject',
            'can_off' => true,
            'variables' => [
                'comment_name' => 'plugins/fob-comment::comment.settings.email.templates.admin_new_comment.comment_name_description',
                'comment_email' => 'plugins/fob-comment::comment.settings.email.templates.admin_new_comment.comment_email_description',
                'comment_content' => 'plugins/fob-comment::comment.settings.email.templates.admin_new_comment.comment_content_description',
                'comment_reference' => 'plugins/fob-comment::comment.settings.email.templates.admin_new_comment.comment_reference_description',
                'comment_url' => 'plugins/fob-comment::comment.settings.email.templates.admin_new_comment.comment_url_description',
            ],
        ],
        'comment_reply' => [
            'title' => 'plugins/fob-comment::comment.settings.email.templates.comment_reply.title',
            'description' => 'plugins/fob-comment::comment.settings.email.templates.comment_reply.description',
            'subject' => 'plugins/fob-comment::comment.settings.email.templates.comment_reply.subject',
            'can_off' => true,
            'variables' => [
                'comment_name' => 'plugins/fob-comment::comment.settings.email.templates.comment_reply.comment_name_description',
                'reply_name' => 'plugins/fob-comment::comment.settings.email.templates.comment_reply.reply_name_description',
                'reply_content' => 'plugins/fob-comment::comment.settings.email.templates.comment_reply.reply_content_description',
                'comment_reference' => 'plugins/fob-comment::comment.settings.email.templates.comment_reply.comment_reference_description',
                'comment_url' => 'plugins/fob-comment::comment.settings.email.templates.comment_reply.comment_url_description',
            ],
        ],
    ],
    'variables' => [],
];
