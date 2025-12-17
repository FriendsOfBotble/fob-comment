<?php

return [
    'common' => [
        'name' => 'Nama',
        'email' => 'Email',
        'phone' => 'Telepon',
        'website' => 'Situs web',
        'comment' => 'Komentar',
        'email_placeholder' => 'Alamat email Anda tidak akan dipublikasikan.',
        'website_placeholder' => 'contoh: https://example.com',
    ],

    'title' => 'Komentar',
    'author' => 'Penulis',
    'responded_to' => 'Tanggapan untuk',
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
            'title_singular' => ':count komentar',
            'title_plural' => ':count komentar',
            'reply' => 'Balas',
            'reply_to' => 'Balas :name',
            'cancel_reply' => 'Batalkan balasan',
            'waiting_for_approval_message' => 'Komentar Anda menunggu moderasi. Ini adalah pratinjau, komentar Anda akan terlihat setelah disetujui.',
        ],

        'form' => [
            'description_email_optional' => 'Alamat email Anda tidak akan dipublikasikan. Email bersifat opsional. Kolom yang wajib diisi ditandai *',
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
            'avatar_provider' => 'Penyedia avatar',
            'avatar_provider_help' => 'Pilih cara menghasilkan avatar untuk komentar. Gravatar memerlukan email, UI Avatars menghasilkan berdasarkan nama.',
            'avatar_provider_choices' => [
                'gravatar' => 'Gravatar (Berbasis email)',
                'ui_avatars' => 'UI Avatars (Berbasis nama)',
            ],
            'email_optional' => 'Jadikan kolom email opsional',
            'email_optional_help' => 'Jika diaktifkan, pengunjung dapat mengirim komentar tanpa memberikan alamat email.',
            'show_website_field' => 'Tampilkan kolom situs web pada formulir komentar',
            'show_website_field_help' => 'Saat dinonaktifkan, kolom situs web akan disembunyikan dari formulir komentar publik.',
            'default_avatar' => 'Avatar default',
            'default_avatar_helper' => 'Avatar default untuk penulis ketika mereka tidak memiliki avatar. Jika Anda tidak memilih gambar apa pun, itu akan dibuat menggunakan penyedia avatar yang dipilih. Ukuran gambar harus 150x150px.',
        ],
    ],
];
