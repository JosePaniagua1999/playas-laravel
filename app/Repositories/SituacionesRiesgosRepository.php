<?php

namespace App\Repositories;

use App\Models\SituacionesRiesgos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class SituacionesRiesgosRepository
 * @package App\Repositories
 * @version May 7, 2018, 10:14 am UTC
 *
 * @method SituacionesRiesgos findWithoutFail($id, $columns = ['*'])
 * @method SituacionesRiesgos find($id, $columns = ['*'])
 * @method SituacionesRiesgos first($columns = ['*'])
*/
class SituacionesRiesgosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Id_Registro_Riesgo',
        'Viento',
        'Oleaje',
        'Marea',
        'Direccion_Viento',
        'Viento_Velocidad',
        'Direccion_Oleaje',
        'Oleaje_Tamano',
        'Marea_Altura',
        'Marea_Coeficiente',
        'Marea_Momento',
        'Probabilidad',
        'Severidad',
        'Evaluacion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return SituacionesRiesgos::class;
    }
}
