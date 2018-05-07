<?php

namespace App\Repositories;

use App\Models\DistanciaDespAcuatico;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class DistanciaDespAcuaticoRepository
 * @package App\Repositories
 * @version May 7, 2018, 9:00 am UTC
 *
 * @method DistanciaDespAcuatico findWithoutFail($id, $columns = ['*'])
 * @method DistanciaDespAcuatico find($id, $columns = ['*'])
 * @method DistanciaDespAcuatico first($columns = ['*'])
*/
class DistanciaDespAcuaticoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Distancia'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return DistanciaDespAcuatico::class;
    }
}
