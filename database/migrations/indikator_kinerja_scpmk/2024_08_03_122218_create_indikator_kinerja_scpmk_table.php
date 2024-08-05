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
        Schema::create('indikator_kinerja_scpmk', function (Blueprint $table) {
            $table->uuid('id_indikator_kinerja_scpmk')->primary();
            $table->uuid('id_mapping_cpl');
            $table->string('nama_indikator', 100);
            $table->string('indikator_kode_scpmk', 19)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('indikator_kinerja_scpmk');
    }
};
