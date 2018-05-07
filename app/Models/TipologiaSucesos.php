<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TipologiaSucesos
 * @package App\Models
 * @version May 7, 2018, 9:12 am UTC
 *
 * @property integer Id_RegistroSuceso
 * @property string Detalle_TipoSuceso
 */
class TipologiaSucesos extends Model
{
    use SoftDeletes;

    public $table = 'tipologia_sucesos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Id_RegistroSuceso',
        'Detalle_TipoSuceso'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Id_RegistroSuceso' => 'integer',
        'Detalle_TipoSuceso' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
