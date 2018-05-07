<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Paises
 * @package App\Models
 * @version May 7, 2018, 9:05 am UTC
 *
 * @property char iso
 * @property string nombre
 */
class Paises extends Model
{
    use SoftDeletes;

    public $table = 'paises';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'iso',
        'nombre'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'iso' => 'string',
        'nombre' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
