<?php

return [
    'common' => [
        'name' => 'שם',
        'email' => 'דוא״ל',
        'phone' => 'טֵלֵפוֹן',
        'website' => 'אתר אינטרנט',
        'comment' => 'תגובה',
        'email_placeholder' => 'כתובת הדוא״ל שלך לא תפורסם.',
        'name_placeholder' => 'Your name',
        'website_placeholder' => 'לדוגמה: https://example.com',
        'comment_placeholder' => 'Write your comment here...',
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
            'delete' => 'מחק',
            'delete_confirm' => 'האם אתה בטוח שברצונך למחוק את התגובה הזו?',
        ],

        'form' => [
            'description_email_optional' => 'Your email address will not be published. Email is optional. Required fields are marked *',
            'title' => 'השאר תגובה',
            'description' => 'כתובת הדוא״ל שלך לא תפורסם. שדות חובה מסומנים ב-*',
            'cookie_consent' => 'שמור את השם, הדוא״ל והאתר שלי בדפדפן זה לתגובה הבאה.',
            'submit' => 'שלח תגובה',
            'login_required' => 'עליך להיות מחובר כדי לפרסם תגובה.',
            'login_to_comment' => 'התחבר כדי להגיב',
        ],

        'comment_success_message' => 'התגובה שלך נשלחה בהצלחה.',
        'rate_limit_error' => 'אתה מגיב מהר מדי. אנא המתן :seconds שניות לפני פרסום תגובה נוספת.',
        'comment_deleted_message' => 'התגובה שלך נמחקה בהצלחה.',
        'delete_not_authorized' => 'אינך מורשה למחוק תגובה זו.',
    ],

    'enums' => [
        'statuses' => [
            'pending' => 'ממתין',
            'approved' => 'מאושר',
            'spam' => 'ספאם',
            'trash' => 'אשפה',
        ],
    ],

    'email_templates' => [
        'admin_new_comment_title' => 'התקבלה תגובה חדשה',
        'admin_new_comment_message' => ':comment_name השאיר תגובה חדשה',
        'comment_reply_title' => 'תגובה חדשה לתגובתך',
        'comment_reply_message' => ':reply_name הגיב לתגובתך',
        'commented_on' => 'הגיב על',
        'view_comment' => 'צפה בתגובה',
    ],

    'settings' => [
        'title' => 'FOB Comment',
        'description' => 'הגדר את ההגדרות עבור FOB Comment',

        'email' => [
            'templates' => [
                'title' => 'תגובה',
                'description' => 'תבניות דוא״ל להתראות תגובות',
                'admin_new_comment' => [
                    'title' => 'התראת מנהל על תגובה חדשה',
                    'description' => 'שלח דוא״ל למנהל כאשר מפורסמת תגובה חדשה',
                    'subject' => 'תגובה חדשה ב-{{ site_title }}',
                    'comment_name_description' => 'שם מחבר התגובה',
                    'comment_email_description' => 'דוא״ל מחבר התגובה',
                    'comment_content_description' => 'תוכן התגובה',
                    'comment_reference_description' => 'הדף/הפוסט שעליו הגיבו',
                    'comment_url_description' => 'כתובת URL לצפייה בתגובה',
                ],
                'comment_reply' => [
                    'title' => 'הודע למגיב על תגובה',
                    'description' => 'שלח דוא״ל למגיב כאשר מישהו מגיב לתגובתו',
                    'subject' => 'תגובה חדשה לתגובתך ב-{{ site_title }}',
                    'comment_name_description' => 'שם המגיב המקורי',
                    'reply_name_description' => 'שם מחבר התגובה',
                    'reply_content_description' => 'תוכן התגובה',
                    'comment_reference_description' => 'הדף/הפוסט שעליו הגיבו',
                    'comment_url_description' => 'כתובת URL לצפייה בתגובה',
                ],
            ],
        ],

        'form' => [
            'enable_recaptcha' => 'הפעל reCAPTCHA',
            'enable_recaptcha_help' => 'עליך להפעיל את reCAPTCHA ב-:url כדי להשתמש בתכונה זו.',
            'captcha_setting_label' => 'הגדרות Captcha',
            'disable_guest_comment' => 'השבת תגובות אורחים',
            'disable_guest_comment_help' => 'כאשר מופעל, משתמשים חייבים להיות מחוברים כדי לפרסם תגובות. זה עוזר להפחית תגובות ספאם.',
            'comment_moderation' => 'תגובות חייבות באישור ידני',
            'comment_moderation_help' => 'כל התגובות חייבות להיות מאושרות ידנית על ידי מנהל לפני הצגתן בחזית האתר.',
            'rate_limit_seconds' => 'הגבלת קצב (שניות)',
            'rate_limit_seconds_help' => 'זמן מינימלי בשניות בין תגובות מאותו משתמש. הגדר ל-0 להשבתת הגבלת הקצב.',
            'show_comment_cookie_consent' => 'הצג תיבת סימון של עוגיות תגובות, המאפשרת למבקרים לשמור את המידע שלהם בדפדפן',
            'show_comment_cookie_consent_help' => 'כאשר מופעל, מבקרים יכולים לשמור את שמם, דוא״ל ואתרם בדפדפן לתגובות עתידיות.',
            'auto_fill_comment_form' => 'מילוי אוטומטי של נתוני תגובה למשתמשים מחוברים',
            'auto_fill_comment_form_help' => 'טופס התגובה ימולא אוטומטית בנתוני המשתמש כגון שם מלא, דוא״ל וכו׳, אם הם מחוברים.',
            'comment_order' => 'מיין תגובות לפי',
            'comment_order_help' => 'בחר את הסדר המועדף להצגת תגובות ברשימה.',
            'comment_order_choices' => [
                'asc' => 'הישן ביותר',
                'desc' => 'החדש ביותר',
            ],
            'display_admin_badge' => 'הצג תג מנהל לתגובות מנהלים',
            'display_admin_badge_help' => 'כאשר מופעל, תגובות ממנהלים יציגו תג "מנהל" לצד שמם.',
            'show_admin_role_name_for_admin_badge' => 'הצג שם תפקיד מנהל עבור תג המנהל',
            'show_admin_role_name_for_admin_badge_helper' => 'אם מופעל, תג המנהל יציג את שם תפקיד המנהל במקום הטקסט הברירת מחדל "מנהל". אם שם תפקיד המנהל ריק, ייעשה שימוש בטקסט ברירת המחדל. אם למשתמש יש מספר תפקידים, ייעשה שימוש בתפקיד הראשון.',
            'avatar_provider' => 'ספק אווטאר',
            'avatar_provider_help' => 'בחר כיצד ליצור אווטארים לתגובות. Gravatar דורש דוא״ל, UI Avatars יוצר על פי שם.',
            'avatar_provider_choices' => [
                'gravatar' => 'Gravatar (מבוסס דוא״ל)',
                'ui_avatars' => 'UI Avatars (מבוסס שם)',
            ],
            'email_optional' => 'הפוך את שדה הדוא״ל לאופציונלי',
            'email_optional_help' => 'כאשר מופעל, מבקרים יכולים לשלוח תגובות ללא מתן כתובת דוא״ל.',
            'show_website_field' => 'הצג שדה אתר בטופס התגובות',
            'show_website_field_help' => 'כאשר האפשרות מושבתת, שדה האתר יוסתר מטופס התגובות הציבורי.',
            'default_avatar' => 'אווטאר ברירת מחדל',
            'default_avatar_helper' => 'אווטאר ברירת מחדל למחבר כאשר אין לו אווטאר. אם לא תבחר תמונה, היא תיווצר באמצעות ספק האווטאר הנבחר. גודל התמונה צריך להיות 150x150px.',
            'allow_author_delete' => 'אפשר למחברים למחוק את תגובותיהם',
            'allow_author_delete_help' => 'כאשר מופעל, משתמשים מחוברים יכולים למחוק את תגובותיהם.',
            'primary_color' => 'צבע ראשי',
            'primary_color_helper' => 'צבע ראשי לכפתורים, תיבות סימון ותגיות. השאר ריק לשימוש בצבע הראשי של הנושא.',
            'primary_color_hover' => 'צבע ריחוף ראשי',
            'primary_color_hover_helper' => 'צבע ריחוף לכפתורים. השאר ריק לשימוש בגוון כהה יותר של הצבע הראשי.',
        ],
    ],
];
