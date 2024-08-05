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
        Schema::create('capaian_pembelajaran_lulusan', function (Blueprint $table) {
            $table->uuid('id_cpl')->primary();
            $table->string('kode_cpl', 13)->unique();
            $table->string('deskripsi_cpl', 1000);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('capaian_pembelajaran_lulusan');
    }
};
