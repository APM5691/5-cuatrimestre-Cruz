<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Productos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id()->conment('id');
            $table->string ('clave',25)->conment('Clave');
            $table->string('nombre_producto',200)->conment('Nombre de producto');
            $table->unsignedInteger('existencias')->conment('Existencias');
            $table->decimal('precio',10,2)->conment('Precio ');
            $table->string('descripcion',200)->conment('Descripcion del producto');
            $table->string('Medida',200)->conment('Descripcion medida');
            $table->decimal('precio_oferta',10,2)->conment('Precio oferta');
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
