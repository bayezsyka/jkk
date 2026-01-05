<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'code' => 'BS001',
                'title' => 'Jasa Konstruksi Bangunan Gedung',
                'slug' => 'jasa-konstruksi-bangunan-gedung',
                'excerpt' => 'Layanan konstruksi profesional untuk pembangunan gedung komersial, perkantoran, dan residential dengan standar kualitas tinggi.',
                'content' => '<p>Kami menyediakan layanan konstruksi bangunan gedung yang komprehensif, mulai dari perencanaan hingga penyelesaian proyek. Tim ahli kami berpengalaman dalam menangani berbagai jenis proyek gedung.</p><h3>Keunggulan Kami:</h3><ul><li>Tim profesional bersertifikasi</li><li>Material berkualitas tinggi</li><li>Pengerjaan tepat waktu</li><li>Garansi kualitas</li></ul>',
                'licenses' => [
                    ['code' => 'KBLI-41011', 'name' => 'Konstruksi Gedung Hunian', 'description' => 'Pembangunan gedung hunian seperti apartemen dan rumah'],
                    ['code' => 'KBLI-41012', 'name' => 'Konstruksi Gedung Perkantoran', 'description' => 'Pembangunan gedung perkantoran dan komersial'],
                    ['code' => 'LPJK-B201', 'name' => 'Kualifikasi Menengah 1', 'description' => 'Sertifikasi untuk proyek skala menengah'],
                ],
                'icon' => 'heroicon-o-building-office-2',
                'status' => 'published',
                'is_featured' => true,
                'sort_order' => 1,
            ],
            [
                'code' => 'BS002',
                'title' => 'Jasa Konstruksi Infrastruktur',
                'slug' => 'jasa-konstruksi-infrastruktur',
                'excerpt' => 'Pembangunan infrastruktur seperti jalan, jembatan, dan saluran dengan teknologi modern dan material terbaik.',
                'content' => '<p>Layanan konstruksi infrastruktur kami mencakup pembangunan jalan raya, jembatan, drainase, dan fasilitas publik lainnya dengan standar internasional.</p><h3>Ruang Lingkup:</h3><ul><li>Jalan dan jembatan</li><li>Saluran drainase</li><li>Fasilitas umum</li><li>Pekerjaan sipil</li></ul>',
                'licenses' => [
                    ['code' => 'KBLI-42101', 'name' => 'Konstruksi Jalan Raya', 'description' => 'Pembangunan dan pemeliharaan jalan raya'],
                    ['code' => 'KBLI-42102', 'name' => 'Konstruksi Jembatan', 'description' => 'Pembangunan struktur jembatan'],
                ],
                'icon' => 'heroicon-o-truck',
                'status' => 'published',
                'is_featured' => true,
                'sort_order' => 2,
            ],
            [
                'code' => 'SI001',
                'title' => 'Jasa Desain Arsitektur',
                'slug' => 'jasa-desain-arsitektur',
                'excerpt' => 'Layanan desain arsitektur modern dan fungsional untuk berbagai kebutuhan bangunan hunian dan komersial.',
                'content' => '<p>Tim arsitek profesional kami siap membantu mewujudkan visi Anda menjadi desain yang indah dan fungsional. Kami menggunakan teknologi terkini untuk visualisasi 3D.</p>',
                'licenses' => [
                    ['code' => 'IAI-01', 'name' => 'Sertifikasi Arsitek', 'description' => 'Ikatan Arsitek Indonesia'],
                ],
                'icon' => 'heroicon-o-pencil-square',
                'status' => 'published',
                'is_featured' => true,
                'sort_order' => 3,
            ],
            [
                'code' => 'SI002',
                'title' => 'Jasa Konsultasi Struktur',
                'slug' => 'jasa-konsultasi-struktur',
                'excerpt' => 'Konsultasi dan perencanaan struktur bangunan yang aman dan efisien oleh insinyur berpengalaman.',
                'content' => '<p>Layanan konsultasi struktur kami memastikan bangunan Anda memiliki fondasi yang kuat dan struktur yang aman sesuai standar SNI.</p>',
                'licenses' => [
                    ['code' => 'PII-SE', 'name' => 'Sertifikasi Insinyur Struktur', 'description' => 'Persatuan Insinyur Indonesia'],
                ],
                'icon' => 'heroicon-o-cube',
                'status' => 'published',
                'is_featured' => false,
                'sort_order' => 4,
            ],
            [
                'code' => 'BS003',
                'title' => 'Renovasi dan Rehabilitasi Bangunan',
                'slug' => 'renovasi-rehabilitasi-bangunan',
                'excerpt' => 'Layanan renovasi dan perbaikan bangunan lama untuk meningkatkan fungsi dan estetika.',
                'content' => '<p>Kami menawarkan jasa renovasi dan rehabilitasi bangunan untuk memperbaharui tampilan dan meningkatkan kenyamanan ruangan Anda.</p>',
                'licenses' => [
                    ['code' => 'KBLI-43212', 'name' => 'Instalasi Listrik', 'description' => 'Pekerjaan instalasi listrik bangunan'],
                    ['code' => 'KBLI-43221', 'name' => 'Instalasi Plumbing', 'description' => 'Pekerjaan instalasi air dan sanitasi'],
                ],
                'icon' => 'heroicon-o-wrench-screwdriver',
                'status' => 'published',
                'is_featured' => false,
                'sort_order' => 5,
            ],
            [
                'code' => 'SI003',
                'title' => 'Manajemen Proyek Konstruksi',
                'slug' => 'manajemen-proyek-konstruksi',
                'excerpt' => 'Layanan manajemen proyek untuk memastikan proyek Anda berjalan tepat waktu dan sesuai anggaran.',
                'content' => '<p>Tim manajemen proyek kami berpengalaman dalam mengelola proyek konstruksi dari awal hingga selesai dengan efisiensi tinggi.</p>',
                'licenses' => [
                    ['code' => 'PMP', 'name' => 'Project Management Professional', 'description' => 'Sertifikasi manajemen proyek internasional'],
                ],
                'icon' => 'heroicon-o-clipboard-document-list',
                'status' => 'draft',
                'is_featured' => false,
                'sort_order' => 6,
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
