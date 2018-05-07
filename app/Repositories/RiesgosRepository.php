<?php

namespace App\Repositories;

use App\Models\Riesgos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class RiesgosRepository
 * @package App\Repositories
 * @version May 7, 2018, 9:06 am UTC
 *
 * @method Riesgos findWithoutFail($id, $columns = ['*'])
 * @method Riesgos find($id, $columns = ['*'])
 * @method Riesgos first($columns = ['*'])
*/
class RiesgosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Detalle_Riesgo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Riesgos::class;
    }
}
