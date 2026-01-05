{{-- resources/views/company-profile.blade.php --}}
@extends('layouts.app')

@section('content')
    <main class="w-full bg-white">
        <section class="w-full">
            <div class="mx-auto max-w-4xl px-6 py-16">
                {{-- Header --}}
                <p class="text-sm font-semibold tracking-wide text-orange-400/90">JKK • JAYA KARYA KONTRUKSI</p>
                <h1 class="mt-2 text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl">
                    Partner konstruksi profesional di Kab. Brebes
                </h1>

                {{-- 2 paragraf --}}
                <div class="mt-4 space-y-4 text-sm leading-7 text-slate-600 sm:text-base">
                    <p>
                        Jaya Karya Kontruksi (JKK) adalah perusahaan jasa konstruksi yang berfokus pada eksekusi pekerjaan
                        infrastruktur dan konstruksi sipil. Berdiri sejak 22 Juni 2012 dan berlokasi di Jalan Pemuda No 24,
                        Kab. Brebes, JKK dikenal dengan kredibilitas tinggi serta komitmen terhadap mutu pekerjaan.
                    </p>
                    <p>
                        Dalam setiap proyek, JKK mengutamakan perencanaan yang rapi, ketepatan waktu, serta penerapan
                        keselamatan kerja. Dengan dukungan tim berpengalaman dan metode kerja yang terukur, kami siap
                        menjadi
                        mitra andal untuk kebutuhan pembangunan skala kecil hingga besar.
                    </p>
                </div>

                {{-- Statistik --}}
                <div class="mt-10 space-y-4">
                    <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-200">
                        <p class="text-xs font-semibold text-slate-500">Pengalaman</p>
                        <p class="mt-2 text-3xl font-extrabold text-slate-900">
                            <span class="text-orange-400/90">13+</span> thn
                        </p>
                        <p class="mt-2 text-sm text-slate-600">Beroperasi sejak 2012.</p>
                    </div>

                    <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-200">
                        <p class="text-xs font-semibold text-slate-500">Proyek Selesai</p>
                        <p class="mt-2 text-3xl font-extrabold text-slate-900">
                            <span class="text-orange-400/90">100+</span> proyek
                        </p>
                        <p class="mt-2 text-sm text-slate-600">Beragam scope pekerjaan.</p>
                    </div>

                    <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-200">
                        <p class="text-xs font-semibold text-slate-500">Tenaga Ahli</p>
                        <p class="mt-2 text-3xl font-extrabold text-slate-900">
                            <span class="text-orange-400/90">20+</span> orang
                        </p>
                        <p class="mt-2 text-sm text-slate-600">Tim lapangan & teknis.</p>
                    </div>
                </div>

                {{-- Visi --}}
                <div class="mt-12 rounded-2xl bg-white p-7 shadow-sm ring-1 ring-slate-200">
                    <p class="text-sm font-semibold tracking-wide text-orange-400/90">VISI</p>
                    <p class="mt-3 text-sm leading-7 text-slate-600 sm:text-base">
                        Menjadi mitra konstruksi terpercaya yang menyelesaikan setiap pekerjaan tepat waktu, sesuai
                        anggaran,
                        dan dengan kualitas terbaik, serta berkontribusi pada pembangunan infrastruktur yang berkelanjutan
                        di
                        Indonesia.
                    </p>
                </div>

                {{-- Misi --}}
                <div class="mt-4 rounded-2xl bg-white p-7 shadow-sm ring-1 ring-slate-200">
                    <p class="text-sm font-semibold tracking-wide text-orange-400/90">MISI</p>
                    <ul class="mt-3 space-y-2 text-sm leading-7 text-slate-600 sm:text-base">
                        <li class="flex gap-3">
                            <span class="mt-2 h-2 w-2 shrink-0 rounded-full bg-orange-400/90"></span>
                            Menjaga mutu pekerjaan melalui proses yang terukur dan pengawasan lapangan yang konsisten.
                        </li>
                        <li class="flex gap-3">
                            <span class="mt-2 h-2 w-2 shrink-0 rounded-full bg-orange-400/90"></span>
                            Mengutamakan keselamatan kerja dan kepatuhan terhadap standar serta regulasi yang berlaku.
                        </li>
                        <li class="flex gap-3">
                            <span class="mt-2 h-2 w-2 shrink-0 rounded-full bg-orange-400/90"></span>
                            Meningkatkan profesionalisme tim dan efisiensi eksekusi demi hasil yang rapi dan tepat waktu.
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
@endsection
