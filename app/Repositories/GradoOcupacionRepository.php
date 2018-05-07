<?php

namespace App\Repositories;

use App\Models\GradoOcupacion;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class GradoOcupacionRepository
 * @package App\Repositories
 * @version May 7, 2018, 9:03 am UTC
 *
 * @method GradoOcupacion findWithoutFail($id, $columns = ['*'])
 * @method GradoOcupacion find($id, $columns = ['*'])
 * @method GradoOcupacion first($columns = ['*'])
*/
class GradoOcupacionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Detalle_Ocupacion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return GradoOcupacion::class;
    }
}
