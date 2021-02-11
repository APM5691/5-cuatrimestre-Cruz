<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->id();
            $table->string ('nombre_cliente',45);
            $table->string('primer_apellido',45);
            $table->string('segundo_apellido',45);
            $table->string('password',45);
            $table->string('correo_electronico',45);
            $table->string('telefono',10);
            $table->string('sexo',45);
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
        Schema::dropIfExists('cliente');
        
    }
}
