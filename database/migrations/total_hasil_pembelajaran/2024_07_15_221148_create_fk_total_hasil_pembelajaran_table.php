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
        Schema::table('total_hasil_pembelajaran', function (Blueprint $table) {
            $table->foreign('id_hasil_pembelajaran', 'fk_id_hasil_pembelajaran_hasil_pembelajaran')
                ->references('id_hasil_pembelajaran')
                ->on('hasil_pembelajaran')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('total_hasil_pembelajaran', function (Blueprint $table) {
            $table->dropForeign('fk_id_hasil_pembelajaran_id_hasil_pembelajaran');
        });
    }
};
