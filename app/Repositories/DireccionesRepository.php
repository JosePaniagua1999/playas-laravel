<?php

namespace App\Repositories;

use App\Models\Direcciones;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class DireccionesRepository
 * @package App\Repositories
 * @version May 7, 2018, 8:52 am UTC
 *
 * @method Direcciones findWithoutFail($id, $columns = ['*'])
 * @method Direcciones find($id, $columns = ['*'])
 * @method Direcciones first($columns = ['*'])
*/
class DireccionesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Abreviatura_Direccion',
        'Detalle_Direccion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Direcciones::class;
    }
}
