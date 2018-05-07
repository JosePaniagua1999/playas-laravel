<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class AvisosPreventivos
 * @package App\Models
 * @version May 7, 2018, 8:58 am UTC
 *
 * @property string Detalle_Avisos
 * @property boolean Tipo_Aviso
 */
class AvisosPreventivos extends Model
{
    use SoftDeletes;

    public $table = 'avisos_preventivos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Detalle_Avisos',
        'Tipo_Aviso'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Detalle_Avisos' => 'string',
        'Tipo_Aviso' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
