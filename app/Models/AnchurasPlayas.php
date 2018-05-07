<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class AnchurasPlayas
 * @package App\Models
 * @version May 7, 2018, 8:57 am UTC
 *
 * @property string Detalle_Anchura
 */
class AnchurasPlayas extends Model
{
    use SoftDeletes;

    public $table = 'anchuras_playas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Detalle_Anchura'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Detalle_Anchura' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
