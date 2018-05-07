<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Direcciones
 * @package App\Models
 * @version May 7, 2018, 8:52 am UTC
 *
 * @property string Abreviatura_Direccion
 * @property string Detalle_Direccion
 */
class Direcciones extends Model
{
    use SoftDeletes;

    public $table = 'direcciones';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Abreviatura_Direccion',
        'Detalle_Direccion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Abreviatura_Direccion' => 'string',
        'Detalle_Direccion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
