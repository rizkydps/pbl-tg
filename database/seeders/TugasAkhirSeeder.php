<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TugasAkhir;

class TugasAkhirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tugasAkhir = [
            [
                'nama_mahasiswa' => 'Ahmad Rizki Pratama',
                'nim' => '2041001',
                'judul_ta' => 'Analisis Perubahan Penggunaan Lahan Menggunakan Citra Satelit Landsat di Kota Samarinda',
                'tahun_lulus' => 2023,
                'pembimbing' => 'Dr. Ir. Siti Aminah, M.T.',
                'penguji' => 'Prof. Dr. Ir. Budi Santoso, M.T.'
            ],
            [
                'nama_mahasiswa' => 'Sari Wulandari',
                'nim' => '2041002',
                'judul_ta' => 'Pemodelan Digital Terrain Model (DTM) Menggunakan Data LiDAR untuk Perencanaan Infrastruktur',
                'tahun_lulus' => 2023,
                'pembimbing' => 'Dr. Ir. Agus Setiawan, M.T.',
                'penguji' => 'Dr. Ir. Maya Sari, M.T.'
            ],
            [
                'nama_mahasiswa' => 'Muhammad Iqbal',
                'nim' => '2041003',
                'judul_ta' => 'Implementasi Teknologi GPS-RTK untuk Pemetaan Batas Kadaster di Wilayah Perkotaan',
                'tahun_lulus' => 2023,
                'pembimbing' => 'Dr. Ir. Rina Kartika, M.T.',
                'penguji' => 'Prof. Dr. Ir. Andi Wijaya, M.T.'
            ],
            [
                'nama_mahasiswa' => 'Dewi Anggraini',
                'nim' => '2041004',
                'judul_ta' => 'Monitoring Deformasi Tanah Menggunakan Teknologi InSAR di Area Pertambangan Batubara',
                'tahun_lulus' => 2024,
                'pembimbing' => 'Dr. Ir. Bambang Suryono, M.T.',
                'penguji' => 'Dr. Ir. Lisa Permata, M.T.'
            ],
            [
                'nama_mahasiswa' => 'Arif Hidayat',
                'nim' => '2041005',
                'judul_ta' => 'Analisis Potensi Bencana Banjir Menggunakan Sistem Informasi Geografis (SIG) di DAS Mahakam',
                'tahun_lulus' => 2024,
                'pembimbing' => 'Dr. Ir. Fitri Handayani, M.T.',
                'penguji' => 'Prof. Dr. Ir. Rudi Hartono, M.T.'
            ],
            [
                'nama_mahasiswa' => 'Nurul Aini',
                'nim' => '2041006',
                'judul_ta' => 'Pengembangan WebGIS untuk Manajemen Aset Daerah Berbasis Open Source',
                'tahun_lulus' => 2024,
                'pembimbing' => 'Dr. Ir. Dian Pramesti, M.T.',
                'penguji' => 'Dr. Ir. Hendra Kusuma, M.T.'
            ],
            [
                'nama_mahasiswa' => 'Rahman Hakim',
                'nim' => '2041007',
                'judul_ta' => 'Survei Bathymetri Menggunakan Multibeam Echosounder untuk Pemetaan Dasar Laut',
                'tahun_lulus' => 2022,
                'pembimbing' => 'Dr. Ir. Widya Sari, M.T.',
                'penguji' => 'Prof. Dr. Ir. Joko Pramono, M.T.'
            ],
            [
                'nama_mahasiswa' => 'Indah Permatasari',
                'nim' => '2041008',
                'judul_ta' => 'Aplikasi Fotogrametri UAV untuk Pemetaan Topografi Skala Besar di Area Konstruksi',
                'tahun_lulus' => 2022,
                'pembimbing' => 'Dr. Ir. Yudi Prasetyo, M.T.',
                'penguji' => 'Dr. Ir. Sinta Berliana, M.T.'
            ]
        ];

        foreach ($tugasAkhir as $data) {
            TugasAkhir::create($data);
        }
    }
}