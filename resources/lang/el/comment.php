<?php

return [
    'common' => [
        'name' => 'Όνομα',
        'email' => 'Email',
        'phone' => 'Τηλέφωνο',
        'website' => 'Ιστοσελίδα',
        'comment' => 'Σχόλιο',
        'email_placeholder' => 'Η διεύθυνση email σας δεν θα δημοσιευθεί.',
        'website_placeholder' => 'π.χ. https://example.com',
    ],

    'title' => 'Σχόλια',
    'author' => 'Συγγραφέας',
    'responded_to' => 'Απάντηση σε',
    'permalink' => 'Μόνιμος σύνδεσμος',
    'url' => 'URL',
    'submitted_on' => 'Υποβλήθηκε στις',
    'edit_comment' => 'Επεξεργασία σχολίου',
    'reply' => 'Απάντηση',
    'in_reply_to' => 'Σε απάντηση στον :name',

    'reply_modal' => [
        'title' => 'Απάντηση στο :comment',
        'cancel' => 'Ακύρωση',
    ],

    'allow_comments' => 'Επιτρέπονται σχόλια',

    'front' => [
        'admin_badge' => 'Διαχειριστής',

        'list' => [
            'title' => ':count σχόλιο|:count σχόλια',
            'title_singular' => ':count σχόλιο',
            'title_plural' => ':count σχόλια',
            'reply' => 'Απάντηση',
            'reply_to' => 'Απάντηση στον :name',
            'cancel_reply' => 'Ακύρωση απάντησης',
            'waiting_for_approval_message' => 'Το σχόλιό σας αναμένει έγκριση. Αυτή είναι μια προεπισκόπηση, το σχόλιό σας θα είναι ορατό μετά την έγκριση.',
        ],

        'form' => [
            'description_email_optional' => 'Your email address will not be published. Email is optional. Required fields are marked *',
            'title' => 'Αφήστε ένα σχόλιο',
            'description' => 'Η διεύθυνση email σας δεν θα δημοσιευθεί. Τα απαιτούμενα πεδία επισημαίνονται με *',
            'cookie_consent' => 'Αποθήκευση του ονόματος, email και ιστοσελίδας μου σε αυτόν τον φυλλομετρητή για την επόμενη φορά που θα σχολιάσω.',
            'submit' => 'Υποβολή σχολίου',
        ],

        'comment_success_message' => 'Το σχόλιό σας υποβλήθηκε επιτυχώς.',
    ],

    'enums' => [
        'statuses' => [
            'pending' => 'Εκκρεμεί',
            'approved' => 'Εγκρίθηκε',
            'spam' => 'Ανεπιθύμητα',
            'trash' => 'Κάδος',
        ],
    ],

    'settings' => [
        'title' => 'FOB Comment',
        'description' => 'Διαμόρφωση ρυθμίσεων για το FOB Comment',

        'form' => [
            'enable_recaptcha' => 'Ενεργοποίηση reCAPTCHA',
            'enable_recaptcha_help' => 'Πρέπει να ενεργοποιήσετε το reCAPTCHA στο :url για να χρησιμοποιήσετε αυτή τη λειτουργία.',
            'captcha_setting_label' => 'Ρυθμίσεις Captcha',
            'comment_moderation' => 'Τα σχόλια πρέπει να εγκριθούν χειροκίνητα',
            'comment_moderation_help' => 'Όλα τα σχόλια πρέπει να εγκριθούν χειροκίνητα από έναν διαχειριστή πριν εμφανιστούν στο frontend.',
            'show_comment_cookie_consent' => 'Εμφάνιση πλαισίου ελέγχου cookies σχολίων, επιτρέποντας στους επισκέπτες να αποθηκεύσουν τις πληροφορίες τους στον φυλλομετρητή',
            'auto_fill_comment_form' => 'Αυτόματη συμπλήρωση δεδομένων σχολίου για συνδεδεμένους χρήστες',
            'auto_fill_comment_form_help' => 'Η φόρμα σχολίου θα συμπληρωθεί αυτόματα με δεδομένα χρήστη όπως πλήρες όνομα, email κλπ., εάν είναι συνδεδεμένοι.',
            'comment_order' => 'Ταξινόμηση σχολίων κατά',
            'comment_order_help' => 'Επιλέξτε την προτιμώμενη σειρά για την εμφάνιση σχολίων στη λίστα.',
            'comment_order_choices' => [
                'asc' => 'Παλαιότερα',
                'desc' => 'Νεότερα',
            ],
            'display_admin_badge' => 'Εμφάνιση σήματος διαχειριστή για σχόλια διαχειριστών',
            'show_admin_role_name_for_admin_badge' => 'Εμφάνιση ονόματος ρόλου διαχειριστή για το σήμα διαχειριστή',
            'show_admin_role_name_for_admin_badge_helper' => 'Εάν ενεργοποιηθεί, το σήμα διαχειριστή θα εμφανίζει το όνομα ρόλου διαχειριστή αντί του προεπιλεγμένου κειμένου "Διαχειριστής". Εάν το όνομα ρόλου διαχειριστή είναι κενό, θα χρησιμοποιηθεί το προεπιλεγμένο κείμενο. Εάν ο χρήστης έχει πολλούς ρόλους, θα χρησιμοποιηθεί ο πρώτος ρόλος.',
            'avatar_provider' => 'Avatar provider',
            'avatar_provider_help' => 'Choose how to generate avatars for comments. Gravatar requires email, UI Avatars generates based on name.',
            'avatar_provider_choices' => [
                'gravatar' => 'Gravatar (Email-based)',
                'ui_avatars' => 'UI Avatars (Name-based)',
            ],
            'email_optional' => 'Make email field optional',
            'email_optional_help' => 'When enabled, visitors can submit comments without providing an email address.',
            'show_website_field' => 'Εμφάνιση πεδίου ιστοσελίδας στη φόρμα σχολίων',
            'show_website_field_help' => 'Όταν απενεργοποιηθεί, το πεδίο ιστοσελίδας θα κρυφτεί από τη δημόσια φόρμα σχολίων.',
            'default_avatar' => 'Προεπιλεγμένο avatar',
            'default_avatar_helper' => 'Default avatar for the author when they don\'t have an avatar. If you don\'t select any image, it will be generated using the selected avatar provider. Image size should be 150x150px.',
        ],
    ],
];
