<!-- Detalle Avisos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Detalle_Avisos', 'Detalle Avisos:') !!}
    {!! Form::text('Detalle_Avisos', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Aviso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Tipo_Aviso', 'Tipo Aviso:') !!}
    {!! Form::number('Tipo_Aviso', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('avisosPreventivos.index') !!}" class="btn btn-default">Cancel</a>
</div>
