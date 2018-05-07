<?php

namespace App\Repositories;

use App\Models\PercepcionSucesos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PercepcionSucesosRepository
 * @package App\Repositories
 * @version May 7, 2018, 9:05 am UTC
 *
 * @method PercepcionSucesos findWithoutFail($id, $columns = ['*'])
 * @method PercepcionSucesos find($id, $columns = ['*'])
 * @method PercepcionSucesos first($columns = ['*'])
*/
class PercepcionSucesosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Percepcion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PercepcionSucesos::class;
    }
}
