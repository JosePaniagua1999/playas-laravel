<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServiciosPlayasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios_playas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Id_Playa')->unsigned();
            $table->foreign('Id_Playa')->references('id')->on('playas');
            $table->integer('Id_TipoServicio')->unsigned();
            $table->foreign('Id_TipoServicio')->references('id')->on('lista_servicios');
            $table->string('Servicio_Descripcion');
            $table->string('Servicio_Latitud');
            $table->string('Servicio_Longitud');
            $table->string('Servicio_Icono');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('servicios_playas');
    }
}
