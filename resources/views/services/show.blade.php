@extends('layouts.app')

@section('title', $service->title . ' - Layanan JKK')

@section('content')
    <article class="space-y-12">
        {{-- Service Header --}}
        <header class="space-y-6">
            {{-- Breadcrumb --}}
            <nav class="flex items-center gap-2 text-sm text-slate-500">
                <a href="{{ url('/') }}" class="hover:text-orange-500 transition-colors">Beranda</a>
                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
                <a href="{{ route('services.index') }}" class="hover:text-orange-500 transition-colors">Layanan</a>
                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
                <span class="text-slate-700 font-medium truncate max-w-[200px]">{{ $service->title }}</span>
            </nav>

            {{-- Badges --}}
            <div class="flex flex-wrap gap-2">
                <span class="inline-flex items-center rounded-full bg-slate-100 px-3 py-1 text-sm font-bold text-slate-700">
                    {{ $service->code }}
                </span>

                @if ($service->is_featured)
                    <span
                        class="inline-flex items-center gap-1 rounded-full bg-orange-100 px-3 py-1 text-sm font-medium text-orange-700">
                        <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        Layanan Unggulan
                    </span>
                @endif
            </div>

            {{-- Title --}}
            <h1 class="text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl">
                {{ $service->title }}
            </h1>

            {{-- Excerpt --}}
            @if ($service->excerpt)
                <p class="text-lg text-slate-600 leading-relaxed max-w-3xl">
                    {{ $service->excerpt }}
                </p>
            @endif
        </header>

        {{-- Main Image --}}
        @if ($service->thumbnail)
            <div class="overflow-hidden rounded-2xl shadow-lg">
                <img src="{{ asset('storage/' . $service->thumbnail) }}" alt="{{ $service->title }}"
                    class="w-full h-auto object-cover max-h-[500px]">
            </div>
        @endif

        {{-- Content --}}
        @if ($service->content)
            <section class="prose prose-lg prose-slate max-w-none">
                <h2 class="text-xl font-bold text-slate-800">Deskripsi Layanan</h2>
                <div class="mt-4 text-slate-600 leading-relaxed">
                    {!! $service->content !!}
                </div>
            </section>
        @endif

        {{-- Licenses Section --}}
        @if ($service->licenses && count($service->licenses) > 0)
            <section class="bg-slate-50 rounded-2xl p-6 md:p-8">
                <div class="flex items-center gap-3 mb-6">
                    <div class="flex h-10 w-10 items-center justify-center rounded-full bg-orange-100">
                        <svg class="h-5 w-5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-xl font-bold text-slate-800">Lisensi & Sertifikasi</h2>
                        <p class="text-sm text-slate-500">Daftar KBLI/LPJK dan sertifikasi terkait</p>
                    </div>
                </div>

                <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($service->licenses as $license)
                        <div
                            class="bg-white rounded-xl p-4 shadow-sm border border-slate-100 hover:shadow-md transition-shadow">
                            <div class="flex items-start gap-3">
                                <div
                                    class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-orange-50 text-orange-500">
                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div class="min-w-0">
                                    <span
                                        class="inline-block px-2 py-0.5 text-xs font-bold text-slate-600 bg-slate-100 rounded mb-1">
                                        {{ $license['code'] ?? 'N/A' }}
                                    </span>
                                    <h3 class="font-semibold text-slate-800 text-sm">
                                        {{ $license['name'] ?? 'Unnamed License' }}
                                    </h3>
                                    @if (!empty($license['description']))
                                        <p class="mt-1 text-xs text-slate-500 line-clamp-2">
                                            {{ $license['description'] }}
                                        </p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        @endif

        {{-- CTA Box --}}
        <section
            class="bg-gradient-to-r from-slate-800 to-slate-900 rounded-2xl p-6 md:p-8 flex flex-col md:flex-row items-center justify-between gap-6">
            <div class="text-center md:text-left">
                <h3 class="text-xl font-bold text-white">Tertarik dengan layanan ini?</h3>
                <p class="mt-2 text-slate-300">Hubungi kami untuk konsultasi dan penawaran terbaik.</p>
            </div>
            <div class="flex flex-wrap gap-3">
                <a href="{{ url('/contact') ?? '#' }}"
                    class="inline-flex items-center gap-2 rounded-lg bg-orange-500 px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-orange-600">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    Hubungi Kami
                </a>
                <a href="https://wa.me/6281234567890?text=Halo,%20saya%20tertarik%20dengan%20layanan%20{{ urlencode($service->title) }}"
                    target="_blank"
                    class="inline-flex items-center gap-2 rounded-lg bg-green-500 px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-green-600">
                    <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                    </svg>
                    WhatsApp
                </a>
            </div>
        </section>

        {{-- Back Button --}}
        <div class="pt-6 border-t border-slate-200">
            <a href="{{ route('services.index') }}"
                class="inline-flex items-center gap-2 text-sm font-medium text-slate-600 hover:text-orange-600 transition-colors">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                Kembali ke Daftar Layanan
            </a>
        </div>
    </article>

    {{-- Related Services --}}
    @if ($relatedServices->count() > 0)
        <section class="mt-16 pt-12 border-t border-slate-200">
            <h2 class="text-2xl font-bold text-slate-800 mb-8">Layanan Lainnya</h2>

            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($relatedServices as $related)
                    <a href="{{ route('services.show', $related) }}"
                        class="group overflow-hidden rounded-xl bg-white shadow-md transition-all duration-300 hover:shadow-xl hover:-translate-y-1 border border-slate-100">
                        {{-- Image --}}
                        <div class="relative h-40 overflow-hidden">
                            @if ($related->thumbnail)
                                <img src="{{ asset('storage/' . $related->thumbnail) }}" alt="{{ $related->title }}"
                                    class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105">
                            @else
                                <div
                                    class="flex h-full w-full items-center justify-center bg-gradient-to-br from-slate-50 to-slate-100">
                                    <svg class="h-10 w-10 text-slate-300" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
                                    </svg>
                                </div>
                            @endif

                            {{-- Code Badge --}}
                            <div class="absolute top-3 left-3">
                                <span
                                    class="inline-block rounded-lg bg-white/90 backdrop-blur px-2 py-0.5 text-xs font-bold text-slate-700 shadow">
                                    {{ $related->code }}
                                </span>
                            </div>
                        </div>

                        {{-- Content --}}
                        <div class="p-4">
                            <h3
                                class="font-bold text-slate-800 group-hover:text-orange-600 transition-colors line-clamp-2">
                                {{ $related->title }}
                            </h3>
                            @if ($related->excerpt)
                                <p class="mt-2 text-sm text-slate-500 line-clamp-2">
                                    {{ $related->excerpt }}
                                </p>
                            @endif
                        </div>
                    </a>
                @endforeach
            </div>
        </section>
    @endif
@endsection
