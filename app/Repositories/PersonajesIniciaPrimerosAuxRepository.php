<?php

namespace App\Repositories;

use App\Models\PersonajesIniciaPrimerosAux;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PersonajesIniciaPrimerosAuxRepository
 * @package App\Repositories
 * @version May 7, 2018, 8:55 am UTC
 *
 * @method PersonajesIniciaPrimerosAux findWithoutFail($id, $columns = ['*'])
 * @method PersonajesIniciaPrimerosAux find($id, $columns = ['*'])
 * @method PersonajesIniciaPrimerosAux first($columns = ['*'])
*/
class PersonajesIniciaPrimerosAuxRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Tipo_Personaje'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PersonajesIniciaPrimerosAux::class;
    }
}
