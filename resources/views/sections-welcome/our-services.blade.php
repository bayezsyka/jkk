<section id="services" class="w-full bg-white">
    <div class="mx-auto max-w-7xl px-6 py-16 sm:py-20">
        <!-- Header -->
        <div>
            <p class="text-sm font-semibold tracking-wide text-orange-600">LAYANAN KAMI</p>
            <h2 class="mt-2 text-3xl font-extrabold text-slate-900 sm:text-4xl">
                Pemesanan Aspal & Cor Beton
            </h2>
            <p class="mt-3 max-w-2xl text-sm leading-7 text-slate-600 sm:text-base">
                Pilih layanan di bawah ini untuk melakukan pemesanan.
            </p>
        </div>

        <!-- Kartu Layanan - Layout seperti About Us -->
        <div class="mt-10 space-y-12">

            <!-- ASPAL -->
            <div class="grid items-center gap-10 lg:grid-cols-2 lg:gap-16">
                <!-- Gambar -->
                <div>
                    <div class="aspect-[4/3] w-full overflow-hidden rounded-2xl shadow-lg">
                        <img src="https://www.rumahaspal.com/wp-content/uploads/2022/02/pengertian-dan-kelebihan-aspal-hotmix.jpg"
                            alt="Pekerjaan Aspal Hotmix" class="h-full w-full object-cover" loading="lazy" />
                    </div>
                </div>
                <!-- Konten -->
                <div>
                    <span
                        class="inline-block rounded-full bg-orange-50 px-3 py-1 text-xs font-semibold text-orange-700">ASPAL</span>
                    <h3 class="mt-3 text-2xl font-extrabold text-slate-900 sm:text-3xl">Pemesanan Aspal (Hotmix)</h3>
                    <p class="mt-4 text-sm leading-7 text-slate-600 sm:text-base">
                        Layanan pengadaan & penghamparan aspal untuk jalan lingkungan, halaman, dan akses proyek.
                        Termasuk opsi survey, pengaturan tebal, dan finishing rapi.
                    </p>

                    <div class="mt-6 grid gap-4 sm:grid-cols-2">
                        <div class="rounded-xl border border-slate-200 bg-slate-50 p-4">
                            <div class="text-lg font-bold text-orange-600">3+ Ton</div>
                            <div class="mt-1 text-sm text-slate-600">Minimal Pesanan</div>
                        </div>
                        <div class="rounded-xl border border-slate-200 bg-slate-50 p-4">
                            <div class="text-lg font-bold text-orange-600">1-3 Hari</div>
                            <div class="mt-1 text-sm text-slate-600">Estimasi Pengerjaan</div>
                        </div>
                    </div>

                    <button type="button"
                        class="open-order mt-6 inline-flex items-center justify-center rounded-full bg-orange-500 px-6 py-3 text-sm font-semibold text-white transition hover:bg-orange-600"
                        data-service="Pemesanan Aspal (Hotmix)"
                        data-desc="Isi detail kebutuhan: lokasi, luasan, tebal, dan jadwal.">
                        Pesan Aspal Sekarang
                    </button>
                </div>
            </div>

            <!-- Divider -->
            <div class="mx-auto h-px w-24 bg-gradient-to-r from-transparent via-slate-300 to-transparent"></div>

            <!-- COR BETON -->
            <div class="grid items-center gap-10 lg:grid-cols-2 lg:gap-16">
                <!-- Konten (order berubah di desktop) -->
                <div class="order-2 lg:order-1">
                    <span
                        class="inline-block rounded-full bg-orange-50 px-3 py-1 text-xs font-semibold text-orange-700">BETON</span>
                    <h3 class="mt-3 text-2xl font-extrabold text-slate-900 sm:text-3xl">Pemesanan Cor Beton (Ready Mix)
                    </h3>
                    <p class="mt-4 text-sm leading-7 text-slate-600 sm:text-base">
                        Pemesanan beton ready mix untuk lantai kerja, jalan beton, pondasi, dan struktur ringan.
                        Bisa tambah opsi pompa sesuai akses lokasi.
                    </p>

                    <div class="mt-6 grid gap-4 sm:grid-cols-2">
                        <div class="rounded-xl border border-slate-200 bg-slate-50 p-4">
                            <div class="text-lg font-bold text-orange-600">1+ m³</div>
                            <div class="mt-1 text-sm text-slate-600">Minimal Pesanan</div>
                        </div>
                        <div class="rounded-xl border border-slate-200 bg-slate-50 p-4">
                            <div class="text-lg font-bold text-orange-600">K-225 s/d K-300</div>
                            <div class="mt-1 text-sm text-slate-600">Mutu Tersedia</div>
                        </div>
                    </div>

                    <button type="button"
                        class="open-order mt-6 inline-flex items-center justify-center rounded-full bg-orange-500 px-6 py-3 text-sm font-semibold text-white transition hover:bg-orange-600"
                        data-service="Pemesanan Cor Beton (Ready Mix)"
                        data-desc="Masukkan volume, mutu beton, akses lokasi, dan jadwal.">
                        Pesan Cor Beton Sekarang
                    </button>
                </div>
                <!-- Gambar -->
                <div class="order-1 lg:order-2">
                    <div class="aspect-[4/3] w-full overflow-hidden rounded-2xl shadow-lg">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRwgudbUnG23WpgFSLEm3o1Ii1UAqtqYySBMQ&s"
                            alt="Pekerjaan Cor Beton Ready Mix" class="h-full w-full object-cover" loading="lazy" />
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- MODAL PEMESANAN - Fixed scroll issue -->
    <div id="orderModal" class="fixed inset-0 z-[999] hidden overflow-y-auto">
        <!-- Latar Belakang -->
        <div class="modal-close fixed inset-0 bg-black/60"></div>

        <!-- Container untuk scroll -->
        <div class="min-h-full px-4 py-8 sm:py-12">
            <div class="relative mx-auto w-full max-w-md rounded-2xl bg-white shadow-2xl">
                <!-- Header Modal -->
                <div
                    class="sticky top-0 z-10 flex items-start justify-between gap-4 border-b border-slate-200 bg-white px-5 py-4 rounded-t-2xl">
                    <div class="flex-1">
                        <p class="text-xs font-semibold tracking-wider text-orange-600">FORMULIR PEMESANAN</p>
                        <h3 id="modalTitle" class="mt-1 text-lg font-extrabold text-slate-900">
                            Pemesanan
                        </h3>
                    </div>
                    <button type="button"
                        class="modal-close -mr-1 -mt-1 rounded-full p-2 text-slate-500 transition hover:bg-slate-100 hover:text-slate-900"
                        aria-label="Tutup">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Body Form -->
                <form id="orderForm" class="p-5">
                    <p id="modalDesc" class="mb-4 text-sm text-slate-600">Deskripsi layanan</p>
                    <input type="hidden" id="formService" name="service" value="" />

                    <div class="space-y-4">
                        <div>
                            <label for="formNama" class="text-sm font-semibold text-slate-700">Nama Lengkap <span
                                    class="text-red-500">*</span></label>
                            <input type="text" id="formNama" name="nama" required placeholder="Budi Santoso"
                                class="mt-1.5 w-full rounded-lg border border-slate-200 px-3 py-2.5 text-sm outline-none transition focus:border-orange-400 focus:ring-2 focus:ring-orange-100" />
                        </div>
                        <div>
                            <label for="formTelepon" class="text-sm font-semibold text-slate-700">No. WhatsApp <span
                                    class="text-red-500">*</span></label>
                            <input type="tel" id="formTelepon" name="telepon" required placeholder="08123456789"
                                class="mt-1.5 w-full rounded-lg border border-slate-200 px-3 py-2.5 text-sm outline-none transition focus:border-orange-400 focus:ring-2 focus:ring-orange-100" />
                        </div>
                        <div>
                            <label for="formLokasi" class="text-sm font-semibold text-slate-700">Lokasi Proyek <span
                                    class="text-red-500">*</span></label>
                            <input type="text" id="formLokasi" name="lokasi" required
                                placeholder="Alamat lengkap proyek"
                                class="mt-1.5 w-full rounded-lg border border-slate-200 px-3 py-2.5 text-sm outline-none transition focus:border-orange-400 focus:ring-2 focus:ring-orange-100" />
                        </div>
                        <div class="grid grid-cols-2 gap-3">
                            <div>
                                <label for="formKebutuhan" class="text-sm font-semibold text-slate-700">Kebutuhan
                                    <span class="text-red-500">*</span></label>
                                <input type="text" id="formKebutuhan" name="kebutuhan" required
                                    placeholder="5 ton / 3 m³"
                                    class="mt-1.5 w-full rounded-lg border border-slate-200 px-3 py-2.5 text-sm outline-none transition focus:border-orange-400 focus:ring-2 focus:ring-orange-100" />
                            </div>
                            <div>
                                <label for="formJadwal" class="text-sm font-semibold text-slate-700">Target
                                    Jadwal</label>
                                <input type="text" id="formJadwal" name="jadwal" placeholder="Minggu depan"
                                    class="mt-1.5 w-full rounded-lg border border-slate-200 px-3 py-2.5 text-sm outline-none transition focus:border-orange-400 focus:ring-2 focus:ring-orange-100" />
                            </div>
                        </div>
                        <div>
                            <label for="formCatatan" class="text-sm font-semibold text-slate-700">Catatan</label>
                            <textarea id="formCatatan" name="catatan" rows="2" placeholder="Catatan tambahan (opsional)"
                                class="mt-1.5 w-full rounded-lg border border-slate-200 px-3 py-2.5 text-sm outline-none transition focus:border-orange-400 focus:ring-2 focus:ring-orange-100"></textarea>
                        </div>
                    </div>

                    <!-- Pesan Sukses -->
                    <div id="successMessage" class="mt-4 hidden rounded-lg bg-green-50 border border-green-200 p-3">
                        <p class="text-sm font-medium text-green-800">✓ Permintaan berhasil dikirim!</p>
                    </div>

                    <!-- Tombol Submit -->
                    <div class="mt-5 flex gap-3">
                        <button type="button"
                            class="modal-close flex-1 rounded-full border border-slate-200 bg-white px-4 py-2.5 text-sm font-semibold text-slate-800 transition hover:bg-slate-50">
                            Batal
                        </button>
                        <button type="submit" id="submitBtn"
                            class="flex-1 rounded-full bg-orange-500 px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-orange-600 disabled:opacity-50">
                            <span id="submitText">Kirim</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
    (function() {
        const modal = document.getElementById('orderModal');
        const form = document.getElementById('orderForm');
        const title = document.getElementById('modalTitle');
        const desc = document.getElementById('modalDesc');
        const serviceInput = document.getElementById('formService');
        const submitBtn = document.getElementById('submitBtn');
        const submitText = document.getElementById('submitText');
        const successMessage = document.getElementById('successMessage');

        function openModal(service, description) {
            title.textContent = service;
            desc.textContent = description;
            serviceInput.value = service;

            form.reset();
            successMessage.classList.add('hidden');
            submitBtn.disabled = false;
            submitText.textContent = 'Kirim';

            modal.classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
        }

        function closeModal() {
            modal.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        }

        document.querySelectorAll('.open-order').forEach(btn => {
            btn.addEventListener('click', () => {
                openModal(
                    btn.getAttribute('data-service') || 'Pemesanan',
                    btn.getAttribute('data-desc') || 'Isi detail kebutuhan Anda.'
                );
            });
        });

        modal.querySelectorAll('.modal-close').forEach(el => {
            el.addEventListener('click', closeModal);
        });

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && !modal.classList.contains('hidden')) closeModal();
        });

        form.addEventListener('submit', function(e) {
            e.preventDefault();

            const nama = document.getElementById('formNama').value.trim();
            const telepon = document.getElementById('formTelepon').value.trim();
            const lokasi = document.getElementById('formLokasi').value.trim();
            const kebutuhan = document.getElementById('formKebutuhan').value.trim();

            if (!nama || !telepon || !lokasi || !kebutuhan) {
                alert('Mohon lengkapi field wajib (*)');
                return;
            }

            submitBtn.disabled = true;
            submitText.textContent = 'Mengirim...';

            setTimeout(() => {
                submitText.textContent = 'Terkirim!';
                successMessage.classList.remove('hidden');

                setTimeout(() => {
                    closeModal();
                }, 1500);
            }, 1000);
        });
    })();
</script>
