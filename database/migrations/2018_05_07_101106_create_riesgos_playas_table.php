<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRiesgosPlayasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riesgos_playas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Id_Playa')->unsigned();
            $table->foreign('Id_Playa')->references('id')->on('playas');
            $table->integer('Id_Usuario')->unsigned();
            $table->foreign('Id_Usuario')->references('id')->on('users');
            $table->string('Nombre');
            $table->integer('Id_Riesgo')->unsigned();
            $table->foreign('Id_Riesgo')->references('id')->on('riesgos');
            $table->integer('Id_Tipo')->unsigned();
            $table->foreign('Id_Tipo')->references('id')->on('tipologia_riesgos');
            $table->boolean('Tipo');
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
        Schema::drop('riesgos_playas');
    }
}
