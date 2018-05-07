<table class="table table-responsive" id="gradoOcupacions-table">
    <thead>
        <tr>
            <th>Detalle Ocupacion</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($gradoOcupacions as $gradoOcupacion)
        <tr>
            <td>{!! $gradoOcupacion->Detalle_Ocupacion !!}</td>
            <td>
                {!! Form::open(['route' => ['gradoOcupacions.destroy', $gradoOcupacion->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('gradoOcupacions.show', [$gradoOcupacion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('gradoOcupacions.edit', [$gradoOcupacion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>