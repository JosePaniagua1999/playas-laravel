<?php

namespace App\Repositories;

use App\Models\ConsecuenciasSuccesos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ConsecuenciasSuccesosRepository
 * @package App\Repositories
 * @version May 7, 2018, 8:59 am UTC
 *
 * @method ConsecuenciasSuccesos findWithoutFail($id, $columns = ['*'])
 * @method ConsecuenciasSuccesos find($id, $columns = ['*'])
 * @method ConsecuenciasSuccesos first($columns = ['*'])
*/
class ConsecuenciasSuccesosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Detalle_Consecuencia'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ConsecuenciasSuccesos::class;
    }
}
