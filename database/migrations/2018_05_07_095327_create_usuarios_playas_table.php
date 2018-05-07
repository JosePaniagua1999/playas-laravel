<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsuariosPlayasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios_playas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Id_Usuario')->unsigned();
            $table->foreign('Id_Usuario')->references('id')->on('users');          
            $table->integer('Id_Playa')->unsigned();
            $table->foreign('Id_Playa')->references('id')->on('playas');
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
        Schema::drop('usuarios_playas');
    }
}
