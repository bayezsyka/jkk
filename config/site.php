<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Company Information
    |--------------------------------------------------------------------------
    */

    'company' => [
        'name' => env('SITE_COMPANY_NAME', 'Jaya Karya Konstruksi'),
        'tagline' => env('SITE_TAGLINE', 'Solusi konstruksi modern untuk berbagai kebutuhan proyek.'),
    ],

    /*
    |--------------------------------------------------------------------------
    | WhatsApp Configuration
    |--------------------------------------------------------------------------
    | Semua nomor WA menggunakan satu sumber dari env.
    | Format: internasional tanpa + dan tanpa spasi, contoh: 6281234567890
    */

    'whatsapp' => [
        'number' => env('SITE_WHATSAPP_NUMBER', '6285161603362'),
        'message' => env('SITE_WHATSAPP_MESSAGE', 'Halo admin, saya mau konsultasi.'),
        'toast_title' => env('SITE_WHATSAPP_TOAST_TITLE', 'Butuh Bantuan?'),
        'toast_subtitle' => env('SITE_WHATSAPP_TOAST_SUBTITLE', 'Chat dengan kami'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Address & Location
    |--------------------------------------------------------------------------
    */

    'address' => env('SITE_ADDRESS', 'Brebes, Jawa Tengah, Indonesia'),

];
