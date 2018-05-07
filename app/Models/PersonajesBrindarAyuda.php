<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PersonajesBrindarAyuda
 * @package App\Models
 * @version May 7, 2018, 8:55 am UTC
 *
 * @property string Tipo_Personaje
 */
class PersonajesBrindarAyuda extends Model
{
    use SoftDeletes;

    public $table = 'personajes_brindar_ayudas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Tipo_Personaje'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Tipo_Personaje' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
