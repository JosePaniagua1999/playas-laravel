<table class="table table-responsive" id="direcciones-table">
    <thead>
        <tr>
            <th>Abreviatura Direccion</th>
        <th>Detalle Direccion</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($direcciones as $direcciones)
        <tr>
            <td>{!! $direcciones->Abreviatura_Direccion !!}</td>
            <td>{!! $direcciones->Detalle_Direccion !!}</td>
            <td>
                {!! Form::open(['route' => ['direcciones.destroy', $direcciones->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('direcciones.show', [$direcciones->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('direcciones.edit', [$direcciones->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>