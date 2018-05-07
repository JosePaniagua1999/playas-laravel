<table class="table table-responsive" id="rolesUsuarios-table">
    <thead>
        <tr>
            <th>Nombre Rol</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($rolesUsuarios as $rolesUsuario)
        <tr>
            <td>{!! $rolesUsuario->Nombre_Rol !!}</td>
            <td>
                {!! Form::open(['route' => ['rolesUsuarios.destroy', $rolesUsuario->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('rolesUsuarios.show', [$rolesUsuario->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('rolesUsuarios.edit', [$rolesUsuario->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>