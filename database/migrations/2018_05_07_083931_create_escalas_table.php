<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEscalasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escalas', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('Viento_Numero_Beaufort');
            $table->string('Viento_Velocidad');
            $table->string('Viento_Nudos');
            $table->string('Viento_Denominacion');
            $table->string('Viento_Aspecto_Mar');
            $table->string('Viento_Efectos_Tierra');
            $table->string('Oleaje_Altura');
            $table->smallInteger('Oleaje_Cifrado');
            $table->string('Oleaje_Nombre');
            $table->string('Marea_Altura');
            $table->string('Marea_Coeficiente');
            $table->string('Marea_Momento');
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
        Schema::drop('escalas');
    }
}
