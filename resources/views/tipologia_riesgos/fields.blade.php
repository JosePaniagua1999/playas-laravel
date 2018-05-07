<!-- Id Riesgo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Id_Riesgo', 'Id Riesgo:') !!}
    {!! Form::number('Id_Riesgo', null, ['class' => 'form-control']) !!}
</div>

<!-- Detalle Tipologia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Detalle_Tipologia', 'Detalle Tipologia:') !!}
    {!! Form::text('Detalle_Tipologia', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('tipologiaRiesgos.index') !!}" class="btn btn-default">Cancel</a>
</div>
