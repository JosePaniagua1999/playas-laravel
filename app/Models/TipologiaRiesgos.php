<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TipologiaRiesgos
 * @package App\Models
 * @version May 7, 2018, 9:09 am UTC
 *
 * @property integer Id_Riesgo
 * @property string Detalle_Tipologia
 */
class TipologiaRiesgos extends Model
{
    use SoftDeletes;

    public $table = 'tipologia_riesgos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Id_Riesgo',
        'Detalle_Tipologia'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Id_Riesgo' => 'integer',
        'Detalle_Tipologia' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
