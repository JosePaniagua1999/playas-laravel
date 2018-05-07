<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ConsecuenciasSuccesos
 * @package App\Models
 * @version May 7, 2018, 8:59 am UTC
 *
 * @property string Detalle_Consecuencia
 */
class ConsecuenciasSucesos extends Model
{
    use SoftDeletes;

    public $table = 'consecuencias_sucesos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Detalle_Consecuencia'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Detalle_Consecuencia' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
