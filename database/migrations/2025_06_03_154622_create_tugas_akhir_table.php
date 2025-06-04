<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tugas_akhir', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mahasiswa', 255);
            $table->string('nim', 20)->unique();
            $table->text('judul_ta');
            $table->year('tahun_lulus');
            $table->string('pembimbing', 255);
            $table->string('penguji', 255);
            $table->timestamps();

            // Index untuk optimasi query
            $table->index('tahun_lulus');
            $table->index('nim');
            $table->index(['nama_mahasiswa', 'tahun_lulus']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tugas_akhir');
    }
};