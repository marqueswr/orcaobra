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
        Schema::table('fases', function (Blueprint $table) {
           $table->unsignedBigInteger('servico_id')->nullable()->after('id');
           $table->foreign('servico_id')->references('id')->on('servicos');

           $table->unsignedBigInteger('etapa_id')->nullable()->after('servico_id');
           $table->foreign('etapa_id')->references('id')->on('etapas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('fase', function (Blueprint $table) {
            //
        });
    }
};
