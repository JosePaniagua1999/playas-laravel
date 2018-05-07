<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PersonajesIniciaPrimerosAux
 * @package App\Models
 * @version May 7, 2018, 8:55 am UTC
 *
 * @property string Tipo_Personaje
 */
class PersonajesIniciaPrimerosAux extends Model
{
    use SoftDeletes;

    public $table = 'personajes_inicia_primeros_auxes';
    

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
