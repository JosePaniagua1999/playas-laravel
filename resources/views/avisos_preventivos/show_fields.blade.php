<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $avisosPreventivos->id !!}</p>
</div>

<!-- Detalle Avisos Field -->
<div class="form-group">
    {!! Form::label('Detalle_Avisos', 'Detalle Avisos:') !!}
    <p>{!! $avisosPreventivos->Detalle_Avisos !!}</p>
</div>

<!-- Tipo Aviso Field -->
<div class="form-group">
    {!! Form::label('Tipo_Aviso', 'Tipo Aviso:') !!}
    <p>{!! $avisosPreventivos->Tipo_Aviso !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $avisosPreventivos->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $avisosPreventivos->updated_at !!}</p>
</div>

