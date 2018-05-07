<?php

namespace App\Repositories;

use App\Models\PersonajesBrindarAyuda;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PersonajesBrindarAyudaRepository
 * @package App\Repositories
 * @version May 7, 2018, 8:55 am UTC
 *
 * @method PersonajesBrindarAyuda findWithoutFail($id, $columns = ['*'])
 * @method PersonajesBrindarAyuda find($id, $columns = ['*'])
 * @method PersonajesBrindarAyuda first($columns = ['*'])
*/
class PersonajesBrindarAyudaRepository extends BaseRepository
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
        return PersonajesBrindarAyuda::class;
    }
}
