<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSituacionesRiesgosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('situaciones_riesgos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Id_Registro_Riesgo')->unsigned();
            $table->foreign('Id_Registro_Riesgo')->references('id')->on('riesgos_playas');
            $table->boolean('Viento');
            $table->boolean('Oleaje');
            $table->boolean('Marea');
            $table->string('Direccion_Viento');
            $table->string('Viento_Velocidad');
            $table->string('Direccion_Oleaje');
            $table->string('Oleaje_Tamano');
            $table->string('Marea_Altura');
            $table->string('Marea_Coeficiente');
            $table->string('Marea_Momento');
            $table->string('Probabilidad');
            $table->string('Severidad');
            $table->string('Evaluacion');
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
        Schema::drop('situaciones_riesgos');
    }
}
