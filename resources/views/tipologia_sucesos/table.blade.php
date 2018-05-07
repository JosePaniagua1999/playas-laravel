<table class="table table-responsive" id="tipologiaSucesos-table">
    <thead>
        <tr>
            <th>Id Registrosuceso</th>
        <th>Detalle Tiposuceso</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tipologiaSucesos as $tipologiaSucesos)
        <tr>
            <td>{!! $tipologiaSucesos->Id_RegistroSuceso !!}</td>
            <td>{!! $tipologiaSucesos->Detalle_TipoSuceso !!}</td>
            <td>
                {!! Form::open(['route' => ['tipologiaSucesos.destroy', $tipologiaSucesos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tipologiaSucesos.show', [$tipologiaSucesos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tipologiaSucesos.edit', [$tipologiaSucesos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>