<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ListaServicios
 * @package App\Models
 * @version May 7, 2018, 9:04 am UTC
 *
 * @property string Descripcion
 * @property boolean Ubicacion
 */
class ListaServicios extends Model
{
    use SoftDeletes;

    public $table = 'lista_servicios';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Descripcion',
        'Ubicacion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Descripcion' => 'string',
        'Ubicacion' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
