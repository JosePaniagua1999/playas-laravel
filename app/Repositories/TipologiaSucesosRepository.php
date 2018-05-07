<?php

namespace App\Repositories;

use App\Models\TipologiaSucesos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TipologiaSucesosRepository
 * @package App\Repositories
 * @version May 7, 2018, 9:12 am UTC
 *
 * @method TipologiaSucesos findWithoutFail($id, $columns = ['*'])
 * @method TipologiaSucesos find($id, $columns = ['*'])
 * @method TipologiaSucesos first($columns = ['*'])
*/
class TipologiaSucesosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Id_RegistroSuceso',
        'Detalle_TipoSuceso'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TipologiaSucesos::class;
    }
}
