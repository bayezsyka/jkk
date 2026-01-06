<footer class="bg-[#061B33] text-white">
    <div class="mx-auto max-w-4xl px-6 py-14">
        <div class="grid gap-10 md:grid-cols-3">

            {{-- Brand --}}
            <div>
                <div class="text-xl font-bold tracking-wide">
                    {{ config('site.company.name') }}
                </div>
                <p class="mt-4 text-sm text-white/70 leading-relaxed">
                    {{ config('site.tagline', 'Solusi konstruksi modern untuk berbagai kebutuhan proyek.') }}
                </p>
            </div>

            {{-- Menu --}}
            <div>
                <h4 class="text-sm font-semibold uppercase tracking-wide">Menu</h4>
                <ul class="mt-4 space-y-3 text-sm text-white/70">
                    <li><a href="{{ url('/') }}" class="hover:text-white">Beranda</a></li>
                    <li><a href="{{ route('projects.index') }}" class="hover:text-white">Proyek</a></li>
                    <li><a href="{{ route('services.index') }}" class="hover:text-white">Layanan</a></li>
                </ul>
            </div>

            {{-- Kontak (WhatsApp Only) --}}
            <div>
                <h4 class="text-sm font-semibold uppercase tracking-wide">Kontak</h4>
                <ul class="mt-4 space-y-3 text-sm text-white/70">
                    @php
                        $waNumber = config('site.whatsapp.number');
                        $waMessage = config('site.whatsapp.message');
                        $waLink = 'https://wa.me/' . $waNumber . '?text=' . urlencode($waMessage);
                        // Format nomor untuk display (contoh: 6285161603362 -> +62 851-6160-3362)
                        $displayNumber =
                            '+' .
                            substr($waNumber, 0, 2) .
                            ' ' .
                            substr($waNumber, 2, 3) .
                            '-' .
                            substr($waNumber, 5, 4) .
                            '-' .
                            substr($waNumber, 9);
                    @endphp
                    <li>
                        <a href="{{ $waLink }}" target="_blank" rel="noopener"
                            class="inline-flex items-center gap-2 hover:text-white transition">
                            {{-- WhatsApp Icon --}}
                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                            </svg>
                            {{ $displayNumber }}
                        </a>
                    </li>
                    <li class="text-white/50">{{ config('site.address') }}</li>
                </ul>
            </div>

        </div>

        {{-- Bottom --}}
        <div
            class="mt-12 border-t border-white/10 pt-6 text-xs text-white/50 flex flex-col gap-2 md:flex-row md:justify-between">
            <span>© {{ date('Y') }} {{ config('site.company.name') }}. All rights reserved.</span>
        </div>
    </div>
</footer>
