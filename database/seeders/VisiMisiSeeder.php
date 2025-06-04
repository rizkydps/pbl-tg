<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\VisiMisi;

class VisiMisiSeeder extends Seeder
{
    public function run()
    {
        VisiMisi::create([
            'title' => 'Visi dan Misi Program Studi Geomatika',
            'visi' => 'Menjadi program studi unggul di bidang geomatika terapan yang berdaya saing nasional.',
            'misi' => '1. Menyelenggarakan pendidikan berkualitas.<br>2. Melakukan penelitian terapan.<br>3. Menjalin kerjasama industri dan masyarakat.'
        ]);
    }
}
