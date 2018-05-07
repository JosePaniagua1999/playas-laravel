<table class="table table-responsive" id="playas-table">
    <thead>
        <tr>
            <th>Nombre Playa</th>
        <th>Coord Longitud</th>
        <th>Coord Latitud</th>
        <th>Municipio</th>
        <th>Provincia</th>
        <th>Cc Aa</th>
        <th>Longitud</th>
        <th>Anchura</th>
        <th>Pendiente</th>
        <th>G Ocupacion</th>
        <th>G Urbanizacion</th>
        <th>Paseo Maritimo</th>
        <th>Fachada</th>
        <th>Descripcion</th>
        <th>Morfologia</th>
        <th>Composicion</th>
        <th>Tipo Arena</th>
        <th>Tipo Oleaje</th>
        <th>Viento</th>
        <th>Zona Fondeo</th>
        <th>Nudismo</th>
        <th>Vegetacion</th>
        <th>Espacio Protegido</th>
        <th>Actuaciones</th>
        <th>Bandera Azul</th>
        <th>Nombre Hospital</th>
        <th>Hospital Direccion</th>
        <th>Acceso Coches</th>
        <th>Acceso Vehiculo Emergencia</th>
        <th>Acceso Helicopteros</th>
        <th>Senalizacion Accesos</th>
        <th>Auxilio Salvamento</th>
        <th>Periodo Auxilio</th>
        <th>Horario Auxilio Inicio</th>
        <th>Horario Auxilio Fin</th>
        <th>Senalizacion Peligro</th>
        <th>Accesibilidad Vehiculosemergencia</th>
        <th>Accesibilidad Embarcacionesrescate</th>
        <th>Accesibilidad Helipuerto</th>
        <th>Base Operaciones</th>
        <th>Banderas</th>
        <th>Carteles Informativos</th>
        <th>Megafonia</th>
        <th>Balizamiento Terrestre</th>
        <th>Balizamiento Acuatico</th>
        <th>Carretera Proxima</th>
        <th>Observaciones Autobus</th>
        <th>Tipo Aparcamiento</th>
        <th>Nombre Puerto Deportivo</th>
        <th>Dist Puerto A Playa</th>
        <th>Activa</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($playas as $playas)
        <tr>
            <td>{!! $playas->Nombre_Playa !!}</td>
            <td>{!! $playas->Coord_Longitud !!}</td>
            <td>{!! $playas->Coord_Latitud !!}</td>
            <td>{!! $playas->Municipio !!}</td>
            <td>{!! $playas->Provincia !!}</td>
            <td>{!! $playas->CC_AA !!}</td>
            <td>{!! $playas->Longitud !!}</td>
            <td>{!! $playas->Anchura !!}</td>
            <td>{!! $playas->Pendiente !!}</td>
            <td>{!! $playas->G_Ocupacion !!}</td>
            <td>{!! $playas->G_Urbanizacion !!}</td>
            <td>{!! $playas->Paseo_Maritimo !!}</td>
            <td>{!! $playas->Fachada !!}</td>
            <td>{!! $playas->Descripcion !!}</td>
            <td>{!! $playas->Morfologia !!}</td>
            <td>{!! $playas->Composicion !!}</td>
            <td>{!! $playas->Tipo_Arena !!}</td>
            <td>{!! $playas->Tipo_Oleaje !!}</td>
            <td>{!! $playas->Viento !!}</td>
            <td>{!! $playas->Zona_Fondeo !!}</td>
            <td>{!! $playas->Nudismo !!}</td>
            <td>{!! $playas->Vegetacion !!}</td>
            <td>{!! $playas->Espacio_Protegido !!}</td>
            <td>{!! $playas->Actuaciones !!}</td>
            <td>{!! $playas->Bandera_Azul !!}</td>
            <td>{!! $playas->Nombre_Hospital !!}</td>
            <td>{!! $playas->Hospital_Direccion !!}</td>
            <td>{!! $playas->Acceso_Coches !!}</td>
            <td>{!! $playas->Acceso_Vehiculo_Emergencia !!}</td>
            <td>{!! $playas->Acceso_Helicopteros !!}</td>
            <td>{!! $playas->Senalizacion_Accesos !!}</td>
            <td>{!! $playas->Auxilio_Salvamento !!}</td>
            <td>{!! $playas->Periodo_Auxilio !!}</td>
            <td>{!! $playas->Horario_Auxilio_Inicio !!}</td>
            <td>{!! $playas->Horario_Auxilio_Fin !!}</td>
            <td>{!! $playas->Senalizacion_Peligro !!}</td>
            <td>{!! $playas->Accesibilidad_VehiculosEmergencia !!}</td>
            <td>{!! $playas->Accesibilidad_EmbarcacionesRescate !!}</td>
            <td>{!! $playas->Accesibilidad_Helipuerto !!}</td>
            <td>{!! $playas->Base_Operaciones !!}</td>
            <td>{!! $playas->Banderas !!}</td>
            <td>{!! $playas->Carteles_Informativos !!}</td>
            <td>{!! $playas->Megafonia !!}</td>
            <td>{!! $playas->Balizamiento_Terrestre !!}</td>
            <td>{!! $playas->Balizamiento_Acuatico !!}</td>
            <td>{!! $playas->Carretera_Proxima !!}</td>
            <td>{!! $playas->Observaciones_Autobus !!}</td>
            <td>{!! $playas->Tipo_Aparcamiento !!}</td>
            <td>{!! $playas->Nombre_Puerto_Deportivo !!}</td>
            <td>{!! $playas->Dist_Puerto_a_Playa !!}</td>
            <td>{!! $playas->Activa !!}</td>
            <td>
                {!! Form::open(['route' => ['playas.destroy', $playas->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('playas.show', [$playas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('playas.edit', [$playas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>