<table class="table table-responsive" id="gradoUrbanizacions-table">
    <thead>
        <tr>
            <th>Detalle Urbanizacion</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($gradoUrbanizacions as $gradoUrbanizacion)
        <tr>
            <td>{!! $gradoUrbanizacion->Detalle_Urbanizacion !!}</td>
            <td>
                {!! Form::open(['route' => ['gradoUrbanizacions.destroy', $gradoUrbanizacion->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('gradoUrbanizacions.show', [$gradoUrbanizacion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('gradoUrbanizacions.edit', [$gradoUrbanizacion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>