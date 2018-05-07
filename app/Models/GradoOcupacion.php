<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class GradoOcupacion
 * @package App\Models
 * @version May 7, 2018, 9:03 am UTC
 *
 * @property string Detalle_Ocupacion
 */
class GradoOcupacion extends Model
{
    use SoftDeletes;

    public $table = 'grado_ocupacion';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Detalle_Ocupacion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Detalle_Ocupacion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
