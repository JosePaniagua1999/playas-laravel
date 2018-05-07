<!-- Tipo Participante Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Tipo_Participante', 'Tipo Participante:') !!}
    {!! Form::text('Tipo_Participante', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('personajesParticipaPimerosAuxes.index') !!}" class="btn btn-default">Cancel</a>
</div>
