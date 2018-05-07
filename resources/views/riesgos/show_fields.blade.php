<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $riesgos->id !!}</p>
</div>

<!-- Detalle Riesgo Field -->
<div class="form-group">
    {!! Form::label('Detalle_Riesgo', 'Detalle Riesgo:') !!}
    <p>{!! $riesgos->Detalle_Riesgo !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $riesgos->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $riesgos->updated_at !!}</p>
</div>

