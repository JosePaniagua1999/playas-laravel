<?php

namespace App\Repositories;

use App\Models\RiesgosPlaya;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class RiesgosPlayaRepository
 * @package App\Repositories
 * @version May 7, 2018, 10:11 am UTC
 *
 * @method RiesgosPlaya findWithoutFail($id, $columns = ['*'])
 * @method RiesgosPlaya find($id, $columns = ['*'])
 * @method RiesgosPlaya first($columns = ['*'])
*/
class RiesgosPlayaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Id_Playa',
        'Id_Usuario',
        'Nombre',
        'Id_Riesgo',
        'Id_Tipo',
        'Tipo',
        'Longitud',
        'Latitud'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return RiesgosPlaya::class;
    }
}
