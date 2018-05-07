<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTipologiaRiesgosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipologia_riesgos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Id_Riesgo')->unsigned();
            $table->foreign('Id_Riesgo')->references('id')->on('riesgos');
            $table->string('Detalle_Tipologia');
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
        Schema::drop('tipologia_riesgos');
    }
}
