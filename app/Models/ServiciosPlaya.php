<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ServiciosPlaya
 * @package App\Models
 * @version May 7, 2018, 9:41 am UTC
 *
 * @property integer Id_Playa
 * @property integer Id_TipoServicio
 * @property string Servicio_Descripcion
 * @property string Servicio_Latitud
 * @property string Servicio_Longitud
 * @property string Servicio_Icono
 */
class ServiciosPlaya extends Model
{
    use SoftDeletes;

    public $table = 'servicios_playas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Id_Playa',
        'Id_TipoServicio',
        'Servicio_Descripcion',
        'Servicio_Latitud',
        'Servicio_Longitud',
        'Servicio_Icono'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Id_Playa' => 'integer',
        'Id_TipoServicio' => 'integer',
        'Servicio_Descripcion' => 'string',
        'Servicio_Latitud' => 'string',
        'Servicio_Longitud' => 'string',
        'Servicio_Icono' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
