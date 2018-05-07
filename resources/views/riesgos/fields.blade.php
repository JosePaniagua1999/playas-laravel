<!-- Detalle Riesgo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Detalle_Riesgo', 'Detalle Riesgo:') !!}
    {!! Form::text('Detalle_Riesgo', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('riesgos.index') !!}" class="btn btn-default">Cancel</a>
</div>
