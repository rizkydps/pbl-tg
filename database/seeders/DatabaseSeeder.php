<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\AlasanBannerSeeder;
use Database\Seeders\OutputLulusanSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(AlasanBannerSeeder::class);
        // $this->call(OutputLulusanSeeder::class);
    }
}
