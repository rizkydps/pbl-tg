<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AboutUs;

class AboutUsSeeder extends Seeder
{
    public function run()
    {
        AboutUs::create([
            'title' => 'Program Studi Teknologi Geomatika (DIII – Diploma Tiga)',
            'description_1' => 'Program Studi Teknologi Geomatika merupakan salah satu program studi di Politeknik Pertanian Negeri Samarinda (Politani Samarinda) yang mulai menyelenggarakan perkuliahan pada tahun ajaran 2009/2010 dengan nama awal Program Studi Geoinformatika sesuai dengan SK Direktur Jenderal Pendidikan Tinggi No. 4311/Dikti/T/2008 tanggal 28 November 2008.',
            'description_2' => 'Kemudian pada tahun 2018 melalui SK Menteri Riset, Teknologi, dan Pendidikan Tinggi No. 712/KPT/I/2018 tanggal 29 Agustus 2018, nama Program Studi Geoinformatika dengan resmi berubah menjadi Program Studi Teknologi Geomatika.',
            'description_3' => 'Program Studi Teknologi Geomatika merupakan program studi yang memiliki fokus pembelajaran di bidang survey dan pemetaan. Kompetensi keahlian lulusan program studi yaitu bidang <strong>Survey Terestris</strong>, <strong>Sistem Informasi Geografis (SIG)</strong>, <strong>Fotogrametri dan Penginderaan Jauh</strong>, serta <strong>Hidrografi</strong>.',
            'years_experience' => 15,
            'total_alumni' => 500,
            'expertise_fields' => 4,
            'accreditation' => 'A',
            'is_active' => true
        ]);
    }
}