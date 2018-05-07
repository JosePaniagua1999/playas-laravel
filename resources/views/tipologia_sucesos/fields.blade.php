<!-- Id Registrosuceso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Id_RegistroSuceso', 'Id Registrosuceso:') !!}
    {!! Form::number('Id_RegistroSuceso', null, ['class' => 'form-control']) !!}
</div>

<!-- Detalle Tiposuceso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Detalle_TipoSuceso', 'Detalle Tiposuceso:') !!}
    {!! Form::text('Detalle_TipoSuceso', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('tipologiaSucesos.index') !!}" class="btn btn-default">Cancel</a>
</div>
