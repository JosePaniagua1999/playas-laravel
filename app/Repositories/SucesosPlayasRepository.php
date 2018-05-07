<?php

namespace App\Repositories;

use App\Models\SucesosPlayas;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class SucesosPlayasRepository
 * @package App\Repositories
 * @version May 7, 2018, 10:01 am UTC
 *
 * @method SucesosPlayas findWithoutFail($id, $columns = ['*'])
 * @method SucesosPlayas find($id, $columns = ['*'])
 * @method SucesosPlayas first($columns = ['*'])
*/
class SucesosPlayasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Id_Playa',
        'Id_Usuario',
        'Id_Percepcion',
        'DentroFuera_Horario',
        'Id_Suceso',
        'Id_TipoSuceso',
        'Id_Consecuencia',
        'Lugar',
        'Distancia_Terrestre',
        'Tipo_Desplazamiento',
        'Traslado_PrimerosAux',
        'Tipo_Traslado',
        'Distancia_Acuatica',
        'Profundidad',
        'Materiales_Apoyo',
        'Estado_Accidentado',
        'Ventilaciones',
        'Vias_Aereas',
        'Remolque',
        'Ayuda_Recibida',
        'Personaje_Ayuda',
        'Tipo_Extraccion',
        'Tiempos_Desplazamiento_Terrestre',
        'Tiempos_Desplazamiento_Acuatico',
        'RCP',
        'RCP_Min',
        'DESA',
        'DESA_Min',
        'Num_Descargas',
        'Quien_Inicia',
        'Quien_Participa'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return SucesosPlayas::class;
    }
}
