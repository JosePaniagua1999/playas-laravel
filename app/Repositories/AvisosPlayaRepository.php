<?php

namespace App\Repositories;

use App\Models\AvisosPlaya;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AvisosPlayaRepository
 * @package App\Repositories
 * @version May 7, 2018, 9:43 am UTC
 *
 * @method AvisosPlaya findWithoutFail($id, $columns = ['*'])
 * @method AvisosPlaya find($id, $columns = ['*'])
 * @method AvisosPlaya first($columns = ['*'])
*/
class AvisosPlayaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Id_Playa',
        'Id_Usuario',
        'Id_Avisos'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return AvisosPlaya::class;
    }
}
