<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTipologiaSucesosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipologia_sucesos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Id_RegistroSuceso')->unsigned();
            $table->foreign('Id_RegistroSuceso')->references('id')->on('sucesos');
            $table->string('Detalle_TipoSuceso');
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
        Schema::drop('tipologia_sucesos');
    }
}
