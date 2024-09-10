<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('insumos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('descricao');
            $table->string('tipo',50);
            $table->string('unidade',30);
            $table->decimal('unitario');
            $table->timestamps();
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('insumos');
    }
};
