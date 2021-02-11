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
        Schema::create('producto', function (Blueprint $table) {
            $table->id();
            $table->integer('tipo_de_joya_id');
            $table->string('clave', 25);
            $table->string('nombre_producto', 200);
            $table->unsignedInteger('numero_existencias');
            $table->decimal('precio', 10, 2);
            $table->string('descripcion', 200);
            $table->string('medida', 200);
            $table->decimal('precio_oferta', 10, 2);
            $table->string('foto_original', 200);
            $table->string('foto', 200);
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
