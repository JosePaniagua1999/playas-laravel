<?php

namespace App\Repositories;

use App\Models\AnchurasPlayas;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AnchurasPlayasRepository
 * @package App\Repositories
 * @version May 7, 2018, 8:57 am UTC
 *
 * @method AnchurasPlayas findWithoutFail($id, $columns = ['*'])
 * @method AnchurasPlayas find($id, $columns = ['*'])
 * @method AnchurasPlayas first($columns = ['*'])
*/
class AnchurasPlayasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Detalle_Anchura'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return AnchurasPlayas::class;
    }
}
