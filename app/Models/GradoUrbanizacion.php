<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class GradoUrbanizacion
 * @package App\Models
 * @version May 7, 2018, 9:03 am UTC
 *
 * @property string Detalle_Urbanizacion
 */
class GradoUrbanizacion extends Model
{
    use SoftDeletes;

    public $table = 'grado_urbanizacion';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Detalle_Urbanizacion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Detalle_Urbanizacion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
