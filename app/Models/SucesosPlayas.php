<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class SucesosPlayas
 * @package App\Models
 * @version May 7, 2018, 10:01 am UTC
 *
 * @property integer Id_Playa
 * @property integer Id_Usuario
 * @property integer Id_Percepcion
 * @property boolean DentroFuera_Horario
 * @property integer Id_Suceso
 * @property integer Id_TipoSuceso
 * @property integer Id_Consecuencia
 * @property string Lugar
 * @property integer Distancia_Terrestre
 * @property string Tipo_Desplazamiento
 * @property boolean Traslado_PrimerosAux
 * @property string Tipo_Traslado
 * @property integer Distancia_Acuatica
 * @property string Profundidad
 * @property string Materiales_Apoyo
 * @property string Estado_Accidentado
 * @property boolean Ventilaciones
 * @property boolean Vias_Aereas
 * @property boolean Remolque
 * @property boolean Ayuda_Recibida
 * @property string Personaje_Ayuda
 * @property string Tipo_Extraccion
 * @property time Tiempos_Desplazamiento_Terrestre
 * @property time Tiempos_Desplazamiento_Acuatico
 * @property boolean RCP
 * @property time RCP_Min
 * @property boolean DESA
 * @property time DESA_Min
 * @property integer Num_Descargas
 * @property string Quien_Inicia
 * @property string Quien_Participa
 */
class SucesosPlayas extends Model
{
    use SoftDeletes;

    public $table = 'sucesos_playas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Id_Playa',
        'Id_Usuario',
        'Id_Percepcion',
        'DentroFuera_Horario',
        'Id_Suceso',
        'Id_TipoSuceso',
        'Id_Consecuencia',
        'Lugar',
        'Distancia_Terrestre',
        'Tipo_Desplazamiento',
        'Traslado_PrimerosAux',
        'Tipo_Traslado',
        'Distancia_Acuatica',
        'Profundidad',
        'Materiales_Apoyo',
        'Estado_Accidentado',
        'Ventilaciones',
        'Vias_Aereas',
        'Remolque',
        'Ayuda_Recibida',
        'Personaje_Ayuda',
        'Tipo_Extraccion',
        'Tiempos_Desplazamiento_Terrestre',
        'Tiempos_Desplazamiento_Acuatico',
        'RCP',
        'RCP_Min',
        'DESA',
        'DESA_Min',
        'Num_Descargas',
        'Quien_Inicia',
        'Quien_Participa'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Id_Playa' => 'integer',
        'Id_Usuario' => 'integer',
        'Id_Percepcion' => 'integer',
        'DentroFuera_Horario' => 'boolean',
        'Id_Suceso' => 'integer',
        'Id_TipoSuceso' => 'integer',
        'Id_Consecuencia' => 'integer',
        'Lugar' => 'string',
        'Distancia_Terrestre' => 'integer',
        'Tipo_Desplazamiento' => 'string',
        'Traslado_PrimerosAux' => 'boolean',
        'Tipo_Traslado' => 'string',
        'Distancia_Acuatica' => 'integer',
        'Profundidad' => 'string',
        'Materiales_Apoyo' => 'string',
        'Estado_Accidentado' => 'string',
        'Ventilaciones' => 'boolean',
        'Vias_Aereas' => 'boolean',
        'Remolque' => 'boolean',
        'Ayuda_Recibida' => 'boolean',
        'Personaje_Ayuda' => 'string',
        'Tipo_Extraccion' => 'string',
        'RCP' => 'boolean',
        'DESA' => 'boolean',
        'Num_Descargas' => 'integer',
        'Quien_Inicia' => 'string',
        'Quien_Participa' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
