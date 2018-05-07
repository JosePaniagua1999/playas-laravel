<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class RutaSujetoPlaya
 * @package App\Models
 * @version May 7, 2018, 10:15 am UTC
 *
 * @property integer Id_Playa
 * @property integer Id_Usuario
 */
class RutaSujetoPlaya extends Model
{
    use SoftDeletes;

    public $table = 'ruta_sujeto_playas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Id_Playa',
        'Id_Usuario'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Id_Playa' => 'integer',
        'Id_Usuario' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
