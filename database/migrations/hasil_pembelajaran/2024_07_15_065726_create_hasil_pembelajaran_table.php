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
        Schema::create('hasil_pembelajaran', function (Blueprint $table) {
            $table->id('id_hasil_pembelajaran');
            $table->string('kode_mata_kuliah', 10);
            $table->string('nama_mata_kuliah', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hasil_pembelajaran');
    }
};
