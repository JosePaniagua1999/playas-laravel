<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $direcciones->id !!}</p>
</div>

<!-- Abreviatura Direccion Field -->
<div class="form-group">
    {!! Form::label('Abreviatura_Direccion', 'Abreviatura Direccion:') !!}
    <p>{!! $direcciones->Abreviatura_Direccion !!}</p>
</div>

<!-- Detalle Direccion Field -->
<div class="form-group">
    {!! Form::label('Detalle_Direccion', 'Detalle Direccion:') !!}
    <p>{!! $direcciones->Detalle_Direccion !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $direcciones->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $direcciones->updated_at !!}</p>
</div>

