<table class="table table-responsive" id="percepcionSucesos-table">
    <thead>
        <tr>
            <th>Percepcion</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($percepcionSucesos as $percepcionSucesos)
        <tr>
            <td>{!! $percepcionSucesos->Percepcion !!}</td>
            <td>
                {!! Form::open(['route' => ['percepcionSucesos.destroy', $percepcionSucesos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('percepcionSucesos.show', [$percepcionSucesos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('percepcionSucesos.edit', [$percepcionSucesos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>