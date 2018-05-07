<?php

namespace App\Repositories;

use App\Models\GradoUrbanizacion;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class GradoUrbanizacionRepository
 * @package App\Repositories
 * @version May 7, 2018, 9:03 am UTC
 *
 * @method GradoUrbanizacion findWithoutFail($id, $columns = ['*'])
 * @method GradoUrbanizacion find($id, $columns = ['*'])
 * @method GradoUrbanizacion first($columns = ['*'])
*/
class GradoUrbanizacionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Detalle_Urbanizacion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return GradoUrbanizacion::class;
    }
}
