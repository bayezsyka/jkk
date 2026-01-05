{{-- Featured Services Section --}}
@php
    // Coba ambil layanan unggulan dulu
    $featuredServices = \App\Models\Service::published()
        ->where('is_featured', true)
        ->orderBy('sort_order')
        ->take(3)
        ->get();

    // Kalau tidak ada yang unggulan, ambil yang terbaru
    if ($featuredServices->count() === 0) {
        $featuredServices = \App\Models\Service::published()->orderBy('created_at', 'desc')->take(3)->get();
    }
@endphp

@if ($featuredServices->count() > 0)
    <section class="relative w-full bg-white py-16 sm:py-20">
        <div class="mx-auto max-w-4xl px-6">
            {{-- Section Header --}}
            <div class="text-center mb-12">
                <span
                    class="inline-block px-4 py-1.5 text-xs font-bold tracking-wider text-orange-600 uppercase bg-orange-100 rounded-full">
                    Layanan
                </span>
                <h2 class="mt-4 text-3xl font-extrabold text-slate-800 sm:text-4xl">
                    Layanan Kami
                </h2>
                <p class="mt-4 text-base text-slate-500 max-w-xl mx-auto">
                    Solusi konstruksi terpercaya untuk berbagai kebutuhan pembangunan infrastruktur Anda.
                </p>
            </div>

            {{-- Services Grid --}}
            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($featuredServices as $service)
                    <a href="{{ route('services.show', $service) }}"
                        class="group relative overflow-hidden rounded-2xl bg-gradient-to-br from-slate-50 to-white p-6 shadow-lg ring-1 ring-slate-200/50 transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                        {{-- Icon --}}
                        <div
                            class="flex h-12 w-12 items-center justify-center rounded-xl bg-orange-100 text-orange-600 mb-4 transition-transform duration-300 group-hover:scale-110">
                            @if ($service->icon)
                                <img src="{{ asset('storage/' . $service->icon) }}" alt="{{ $service->title }}"
                                    class="h-6 w-6 object-contain">
                            @else
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                            @endif
                        </div>

                        {{-- Service Code Badge --}}
                        @if ($service->code)
                            <span
                                class="inline-block rounded-full bg-orange-50 px-2.5 py-0.5 text-xs font-semibold text-orange-700 mb-2">
                                {{ $service->code }}
                            </span>
                        @endif

                        {{-- Title --}}
                        <h3 class="text-lg font-bold text-slate-900 mb-2 line-clamp-2">
                            {{ $service->title }}
                        </h3>

                        {{-- Excerpt --}}
                        @if ($service->excerpt)
                            <p class="text-sm text-slate-600 line-clamp-3">
                                {{ $service->excerpt }}
                            </p>
                        @endif

                        {{-- Arrow Icon --}}
                        <div
                            class="absolute bottom-4 right-4 opacity-0 translate-x-2 transition-all duration-300 group-hover:opacity-100 group-hover:translate-x-0">
                            <div class="flex h-8 w-8 items-center justify-center rounded-full bg-orange-500 text-white">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>

            {{-- View All Services Button --}}
            <div class="mt-10 text-center">
                <a href="{{ route('services.index') }}"
                    class="inline-flex items-center gap-2 rounded-full bg-slate-800 px-6 py-3 text-sm font-semibold text-white shadow-lg transition-all duration-300 hover:bg-slate-700 hover:shadow-xl hover:-translate-y-0.5">
                    Lihat Semua Layanan
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
@endif
