<table class="table table-responsive" id="materiaLesApoyoAcuaticos-table">
    <thead>
        <tr>
            <th>Material</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($materiaLesApoyoAcuaticos as $materiaLesApoyoAcuatico)
        <tr>
            <td>{!! $materiaLesApoyoAcuatico->Material !!}</td>
            <td>
                {!! Form::open(['route' => ['materiaLesApoyoAcuaticos.destroy', $materiaLesApoyoAcuatico->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('materiaLesApoyoAcuaticos.show', [$materiaLesApoyoAcuatico->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('materiaLesApoyoAcuaticos.edit', [$materiaLesApoyoAcuatico->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>