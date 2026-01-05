<footer class="bg-[#061B33] text-white">
    <div class="mx-auto max-w-7xl px-6 py-14">
        <div class="grid gap-10 md:grid-cols-4">

            {{-- Brand --}}
            <div class="md:col-span-1">
                <div class="text-xl font-bold tracking-wide">
                    LOGO
                </div>
                <p class="mt-4 text-sm text-white/70 leading-relaxed">
                    Solusi konstruksi modern untuk berbagai kebutuhan proyek.
                </p>
            </div>

            {{-- Menu --}}
            <div>
                <h4 class="text-sm font-semibold uppercase tracking-wide">Menu</h4>
                <ul class="mt-4 space-y-3 text-sm text-white/70">
                    <li><a href="#" class="hover:text-white">Tentang</a></li>
                    <li><a href="#" class="hover:text-white">Proyek</a></li>
                    <li><a href="#" class="hover:text-white">Artikel</a></li>
                    <li><a href="#" class="hover:text-white">Kontak</a></li>
                </ul>
            </div>

            {{-- Layanan --}}
            <div>
                <h4 class="text-sm font-semibold uppercase tracking-wide">Layanan</h4>
                <ul class="mt-4 space-y-3 text-sm text-white/70">
                    <li>Engineering</li>
                    <li>Procurement</li>
                    <li>Konstruksi</li>
                </ul>
            </div>

            {{-- Kontak --}}
            <div>
                <h4 class="text-sm font-semibold uppercase tracking-wide">Kontak</h4>
                <ul class="mt-4 space-y-3 text-sm text-white/70">
                    <li>+62 812 0000 0000</li>
                    <li>email@example.com</li>
                    <li>Nama Jalan, Kota, Indonesia</li>
                </ul>

                {{-- Social --}}
                <div class="mt-5 flex gap-3">
                    <a href="#"
                        class="h-9 w-9 rounded-full border border-white/30 flex items-center justify-center hover:bg-white/10">
                        IG
                    </a>
                    <a href="#"
                        class="h-9 w-9 rounded-full border border-white/30 flex items-center justify-center hover:bg-white/10">
                        IN
                    </a>
                </div>
            </div>

        </div>

        {{-- Bottom --}}
        <div
            class="mt-12 border-t border-white/10 pt-6 text-xs text-white/50 flex flex-col gap-2 md:flex-row md:justify-between">
            <span>© {{ date('Y') }} Company Name. All rights reserved.</span>
            <span>Privacy · Terms</span>
        </div>
    </div>
</footer>
