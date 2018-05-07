<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nombre_Usuario');
            $table->string('Correo_Electronico');
            $table->string('Contrasena');
            $table->string('Experiencia');
            $table->integer('Temporadas_Socorrista');
            $table->string('Lugar_Experiencia');
            $table->string('Formacion');
            $table->integer('Hora_Formacion');
            $table->integer('Anio_Formacion');
            $table->string('Entidad_Formadora');
            $table->string('Sexo');
            $table->string('Codigo');
            $table->dateTime('Fecha_Ini');
            $table->integer('Id_Rol')->unsigned();
            $table->foreign('Id_Rol')->references('id')->on('roles_usuarios');
            $table->integer('Id_Creado_Por');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
