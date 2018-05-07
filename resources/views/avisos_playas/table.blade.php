<table class="table table-responsive" id="avisosPlayas-table">
    <thead>
        <tr>
            <th>Id Playa</th>
        <th>Id Usuario</th>
        <th>Id Avisos</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($avisosPlayas as $avisosPlaya)
        <tr>
            <td>{!! $avisosPlaya->Id_Playa !!}</td>
            <td>{!! $avisosPlaya->Id_Usuario !!}</td>
            <td>{!! $avisosPlaya->Id_Avisos !!}</td>
            <td>
                {!! Form::open(['route' => ['avisosPlayas.destroy', $avisosPlaya->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('avisosPlayas.show', [$avisosPlaya->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('avisosPlayas.edit', [$avisosPlaya->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>