<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Escalas
 * @package App\Models
 * @version May 7, 2018, 8:39 am UTC
 *
 * @property smallInteger Viento_Numero_Beaufort
 * @property string Viento_Velocidad
 * @property string Viento_Nudos
 * @property string Viento_Denominacion
 * @property string Viento_Aspecto_Mar
 * @property string Viento_Efectos_Tierra
 * @property string Oleaje_Altura
 * @property smallInteger Oleaje_Cifrado
 * @property string Oleaje_Nombre
 * @property string Marea_Altura
 * @property string Marea_Coeficiente
 * @property string Marea_Momento
 */
class Escalas extends Model
{
    use SoftDeletes;

    public $table = 'escalas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Viento_Numero_Beaufort',
        'Viento_Velocidad',
        'Viento_Nudos',
        'Viento_Denominacion',
        'Viento_Aspecto_Mar',
        'Viento_Efectos_Tierra',
        'Oleaje_Altura',
        'Oleaje_Cifrado',
        'Oleaje_Nombre',
        'Marea_Altura',
        'Marea_Coeficiente',
        'Marea_Momento'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Viento_Velocidad' => 'string',
        'Viento_Nudos' => 'string',
        'Viento_Denominacion' => 'string',
        'Viento_Aspecto_Mar' => 'string',
        'Viento_Efectos_Tierra' => 'string',
        'Oleaje_Altura' => 'string',
        'Oleaje_Nombre' => 'string',
        'Marea_Altura' => 'string',
        'Marea_Coeficiente' => 'string',
        'Marea_Momento' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
