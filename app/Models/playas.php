<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class playas
 * @package App\Models
 * @version May 7, 2018, 9:25 am UTC
 *
 * @property string Nombre_Playa
 * @property string Coord_Longitud
 * @property string Coord_Latitud
 * @property string Municipio
 * @property string Provincia
 * @property string CC_AA
 * @property float Longitud
 * @property integer Anchura
 * @property string Pendiente
 * @property integer G_Ocupacion
 * @property integer G_Urbanizacion
 * @property boolean Paseo_Maritimo
 * @property string Fachada
 * @property string Descripcion
 * @property string Morfologia
 * @property string Composicion
 * @property integer Tipo_Arena
 * @property string Tipo_Oleaje
 * @property string Viento
 * @property boolean Zona_Fondeo
 * @property boolean Nudismo
 * @property boolean Vegetacion
 * @property boolean Espacio_Protegido
 * @property boolean Actuaciones
 * @property boolean Bandera_Azul
 * @property string Nombre_Hospital
 * @property string Hospital_Direccion
 * @property boolean Acceso_Coches
 * @property boolean Acceso_Vehiculo_Emergencia
 * @property boolean Acceso_Helicopteros
 * @property boolean Senalizacion_Accesos
 * @property boolean Auxilio_Salvamento
 * @property string Periodo_Auxilio
 * @property string Horario_Auxilio_Inicio
 * @property string Horario_Auxilio_Fin
 * @property boolean Senalizacion_Peligro
 * @property boolean Accesibilidad_VehiculosEmergencia
 * @property boolean Accesibilidad_EmbarcacionesRescate
 * @property boolean Accesibilidad_Helipuerto
 * @property boolean Base_Operaciones
 * @property boolean Banderas
 * @property boolean Carteles_Informativos
 * @property boolean Megafonia
 * @property boolean Balizamiento_Terrestre
 * @property boolean Balizamiento_Acuatico
 * @property string Carretera_Proxima
 * @property string Observaciones_Autobus
 * @property string Tipo_Aparcamiento
 * @property string Nombre_Puerto_Deportivo
 * @property string Dist_Puerto_a_Playa
 * @property boolean Activa
 */
class playas extends Model
{
    use SoftDeletes;

    public $table = 'playas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Nombre_Playa',
        'Coord_Longitud',
        'Coord_Latitud',
        'Municipio',
        'Provincia',
        'CC_AA',
        'Longitud',
        'Anchura',
        'Pendiente',
        'G_Ocupacion',
        'G_Urbanizacion',
        'Paseo_Maritimo',
        'Fachada',
        'Descripcion',
        'Morfologia',
        'Composicion',
        'Tipo_Arena',
        'Tipo_Oleaje',
        'Viento',
        'Zona_Fondeo',
        'Nudismo',
        'Vegetacion',
        'Espacio_Protegido',
        'Actuaciones',
        'Bandera_Azul',
        'Nombre_Hospital',
        'Hospital_Direccion',
        'Acceso_Coches',
        'Acceso_Vehiculo_Emergencia',
        'Acceso_Helicopteros',
        'Senalizacion_Accesos',
        'Auxilio_Salvamento',
        'Periodo_Auxilio',
        'Horario_Auxilio_Inicio',
        'Horario_Auxilio_Fin',
        'Senalizacion_Peligro',
        'Accesibilidad_VehiculosEmergencia',
        'Accesibilidad_EmbarcacionesRescate',
        'Accesibilidad_Helipuerto',
        'Base_Operaciones',
        'Banderas',
        'Carteles_Informativos',
        'Megafonia',
        'Balizamiento_Terrestre',
        'Balizamiento_Acuatico',
        'Carretera_Proxima',
        'Observaciones_Autobus',
        'Tipo_Aparcamiento',
        'Nombre_Puerto_Deportivo',
        'Dist_Puerto_a_Playa',
        'Activa'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Nombre_Playa' => 'string',
        'Coord_Longitud' => 'string',
        'Coord_Latitud' => 'string',
        'Municipio' => 'string',
        'Provincia' => 'string',
        'CC_AA' => 'string',
        'Longitud' => 'float',
        'Anchura' => 'integer',
        'Pendiente' => 'string',
        'G_Ocupacion' => 'integer',
        'G_Urbanizacion' => 'integer',
        'Paseo_Maritimo' => 'boolean',
        'Fachada' => 'string',
        'Descripcion' => 'string',
        'Morfologia' => 'string',
        'Composicion' => 'string',
        'Tipo_Arena' => 'integer',
        'Tipo_Oleaje' => 'string',
        'Viento' => 'string',
        'Zona_Fondeo' => 'boolean',
        'Nudismo' => 'boolean',
        'Vegetacion' => 'boolean',
        'Espacio_Protegido' => 'boolean',
        'Actuaciones' => 'boolean',
        'Bandera_Azul' => 'boolean',
        'Nombre_Hospital' => 'string',
        'Hospital_Direccion' => 'string',
        'Acceso_Coches' => 'boolean',
        'Acceso_Vehiculo_Emergencia' => 'boolean',
        'Acceso_Helicopteros' => 'boolean',
        'Senalizacion_Accesos' => 'boolean',
        'Auxilio_Salvamento' => 'boolean',
        'Periodo_Auxilio' => 'string',
        'Horario_Auxilio_Inicio' => 'string',
        'Horario_Auxilio_Fin' => 'string',
        'Senalizacion_Peligro' => 'boolean',
        'Accesibilidad_VehiculosEmergencia' => 'boolean',
        'Accesibilidad_EmbarcacionesRescate' => 'boolean',
        'Accesibilidad_Helipuerto' => 'boolean',
        'Base_Operaciones' => 'boolean',
        'Banderas' => 'boolean',
        'Carteles_Informativos' => 'boolean',
        'Megafonia' => 'boolean',
        'Balizamiento_Terrestre' => 'boolean',
        'Balizamiento_Acuatico' => 'boolean',
        'Carretera_Proxima' => 'string',
        'Observaciones_Autobus' => 'string',
        'Tipo_Aparcamiento' => 'string',
        'Nombre_Puerto_Deportivo' => 'string',
        'Dist_Puerto_a_Playa' => 'string',
        'Activa' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
