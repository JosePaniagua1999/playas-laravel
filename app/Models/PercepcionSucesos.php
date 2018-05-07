<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PercepcionSucesos
 * @package App\Models
 * @version May 7, 2018, 9:05 am UTC
 *
 * @property string Percepcion
 */
class PercepcionSucesos extends Model
{
    use SoftDeletes;

    public $table = 'percepcion_sucesos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Percepcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Percepcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
