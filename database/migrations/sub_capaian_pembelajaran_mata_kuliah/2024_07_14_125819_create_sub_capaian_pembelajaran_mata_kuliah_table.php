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
        Schema::create('sub_capaian_pembelajaran_mata_kuliah', function (Blueprint $table) {
            $table->uuid('id_scpmk')->primary();
            $table->uuid('id_cpmk');
            $table->string('kode_scpmk', 19)->unique();
            $table->string('deskripsi_scpmk', 1000);
            $table->string('kemampuan', 100);
            $table->string('aspek', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_capaian_pembelajaran_mata_kuliah');
    }
};
