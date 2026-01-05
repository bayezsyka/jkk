<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Pembangunan Gedung Perkantoran Modern',
                'slug' => 'pembangunan-gedung-perkantoran-modern',
                'client' => 'PT Karya Gemilang',
                'location' => 'Jakarta Selatan',
                'year' => 2025,
                'description' => '<p>Proyek pembangunan gedung perkantoran 12 lantai dengan desain modern dan ramah lingkungan. Dilengkapi dengan sistem smart building dan area parkir bertingkat.</p><p>Fitur utama:</p><ul><li>Desain arsitektur modern minimalis</li><li>Sistem hemat energi</li><li>Area parkir 3 tingkat</li><li>Roof garden</li></ul>',
                'status' => 'published',
                'is_featured' => true,
            ],
            [
                'title' => 'Renovasi Masjid Raya Al-Ikhlas',
                'slug' => 'renovasi-masjid-raya-al-ikhlas',
                'client' => 'Yayasan Al-Ikhlas',
                'location' => 'Bandung',
                'year' => 2025,
                'description' => '<p>Renovasi total masjid dengan kapasitas 2000 jamaah. Meliputi perluasan area sholat, pembuatan basement untuk parkir, dan penambahan menara.</p>',
                'status' => 'published',
                'is_featured' => true,
            ],
            [
                'title' => 'Konstruksi Jembatan Penyeberangan',
                'slug' => 'konstruksi-jembatan-penyeberangan',
                'client' => 'Dinas PUPR Kota Surabaya',
                'location' => 'Surabaya',
                'year' => 2024,
                'description' => '<p>Pembangunan jembatan penyeberangan orang (JPO) dengan struktur baja dan atap kaca tempered. Dilengkapi dengan lift untuk aksesibilitas penyandang disabilitas.</p>',
                'status' => 'published',
                'is_featured' => false,
            ],
            [
                'title' => 'Pembangunan Perumahan Cluster',
                'slug' => 'pembangunan-perumahan-cluster',
                'client' => 'PT Graha Indah Property',
                'location' => 'Bogor',
                'year' => 2024,
                'description' => '<p>Pembangunan 50 unit rumah tipe 45-90 dalam konsep cluster modern dengan fasilitas lengkap termasuk clubhouse, taman bermain, dan sistem keamanan 24 jam.</p>',
                'status' => 'published',
                'is_featured' => true,
            ],
            [
                'title' => 'Rehabilitasi Saluran Irigasi',
                'slug' => 'rehabilitasi-saluran-irigasi',
                'client' => 'Kementerian PUPR',
                'location' => 'Karawang',
                'year' => 2023,
                'description' => '<p>Rehabilitasi dan normalisasi saluran irigasi sepanjang 15 km untuk mendukung produktivitas pertanian di kawasan Karawang.</p>',
                'status' => 'published',
                'is_featured' => false,
            ],
            [
                'title' => 'Pembangunan Gudang Logistik',
                'slug' => 'pembangunan-gudang-logistik',
                'client' => 'PT Distribusi Nusantara',
                'location' => 'Tangerang',
                'year' => 2023,
                'description' => '<p>Pembangunan gudang logistik modern seluas 10.000 m² dengan sistem cold storage dan loading dock untuk 20 truk.</p>',
                'status' => 'published',
                'is_featured' => false,
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
