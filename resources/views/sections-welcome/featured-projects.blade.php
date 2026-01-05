{{-- Featured Projects Section --}}
@php
    $featuredProjects = \App\Models\Project::published()
        ->where('is_featured', true)
        ->orderBy('created_at', 'desc')
        ->take(3)
        ->get();
@endphp

@if ($featuredProjects->count() > 0)
    <section class="relative py-20 bg-slate-50">
        <div class="mx-auto max-w-7xl px-6">
            {{-- Section Header --}}
            <div class="text-center mb-14">
                <span
                    class="inline-block px-4 py-1.5 text-xs font-bold tracking-wider text-orange-600 uppercase bg-orange-100 rounded-full">
                    Portofolio
                </span>
                <h2 class="mt-4 text-3xl font-extrabold text-slate-800 sm:text-4xl">
                    Proyek Unggulan Kami
                </h2>
                <p class="mt-4 text-lg text-slate-500 max-w-2xl mx-auto">
                    Hasil kerja terbaik yang mencerminkan kualitas dan dedikasi tim kami dalam setiap proyek konstruksi.
                </p>
            </div>

            {{-- Projects Grid --}}
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($featuredProjects as $project)
                    <a href="{{ route('projects.show', $project) }}"
                        class="group relative overflow-hidden rounded-2xl bg-white shadow-lg transition-all duration-500 hover:shadow-2xl hover:-translate-y-2">
                        {{-- Image Container --}}
                        <div class="relative h-64 overflow-hidden">
                            @if ($project->thumbnail)
                                <img src="{{ asset('storage/' . $project->thumbnail) }}" alt="{{ $project->title }}"
                                    class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-110">
                            @else
                                <div
                                    class="flex h-full w-full items-center justify-center bg-gradient-to-br from-slate-100 to-slate-200">
                                    <svg class="h-20 w-20 text-slate-300" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                    </svg>
                                </div>
                            @endif

                            {{-- Overlay Gradient --}}
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/30 to-transparent">
                            </div>

                            {{-- Featured Badge --}}
                            <div class="absolute top-4 right-4">
                                <span
                                    class="inline-flex items-center gap-1 rounded-full bg-orange-500/90 backdrop-blur px-3 py-1 text-xs font-semibold text-white shadow-lg">
                                    <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    Unggulan
                                </span>
                            </div>

                            {{-- Content on Image --}}
                            <div class="absolute bottom-0 left-0 right-0 p-5">
                                @if ($project->year)
                                    <span
                                        class="inline-block rounded bg-white/20 backdrop-blur px-2 py-0.5 text-xs font-medium text-white mb-2">
                                        {{ $project->year }}
                                    </span>
                                @endif
                                <h3 class="text-xl font-bold text-white mb-2 line-clamp-2">
                                    {{ $project->title }}
                                </h3>
                                <div class="flex flex-wrap gap-3 text-xs text-white/80">
                                    @if ($project->client)
                                        <span class="flex items-center gap-1">
                                            <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                            </svg>
                                            {{ $project->client }}
                                        </span>
                                    @endif
                                    @if ($project->location)
                                        <span class="flex items-center gap-1">
                                            <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            </svg>
                                            {{ $project->location }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        {{-- Hover Arrow --}}
                        <div
                            class="absolute bottom-4 right-4 opacity-0 translate-x-2 transition-all duration-300 group-hover:opacity-100 group-hover:translate-x-0">
                            <div
                                class="flex h-10 w-10 items-center justify-center rounded-full bg-orange-500 text-white shadow-lg">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>

            {{-- View All Button --}}
            <div class="mt-12 text-center">
                <a href="{{ route('projects.index') }}"
                    class="inline-flex items-center gap-2 rounded-full bg-slate-800 px-8 py-4 text-sm font-semibold text-white shadow-lg transition-all duration-300 hover:bg-slate-700 hover:shadow-xl hover:-translate-y-0.5">
                    Lihat Semua Proyek
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
@endif
