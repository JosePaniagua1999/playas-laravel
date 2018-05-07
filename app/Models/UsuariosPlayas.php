<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class UsuariosPlayas
 * @package App\Models
 * @version May 7, 2018, 9:53 am UTC
 *
 * @property integer Id_Usuario
 * @property integer Id_Playa
 */
class UsuariosPlayas extends Model
{
    use SoftDeletes;

    public $table = 'usuarios_playas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Id_Usuario',
        'Id_Playa'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Id_Usuario' => 'integer',
        'Id_Playa' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
