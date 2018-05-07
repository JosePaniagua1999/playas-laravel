<table class="table table-responsive" id="serviciosPlayas-table">
    <thead>
        <tr>
            <th>Id Playa</th>
        <th>Id Tiposervicio</th>
        <th>Servicio Descripcion</th>
        <th>Servicio Latitud</th>
        <th>Servicio Longitud</th>
        <th>Servicio Icono</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($serviciosPlayas as $serviciosPlaya)
        <tr>
            <td>{!! $serviciosPlaya->Id_Playa !!}</td>
            <td>{!! $serviciosPlaya->Id_TipoServicio !!}</td>
            <td>{!! $serviciosPlaya->Servicio_Descripcion !!}</td>
            <td>{!! $serviciosPlaya->Servicio_Latitud !!}</td>
            <td>{!! $serviciosPlaya->Servicio_Longitud !!}</td>
            <td>{!! $serviciosPlaya->Servicio_Icono !!}</td>
            <td>
                {!! Form::open(['route' => ['serviciosPlayas.destroy', $serviciosPlaya->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('serviciosPlayas.show', [$serviciosPlaya->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('serviciosPlayas.edit', [$serviciosPlaya->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>