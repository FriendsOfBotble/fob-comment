<?php

return [
    'common' => [
        'name' => 'Όνομα',
        'email' => 'Email',
        'phone' => 'Τηλέφωνο',
        'website' => 'Ιστοσελίδα',
        'comment' => 'Σχόλιο',
        'email_placeholder' => 'Η διεύθυνση email σας δεν θα δημοσιευθεί.',
        'name_placeholder' => 'Your name',
        'website_placeholder' => 'π.χ. https://example.com',
        'comment_placeholder' => 'Write your comment here...',
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
            'delete' => 'Διαγραφή',
            'delete_confirm' => 'Είστε σίγουροι ότι θέλετε να διαγράψετε αυτό το σχόλιο;',
        ],

        'form' => [
            'description_email_optional' => 'Your email address will not be published. Email is optional. Required fields are marked *',
            'title' => 'Αφήστε ένα σχόλιο',
            'description' => 'Η διεύθυνση email σας δεν θα δημοσιευθεί. Τα απαιτούμενα πεδία επισημαίνονται με *',
            'cookie_consent' => 'Αποθήκευση του ονόματος, email και ιστοσελίδας μου σε αυτόν τον φυλλομετρητή για την επόμενη φορά που θα σχολιάσω.',
            'submit' => 'Υποβολή σχολίου',
            'login_required' => 'Πρέπει να είστε συνδεδεμένοι για να δημοσιεύσετε ένα σχόλιο.',
            'login_to_comment' => 'Συνδεθείτε για να σχολιάσετε',
        ],

        'comment_success_message' => 'Το σχόλιό σας υποβλήθηκε επιτυχώς.',
        'rate_limit_error' => 'Σχολιάζετε πολύ γρήγορα. Περιμένετε :seconds δευτερόλεπτα πριν δημοσιεύσετε άλλο σχόλιο.',
        'comment_deleted_message' => 'Το σχόλιό σας διαγράφηκε επιτυχώς.',
        'delete_not_authorized' => 'Δεν έχετε εξουσιοδότηση να διαγράψετε αυτό το σχόλιο.',
    ],

    'enums' => [
        'statuses' => [
            'pending' => 'Εκκρεμεί',
            'approved' => 'Εγκρίθηκε',
            'spam' => 'Ανεπιθύμητα',
            'trash' => 'Κάδος',
        ],
    ],

    'email_templates' => [
        'admin_new_comment_title' => 'Ελήφθη νέο σχόλιο',
        'admin_new_comment_message' => 'Ο :comment_name άφησε ένα νέο σχόλιο',
        'comment_reply_title' => 'Νέα απάντηση στο σχόλιό σας',
        'comment_reply_message' => 'Ο :reply_name απάντησε στο σχόλιό σας',
        'commented_on' => 'Σχολίασε στο',
        'view_comment' => 'Προβολή σχολίου',
    ],

    'settings' => [
        'title' => 'FOB Comment',
        'description' => 'Διαμόρφωση ρυθμίσεων για το FOB Comment',

        'email' => [
            'templates' => [
                'title' => 'Σχόλιο',
                'description' => 'Πρότυπα email για ειδοποιήσεις σχολίων',
                'admin_new_comment' => [
                    'title' => 'Ειδοποίηση διαχειριστή για νέο σχόλιο',
                    'description' => 'Αποστολή email στον διαχειριστή όταν δημοσιευτεί νέο σχόλιο',
                    'subject' => 'Νέο σχόλιο στο {{ site_title }}',
                    'comment_name_description' => 'Όνομα συγγραφέα σχολίου',
                    'comment_email_description' => 'Email συγγραφέα σχολίου',
                    'comment_content_description' => 'Περιεχόμενο σχολίου',
                    'comment_reference_description' => 'Η σελίδα/ανάρτηση στην οποία σχολιάστηκε',
                    'comment_url_description' => 'URL για προβολή του σχολίου',
                ],
                'comment_reply' => [
                    'title' => 'Ειδοποίηση σχολιαστή για απάντηση',
                    'description' => 'Αποστολή email στον σχολιαστή όταν κάποιος απαντήσει στο σχόλιό του',
                    'subject' => 'Νέα απάντηση στο σχόλιό σας στο {{ site_title }}',
                    'comment_name_description' => 'Όνομα αρχικού σχολιαστή',
                    'reply_name_description' => 'Όνομα συγγραφέα απάντησης',
                    'reply_content_description' => 'Περιεχόμενο απάντησης',
                    'comment_reference_description' => 'Η σελίδα/ανάρτηση στην οποία σχολιάστηκε',
                    'comment_url_description' => 'URL για προβολή του σχολίου',
                ],
            ],
        ],

        'form' => [
            'enable_recaptcha' => 'Ενεργοποίηση reCAPTCHA',
            'enable_recaptcha_help' => 'Πρέπει να ενεργοποιήσετε το reCAPTCHA στο :url για να χρησιμοποιήσετε αυτή τη λειτουργία.',
            'captcha_setting_label' => 'Ρυθμίσεις Captcha',
            'disable_guest_comment' => 'Απενεργοποίηση σχολίων επισκεπτών',
            'disable_guest_comment_help' => 'Όταν είναι ενεργοποιημένο, οι χρήστες πρέπει να είναι συνδεδεμένοι για να δημοσιεύσουν σχόλια. Αυτό βοηθά στη μείωση των ανεπιθύμητων σχολίων.',
            'comment_moderation' => 'Τα σχόλια πρέπει να εγκριθούν χειροκίνητα',
            'comment_moderation_help' => 'Όλα τα σχόλια πρέπει να εγκριθούν χειροκίνητα από έναν διαχειριστή πριν εμφανιστούν στο frontend.',
            'rate_limit_seconds' => 'Όριο ρυθμού (δευτερόλεπτα)',
            'rate_limit_seconds_help' => 'Ελάχιστος χρόνος σε δευτερόλεπτα μεταξύ σχολίων από τον ίδιο χρήστη. Ορίστε σε 0 για απενεργοποίηση του ορίου ρυθμού.',
            'show_comment_cookie_consent' => 'Εμφάνιση πλαισίου ελέγχου cookies σχολίων, επιτρέποντας στους επισκέπτες να αποθηκεύσουν τις πληροφορίες τους στον φυλλομετρητή',
            'show_comment_cookie_consent_help' => 'Όταν είναι ενεργοποιημένο, οι επισκέπτες μπορούν να αποθηκεύσουν το όνομα, το email και τον ιστότοπό τους στον φυλλομετρητή για μελλοντικά σχόλια.',
            'auto_fill_comment_form' => 'Αυτόματη συμπλήρωση δεδομένων σχολίου για συνδεδεμένους χρήστες',
            'auto_fill_comment_form_help' => 'Η φόρμα σχολίου θα συμπληρωθεί αυτόματα με δεδομένα χρήστη όπως πλήρες όνομα, email κλπ., εάν είναι συνδεδεμένοι.',
            'comment_order' => 'Ταξινόμηση σχολίων κατά',
            'comment_order_help' => 'Επιλέξτε την προτιμώμενη σειρά για την εμφάνιση σχολίων στη λίστα.',
            'comment_order_choices' => [
                'asc' => 'Παλαιότερα',
                'desc' => 'Νεότερα',
            ],
            'display_admin_badge' => 'Εμφάνιση σήματος διαχειριστή για σχόλια διαχειριστών',
            'display_admin_badge_help' => 'Όταν είναι ενεργοποιημένο, τα σχόλια από διαχειριστές θα εμφανίζουν σήμα "Διαχειριστής" δίπλα στο όνομά τους.',
            'show_admin_role_name_for_admin_badge' => 'Εμφάνιση ονόματος ρόλου διαχειριστή για το σήμα διαχειριστή',
            'show_admin_role_name_for_admin_badge_helper' => 'Εάν ενεργοποιηθεί, το σήμα διαχειριστή θα εμφανίζει το όνομα ρόλου διαχειριστή αντί του προεπιλεγμένου κειμένου "Διαχειριστής". Εάν το όνομα ρόλου διαχειριστή είναι κενό, θα χρησιμοποιηθεί το προεπιλεγμένο κείμενο. Εάν ο χρήστης έχει πολλούς ρόλους, θα χρησιμοποιηθεί ο πρώτος ρόλος.',
            'avatar_provider' => 'Πάροχος avatar',
            'avatar_provider_help' => 'Επιλέξτε τον τρόπο δημιουργίας avatar για σχόλια. Το Gravatar απαιτεί email, το UI Avatars δημιουργεί βάσει ονόματος.',
            'avatar_provider_choices' => [
                'gravatar' => 'Gravatar (βάσει email)',
                'ui_avatars' => 'UI Avatars (βάσει ονόματος)',
            ],
            'email_optional' => 'Κάντε το πεδίο email προαιρετικό',
            'email_optional_help' => 'Όταν είναι ενεργοποιημένο, οι επισκέπτες μπορούν να υποβάλουν σχόλια χωρίς να παρέχουν διεύθυνση email.',
            'show_website_field' => 'Εμφάνιση πεδίου ιστοσελίδας στη φόρμα σχολίων',
            'show_website_field_help' => 'Όταν απενεργοποιηθεί, το πεδίο ιστοσελίδας θα κρυφτεί από τη δημόσια φόρμα σχολίων.',
            'default_avatar' => 'Προεπιλεγμένο avatar',
            'default_avatar_helper' => 'Προεπιλεγμένο avatar για τον συγγραφέα όταν δεν έχει avatar. Εάν δεν επιλέξετε εικόνα, θα δημιουργηθεί χρησιμοποιώντας τον επιλεγμένο πάροχο avatar. Το μέγεθος εικόνας πρέπει να είναι 150x150px.',
            'allow_author_delete' => 'Επιτρέψτε στους συγγραφείς να διαγράφουν τα σχόλιά τους',
            'allow_author_delete_help' => 'Όταν είναι ενεργοποιημένο, οι συνδεδεμένοι χρήστες μπορούν να διαγράφουν τα δικά τους σχόλια.',
            'primary_color' => 'Κύριο χρώμα',
            'primary_color_helper' => 'Κύριο χρώμα για κουμπιά, πλαίσια ελέγχου και σήματα. Αφήστε κενό για χρήση του κύριου χρώματος θέματος.',
            'primary_color_hover' => 'Κύριο χρώμα εναλλαγής',
            'primary_color_hover_helper' => 'Χρώμα εναλλαγής για κουμπιά. Αφήστε κενό για χρήση πιο σκούρας απόχρωσης του κύριου χρώματος.',
        ],
    ],
];
