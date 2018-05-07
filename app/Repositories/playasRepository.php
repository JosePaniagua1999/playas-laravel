<?php

namespace App\Repositories;

use App\Models\playas;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class playasRepository
 * @package App\Repositories
 * @version May 7, 2018, 9:25 am UTC
 *
 * @method playas findWithoutFail($id, $columns = ['*'])
 * @method playas find($id, $columns = ['*'])
 * @method playas first($columns = ['*'])
*/
class playasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Nombre_Playa',
        'Coord_Longitud',
        'Coord_Latitud',
        'Municipio',
        'Provincia',
        'CC_AA',
        'Longitud',
        'Anchura',
        'Pendiente',
        'G_Ocupacion',
        'G_Urbanizacion',
        'Paseo_Maritimo',
        'Fachada',
        'Descripcion',
        'Morfologia',
        'Composicion',
        'Tipo_Arena',
        'Tipo_Oleaje',
        'Viento',
        'Zona_Fondeo',
        'Nudismo',
        'Vegetacion',
        'Espacio_Protegido',
        'Actuaciones',
        'Bandera_Azul',
        'Nombre_Hospital',
        'Hospital_Direccion',
        'Acceso_Coches',
        'Acceso_Vehiculo_Emergencia',
        'Acceso_Helicopteros',
        'Senalizacion_Accesos',
        'Auxilio_Salvamento',
        'Periodo_Auxilio',
        'Horario_Auxilio_Inicio',
        'Horario_Auxilio_Fin',
        'Senalizacion_Peligro',
        'Accesibilidad_VehiculosEmergencia',
        'Accesibilidad_EmbarcacionesRescate',
        'Accesibilidad_Helipuerto',
        'Base_Operaciones',
        'Banderas',
        'Carteles_Informativos',
        'Megafonia',
        'Balizamiento_Terrestre',
        'Balizamiento_Acuatico',
        'Carretera_Proxima',
        'Observaciones_Autobus',
        'Tipo_Aparcamiento',
        'Nombre_Puerto_Deportivo',
        'Dist_Puerto_a_Playa',
        'Activa'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return playas::class;
    }
}
