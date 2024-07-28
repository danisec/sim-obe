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
        Schema::create('nilai_hasil_pembelajaran', function (Blueprint $table) {
            $table->id('id_nilai_hasil_pembelajaran');
            $table->unsignedBigInteger('id_hasil_pembelajaran');
            $table->double('partisipasi')->nullable();
            $table->double('proyek')->nullable();
            $table->double('tugas')->nullable();
            $table->double('kuis')->nullable();
            $table->double('evaluasi_tengah_semester')->nullable();
            $table->double('evaluasi_akhir_semester')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai_hasil_pembelajaran');
    }
};
