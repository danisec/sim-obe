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
        Schema::table('sub_capaian_pembelajaran_mata_kuliah', function (Blueprint $table) {
            $table->foreign('id_cpmk', 'fk_id_cpmk_id_cpmk')
                ->references('id_cpmk')
                ->on('capaian_pembelajaran_mata_kuliah')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sub_capaian_pembelajaran_mata_kuliah', function (Blueprint $table) {
            $table->dropForeign('fk_id_cpmk_id_cpmk');
        });
    }
};
