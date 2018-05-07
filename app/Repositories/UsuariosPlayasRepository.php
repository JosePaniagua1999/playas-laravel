<?php

namespace App\Repositories;

use App\Models\UsuariosPlayas;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class UsuariosPlayasRepository
 * @package App\Repositories
 * @version May 7, 2018, 9:53 am UTC
 *
 * @method UsuariosPlayas findWithoutFail($id, $columns = ['*'])
 * @method UsuariosPlayas find($id, $columns = ['*'])
 * @method UsuariosPlayas first($columns = ['*'])
*/
class UsuariosPlayasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Id_Usuario',
        'Id_Playa'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return UsuariosPlayas::class;
    }
}
