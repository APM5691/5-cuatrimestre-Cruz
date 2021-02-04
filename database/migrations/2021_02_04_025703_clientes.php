<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Clientes extends Migration
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
            $table->string ('nombre_clente',45)->conment('nombre_cliente');
            $table->string('primer_apellido',45)->conment('primer_apellido');
            $table->string('segundo_apellido',45)->conment('segundo_apellido');
            $table->string('password',45)->conment('password');
            $table->string('correo_electronico',45)->conment('correo_electronico');
            $table->string('telefono',10)->conment('telefono');
            $table->string('sexo',45)->conment('sexo');
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
        //
    }
}
