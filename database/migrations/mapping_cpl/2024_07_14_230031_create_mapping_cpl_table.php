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
        Schema::create('mapping_cpl', function (Blueprint $table) {
            $table->id('id_mapping_cpl');
            $table->string('kode_mata_kuliah', 10)->index();
            $table->string('nama_mata_kuliah', 50)->index();
            $table->string('kode_cpl', 13);
            $table->string('kode_cpmk', 15);
            $table->string('kode_scpmk', 19);
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
        Schema::dropIfExists('mapping_cpl');
    }
};
