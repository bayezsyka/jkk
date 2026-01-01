<section class="relative h-[92vh] w-full overflow-hidden sm:h-screen">
    <!-- Background Image -->
    <img src="{{ asset('images/hero.png') }}" alt="Jaya Karya Konstruksi"
        class="absolute inset-0 h-full w-full object-cover object-center scale-[1.03]" />

    <!-- Layer: soft gradient (updated colors) -->
    <div class="absolute inset-0 bg-gradient-to-b from-slate-900/55 via-slate-800/25 to-slate-900/65"></div>

    <!-- Layer: subtle radial highlight (behind text area) -->
    <div class="absolute inset-0">
        <div
            class="absolute left-1/2 top-1/2 h-[520px] w-[520px] -translate-x-1/2 -translate-y-1/2 rounded-full bg-orange-500/10 blur-3xl sm:h-[680px] sm:w-[680px]">
        </div>
    </div>

    <!-- Layer: texture / grain-ish pattern (super subtle) -->
    <div class="absolute inset-0 opacity-[0.01] mix-blend-overlay">
        <svg class="h-full w-full" xmlns="http://www.w3.org/2000/svg">
            <filter id="noiseFilter">
                <feTurbulence type="fractalNoise" baseFrequency="0.1" numOctaves="1" stitchTiles="stitch" />
            </filter>
            <rect width="100%" height="100%" filter="url(#noiseFilter)" />
        </svg>
    </div>

    <!-- Content -->
    <div class="relative z-10 flex h-full items-center justify-center px-6 text-center">
        <div class="w-full max-w-3xl">
            <!-- Glass Card -->
            <div
                class="mx-auto rounded-3xl border border-orange-500/15 bg-white/10 px-6 py-10 shadow-[0_20px_60px_-20px_rgba(0,0,0,0.7)] backdrop-blur-[2px] sm:px-10 sm:py-12">

                <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl md:text-6xl lg:text-7xl">
                    Jaya Karya Konstruksi
                </h1>

                <p class="mt-4 text-base font-medium text-orange-400/90 sm:text-lg md:text-xl">
                    Brebes
                </p>

                <!-- Thin divider (adds depth) -->
                <div class="mx-auto mt-7 h-px w-24 bg-gradient-to-r from-transparent via-orange-400/40 to-transparent">
                </div>

                <p class="mx-auto mt-6 max-w-2xl text-sm leading-7 text-slate-100/80 sm:text-base">
                    Mitra pembangunan infrastruktur yang mengutamakan mutu pekerjaan, ketepatan waktu,
                    dan standar keselamatan kerja.
                </p>
            </div>
        </div>
    </div>

    <!-- Bottom fade (cinematic) -->
    <div class="pointer-events-none absolute inset-x-0 bottom-0 h-24 bg-gradient-to-t from-slate-900/70 to-transparent">
    </div>
</section>
