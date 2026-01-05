@extends('layouts.app')

@section('content')
    {{-- Featured Projects Section --}}
    @if ($featuredProjects->count() > 0)
        <section class="mb-16">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <span
                        class="inline-block px-3 py-1 text-xs font-semibold tracking-wider text-orange-600 uppercase bg-orange-100 rounded-full">
                        Unggulan
                    </span>
                    <h2 class="mt-3 text-2xl font-bold text-slate-800">Proyek Unggulan Kami</h2>
                </div>
            </div>

            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($featuredProjects as $project)
                    <a href="{{ route('projects.show', $project) }}"
                        class="group relative overflow-hidden rounded-2xl bg-white shadow-lg transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
                        {{-- Image --}}
                        <div class="relative h-56 overflow-hidden">
                            @if ($project->thumbnail)
                                <img src="{{ asset('storage/' . $project->thumbnail) }}" alt="{{ $project->title }}"
                                    class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110">
                            @else
                                <div
                                    class="flex h-full w-full items-center justify-center bg-gradient-to-br from-slate-100 to-slate-200">
                                    <svg class="h-16 w-16 text-slate-300" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
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

                            {{-- Overlay Gradient --}}
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                            </div>
                        </div>

                        {{-- Content --}}
                        <div class="p-5">
                            @if ($project->year)
                                <span class="text-xs font-medium text-orange-500">{{ $project->year }}</span>
                            @endif
                            <h3 class="mt-1 text-lg font-bold text-slate-800 group-hover:text-orange-600 transition-colors">
                                {{ $project->title }}
                            </h3>

                            <div class="mt-3 flex flex-wrap gap-2 text-xs text-slate-500">
                                @if ($project->client)
                                    <span class="flex items-center gap-1">
                                        <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                        {{ $project->client }}
                                    </span>
                                @endif
                                @if ($project->location)
                                    <span class="flex items-center gap-1">
                                        <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        {{ $project->location }}
                                    </span>
                                @endif
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </section>
    @endif

    {{-- All Projects Section --}}
    <section>
        <div class="flex items-center justify-between mb-8">
            <div>
                <h2 class="text-2xl font-bold text-slate-800">Semua Proyek</h2>
                <p class="mt-1 text-slate-500">Portofolio lengkap proyek kami</p>
            </div>
            <div class="text-sm text-slate-500">
                Total: {{ $projects->total() }} proyek
            </div>
        </div>

        @if ($projects->count() > 0)
            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($projects as $project)
                    <a href="{{ route('projects.show', $project) }}"
                        class="group relative overflow-hidden rounded-xl bg-white shadow-md transition-all duration-300 hover:shadow-xl hover:-translate-y-1 border border-slate-100">
                        {{-- Image --}}
                        <div class="relative h-48 overflow-hidden">
                            @if ($project->thumbnail)
                                <img src="{{ asset('storage/' . $project->thumbnail) }}" alt="{{ $project->title }}"
                                    class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105">
                            @else
                                <div
                                    class="flex h-full w-full items-center justify-center bg-gradient-to-br from-slate-50 to-slate-100">
                                    <svg class="h-12 w-12 text-slate-300" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                    </svg>
                                </div>
                            @endif

                            {{-- Year Badge --}}
                            @if ($project->year)
                                <div class="absolute top-3 left-3">
                                    <span
                                        class="inline-block rounded-lg bg-white/90 backdrop-blur px-2.5 py-1 text-xs font-semibold text-slate-700 shadow">
                                        {{ $project->year }}
                                    </span>
                                </div>
                            @endif

                            {{-- Featured Badge --}}
                            @if ($project->is_featured)
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
                                {{ $project->title }}
                            </h3>

                            <div class="mt-2 flex flex-wrap gap-x-3 gap-y-1 text-xs text-slate-500">
                                @if ($project->client)
                                    <span class="flex items-center gap-1">
                                        <svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                        {{ $project->client }}
                                    </span>
                                @endif
                                @if ($project->location)
                                    <span class="flex items-center gap-1">
                                        <svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        </svg>
                                        {{ $project->location }}
                                    </span>
                                @endif
                            </div>

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

            {{-- Pagination --}}
            <div class="mt-10">
                {{ $projects->links() }}
            </div>
        @else
            <div class="py-16 text-center">
                <svg class="mx-auto h-16 w-16 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                </svg>
                <h3 class="mt-4 text-lg font-semibold text-slate-700">Belum Ada Proyek</h3>
                <p class="mt-1 text-slate-500">Proyek akan segera ditampilkan di sini.</p>
            </div>
        @endif
    </section>
@endsection
