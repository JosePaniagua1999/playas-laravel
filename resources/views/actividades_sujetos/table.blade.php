<table class="table table-responsive" id="actividadesSujetos-table">
    <thead>
        <tr>
            <th>Actividad</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($actividadesSujetos as $actividadesSujeto)
        <tr>
            <td>{!! $actividadesSujeto->Actividad !!}</td>
            <td>
                {!! Form::open(['route' => ['actividadesSujetos.destroy', $actividadesSujeto->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('actividadesSujetos.show', [$actividadesSujeto->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('actividadesSujetos.edit', [$actividadesSujeto->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>