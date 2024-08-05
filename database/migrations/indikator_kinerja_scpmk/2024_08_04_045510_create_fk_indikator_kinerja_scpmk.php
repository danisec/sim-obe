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
        Schema::table('indikator_kinerja_scpmk', function (Blueprint $table) {
            $table->foreign('id_mapping_cpl', 'fk_id_mapping_cpl_id_mapping_cpl')
                ->references('id_mapping_cpl')
                ->on('mapping_cpl')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
        });

        Schema::table('indikator_kinerja_scpmk', function (Blueprint $table) {
            $table->foreign('indikator_kode_scpmk', 'fk_indikator_kinerja_scpmk_kode_scpmk_kode_scpmk')
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
        Schema::table('indikator_kinerja_scpmk', function (Blueprint $table) {
            $table->dropForeign('fk_id_mapping_cpl_id_mapping_cpl');
        });
        Schema::table('indikator_kinerja_scpmk', function (Blueprint $table) {
            $table->dropForeign('fk_indikator_kinerja_scpmk_kode_scpmk_kode_scpmk');
        });
    }
};
