<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class MateriaLesApoyoAcuatico
 * @package App\Models
 * @version May 7, 2018, 8:54 am UTC
 *
 * @property string Material
 */
class MateriaLesApoyoAcuatico extends Model
{
    use SoftDeletes;

    public $table = 'materia_les_apoyo_acuaticos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Material'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Material' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
