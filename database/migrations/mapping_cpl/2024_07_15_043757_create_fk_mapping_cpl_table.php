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
        Schema::table('mapping_cpl', function (Blueprint $table) {
            $table->foreign('kode_cpl', 'fk_kode_cpl_kode_cpl')
                ->references('kode_cpl')
                ->on('capaian_pembelajaran_lulusan')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
        });

        Schema::table('mapping_cpl', function (Blueprint $table) {
            $table->foreign('kode_cpmk', 'fk_kode_cpmk_kode_cpmk')
                ->references('kode_cpmk')
                ->on('capaian_pembelajaran_mata_kuliah')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
        });

        Schema::table('mapping_cpl', function (Blueprint $table) {
            $table->foreign('kode_scpmk', 'fk_kode_scpmk_kode_scpmk')
                ->references('kode_scpmk')
                ->on('sub_capaian_pembelajaran_mata_kuliah')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mapping_cpl', function (Blueprint $table) {
            $table->dropForeign('fk_kode_cpl_kode_cpl');
        });
        Schema::table('mapping_cpl', function (Blueprint $table) {
            $table->dropForeign('fk_kode_cpmk_kode_cpmk');
        });
        Schema::table('mapping_cpl', function (Blueprint $table) {
            $table->dropForeign('fk_kode_scpmk_kode_scpmk');
        });
    }
};
