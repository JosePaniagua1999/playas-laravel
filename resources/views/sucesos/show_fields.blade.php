<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $sucesos->id !!}</p>
</div>

<!-- Detalle Suceso Field -->
<div class="form-group">
    {!! Form::label('Detalle_Suceso', 'Detalle Suceso:') !!}
    <p>{!! $sucesos->Detalle_Suceso !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $sucesos->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $sucesos->updated_at !!}</p>
</div>

