<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePersonajesIniciaPrimerosAuxesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personajes_inicia_primeros_auxes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Tipo_Personaje');
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
        Schema::drop('personajes_inicia_primeros_auxes');
    }
}
