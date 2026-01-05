<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    <title>Jaya Karya Konstruksi</title>
</head>

@php
    // ============ EXCLUDE WELCOME ============
    $isWelcome = request()->path() === '/' || request()->path() === '' || request()->is('/');

    // ============ AUTO PAGE TITLE ============
    $seg = request()->segment(1) ?: '';
    $map = [
        '' => 'Beranda',
        'tentang-kami' => 'Tentang Kami',
        'about' => 'Tentang Kami',
        'proyek' => 'Proyek',
        'projects' => 'Proyek',
        'layanan' => 'Layanan',
        'services' => 'Layanan',
        'media' => 'Media & Informasi',
        'informasi' => 'Media & Informasi',
        'kontak' => 'Kontak Kami',
        'contact' => 'Kontak Kami',
    ];
    $pageTitle = $map[$seg] ?? \Illuminate\Support\Str::headline($seg ?: 'Beranda');

    // ============ RANDOM HERO IMAGE (public/images) ============
    $all = glob(public_path('images/*.{jpg,jpeg,png,webp}'), GLOB_BRACE) ?: [];
    $all = array_values(
        array_filter($all, function ($p) {
            $b = strtolower(basename($p));
            return !str_contains($b, 'logo') && !str_contains($b, 'icon');
        }),
    );
    $heroImg = $all ? asset('images/' . basename($all[array_rand($all)])) : asset('images/hero.jpg');
@endphp

<body class="bg-white text-slate-900">
    @include('layouts.nav-public')

    {{-- AUTO HERO UNTUK SEMUA PAGE, KECUALI WELCOME --}}
    @if (!$isWelcome)
        <header class="relative h-[320px] w-full overflow-hidden">
            <img src="{{ $heroImg }}" alt="{{ $pageTitle }}" class="absolute inset-0 h-full w-full object-cover">
            <div class="absolute inset-0 bg-slate-900/55"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-slate-900/70 via-slate-900/45 to-slate-900/10"></div>

            <div class="relative mx-auto flex h-full max-w-4xl items-center px-6 pt-14">
                <div>
                    <p class="text-xs font-semibold tracking-wide text-white/80">
                        JKK <span class="text-orange-400/90">•</span> JAYA KARYA KONTRUKSI
                    </p>
                    <h1 class="mt-3 text-4xl font-extrabold tracking-tight text-white sm:text-5xl">
                        {{ $pageTitle }}
                    </h1>
                </div>
            </div>
        </header>

        {{-- content rapi auto container --}}
        <main class="mx-auto max-w-4xl px-6 py-12">
            @yield('content')
        </main>
    @else
        {{-- welcome biarin full custom --}}
        @yield('content')
    @endif

    @include('layouts.bot-public')

    @include('components.whatsapp-toast', [
        'waNumber' => '6285161603362',
        'waMessage' => 'Halo admin, saya mau konsultasi.',
        'toastTitle' => 'Need Help?',
        'toastSubtitle' => 'Chat with us',
    ])
</body>

</html>
