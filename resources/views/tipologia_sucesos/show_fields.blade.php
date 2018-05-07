<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $tipologiaSucesos->id !!}</p>
</div>

<!-- Id Registrosuceso Field -->
<div class="form-group">
    {!! Form::label('Id_RegistroSuceso', 'Id Registrosuceso:') !!}
    <p>{!! $tipologiaSucesos->Id_RegistroSuceso !!}</p>
</div>

<!-- Detalle Tiposuceso Field -->
<div class="form-group">
    {!! Form::label('Detalle_TipoSuceso', 'Detalle Tiposuceso:') !!}
    <p>{!! $tipologiaSucesos->Detalle_TipoSuceso !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $tipologiaSucesos->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $tipologiaSucesos->updated_at !!}</p>
</div>

