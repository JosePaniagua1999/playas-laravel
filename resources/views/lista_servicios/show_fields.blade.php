<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $listaServicios->id !!}</p>
</div>

<!-- Descripcion Field -->
<div class="form-group">
    {!! Form::label('Descripcion', 'Descripcion:') !!}
    <p>{!! $listaServicios->Descripcion !!}</p>
</div>

<!-- Ubicacion Field -->
<div class="form-group">
    {!! Form::label('Ubicacion', 'Ubicacion:') !!}
    <p>{!! $listaServicios->Ubicacion !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $listaServicios->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $listaServicios->updated_at !!}</p>
</div>

