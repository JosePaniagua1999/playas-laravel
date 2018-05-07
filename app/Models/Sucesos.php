<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Sucesos
 * @package App\Models
 * @version May 7, 2018, 9:07 am UTC
 *
 * @property string Detalle_Suceso
 */
class Sucesos extends Model
{
    use SoftDeletes;

    public $table = 'sucesos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Detalle_Suceso'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Detalle_Suceso' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
