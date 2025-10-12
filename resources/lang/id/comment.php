<?php

return [
    'common' => [
        'name' => 'Nama',
        'email' => 'Email',
        'website' => 'Situs web',
        'comment' => 'Komentar',
        'email_placeholder' => 'Alamat email Anda tidak akan dipublikasikan.',
        'website_placeholder' => 'contoh: https://example.com',
    ],

    'title' => 'Komentar',
    'author' => 'Penulis',
    'responsed_to' => 'Tanggapan untuk',
    'permalink' => 'Permalink',
    'url' => 'URL',
    'submitted_on' => 'Dikirim pada',
    'edit_comment' => 'Edit Komentar',
    'reply' => 'Balas',
    'in_reply_to' => 'Membalas :name',

    'reply_modal' => [
        'title' => 'Balas :comment',
        'cancel' => 'Batal',
    ],

    'allow_comments' => 'Izinkan komentar',

    'front' => [
        'admin_badge' => 'Admin',

        'list' => [
            'title' => ':count komentar',
            'reply' => 'Balas',
            'reply_to' => 'Balas :name',
            'cancel_reply' => 'Batalkan balasan',
            'waiting_for_approval_message' => 'Komentar Anda menunggu moderasi. Ini adalah pratinjau, komentar Anda akan terlihat setelah disetujui.',
        ],

        'form' => [
            'description_email_optional' => 'Your email address will not be published. Email is optional. Required fields are marked *',
            'title' => 'Tinggalkan komentar',
            'description' => 'Alamat email Anda tidak akan dipublikasikan. Kolom yang wajib diisi ditandai *',
            'cookie_consent' => 'Simpan nama, email, dan situs web saya di browser ini untuk komentar saya berikutnya.',
            'submit' => 'Kirim Komentar',
        ],

        'comment_success_message' => 'Komentar Anda telah berhasil dikirim.',
    ],

    'enums' => [
        'statuses' => [
            'pending' => 'Tertunda',
            'approved' => 'Disetujui',
            'spam' => 'Spam',
            'trash' => 'Sampah',
        ],
    ],

    'settings' => [
        'title' => 'FOB Comment',
        'description' => 'Konfigurasi pengaturan untuk FOB Comment',

        'form' => [
            'enable_recaptcha' => 'Aktifkan reCAPTCHA',
            'enable_recaptcha_help' => 'Anda perlu mengaktifkan reCAPTCHA di :url untuk menggunakan fitur ini.',
            'captcha_setting_label' => 'Pengaturan Captcha',
            'comment_moderation' => 'Komentar harus disetujui secara manual',
            'comment_moderation_help' => 'Semua komentar harus disetujui secara manual oleh admin sebelum ditampilkan di frontend.',
            'show_comment_cookie_consent' => 'Tampilkan kotak centang cookie komentar, yang memungkinkan pengunjung menyimpan informasi mereka di browser',
            'auto_fill_comment_form' => 'Isi otomatis data komentar untuk pengguna yang sudah login',
            'auto_fill_comment_form_help' => 'Formulir komentar akan diisi otomatis dengan data pengguna seperti nama lengkap, email, dll., jika mereka sudah login.',
            'comment_order' => 'Urutkan komentar berdasarkan',
            'comment_order_help' => 'Pilih urutan yang diinginkan untuk menampilkan komentar dalam daftar.',
            'comment_order_choices' => [
                'asc' => 'Terlama',
                'desc' => 'Terbaru',
            ],
            'display_admin_badge' => 'Tampilkan lencana admin untuk komentar admin',
            'show_admin_role_name_for_admin_badge' => 'Tampilkan nama peran admin untuk lencana admin',
            'show_admin_role_name_for_admin_badge_helper' => 'Jika diaktifkan, lencana admin akan menampilkan nama peran admin alih-alih teks default "Admin". Jika nama peran admin kosong, teks default akan digunakan. Jika pengguna memiliki beberapa peran, peran pertama akan digunakan.',
            'avatar_provider' => 'Avatar provider',
            'avatar_provider_help' => 'Choose how to generate avatars for comments. Gravatar requires email, UI Avatars generates based on name.',
            'avatar_provider_choices' => [
                'gravatar' => 'Gravatar (Email-based)',
                'ui_avatars' => 'UI Avatars (Name-based)',
            ],
            'email_optional' => 'Make email field optional',
            'email_optional_help' => 'When enabled, visitors can submit comments without providing an email address.',
            'default_avatar' => 'Avatar default',
            'default_avatar_helper' => 'Default avatar for the author when they don\'t have an avatar. If you don\'t select any image, it will be generated using the selected avatar provider. Image size should be 150x150px.',
        ],
    ],
];
