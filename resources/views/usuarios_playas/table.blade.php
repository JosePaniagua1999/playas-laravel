<table class="table table-responsive" id="usuariosPlayas-table">
    <thead>
        <tr>
            <th>Id Usuario</th>
        <th>Id Playa</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($usuariosPlayas as $usuariosPlayas)
        <tr>
            <td>{!! $usuariosPlayas->Id_Usuario !!}</td>
            <td>{!! $usuariosPlayas->Id_Playa !!}</td>
            <td>
                {!! Form::open(['route' => ['usuariosPlayas.destroy', $usuariosPlayas->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('usuariosPlayas.show', [$usuariosPlayas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('usuariosPlayas.edit', [$usuariosPlayas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>