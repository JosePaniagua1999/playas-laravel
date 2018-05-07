<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSucesosPlayasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sucesos_playas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Id_Playa')->unsigned();
            $table->foreign('Id_Playa')->references('id')->on('playas');
            $table->integer('Id_Usuario')->unsigned();
            $table->foreign('Id_Usuario')->references('id')->on('users');
            $table->integer('Id_Percepcion')->unsigned();
            $table->foreign('Id_Percepcion')->references('id')->on('percepcion_sucesos');
            $table->boolean('DentroFuera_Horario');
            $table->integer('Id_Suceso')->unsigned();
            $table->foreign('Id_Suceso')->references('id')->on('sucesos');
            $table->integer('Id_TipoSuceso')->unsigned();
            $table->foreign('Id_TipoSuceso')->references('id')->on('tipologia_sucesos');
            $table->integer('Id_Consecuencia')->unsigned();
            $table->foreign('Id_Consecuencia')->references('id')->on('consecuencias_sucesos');
            $table->string('Lugar');
            $table->integer('Distancia_Terrestre')->unsigned();
            $table->foreign('Distancia_Terrestre')->references('id')->on('distancia_desp_terrestre');
            $table->string('Tipo_Desplazamiento');
            $table->boolean('Traslado_PrimerosAux');
            $table->string('Tipo_Traslado');
            $table->integer('Distancia_Acuatica')->unsigned();
            $table->foreign('Distancia_Acuatica')->references('id')->on('distancia_desp_acuatico');
            $table->string('Profundidad');
            $table->string('Materiales_Apoyo');
            $table->string('Estado_Accidentado');
            $table->boolean('Ventilaciones');
            $table->boolean('Vias_Aereas');
            $table->boolean('Remolque');
            $table->boolean('Ayuda_Recibida');
            $table->string('Personaje_Ayuda');
            $table->string('Tipo_Extraccion');
            $table->time('Tiempos_Desplazamiento_Terrestre');
            $table->time('Tiempos_Desplazamiento_Acuatico');
            $table->boolean('RCP');
            $table->time('RCP_Min');
            $table->boolean('DESA');
            $table->time('DESA_Min');
            $table->integer('Num_Descargas');
            $table->string('Quien_Inicia');
            $table->string('Quien_Participa');
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
        Schema::drop('sucesos_playas');
    }
}
