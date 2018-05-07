<?php

namespace App\Repositories;

use App\Models\Arenas;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ArenasRepository
 * @package App\Repositories
 * @version May 7, 2018, 8:59 am UTC
 *
 * @method Arenas findWithoutFail($id, $columns = ['*'])
 * @method Arenas find($id, $columns = ['*'])
 * @method Arenas first($columns = ['*'])
*/
class ArenasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Tipo_Arena'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Arenas::class;
    }
}
