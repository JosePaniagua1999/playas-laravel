<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class AvisosPlaya
 * @package App\Models
 * @version May 7, 2018, 9:43 am UTC
 *
 * @property integer Id_Playa
 * @property integer Id_Usuario
 * @property integer Id_Avisos
 */
class AvisosPlaya extends Model
{
    use SoftDeletes;

    public $table = 'avisos_playas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Id_Playa',
        'Id_Usuario',
        'Id_Avisos'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Id_Playa' => 'integer',
        'Id_Usuario' => 'integer',
        'Id_Avisos' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
