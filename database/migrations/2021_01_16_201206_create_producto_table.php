<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->char('clave', 25);
            $table->char('producto', 200);
            $table->integer('existencias');
            $table->float('precio_unitario', 10, 2);
            $table->enum('unidad_medida', ['Pieza', 'Caja', 'Kilogramo', 'Metro', 'Bolsa', 'Otro']);
            $table->enum('estatus', ['Activo', 'Inactivo']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
