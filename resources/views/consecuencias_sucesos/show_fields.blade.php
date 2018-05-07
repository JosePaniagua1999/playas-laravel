<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $consecuenciasSucesos->id !!}</p>
</div>

<!-- Detalle Consecuencia Field -->
<div class="form-group">
    {!! Form::label('Detalle_Consecuencia', 'Detalle Consecuencia:') !!}
    <p>{!! $consecuenciasSucesos->Detalle_Consecuencia !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $consecuenciasSucesos->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $consecuenciasSucesos->updated_at !!}</p>
</div>

