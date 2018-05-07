<table class="table table-responsive" id="riesgosPlayas-table">
    <thead>
        <tr>
            <th>Id Playa</th>
        <th>Id Usuario</th>
        <th>Nombre</th>
        <th>Id Riesgo</th>
        <th>Id Tipo</th>
        <th>Tipo</th>
        <th>Longitud</th>
        <th>Latitud</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($riesgosPlayas as $riesgosPlaya)
        <tr>
            <td>{!! $riesgosPlaya->Id_Playa !!}</td>
            <td>{!! $riesgosPlaya->Id_Usuario !!}</td>
            <td>{!! $riesgosPlaya->Nombre !!}</td>
            <td>{!! $riesgosPlaya->Id_Riesgo !!}</td>
            <td>{!! $riesgosPlaya->Id_Tipo !!}</td>
            <td>{!! $riesgosPlaya->Tipo !!}</td>
            <td>{!! $riesgosPlaya->Longitud !!}</td>
            <td>{!! $riesgosPlaya->Latitud !!}</td>
            <td>
                {!! Form::open(['route' => ['riesgosPlayas.destroy', $riesgosPlaya->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('riesgosPlayas.show', [$riesgosPlaya->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('riesgosPlayas.edit', [$riesgosPlaya->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>