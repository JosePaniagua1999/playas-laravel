<?php

namespace App\Repositories;

use App\Models\Sucesos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class SucesosRepository
 * @package App\Repositories
 * @version May 7, 2018, 9:07 am UTC
 *
 * @method Sucesos findWithoutFail($id, $columns = ['*'])
 * @method Sucesos find($id, $columns = ['*'])
 * @method Sucesos first($columns = ['*'])
*/
class SucesosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Detalle_Suceso'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Sucesos::class;
    }
}
