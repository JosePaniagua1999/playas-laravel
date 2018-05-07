<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class SituacionesRiesgos
 * @package App\Models
 * @version May 7, 2018, 10:14 am UTC
 *
 * @property integer Id_Registro_Riesgo
 * @property boolean Viento
 * @property boolean Oleaje
 * @property boolean Marea
 * @property string Direccion_Viento
 * @property string Viento_Velocidad
 * @property string Direccion_Oleaje
 * @property string Oleaje_Tamano
 * @property string Marea_Altura
 * @property string Marea_Coeficiente
 * @property string Marea_Momento
 * @property string Probabilidad
 * @property string Severidad
 * @property string Evaluacion
 */
class SituacionesRiesgos extends Model
{
    use SoftDeletes;

    public $table = 'situaciones_riesgos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Id_Registro_Riesgo',
        'Viento',
        'Oleaje',
        'Marea',
        'Direccion_Viento',
        'Viento_Velocidad',
        'Direccion_Oleaje',
        'Oleaje_Tamano',
        'Marea_Altura',
        'Marea_Coeficiente',
        'Marea_Momento',
        'Probabilidad',
        'Severidad',
        'Evaluacion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Id_Registro_Riesgo' => 'integer',
        'Viento' => 'boolean',
        'Oleaje' => 'boolean',
        'Marea' => 'boolean',
        'Direccion_Viento' => 'string',
        'Viento_Velocidad' => 'string',
        'Direccion_Oleaje' => 'string',
        'Oleaje_Tamano' => 'string',
        'Marea_Altura' => 'string',
        'Marea_Coeficiente' => 'string',
        'Marea_Momento' => 'string',
        'Probabilidad' => 'string',
        'Severidad' => 'string',
        'Evaluacion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
