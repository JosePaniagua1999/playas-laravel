<table class="table table-responsive" id="poligonos-table">
    <thead>
        <tr>
            <th>Id Playa</th>
        <th>Id Registroriesgo</th>
        <th>Id Registrosuceso</th>
        <th>Id Registroaviso</th>
        <th>Longitud</th>
        <th>Latitud</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($poligonos as $poligonos)
        <tr>
            <td>{!! $poligonos->Id_Playa !!}</td>
            <td>{!! $poligonos->Id_RegistroRiesgo !!}</td>
            <td>{!! $poligonos->Id_RegistroSuceso !!}</td>
            <td>{!! $poligonos->Id_RegistroAviso !!}</td>
            <td>{!! $poligonos->Longitud !!}</td>
            <td>{!! $poligonos->Latitud !!}</td>
            <td>
                {!! Form::open(['route' => ['poligonos.destroy', $poligonos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('poligonos.show', [$poligonos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('poligonos.edit', [$poligonos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>