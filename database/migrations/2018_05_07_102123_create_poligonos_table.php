<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePoligonosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poligonos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Id_Playa')->unsigned();
            $table->foreign('Id_Playa')->references('id')->on('playas');
            $table->integer('Id_RegistroRiesgo')->unsigned();
            $table->foreign('Id_RegistroRiesgo')->references('id')->on('riesgos_playas');
            $table->integer('Id_RegistroSuceso')->unsigned();
            $table->foreign('Id_RegistroSuceso')->references('id')->on('sucesos_playas');
            $table->integer('Id_RegistroAviso')->unsigned();
            $table->foreign('Id_RegistroAviso')->references('id')->on('avisos_playas');
            $table->string('Longitud');
            $table->string('Latitud');
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
        Schema::drop('poligonos');
    }
}
