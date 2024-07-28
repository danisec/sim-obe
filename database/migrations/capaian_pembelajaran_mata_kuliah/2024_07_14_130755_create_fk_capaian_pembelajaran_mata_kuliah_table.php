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
        Schema::table('capaian_pembelajaran_mata_kuliah', function (Blueprint $table) {
            $table->foreign('id_cpl', 'fk_id_cpl_id_cpl')
                ->references('id_cpl')
                ->on('capaian_pembelajaran_lulusan')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('capaian_pembelajaran_mata_kuliah', function (Blueprint $table) {
            $table->dropForeign('fk_id_cpl_id_cpl');
        });
    }
};
