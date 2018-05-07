<?php

namespace App\Repositories;

use App\Models\RolesUsuario;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class RolesUsuarioRepository
 * @package App\Repositories
 * @version May 7, 2018, 9:06 am UTC
 *
 * @method RolesUsuario findWithoutFail($id, $columns = ['*'])
 * @method RolesUsuario find($id, $columns = ['*'])
 * @method RolesUsuario first($columns = ['*'])
*/
class RolesUsuarioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Nombre_Rol'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return RolesUsuario::class;
    }
}
