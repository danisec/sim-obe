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
        Schema::create('capaian_pembelajaran_mata_kuliah', function (Blueprint $table) {
            $table->uuid('id_cpmk')->primary();
            $table->uuid('id_cpl');
            $table->string('kode_cpmk', 15)->unique();
            $table->string('deskripsi_cpmk', 1000);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('capaian_pembelajaran_mata_kuliah');
    }
};
