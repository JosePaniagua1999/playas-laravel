<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRutaSujetoPlayasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ruta_sujeto_playas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Id_Playa')->unsigned();
            $table->foreign('Id_Playa')->references('id')->on('playas');
            $table->integer('Id_Usuario')->unsigned();
            $table->foreign('Id_Usuario')->references('id')->on('users');
            $table->integer('Id_Pais')->unsigned();
            $table->foreign('Id_Pais')->references('id')->on('paises');
            $table->integer('Id_RegistroAviso')->unsigned();
            $table->foreign('Id_RegistroAviso')->references('id')->on('avisos_playas');
            $table->integer('Id_RegistroSuceso')->unsigned();            
            $table->foreign('Id_RegistroSuceso')->references('id')->on('sucesos_playas');
            $table->date('Fecha');   
            $table->time('Hora');   
            $table->string('Sexo');
            $table->string('Edad');
            $table->integer('Id_Actividad')->unsigned();            
            $table->foreign('Id_Actividad')->references('id')->on('actividades_sujetos');
            $table->string('Otra_Actividad');            
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
        Schema::drop('ruta_sujeto_playas');
    }
}
