<table class="table table-responsive" id="consecuenciasSucesos-table">
    <thead>
        <tr>
            <th>Detalle Consecuencia</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($consecuenciasSucesos as $consecuenciasSucesos)
        <tr>
            <td>{!! $consecuenciasSucesos->Detalle_Consecuencia !!}</td>
            <td>
                {!! Form::open(['route' => ['consecuenciasSucesos.destroy', $consecuenciasSucesos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('consecuenciasSucesos.show', [$consecuenciasSucesos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('consecuenciasSucesos.edit', [$consecuenciasSucesos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>