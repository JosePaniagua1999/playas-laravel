<table class="table table-responsive" id="distanciaDespAcuaticos-table">
    <thead>
        <tr>
            <th>Distancia</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($distanciaDespAcuaticos as $distanciaDespAcuatico)
        <tr>
            <td>{!! $distanciaDespAcuatico->Distancia !!}</td>
            <td>
                {!! Form::open(['route' => ['distanciaDespAcuaticos.destroy', $distanciaDespAcuatico->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('distanciaDespAcuaticos.show', [$distanciaDespAcuatico->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('distanciaDespAcuaticos.edit', [$distanciaDespAcuatico->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>