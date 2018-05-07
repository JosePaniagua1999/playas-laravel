<?php

namespace App\Repositories;

use App\Models\Poligonos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PoligonosRepository
 * @package App\Repositories
 * @version May 7, 2018, 10:21 am UTC
 *
 * @method Poligonos findWithoutFail($id, $columns = ['*'])
 * @method Poligonos find($id, $columns = ['*'])
 * @method Poligonos first($columns = ['*'])
*/
class PoligonosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Id_Playa',
        'Id_RegistroRiesgo',
        'Id_RegistroSuceso',
        'Id_RegistroAviso',
        'Longitud',
        'Latitud'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Poligonos::class;
    }
}
