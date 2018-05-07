<table class="table table-responsive" id="tipologiaRiesgos-table">
    <thead>
        <tr>
            <th>Id Riesgo</th>
        <th>Detalle Tipologia</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tipologiaRiesgos as $tipologiaRiesgos)
        <tr>
            <td>{!! $tipologiaRiesgos->Id_Riesgo !!}</td>
            <td>{!! $tipologiaRiesgos->Detalle_Tipologia !!}</td>
            <td>
                {!! Form::open(['route' => ['tipologiaRiesgos.destroy', $tipologiaRiesgos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tipologiaRiesgos.show', [$tipologiaRiesgos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tipologiaRiesgos.edit', [$tipologiaRiesgos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>