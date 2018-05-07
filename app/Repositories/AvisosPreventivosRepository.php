<?php

namespace App\Repositories;

use App\Models\AvisosPreventivos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AvisosPreventivosRepository
 * @package App\Repositories
 * @version May 7, 2018, 8:58 am UTC
 *
 * @method AvisosPreventivos findWithoutFail($id, $columns = ['*'])
 * @method AvisosPreventivos find($id, $columns = ['*'])
 * @method AvisosPreventivos first($columns = ['*'])
*/
class AvisosPreventivosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Detalle_Avisos',
        'Tipo_Aviso'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return AvisosPreventivos::class;
    }
}
