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
        //cambiar a productos
        Schema::create('producto', function (Blueprint $table) {
            $table->id();
            $table->integer('tipo_de_joya_id')->nullable();
            $table->string('clave', 25);
            $table->string('nombre_producto', 200);
            $table->Integer('numero_existencias');
            $table->integer('precio');
            $table->string('descripcion', 200);
            $table->string('medida', 200);
            $table->integer('precio_oferta');
            $table->string('fotografia', 200);
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
        Schema::dropIfExists('producto');
    }
}
