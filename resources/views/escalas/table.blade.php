<table class="table table-responsive" id="escalas-table">
    <thead>
        <tr>
            <th>Viento Numero Beaufort</th>
        <th>Viento Velocidad</th>
        <th>Viento Nudos</th>
        <th>Viento Denominacion</th>
        <th>Viento Aspecto Mar</th>
        <th>Viento Efectos Tierra</th>
        <th>Oleaje Altura</th>
        <th>Oleaje Cifrado</th>
        <th>Oleaje Nombre</th>
        <th>Marea Altura</th>
        <th>Marea Coeficiente</th>
        <th>Marea Momento</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($escalas as $escalas)
        <tr>
            <td>{!! $escalas->Viento_Numero_Beaufort !!}</td>
            <td>{!! $escalas->Viento_Velocidad !!}</td>
            <td>{!! $escalas->Viento_Nudos !!}</td>
            <td>{!! $escalas->Viento_Denominacion !!}</td>
            <td>{!! $escalas->Viento_Aspecto_Mar !!}</td>
            <td>{!! $escalas->Viento_Efectos_Tierra !!}</td>
            <td>{!! $escalas->Oleaje_Altura !!}</td>
            <td>{!! $escalas->Oleaje_Cifrado !!}</td>
            <td>{!! $escalas->Oleaje_Nombre !!}</td>
            <td>{!! $escalas->Marea_Altura !!}</td>
            <td>{!! $escalas->Marea_Coeficiente !!}</td>
            <td>{!! $escalas->Marea_Momento !!}</td>
            <td>
                {!! Form::open(['route' => ['escalas.destroy', $escalas->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('escalas.show', [$escalas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('escalas.edit', [$escalas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>