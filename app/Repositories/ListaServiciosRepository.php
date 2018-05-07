<?php

namespace App\Repositories;

use App\Models\ListaServicios;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ListaServiciosRepository
 * @package App\Repositories
 * @version May 7, 2018, 9:04 am UTC
 *
 * @method ListaServicios findWithoutFail($id, $columns = ['*'])
 * @method ListaServicios find($id, $columns = ['*'])
 * @method ListaServicios first($columns = ['*'])
*/
class ListaServiciosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Descripcion',
        'Ubicacion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ListaServicios::class;
    }
}
