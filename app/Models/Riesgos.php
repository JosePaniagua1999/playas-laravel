<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Riesgos
 * @package App\Models
 * @version May 7, 2018, 9:06 am UTC
 *
 * @property string Detalle_Riesgo
 */
class Riesgos extends Model
{
    use SoftDeletes;

    public $table = 'riesgos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Detalle_Riesgo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Detalle_Riesgo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
