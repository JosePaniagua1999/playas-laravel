<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class DistanciaDespTerrestre
 * @package App\Models
 * @version May 7, 2018, 9:00 am UTC
 *
 * @property string Distancias
 */
class DistanciaDespTerrestre extends Model
{
    use SoftDeletes;

    public $table = 'distancia_desp_terrestre';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Distancias'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Distancias' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
