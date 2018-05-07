<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class RolesUsuario
 * @package App\Models
 * @version May 7, 2018, 9:06 am UTC
 *
 * @property string Nombre_Rol
 */
class RolesUsuario extends Model
{
    use SoftDeletes;

    public $table = 'roles_usuarios';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Nombre_Rol'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Nombre_Rol' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
