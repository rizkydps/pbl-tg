<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->string('title')->default('Program Studi Teknologi Geomatika (DIII – Diploma Tiga)');
            $table->text('description_1');
            $table->text('description_2');
            $table->text('description_3');
            $table->integer('years_experience')->default(15);
            $table->integer('total_alumni')->default(500);
            $table->integer('expertise_fields')->default(4);
            $table->string('accreditation', 10)->default('A');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('about_us');
    }
};