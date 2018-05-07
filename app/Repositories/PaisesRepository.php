<?php

namespace App\Repositories;

use App\Models\Paises;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PaisesRepository
 * @package App\Repositories
 * @version May 7, 2018, 9:05 am UTC
 *
 * @method Paises findWithoutFail($id, $columns = ['*'])
 * @method Paises find($id, $columns = ['*'])
 * @method Paises first($columns = ['*'])
*/
class PaisesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'iso',
        'nombre'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Paises::class;
    }
}
