<table class="table table-responsive" id="sucesosPlayas-table">
    <thead>
        <tr>
            <th>Id Playa</th>
        <th>Id Usuario</th>
        <th>Id Percepcion</th>
        <th>Dentrofuera Horario</th>
        <th>Id Suceso</th>
        <th>Id Tiposuceso</th>
        <th>Id Consecuencia</th>
        <th>Lugar</th>
        <th>Distancia Terrestre</th>
        <th>Tipo Desplazamiento</th>
        <th>Traslado Primerosaux</th>
        <th>Tipo Traslado</th>
        <th>Distancia Acuatica</th>
        <th>Profundidad</th>
        <th>Materiales Apoyo</th>
        <th>Estado Accidentado</th>
        <th>Ventilaciones</th>
        <th>Vias Aereas</th>
        <th>Remolque</th>
        <th>Ayuda Recibida</th>
        <th>Personaje Ayuda</th>
        <th>Tipo Extraccion</th>
        <th>Tiempos Desplazamiento Terrestre</th>
        <th>Tiempos Desplazamiento Acuatico</th>
        <th>Rcp</th>
        <th>Rcp Min</th>
        <th>Desa</th>
        <th>Desa Min</th>
        <th>Num Descargas</th>
        <th>Quien Inicia</th>
        <th>Quien Participa</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($sucesosPlayas as $sucesosPlayas)
        <tr>
            <td>{!! $sucesosPlayas->Id_Playa !!}</td>
            <td>{!! $sucesosPlayas->Id_Usuario !!}</td>
            <td>{!! $sucesosPlayas->Id_Percepcion !!}</td>
            <td>{!! $sucesosPlayas->DentroFuera_Horario !!}</td>
            <td>{!! $sucesosPlayas->Id_Suceso !!}</td>
            <td>{!! $sucesosPlayas->Id_TipoSuceso !!}</td>
            <td>{!! $sucesosPlayas->Id_Consecuencia !!}</td>
            <td>{!! $sucesosPlayas->Lugar !!}</td>
            <td>{!! $sucesosPlayas->Distancia_Terrestre !!}</td>
            <td>{!! $sucesosPlayas->Tipo_Desplazamiento !!}</td>
            <td>{!! $sucesosPlayas->Traslado_PrimerosAux !!}</td>
            <td>{!! $sucesosPlayas->Tipo_Traslado !!}</td>
            <td>{!! $sucesosPlayas->Distancia_Acuatica !!}</td>
            <td>{!! $sucesosPlayas->Profundidad !!}</td>
            <td>{!! $sucesosPlayas->Materiales_Apoyo !!}</td>
            <td>{!! $sucesosPlayas->Estado_Accidentado !!}</td>
            <td>{!! $sucesosPlayas->Ventilaciones !!}</td>
            <td>{!! $sucesosPlayas->Vias_Aereas !!}</td>
            <td>{!! $sucesosPlayas->Remolque !!}</td>
            <td>{!! $sucesosPlayas->Ayuda_Recibida !!}</td>
            <td>{!! $sucesosPlayas->Personaje_Ayuda !!}</td>
            <td>{!! $sucesosPlayas->Tipo_Extraccion !!}</td>
            <td>{!! $sucesosPlayas->Tiempos_Desplazamiento_Terrestre !!}</td>
            <td>{!! $sucesosPlayas->Tiempos_Desplazamiento_Acuatico !!}</td>
            <td>{!! $sucesosPlayas->RCP !!}</td>
            <td>{!! $sucesosPlayas->RCP_Min !!}</td>
            <td>{!! $sucesosPlayas->DESA !!}</td>
            <td>{!! $sucesosPlayas->DESA_Min !!}</td>
            <td>{!! $sucesosPlayas->Num_Descargas !!}</td>
            <td>{!! $sucesosPlayas->Quien_Inicia !!}</td>
            <td>{!! $sucesosPlayas->Quien_Participa !!}</td>
            <td>
                {!! Form::open(['route' => ['sucesosPlayas.destroy', $sucesosPlayas->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('sucesosPlayas.show', [$sucesosPlayas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('sucesosPlayas.edit', [$sucesosPlayas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>