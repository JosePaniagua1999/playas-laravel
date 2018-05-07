<?php

namespace App\Repositories;

use App\Models\ServiciosPlaya;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ServiciosPlayaRepository
 * @package App\Repositories
 * @version May 7, 2018, 9:41 am UTC
 *
 * @method ServiciosPlaya findWithoutFail($id, $columns = ['*'])
 * @method ServiciosPlaya find($id, $columns = ['*'])
 * @method ServiciosPlaya first($columns = ['*'])
*/
class ServiciosPlayaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Id_Playa',
        'Id_TipoServicio',
        'Servicio_Descripcion',
        'Servicio_Latitud',
        'Servicio_Longitud',
        'Servicio_Icono'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ServiciosPlaya::class;
    }
}
