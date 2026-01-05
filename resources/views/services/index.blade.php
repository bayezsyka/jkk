@extends('layouts.app')

@section('title', 'Layanan Kami - JKK')

@section('content')
    {{-- Page Header --}}
    <header class="mb-12 text-center">
        <span
            class="inline-block px-4 py-1.5 text-xs font-semibold tracking-wider text-orange-600 uppercase bg-orange-100 rounded-full mb-4">
            Layanan Kami
        </span>
        <h1 class="text-3xl md:text-4xl font-extrabold text-slate-800">
            Solusi Konstruksi Terpercaya
        </h1>
        <p class="mt-4 text-lg text-slate-500 max-w-2xl mx-auto">
            Kami menyediakan berbagai layanan konstruksi berkualitas tinggi untuk memenuhi kebutuhan proyek Anda
        </p>
    </header>

    {{-- Featured Services Section --}}
    @if ($featuredServices->count() > 0)
        <section class="mb-16">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <span
                        class="inline-block px-3 py-1 text-xs font-semibold tracking-wider text-orange-600 uppercase bg-orange-100 rounded-full">
                        Unggulan
                    </span>
                    <h2 class="mt-3 text-2xl font-bold text-slate-800">Layanan Unggulan Kami</h2>
                </div>
            </div>

            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($featuredServices as $service)
                    <a href="{{ route('services.show', $service) }}"
                        class="group relative overflow-hidden rounded-2xl bg-white shadow-lg transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
                        {{-- Image --}}
                        <div class="relative h-56 overflow-hidden">
                            @if ($service->thumbnail)
                                <img src="{{ asset('storage/' . $service->thumbnail) }}" alt="{{ $service->title }}"
                                    class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110">
                            @else
                                <div
                                    class="flex h-full w-full items-center justify-center bg-gradient-to-br from-orange-100 to-orange-200">
                                    {{-- Default Icon --}}
                                    <svg class="h-20 w-20 text-orange-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
                                    </svg>
                                </div>
                            @endif

                            {{-- Featured Badge --}}
                            <div class="absolute top-3 right-3">
                                <span
                                    class="inline-flex items-center gap-1 rounded-full bg-orange-500 px-3 py-1 text-xs font-semibold text-white shadow-lg">
                                    <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    Unggulan
                                </span>
                            </div>

                            {{-- Code Badge --}}
                            <div class="absolute top-3 left-3">
                                <span
                                    class="inline-block rounded-lg bg-white/90 backdrop-blur px-2.5 py-1 text-xs font-bold text-slate-700 shadow">
                                    {{ $service->code }}
                                </span>
                            </div>

                            {{-- Overlay Gradient --}}
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                            </div>
                        </div>

                        {{-- Content --}}
                        <div class="p-5">
                            <h3 class="text-lg font-bold text-slate-800 group-hover:text-orange-600 transition-colors">
                                {{ $service->title }}
                            </h3>

                            @if ($service->excerpt)
                                <p class="mt-2 text-sm text-slate-500 line-clamp-2">
                                    {{ $service->excerpt }}
                                </p>
                            @endif

                            {{-- Licenses Count --}}
                            @if ($service->licenses && count($service->licenses) > 0)
                                <div class="mt-3 flex items-center gap-2 text-xs text-slate-400">
                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                                    </svg>
                                    {{ count($service->licenses) }} Lisensi/Sertifikasi
                                </div>
                            @endif

                            {{-- View More --}}
                            <div
                                class="mt-4 flex items-center text-sm font-medium text-orange-500 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                Lihat Detail
                                <svg class="ml-1 h-4 w-4 transition-transform group-hover:translate-x-1" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </section>
    @endif

    {{-- All Services Section --}}
    <section>
        <div class="flex items-center justify-between mb-8">
            <div>
                <h2 class="text-2xl font-bold text-slate-800">Semua Layanan</h2>
                <p class="mt-1 text-slate-500">Daftar lengkap layanan yang kami tawarkan</p>
            </div>
            <div class="text-sm text-slate-500">
                Total: {{ $services->total() }} layanan
            </div>
        </div>

        @if ($services->count() > 0)
            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                @foreach ($services as $service)
                    <a href="{{ route('services.show', $service) }}"
                        class="group relative overflow-hidden rounded-xl bg-white shadow-md transition-all duration-300 hover:shadow-xl hover:-translate-y-1 border border-slate-100">
                        {{-- Image --}}
                        <div class="relative h-44 overflow-hidden">
                            @if ($service->thumbnail)
                                <img src="{{ asset('storage/' . $service->thumbnail) }}" alt="{{ $service->title }}"
                                    class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105">
                            @else
                                <div
                                    class="flex h-full w-full items-center justify-center bg-gradient-to-br from-slate-50 to-slate-100">
                                    <svg class="h-14 w-14 text-slate-300" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
                                    </svg>
                                </div>
                            @endif

                            {{-- Code Badge --}}
                            <div class="absolute top-3 left-3">
                                <span
                                    class="inline-block rounded-lg bg-white/90 backdrop-blur px-2.5 py-1 text-xs font-bold text-slate-700 shadow">
                                    {{ $service->code }}
                                </span>
                            </div>

                            {{-- Featured Badge --}}
                            @if ($service->is_featured)
                                <div class="absolute top-3 right-3">
                                    <span
                                        class="inline-flex items-center justify-center h-7 w-7 rounded-full bg-orange-500 text-white shadow">
                                        <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </span>
                                </div>
                            @endif
                        </div>

                        {{-- Content --}}
                        <div class="p-4">
                            <h3 class="font-bold text-slate-800 group-hover:text-orange-600 transition-colors line-clamp-2">
                                {{ $service->title }}
                            </h3>

                            @if ($service->excerpt)
                                <p class="mt-2 text-sm text-slate-500 line-clamp-2">
                                    {{ $service->excerpt }}
                                </p>
                            @endif

                            {{-- Licenses Badge --}}
                            @if ($service->licenses && count($service->licenses) > 0)
                                <div class="mt-3 flex items-center gap-1 text-xs text-slate-400">
                                    <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                    </svg>
                                    {{ count($service->licenses) }} lisensi
                                </div>
                            @endif
                        </div>
                    </a>
                @endforeach
            </div>

            {{-- Pagination --}}
            <div class="mt-10">
                {{ $services->links() }}
            </div>
        @else
            <div class="py-16 text-center">
                <svg class="mx-auto h-16 w-16 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
                </svg>
                <h3 class="mt-4 text-lg font-semibold text-slate-700">Belum Ada Layanan</h3>
                <p class="mt-1 text-slate-500">Layanan akan segera ditampilkan di sini.</p>
            </div>
        @endif
    </section>

    {{-- CTA Section --}}
    <section class="mt-16 rounded-2xl bg-gradient-to-r from-orange-500 to-orange-600 p-8 md:p-12 text-center text-white">
        <h2 class="text-2xl md:text-3xl font-bold">Butuh Konsultasi?</h2>
        <p class="mt-4 text-orange-100 max-w-2xl mx-auto">
            Tim kami siap membantu Anda menemukan solusi konstruksi terbaik untuk proyek Anda.
            Hubungi kami sekarang untuk konsultasi gratis.
        </p>
        <div class="mt-8 flex flex-wrap justify-center gap-4">
            <a href="{{ url('/contact') ?? '#' }}"
                class="inline-flex items-center gap-2 rounded-lg bg-white px-6 py-3 text-sm font-semibold text-orange-600 shadow-lg transition hover:bg-orange-50 hover:shadow-xl">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                Hubungi Kami
            </a>
            <a href="https://wa.me/6281234567890" target="_blank"
                class="inline-flex items-center gap-2 rounded-lg border-2 border-white px-6 py-3 text-sm font-semibold text-white transition hover:bg-white hover:text-orange-600">
                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                </svg>
                WhatsApp
            </a>
        </div>
    </section>
@endsection
