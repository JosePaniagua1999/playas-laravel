<table class="table table-responsive" id="personajesIniciaPrimerosAuxes-table">
    <thead>
        <tr>
            <th>Tipo Personaje</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($personajesIniciaPrimerosAuxes as $personajesIniciaPrimerosAux)
        <tr>
            <td>{!! $personajesIniciaPrimerosAux->Tipo_Personaje !!}</td>
            <td>
                {!! Form::open(['route' => ['personajesIniciaPrimerosAuxes.destroy', $personajesIniciaPrimerosAux->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('personajesIniciaPrimerosAuxes.show', [$personajesIniciaPrimerosAux->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('personajesIniciaPrimerosAuxes.edit', [$personajesIniciaPrimerosAux->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>