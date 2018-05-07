<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class RiesgosPlaya
 * @package App\Models
 * @version May 7, 2018, 10:11 am UTC
 *
 * @property integer Id_Playa
 * @property integer Id_Usuario
 * @property string Nombre
 * @property integer Id_Riesgo
 * @property integer Id_Tipo
 * @property boolean Tipo
 * @property string Longitud
 * @property string Latitud
 */
class RiesgosPlaya extends Model
{
    use SoftDeletes;

    public $table = 'riesgos_playas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Id_Playa',
        'Id_Usuario',
        'Nombre',
        'Id_Riesgo',
        'Id_Tipo',
        'Tipo',
        'Longitud',
        'Latitud'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Id_Playa' => 'integer',
        'Id_Usuario' => 'integer',
        'Nombre' => 'string',
        'Id_Riesgo' => 'integer',
        'Id_Tipo' => 'integer',
        'Tipo' => 'boolean',
        'Longitud' => 'string',
        'Latitud' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
