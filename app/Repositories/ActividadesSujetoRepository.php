<?php

namespace App\Repositories;

use App\Models\ActividadesSujeto;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ActividadesSujetoRepository
 * @package App\Repositories
 * @version May 7, 2018, 8:57 am UTC
 *
 * @method ActividadesSujeto findWithoutFail($id, $columns = ['*'])
 * @method ActividadesSujeto find($id, $columns = ['*'])
 * @method ActividadesSujeto first($columns = ['*'])
*/
class ActividadesSujetoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Actividad'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ActividadesSujeto::class;
    }
}
