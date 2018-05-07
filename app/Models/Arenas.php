<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Arenas
 * @package App\Models
 * @version May 7, 2018, 8:59 am UTC
 *
 * @property string Tipo_Arena
 */
class Arenas extends Model
{
    use SoftDeletes;

    public $table = 'arenas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Tipo_Arena'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Tipo_Arena' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
