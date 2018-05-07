<table class="table table-responsive" id="situacionesRiesgos-table">
    <thead>
        <tr>
            <th>Id Registro Riesgo</th>
        <th>Viento</th>
        <th>Oleaje</th>
        <th>Marea</th>
        <th>Direccion Viento</th>
        <th>Viento Velocidad</th>
        <th>Direccion Oleaje</th>
        <th>Oleaje Tamano</th>
        <th>Marea Altura</th>
        <th>Marea Coeficiente</th>
        <th>Marea Momento</th>
        <th>Probabilidad</th>
        <th>Severidad</th>
        <th>Evaluacion</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($situacionesRiesgos as $situacionesRiesgos)
        <tr>
            <td>{!! $situacionesRiesgos->Id_Registro_Riesgo !!}</td>
            <td>{!! $situacionesRiesgos->Viento !!}</td>
            <td>{!! $situacionesRiesgos->Oleaje !!}</td>
            <td>{!! $situacionesRiesgos->Marea !!}</td>
            <td>{!! $situacionesRiesgos->Direccion_Viento !!}</td>
            <td>{!! $situacionesRiesgos->Viento_Velocidad !!}</td>
            <td>{!! $situacionesRiesgos->Direccion_Oleaje !!}</td>
            <td>{!! $situacionesRiesgos->Oleaje_Tamano !!}</td>
            <td>{!! $situacionesRiesgos->Marea_Altura !!}</td>
            <td>{!! $situacionesRiesgos->Marea_Coeficiente !!}</td>
            <td>{!! $situacionesRiesgos->Marea_Momento !!}</td>
            <td>{!! $situacionesRiesgos->Probabilidad !!}</td>
            <td>{!! $situacionesRiesgos->Severidad !!}</td>
            <td>{!! $situacionesRiesgos->Evaluacion !!}</td>
            <td>
                {!! Form::open(['route' => ['situacionesRiesgos.destroy', $situacionesRiesgos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('situacionesRiesgos.show', [$situacionesRiesgos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('situacionesRiesgos.edit', [$situacionesRiesgos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>