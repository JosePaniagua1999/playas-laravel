<?php

namespace App\Repositories;

use App\Models\TipologiaRiesgos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TipologiaRiesgosRepository
 * @package App\Repositories
 * @version May 7, 2018, 9:09 am UTC
 *
 * @method TipologiaRiesgos findWithoutFail($id, $columns = ['*'])
 * @method TipologiaRiesgos find($id, $columns = ['*'])
 * @method TipologiaRiesgos first($columns = ['*'])
*/
class TipologiaRiesgosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Id_Riesgo',
        'Detalle_Tipologia'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TipologiaRiesgos::class;
    }
}
