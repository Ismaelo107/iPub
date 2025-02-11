<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('comanda_id');
            $table->string('nombre');
            $table->double('precio_venta');
            $table->double('precio_compra');
            $table->timestamps();

            $table->foreign('comanda_id')->references('id')->on('comandas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
