<?php

namespace Database\Seeders;

use App\Models\AlasanBanner;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AlasanBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $imagePath = 'assets/img/aaron-ikbaar.jpg';

        if (file_exists(public_path($imagePath))) {
            if (!Storage::disk('public')->exists($imagePath)) {
                Storage::disk('public')->put($imagePath, file_get_contents(public_path($imagePath)));
            }

            AlasanBanner::updateOrCreate( 
                ['id'=> 1, 'name' => 'Banner', 'image' => $imagePath]
            );
        } else {
            echo "File tidak ditemukan.";
        }   
    }
}
