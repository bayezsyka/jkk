@extends('layouts.app')

@section('content')
    <article class="space-y-12">
        {{-- Project Header --}}
        <header class="space-y-6">
            {{-- Badges --}}
            <div class="flex flex-wrap gap-2">
                @if ($project->year)
                    <span
                        class="inline-flex items-center rounded-full bg-slate-100 px-3 py-1 text-sm font-medium text-slate-700">
                        <svg class="mr-1.5 h-4 w-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        {{ $project->year }}
                    </span>
                @endif

                @if ($project->is_featured)
                    <span
                        class="inline-flex items-center gap-1 rounded-full bg-orange-100 px-3 py-1 text-sm font-medium text-orange-700">
                        <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        Proyek Unggulan
                    </span>
                @endif
            </div>

            {{-- Title --}}
            <h1 class="text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl">
                {{ $project->title }}
            </h1>

            {{-- Meta Info --}}
            <div class="flex flex-wrap gap-6 text-slate-600">
                @if ($project->client)
                    <div class="flex items-center gap-2">
                        <div class="flex h-10 w-10 items-center justify-center rounded-full bg-slate-100">
                            <svg class="h-5 w-5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs text-slate-400 uppercase tracking-wide">Klien</p>
                            <p class="font-medium text-slate-700">{{ $project->client }}</p>
                        </div>
                    </div>
                @endif

                @if ($project->location)
                    <div class="flex items-center gap-2">
                        <div class="flex h-10 w-10 items-center justify-center rounded-full bg-slate-100">
                            <svg class="h-5 w-5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs text-slate-400 uppercase tracking-wide">Lokasi</p>
                            <p class="font-medium text-slate-700">{{ $project->location }}</p>
                        </div>
                    </div>
                @endif
            </div>
        </header>

        {{-- Main Image --}}
        @if ($project->thumbnail)
            <div class="overflow-hidden rounded-2xl shadow-lg">
                <img src="{{ asset('storage/' . $project->thumbnail) }}" alt="{{ $project->title }}"
                    class="w-full h-auto object-cover">
            </div>
        @endif

        {{-- Description --}}
        @if ($project->description)
            <section class="prose prose-lg prose-slate max-w-none">
                <h2 class="text-xl font-bold text-slate-800">Deskripsi Proyek</h2>
                <div class="mt-4 text-slate-600 leading-relaxed">
                    {!! $project->description !!}
                </div>
            </section>
        @endif

        {{-- Gallery --}}
        @if ($project->gallery && count($project->gallery) > 0)
            <section>
                <h2 class="text-xl font-bold text-slate-800 mb-6">Galeri Proyek</h2>
                <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($project->gallery as $image)
                        <a href="{{ asset('storage/' . $image) }}" target="_blank"
                            class="group relative overflow-hidden rounded-xl shadow-md transition-all duration-300 hover:shadow-xl">
                            <img src="{{ asset('storage/' . $image) }}" alt="{{ $project->title }}"
                                class="h-48 w-full object-cover transition-transform duration-500 group-hover:scale-110">
                            <div
                                class="absolute inset-0 bg-slate-900/0 transition-colors duration-300 group-hover:bg-slate-900/30 flex items-center justify-center">
                                <svg class="h-8 w-8 text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                                </svg>
                            </div>
                        </a>
                    @endforeach
                </div>
            </section>
        @endif

        {{-- Back Button --}}
        <div class="pt-6 border-t border-slate-200">
            <a href="{{ route('projects.index') }}"
                class="inline-flex items-center gap-2 text-sm font-medium text-slate-600 hover:text-orange-600 transition-colors">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                Kembali ke Daftar Proyek
            </a>
        </div>
    </article>

    {{-- Related Projects --}}
    @if ($relatedProjects->count() > 0)
        <section class="mt-16 pt-12 border-t border-slate-200">
            <h2 class="text-2xl font-bold text-slate-800 mb-8">Proyek Terkait</h2>

            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($relatedProjects as $related)
                    <a href="{{ route('projects.show', $related) }}"
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
                                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                    </svg>
                                </div>
                            @endif
                        </div>

                        {{-- Content --}}
                        <div class="p-4">
                            @if ($related->year)
                                <span class="text-xs font-medium text-orange-500">{{ $related->year }}</span>
                            @endif
                            <h3
                                class="mt-1 font-bold text-slate-800 group-hover:text-orange-600 transition-colors line-clamp-2">
                                {{ $related->title }}
                            </h3>
                        </div>
                    </a>
                @endforeach
            </div>
        </section>
    @endif
@endsection
