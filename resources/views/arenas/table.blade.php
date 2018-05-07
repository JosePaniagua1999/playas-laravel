<table class="table table-responsive" id="arenas-table">
    <thead>
        <tr>
            <th>Tipo Arena</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($arenas as $arenas)
        <tr>
            <td>{!! $arenas->Tipo_Arena !!}</td>
            <td>
                {!! Form::open(['route' => ['arenas.destroy', $arenas->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('arenas.show', [$arenas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('arenas.edit', [$arenas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>