<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePersonajesParticipaPimerosAuxesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personajes_participa_pimeros_auxes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Tipo_Participante');
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
        Schema::drop('personajes_participa_pimeros_auxes');
    }
}
