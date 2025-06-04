<?php

namespace Database\Seeders;

use App\Models\OutputLulusan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OutputLulusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $imagePath = 'assets/img/blog/blog-1.jpg';

        if (file_exists(public_path($imagePath))) {
            if (!Storage::disk('public')->exists($imagePath)) {
                Storage::disk('public')->put($imagePath, file_get_contents(public_path($imagePath)));
            }

            OutputLulusan::updateOrCreate( 
                ['id'=> 1, 'image' => $imagePath, 'title' => 'Software Developer', 'description' => 'Software Developer adalah profesional yang merancang, mengembangkan, dan memelihara perangkat lunak sesuai kebutuhan pengguna.']
            );
        } else {
            echo "File tidak ditemukan.";
        }   
    }
}
