<?php

declare(strict_types=1);

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'failed' => 'Kredensial ini tidak cocok dengan data kami.',
    'password' => 'Kata sandi yang dimasukkan salah.',
    'throttle' => 'Terlalu banyak percobaan masuk. Coba lagi dalam :seconds detik.',

    'flash' => [
        'welcome' => 'Selamat datang di TradeHive Social!',
        'welcome_trial' => 'Selamat datang di TradeHive Social! Masa uji cobamu sudah dimulai.',
    ],

    'legal' => 'Dengan melanjutkan, kamu menyetujui <a href=":terms_url" target="_blank">Ketentuan Layanan</a> dan <a href=":privacy_url" target="_blank">Kebijakan Privasi</a> kami.',

    'reviews' => [
        'eyebrow' => '5/5 di G2',
        'heading' => 'Disukai mereka yang memposting konten setiap hari',
    ],

    'panel' => [
        'heading' => 'Media sosial Anda, beres.',
        'schedule' => [
            'title' => 'Rencanakan sekali, terbitkan di mana saja',
            'body' => 'Instagram, Facebook, TikTok, LinkedIn, YouTube, Google Business, dan lainnya dari satu kalender.',
        ],
        'ai' => [
            'title' => 'AI yang menulis dengan gaya Anda',
            'body' => 'Siapkan postingan seminggu dalam hitungan menit, atau serahkan ke asisten AI lewat MCP.',
        ],
        'approvals' => [
            'title' => 'Setujui sebelum tayang',
            'body' => 'Setiap klien dan merek punya ruang kerja sendiri, persetujuan sekali klik.',
        ],
        'local' => [
            'title' => 'Dibuat untuk bisnis lokal',
            'body' => 'Postingan Google Business, permintaan ulasan, dan promo musiman yang mendatangkan pelanggan.',
        ],
    ],

    'or_continue_with' => 'Atau lanjutkan dengan',
    'or_continue_with_email' => 'Atau lanjutkan dengan email',
    'google_login' => 'Masuk dengan Google',
    'google_signup' => 'Daftar dengan Google',
    'github_login' => 'Masuk dengan GitHub',
    'github_signup' => 'Daftar dengan GitHub',
    'github_email_unavailable' => 'Kami tidak bisa mengambil emailmu dari GitHub. Jadikan email GitHub-mu publik atau berikan izin akses email, lalu coba lagi.',

    'login' => [
        'title' => 'Masuk ke TradeHive',
        'page_title' => 'Masuk',
        'email' => 'Alamat email',
        'password' => 'Kata sandi',
        'show_password' => 'Tampilkan kata sandi',
        'hide_password' => 'Sembunyikan kata sandi',
        'forgot_password' => 'Lupa kata sandi?',
        'remember_me' => 'Ingat saya',
        'submit' => 'Masuk',
        'no_account' => 'Belum punya akun?',
        'sign_up' => 'Daftar',
    ],

    'register' => [
        'title' => 'Buat akun TradeHive',
        'page_title' => 'Daftar',
        'name' => 'Nama',
        'name_placeholder' => 'Nama lengkap',
        'email' => 'Alamat email',
        'password' => 'Kata sandi',
        'show_password' => 'Tampilkan kata sandi',
        'hide_password' => 'Sembunyikan kata sandi',
        'submit' => 'Buat akun',
        'has_account' => 'Sudah punya akun?',
        'log_in' => 'Masuk',
        'password_requirements' => [
            'min' => 'Minimal :count karakter',
            'mixed_case' => 'Huruf besar dan kecil',
            'number' => 'Minimal 1 angka',
            'symbol' => 'Minimal 1 simbol',
        ],
    ],

    'forgot_password' => [
        'title' => 'Lupa kata sandi',
        'description' => 'Masukkan emailmu untuk menerima tautan reset kata sandi',
        'page_title' => 'Lupa kata sandi',
        'email' => 'Alamat email',
        'submit' => 'Kirim tautan reset kata sandi',
        'return_to' => 'Atau, kembali ke',
        'log_in' => 'halaman masuk',
    ],

    'reset_password' => [
        'title' => 'Reset kata sandi',
        'description' => 'Masukkan kata sandi barumu di bawah ini',
        'page_title' => 'Reset kata sandi',
        'email' => 'Email',
        'password' => 'Kata sandi',
        'confirm_password' => 'Konfirmasi kata sandi',
        'confirm_placeholder' => 'Konfirmasi kata sandi',
        'submit' => 'Reset kata sandi',
    ],

    'verify_email' => [
        'title' => 'Verifikasi email',
        'description' => 'Verifikasi alamat emailmu dengan mengeklik tautan yang baru saja kami kirim ke emailmu.',
        'page_title' => 'Verifikasi email',
        'link_sent' => 'Tautan verifikasi baru sudah dikirim ke alamat email yang kamu pakai saat mendaftar.',
        'resend' => 'Kirim ulang email verifikasi',
        'log_out' => 'Keluar',
    ],

    'accept_invite' => [
        'page_title' => 'Terima undangan',
        'title' => 'Kamu diundang!',
        'description' => 'Kamu diundang untuk bergabung ke workspace :workspace.',
        'workspace' => 'Workspace',
        'your_role' => 'Peran kamu',
        'email' => 'Email',
        'accept' => 'Terima undangan',
        'decline' => 'Tolak undangan',
        'login_prompt' => 'Masuk atau buat akun untuk menerima undangan ini.',
        'log_in' => 'Masuk',
        'create_account' => 'Buat akun',
        'expired_title' => 'Undangan ini sudah tidak valid',
        'expired_description' => 'Workspace untuk undangan ini sudah dihapus. Minta undangan baru ke pemilik akun kalau kamu masih butuh akses.',
        'expired_action' => 'Ke halaman utama',
    ],

];
