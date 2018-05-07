<?php

namespace App\Repositories;

use App\Models\PersonajesParticipaPimerosAux;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PersonajesParticipaPimerosAuxRepository
 * @package App\Repositories
 * @version May 7, 2018, 8:56 am UTC
 *
 * @method PersonajesParticipaPimerosAux findWithoutFail($id, $columns = ['*'])
 * @method PersonajesParticipaPimerosAux find($id, $columns = ['*'])
 * @method PersonajesParticipaPimerosAux first($columns = ['*'])
*/
class PersonajesParticipaPimerosAuxRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Tipo_Participante'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PersonajesParticipaPimerosAux::class;
    }
}
