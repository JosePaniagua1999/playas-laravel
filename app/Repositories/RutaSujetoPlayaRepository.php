<?php

namespace App\Repositories;

use App\Models\RutaSujetoPlaya;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class RutaSujetoPlayaRepository
 * @package App\Repositories
 * @version May 7, 2018, 10:15 am UTC
 *
 * @method RutaSujetoPlaya findWithoutFail($id, $columns = ['*'])
 * @method RutaSujetoPlaya find($id, $columns = ['*'])
 * @method RutaSujetoPlaya first($columns = ['*'])
*/
class RutaSujetoPlayaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Id_Playa',
        'Id_Usuario'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return RutaSujetoPlaya::class;
    }
}
