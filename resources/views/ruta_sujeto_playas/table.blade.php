<table class="table table-responsive" id="rutaSujetoPlayas-table">
    <thead>
        <tr>
            <th>Id Playa</th>
        <th>Id Usuario</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($rutaSujetoPlayas as $rutaSujetoPlaya)
        <tr>
            <td>{!! $rutaSujetoPlaya->Id_Playa !!}</td>
            <td>{!! $rutaSujetoPlaya->Id_Usuario !!}</td>
            <td>
                {!! Form::open(['route' => ['rutaSujetoPlayas.destroy', $rutaSujetoPlaya->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('rutaSujetoPlayas.show', [$rutaSujetoPlaya->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('rutaSujetoPlayas.edit', [$rutaSujetoPlaya->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>