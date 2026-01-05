@php
    // Ganti nomor WA di sini (format internasional tanpa + dan tanpa spasi), contoh: 6281234567890
    $waNumber = $waNumber ?? '6281234567890';

    // Pesan default (akan di-urlencode oleh JS)
    $waMessage = $waMessage ?? 'Halo, saya mau tanya tentang layanan Anda.';

    // Label toast
    $toastTitle = $toastTitle ?? 'Need Help?';
    $toastSubtitle = $toastSubtitle ?? 'Chat with us';

    // Opsional: ukuran
    $btnSize = $btnSize ?? 64; // px
@endphp

<div id="waToastRoot" class="fixed bottom-6 right-6 z-[9999] flex items-center gap-3">
    {{-- Toast bubble --}}
    <div id="waToastBubble"
        class="relative flex items-center gap-3 rounded-xl bg-white px-4 py-3 shadow-lg ring-1 ring-black/5
               opacity-0 translate-y-2 pointer-events-none transition-all duration-200"
        aria-hidden="true">
        {{-- Arrow --}}
        <div
            class="absolute -right-2 top-1/2 h-4 w-4 -translate-y-1/2 rotate-45 bg-white shadow-[1px_-1px_0_0_rgba(0,0,0,0.06)]">
        </div>

        <div class="leading-tight">
            <div class="text-sm font-medium text-slate-900">{{ $toastTitle }}</div>
            <div class="text-sm font-semibold text-slate-800">{{ $toastSubtitle }}</div>
        </div>

        <button id="waToastClose" type="button"
            class="ml-1 inline-flex h-7 w-7 items-center justify-center rounded-lg text-slate-500 hover:bg-slate-100 hover:text-slate-700"
            aria-label="Close" title="Close">
            ✕
        </button>
    </div>

    {{-- WA button --}}
    <a id="waFab" href="#"
        class="group relative inline-flex items-center justify-center rounded-full shadow-lg ring-1 ring-black/5"
        style="width: {{ $btnSize }}px; height: {{ $btnSize }}px; background: #25D366;"
        aria-label="Chat via WhatsApp" title="Chat via WhatsApp">
        {{-- WhatsApp icon (SVG) --}}
        <svg width="30" height="30" viewBox="0 0 32 32" fill="none" aria-hidden="true">
            <path
                d="M16 3C9.372 3 4 8.149 4 14.5c0 2.52.86 4.854 2.318 6.75L5 29l7.98-1.996A12.6 12.6 0 0 0 16 26c6.628 0 12-5.149 12-11.5S22.628 3 16 3Z"
                fill="#fff" fill-opacity="0.18" />
            <path
                d="M16 5.4c5.44 0 9.86 4.207 9.86 9.1S21.44 23.6 16 23.6c-1.16 0-2.28-.19-3.33-.55l-.79-.27-4.63 1.16 1.24-4.33-.43-.75A8.65 8.65 0 0 1 6.14 14.5c0-4.893 4.42-9.1 9.86-9.1Z"
                fill="#fff" />
            <path
                d="M13.55 11.2c-.19-.42-.39-.43-.57-.44h-.49c-.17 0-.45.06-.69.31-.24.25-.9.86-.9 2.09 0 1.23.92 2.41 1.05 2.58.13.17 1.78 2.77 4.38 3.77 2.16.83 2.6.66 3.07.62.47-.04 1.52-.61 1.73-1.2.22-.59.22-1.1.16-1.2-.06-.1-.24-.16-.5-.28-.26-.12-1.52-.74-1.76-.83-.24-.09-.41-.12-.59.12-.17.25-.68.83-.83 1-.15.17-.3.2-.56.08-.26-.12-1.1-.4-2.1-1.26-.78-.67-1.31-1.5-1.47-1.76-.15-.25-.02-.39.1-.51.11-.11.26-.29.39-.43.13-.14.17-.25.26-.42.09-.17.04-.31-.02-.43-.06-.12-.52-1.33-.72-1.79Z"
                fill="#25D366" />
        </svg>
        <span
            class="absolute -inset-2 rounded-full opacity-0 group-hover:opacity-100 transition ring-8 ring-white/10"></span>
    </a>

    <script>
        (function() {
            const number = @json($waNumber);
            const message = @json($waMessage);

            const root = document.getElementById('waToastRoot');
            const bubble = document.getElementById('waToastBubble');
            const closeBtn = document.getElementById('waToastClose');
            const fab = document.getElementById('waFab');

            if (!root || !bubble || !fab) return;

            const STORAGE_KEY = 'wa_toast_dismissed_v1';

            function buildWaLink() {
                const encoded = encodeURIComponent(message || '');
                return `https://wa.me/${number}?text=${encoded}`;
            }

            function showBubble() {
                bubble.classList.remove('opacity-0', 'translate-y-2', 'pointer-events-none');
                bubble.classList.add('opacity-100', 'translate-y-0');
                bubble.setAttribute('aria-hidden', 'false');
            }

            function hideBubble() {
                bubble.classList.add('opacity-0', 'translate-y-2', 'pointer-events-none');
                bubble.classList.remove('opacity-100', 'translate-y-0');
                bubble.setAttribute('aria-hidden', 'true');
            }

            // Set WA link
            fab.setAttribute('href', buildWaLink());
            fab.setAttribute('target', '_blank');
            fab.setAttribute('rel', 'noopener');

            // Auto show toast sekali per browser (kecuali sudah ditutup)
            const dismissed = sessionStorage.getItem(STORAGE_KEY) === '1';
            if (!dismissed) {
                setTimeout(() => {
                    showBubble();
                    // auto-hide setelah beberapa detik
                    setTimeout(hideBubble, 6500);
                }, 1200);
            }

            // Hover behavior
            fab.addEventListener('mouseenter', showBubble);
            root.addEventListener('mouseleave', () => {
                // kasih delay dikit biar gak “kedip”
                setTimeout(() => {
                    if (!root.matches(':hover')) hideBubble();
                }, 120);
            });

            // Close behavior
            if (closeBtn) {
                closeBtn.addEventListener('click', (e) => {
                    e.preventDefault();
                    hideBubble();
                    sessionStorage.setItem(STORAGE_KEY, '1');
                });
            }
        })();
    </script>
</div>
