<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PersonajesParticipaPimerosAux
 * @package App\Models
 * @version May 7, 2018, 8:56 am UTC
 *
 * @property string Tipo_Participante
 */
class PersonajesParticipaPimerosAux extends Model
{
    use SoftDeletes;

    public $table = 'personajes_participa_pimeros_auxes';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Tipo_Participante'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Tipo_Participante' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
