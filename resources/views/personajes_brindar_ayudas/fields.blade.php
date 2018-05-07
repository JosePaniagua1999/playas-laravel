<!-- Tipo Personaje Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Tipo_Personaje', 'Tipo Personaje:') !!}
    {!! Form::text('Tipo_Personaje', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('personajesBrindarAyudas.index') !!}" class="btn btn-default">Cancel</a>
</div>
