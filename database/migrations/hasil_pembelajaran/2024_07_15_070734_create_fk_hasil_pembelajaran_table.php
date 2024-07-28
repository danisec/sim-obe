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
        Schema::table('hasil_pembelajaran', function (Blueprint $table) {
            $table->foreign('kode_mata_kuliah', 'fk_kode_mata_kuliah_mapping_cpl')
                ->references('kode_mata_kuliah')
                ->on('mapping_cpl')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
        });

        Schema::table('hasil_pembelajaran', function (Blueprint $table) {
            $table->foreign('nama_mata_kuliah', 'fk_nama_mata_kuliah_mapping_cpl')
                ->references('nama_mata_kuliah')
                ->on('mapping_cpl')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hasil_pembelajaran', function (Blueprint $table) {
            $table->dropForeign('fk_kode_mata_kuliah_mapping_cpl');
        });
        Schema::table('hasil_pembelajaran', function (Blueprint $table) {
            $table->dropForeign('fk_nama_mata_kuliah_mapping_cpl');
        });
    }
};
