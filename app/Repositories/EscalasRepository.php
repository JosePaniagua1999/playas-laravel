<?php

namespace App\Repositories;

use App\Models\Escalas;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EscalasRepository
 * @package App\Repositories
 * @version May 7, 2018, 8:39 am UTC
 *
 * @method Escalas findWithoutFail($id, $columns = ['*'])
 * @method Escalas find($id, $columns = ['*'])
 * @method Escalas first($columns = ['*'])
*/
class EscalasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Viento_Numero_Beaufort',
        'Viento_Velocidad',
        'Viento_Nudos',
        'Viento_Denominacion',
        'Viento_Aspecto_Mar',
        'Viento_Efectos_Tierra',
        'Oleaje_Altura',
        'Oleaje_Cifrado',
        'Oleaje_Nombre',
        'Marea_Altura',
        'Marea_Coeficiente',
        'Marea_Momento'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Escalas::class;
    }
}
