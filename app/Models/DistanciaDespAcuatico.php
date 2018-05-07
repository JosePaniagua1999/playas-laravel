<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class DistanciaDespAcuatico
 * @package App\Models
 * @version May 7, 2018, 9:00 am UTC
 *
 * @property string Distancia
 */
class DistanciaDespAcuatico extends Model
{
    use SoftDeletes;

    public $table = 'distancia_desp_acuatico';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Distancia'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Distancia' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
