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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->string('cedulaUsuario');
            $table->unsignedBigInteger('idMesa');
            $table->unsignedBigInteger('idPlato');
            // $table->integer('cantidad')->notNull();
            $table->timestamps();

            $table->foreign('cedulaUsuario')->references('cedula')->on('users');
            $table->foreign('idMesa')->references('id')->on('mesas');
            $table->foreign('idPlato')->references('id')->on('platos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
