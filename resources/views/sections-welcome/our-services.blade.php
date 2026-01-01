<section id="services" class="w-full bg-white">
    <div class="mx-auto max-w-7xl px-6 py-20">
        <!-- Header -->
        <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
            <div>
                <p class="text-sm font-semibold tracking-wide text-orange-600">OUR BEST SERVICES</p>
                <h2 class="mt-2 text-3xl font-extrabold text-slate-900 sm:text-4xl">
                    Layanan terbaik untuk hasil proyek yang rapi & tepat waktu
                </h2>
                <p class="mt-3 max-w-2xl text-sm leading-7 text-slate-600 sm:text-base">
                    Pilih kategori layanan untuk melihat detail singkat dan contoh hasil kerja. Fokus kami: kualitas,
                    keamanan, dan ketepatan target.
                </p>
            </div>

            <a href="#contact"
                class="mt-2 inline-flex w-fit items-center justify-center rounded-full bg-orange-500 px-6 py-3 text-sm font-semibold text-white transition hover:bg-orange-600 sm:mt-0">
                Konsultasi Gratis
            </a>
        </div>

        <!-- Filters (UX: chips) -->
        <div class="mt-8 flex flex-wrap gap-2">
            <button type="button" data-filter="all"
                class="filter-chip rounded-full bg-slate-900 px-4 py-2 text-sm font-semibold text-white">
                Semua
            </button>
            <button type="button" data-filter="jalan"
                class="filter-chip rounded-full border border-slate-200 bg-white px-4 py-2 text-sm font-semibold text-slate-700 hover:bg-slate-50">
                Jalan
            </button>
            <button type="button" data-filter="jembatan"
                class="filter-chip rounded-full border border-slate-200 bg-white px-4 py-2 text-sm font-semibold text-slate-700 hover:bg-slate-50">
                Jembatan
            </button>
            <button type="button" data-filter="sda"
                class="filter-chip rounded-full border border-slate-200 bg-white px-4 py-2 text-sm font-semibold text-slate-700 hover:bg-slate-50">
                Sumber Daya Air
            </button>
            <button type="button" data-filter="pipa"
                class="filter-chip rounded-full border border-slate-200 bg-white px-4 py-2 text-sm font-semibold text-slate-700 hover:bg-slate-50">
                Perpipaan
            </button>
        </div>

        <!-- Cards -->
        <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <!-- Card 1 -->
            <article data-category="jalan"
                class="service-card group rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
                <div class="flex items-start justify-between gap-4">
                    <div>
                        <h3 class="text-lg font-bold text-slate-900">Bangunan Sipil Jalan</h3>
                        <p class="mt-2 text-sm leading-7 text-slate-600">
                            Pembangunan & perbaikan jalan dengan kontrol kualitas material dan finishing rapi.
                        </p>
                    </div>
                    <span class="rounded-full bg-orange-50 px-3 py-1 text-xs font-semibold text-orange-700">BS001</span>
                </div>

                <div class="mt-5 overflow-hidden rounded-xl bg-slate-50 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=600&h=400&fit=crop"
                        alt="Bangunan Sipil Jalan - Konstruksi Jalan" class="aspect-[16/10] w-full object-cover" />
                </div>

                <div class="mt-5 flex flex-wrap gap-2">
                    <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-700">Survey</span>
                    <span
                        class="rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-700">Basecourse</span>
                    <span
                        class="rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-700">Finishing</span>
                </div>

                <a href="#contact"
                    class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-slate-900 hover:text-orange-600">
                    Lihat detail
                    <span class="transition group-hover:translate-x-0.5">→</span>
                </a>
            </article>

            <!-- Card 2 -->
            <article data-category="sda"
                class="service-card group rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
                <div class="flex items-start justify-between gap-4">
                    <div>
                        <h3 class="text-lg font-bold text-slate-900">Prasarana Sumber Daya Air</h3>
                        <p class="mt-2 text-sm leading-7 text-slate-600">
                            Saluran air, bendungan, dan infrastruktur SDA dengan standar keselamatan tinggi.
                        </p>
                    </div>
                    <span class="rounded-full bg-orange-50 px-3 py-1 text-xs font-semibold text-orange-700">SI001</span>
                </div>

                <div class="mt-5 overflow-hidden rounded-xl bg-slate-50 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1547619292-240402b5ae5d?w=600&h=400&fit=crop"
                        alt="Prasarana Sumber Daya Air - Irigasi dan Drainase"
                        class="aspect-[16/10] w-full object-cover" />
                </div>

                <div class="mt-5 flex flex-wrap gap-2">
                    <span
                        class="rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-700">Drainase</span>
                    <span
                        class="rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-700">Bendung</span>
                    <span
                        class="rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-700">Irigasi</span>
                </div>

                <a href="#contact"
                    class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-slate-900 hover:text-orange-600">
                    Lihat detail
                    <span class="transition group-hover:translate-x-0.5">→</span>
                </a>
            </article>

            <!-- Card 3 -->
            <article data-category="jembatan"
                class="service-card group rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
                <div class="flex items-start justify-between gap-4">
                    <div>
                        <h3 class="text-lg font-bold text-slate-900">Jembatan & Struktur</h3>
                        <p class="mt-2 text-sm leading-7 text-slate-600">
                            Pekerjaan struktur berat: jembatan, jalan layang, terowongan dengan kontrol mutu ketat.
                        </p>
                    </div>
                    <span class="rounded-full bg-orange-50 px-3 py-1 text-xs font-semibold text-orange-700">SI004</span>
                </div>

                <div class="mt-5 overflow-hidden rounded-xl bg-slate-50 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=600&h=400&fit=crop"
                        alt="Jembatan & Struktur - Pembangunan Jembatan" class="aspect-[16/10] w-full object-cover" />
                </div>

                <div class="mt-5 flex flex-wrap gap-2">
                    <span
                        class="rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-700">Struktur</span>
                    <span
                        class="rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-700">Formwork</span>
                    <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-700">QC</span>
                </div>

                <a href="#contact"
                    class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-slate-900 hover:text-orange-600">
                    Lihat detail
                    <span class="transition group-hover:translate-x-0.5">→</span>
                </a>
            </article>

            <!-- Card 4 -->
            <article data-category="jalan"
                class="service-card group rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
                <div class="flex items-start justify-between gap-4">
                    <div>
                        <h3 class="text-lg font-bold text-slate-900">Konstruksi Jalan Raya</h3>
                        <p class="mt-2 text-sm leading-7 text-slate-600">
                            Pekerjaan jalan lingkungan hingga jalan raya (non-layang) dengan manajemen proyek rapi.
                        </p>
                    </div>
                    <span class="rounded-full bg-orange-50 px-3 py-1 text-xs font-semibold text-orange-700">SI003</span>
                </div>

                <div class="mt-5 overflow-hidden rounded-xl bg-slate-50 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1621573372196-c5f0f5a27711?w=600&h=400&fit=crop"
                        alt="Konstruksi Jalan Raya - Pembangunan Aspal" class="aspect-[16/10] w-full object-cover" />
                </div>

                <div class="mt-5 flex flex-wrap gap-2">
                    <span
                        class="rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-700">Asphalt</span>
                    <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-700">Marka</span>
                    <span
                        class="rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-700">Pemeliharaan</span>
                </div>

                <a href="#contact"
                    class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-slate-900 hover:text-orange-600">
                    Lihat detail
                    <span class="transition group-hover:translate-x-0.5">→</span>
                </a>
            </article>

            <!-- Card 5 -->
            <article data-category="pipa"
                class="service-card group rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
                <div class="flex items-start justify-between gap-4">
                    <div>
                        <h3 class="text-lg font-bold text-slate-900">Perpipaan Air Minum Lokal</h3>
                        <p class="mt-2 text-sm leading-7 text-slate-600">
                            Pembangunan jaringan pipa dan sambungan rumah dengan perencanaan dan uji tekanan.
                        </p>
                    </div>
                    <span class="rounded-full bg-orange-50 px-3 py-1 text-xs font-semibold text-orange-700">SI008</span>
                </div>

                <div class="mt-5 overflow-hidden rounded-xl bg-slate-50 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1590856029826-c7a73142bbf1?w=600&h=400&fit=crop"
                        alt="Perpipaan Air Minum - Instalasi Pipa" class="aspect-[16/10] w-full object-cover" />
                </div>

                <div class="mt-5 flex flex-wrap gap-2">
                    <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-700">Pipa</span>
                    <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-700">Uji
                        Tekan</span>
                    <span
                        class="rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-700">Pemasangan</span>
                </div>

                <a href="#contact"
                    class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-slate-900 hover:text-orange-600">
                    Lihat detail
                    <span class="transition group-hover:translate-x-0.5">→</span>
                </a>
            </article>

            <!-- Card 6 -->
            <article data-category="sda"
                class="service-card group rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
                <div class="flex items-start justify-between gap-4">
                    <div>
                        <h3 class="text-lg font-bold text-slate-900">Perencanaan & Pengawasan</h3>
                        <p class="mt-2 text-sm leading-7 text-slate-600">
                            Dokumentasi, pengawasan kualitas, dan progress report agar pekerjaan transparan.
                        </p>
                    </div>
                    <span
                        class="rounded-full bg-orange-50 px-3 py-1 text-xs font-semibold text-orange-700">SUPPORT</span>
                </div>

                <div class="mt-5 overflow-hidden rounded-xl bg-slate-50 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=600&h=400&fit=crop"
                        alt="Perencanaan & Pengawasan - Manajemen Proyek"
                        class="aspect-[16/10] w-full object-cover" />
                </div>

                <div class="mt-5 flex flex-wrap gap-2">
                    <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-700">RAB</span>
                    <span
                        class="rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-700">Timeline</span>
                    <span
                        class="rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-700">Report</span>
                </div>

                <a href="#contact"
                    class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-slate-900 hover:text-orange-600">
                    Lihat detail
                    <span class="transition group-hover:translate-x-0.5">→</span>
                </a>
            </article>
        </div>
    </div>
</section>

<script>
    (function() {
        const chips = document.querySelectorAll('.filter-chip');
        const cards = document.querySelectorAll('.service-card');

        function setActiveChip(active) {
            chips.forEach(btn => {
                const isActive = btn === active;
                btn.classList.toggle('bg-slate-900', isActive);
                btn.classList.toggle('text-white', isActive);
                btn.classList.toggle('border', !isActive);
                btn.classList.toggle('border-slate-200', !isActive);
                btn.classList.toggle('bg-white', !isActive);
                btn.classList.toggle('text-slate-700', !isActive);
            });
        }

        chips.forEach(btn => {
            btn.addEventListener('click', () => {
                const filter = btn.getAttribute('data-filter');
                setActiveChip(btn);

                cards.forEach(card => {
                    const cat = card.getAttribute('data-category');
                    const show = (filter === 'all') || (cat === filter);
                    card.classList.toggle('hidden', !show);
                });
            });
        });
    })();
</script>
