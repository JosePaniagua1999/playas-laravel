<?php

namespace App\Repositories;

use App\Models\MateriaLesApoyoAcuatico;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class MateriaLesApoyoAcuaticoRepository
 * @package App\Repositories
 * @version May 7, 2018, 8:54 am UTC
 *
 * @method MateriaLesApoyoAcuatico findWithoutFail($id, $columns = ['*'])
 * @method MateriaLesApoyoAcuatico find($id, $columns = ['*'])
 * @method MateriaLesApoyoAcuatico first($columns = ['*'])
*/
class MateriaLesApoyoAcuaticoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Material'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return MateriaLesApoyoAcuatico::class;
    }
}
