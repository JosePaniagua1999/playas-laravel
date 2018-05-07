<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Poligonos
 * @package App\Models
 * @version May 7, 2018, 10:21 am UTC
 *
 * @property integer Id_Playa
 * @property integer Id_RegistroRiesgo
 * @property integer Id_RegistroSuceso
 * @property integer Id_RegistroAviso
 * @property string Longitud
 * @property string Latitud
 */
class Poligonos extends Model
{
    use SoftDeletes;

    public $table = 'poligonos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Id_Playa',
        'Id_RegistroRiesgo',
        'Id_RegistroSuceso',
        'Id_RegistroAviso',
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
        'Id_RegistroRiesgo' => 'integer',
        'Id_RegistroSuceso' => 'integer',
        'Id_RegistroAviso' => 'integer',
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
