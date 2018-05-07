<?php

namespace App\Repositories;

use App\Models\DistanciaDespTerrestre;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class DistanciaDespTerrestreRepository
 * @package App\Repositories
 * @version May 7, 2018, 9:00 am UTC
 *
 * @method DistanciaDespTerrestre findWithoutFail($id, $columns = ['*'])
 * @method DistanciaDespTerrestre find($id, $columns = ['*'])
 * @method DistanciaDespTerrestre first($columns = ['*'])
*/
class DistanciaDespTerrestreRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Distancias'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return DistanciaDespTerrestre::class;
    }
}
