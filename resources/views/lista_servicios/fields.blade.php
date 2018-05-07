<!-- Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Descripcion', 'Descripcion:') !!}
    {!! Form::text('Descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Ubicacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Ubicacion', 'Ubicacion:') !!}
    {!! Form::number('Ubicacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('listaServicios.index') !!}" class="btn btn-default">Cancel</a>
</div>
