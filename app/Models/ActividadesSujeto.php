<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ActividadesSujeto
 * @package App\Models
 * @version May 7, 2018, 8:57 am UTC
 *
 * @property string Actividad
 */
class ActividadesSujeto extends Model
{
    use SoftDeletes;

    public $table = 'actividades_sujetos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Actividad'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Actividad' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
