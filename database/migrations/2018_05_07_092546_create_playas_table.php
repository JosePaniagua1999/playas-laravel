<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateplayasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nombre_Playa');
            $table->string('Coord_Longitud');
            $table->string('Coord_Latitud');
            $table->string('Municipio');
            $table->string('Provincia');
            $table->string('CC_AA');
            $table->float('Longitud');
            $table->integer('Anchura')->unsigned();
            $table->foreign('Anchura')->references('id')->on('anchuras_playas');
            $table->string('Pendiente');
            $table->integer('G_Ocupacion')->unsigned();
            $table->foreign('G_Ocupacion')->references('id')->on('grado_ocupacion');
            $table->integer('G_Urbanizacion')->unsigned();
            $table->foreign('G_Urbanizacion')->references('id')->on('grado_urbanizacion');
            $table->boolean('Paseo_Maritimo');
            $table->string('Fachada');
            $table->string('Descripcion');
            $table->string('Morfologia');
            $table->string('Composicion');
            $table->integer('Tipo_Arena')->unsigned();
            $table->foreign('Tipo_Arena')->references('id')->on('arenas');
            $table->string('Tipo_Oleaje');
            $table->string('Viento');
            $table->boolean('Zona_Fondeo');
            $table->boolean('Nudismo');
            $table->boolean('Vegetacion');
            $table->boolean('Espacio_Protegido');
            $table->boolean('Actuaciones');
            $table->boolean('Bandera_Azul');
            $table->string('Nombre_Hospital');
            $table->string('Hospital_Direccion');
            $table->boolean('Acceso_Coches');
            $table->boolean('Acceso_Vehiculo_Emergencia');
            $table->boolean('Acceso_Helicopteros');
            $table->boolean('Senalizacion_Accesos');
            $table->boolean('Auxilio_Salvamento');
            $table->string('Periodo_Auxilio');
            $table->string('Horario_Auxilio_Inicio');
            $table->string('Horario_Auxilio_Fin');
            $table->boolean('Senalizacion_Peligro');
            $table->boolean('Accesibilidad_VehiculosEmergencia');
            $table->boolean('Accesibilidad_EmbarcacionesRescate');
            $table->boolean('Accesibilidad_Helipuerto');
            $table->boolean('Base_Operaciones');
            $table->boolean('Banderas');
            $table->boolean('Carteles_Informativos');
            $table->boolean('Megafonia');
            $table->boolean('Balizamiento_Terrestre');
            $table->boolean('Balizamiento_Acuatico');
            $table->string('Carretera_Proxima');
            $table->string('Observaciones_Autobus');
            $table->string('Tipo_Aparcamiento');
            $table->string('Nombre_Puerto_Deportivo');
            $table->string('Dist_Puerto_a_Playa');
            $table->boolean('Activa');
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
        Schema::drop('playas');
    }
}
