<?php

return [
    'common' => [
        'name' => 'שם',
        'email' => 'דוא״ל',
        'phone' => 'טֵלֵפוֹן',
        'website' => 'אתר אינטרנט',
        'comment' => 'תגובה',
        'email_placeholder' => 'כתובת הדוא״ל שלך לא תפורסם.',
        'website_placeholder' => 'לדוגמה: https://example.com',
    ],

    'title' => 'תגובות',
    'author' => 'כותב',
    'responded_to' => 'תגובה ל',
    'permalink' => 'קישור קבוע',
    'url' => 'כתובת',
    'submitted_on' => 'נשלח ב',
    'edit_comment' => 'ערוך תגובה',
    'reply' => 'הגב',
    'in_reply_to' => 'בתגובה ל-:name',

    'reply_modal' => [
        'title' => 'תגובה ל-:comment',
        'cancel' => 'ביטול',
    ],

    'allow_comments' => 'אפשר תגובות',

    'front' => [
        'admin_badge' => 'מנהל',

        'list' => [
            'title' => 'תגובה אחת|:count תגובות',
            'title_singular' => 'תגובה אחת',
            'title_plural' => ':count תגובות',
            'reply' => 'הגב',
            'reply_to' => 'הגב ל-:name',
            'cancel_reply' => 'בטל תגובה',
            'waiting_for_approval_message' => 'התגובה שלך ממתינה לאישור. זוהי תצוגה מקדימה, התגובה שלך תוצג לאחר אישור.',
        ],

        'form' => [
            'description_email_optional' => 'Your email address will not be published. Email is optional. Required fields are marked *',
            'title' => 'השאר תגובה',
            'description' => 'כתובת הדוא״ל שלך לא תפורסם. שדות חובה מסומנים ב-*',
            'cookie_consent' => 'שמור את השם, הדוא״ל והאתר שלי בדפדפן זה לתגובה הבאה.',
            'submit' => 'שלח תגובה',
        ],

        'comment_success_message' => 'התגובה שלך נשלחה בהצלחה.',
    ],

    'enums' => [
        'statuses' => [
            'pending' => 'ממתין',
            'approved' => 'מאושר',
            'spam' => 'ספאם',
            'trash' => 'אשפה',
        ],
    ],

    'settings' => [
        'title' => 'FOB Comment',
        'description' => 'הגדר את ההגדרות עבור FOB Comment',

        'form' => [
            'enable_recaptcha' => 'הפעל reCAPTCHA',
            'enable_recaptcha_help' => 'עליך להפעיל את reCAPTCHA ב-:url כדי להשתמש בתכונה זו.',
            'captcha_setting_label' => 'הגדרות Captcha',
            'comment_moderation' => 'תגובות חייבות באישור ידני',
            'comment_moderation_help' => 'כל התגובות חייבות להיות מאושרות ידנית על ידי מנהל לפני הצגתן בחזית האתר.',
            'show_comment_cookie_consent' => 'הצג תיבת סימון של עוגיות תגובות, המאפשרת למבקרים לשמור את המידע שלהם בדפדפן',
            'auto_fill_comment_form' => 'מילוי אוטומטי של נתוני תגובה למשתמשים מחוברים',
            'auto_fill_comment_form_help' => 'טופס התגובה ימולא אוטומטית בנתוני המשתמש כגון שם מלא, דוא״ל וכו׳, אם הם מחוברים.',
            'comment_order' => 'מיין תגובות לפי',
            'comment_order_help' => 'בחר את הסדר המועדף להצגת תגובות ברשימה.',
            'comment_order_choices' => [
                'asc' => 'הישן ביותר',
                'desc' => 'החדש ביותר',
            ],
            'display_admin_badge' => 'הצג תג מנהל לתגובות מנהלים',
            'show_admin_role_name_for_admin_badge' => 'הצג שם תפקיד מנהל עבור תג המנהל',
            'show_admin_role_name_for_admin_badge_helper' => 'אם מופעל, תג המנהל יציג את שם תפקיד המנהל במקום הטקסט הברירת מחדל "מנהל". אם שם תפקיד המנהל ריק, ייעשה שימוש בטקסט ברירת המחדל. אם למשתמש יש מספר תפקידים, ייעשה שימוש בתפקיד הראשון.',
            'avatar_provider' => 'Avatar provider',
            'avatar_provider_help' => 'Choose how to generate avatars for comments. Gravatar requires email, UI Avatars generates based on name.',
            'avatar_provider_choices' => [
                'gravatar' => 'Gravatar (Email-based)',
                'ui_avatars' => 'UI Avatars (Name-based)',
            ],
            'email_optional' => 'Make email field optional',
            'email_optional_help' => 'When enabled, visitors can submit comments without providing an email address.',
            'show_website_field' => 'הצג שדה אתר בטופס התגובות',
            'show_website_field_help' => 'כאשר האפשרות מושבתת, שדה האתר יוסתר מטופס התגובות הציבורי.',
            'default_avatar' => 'אווטאר ברירת מחדל',
            'default_avatar_helper' => 'Default avatar for the author when they don\'t have an avatar. If you don\'t select any image, it will be generated using the selected avatar provider. Image size should be 150x150px.',
        ],
    ],
];
