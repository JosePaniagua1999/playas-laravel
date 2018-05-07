<!-- Id Playa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Id_Playa', 'Id Playa:') !!}
    {!! Form::number('Id_Playa', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Tiposervicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Id_TipoServicio', 'Id Tiposervicio:') !!}
    {!! Form::number('Id_TipoServicio', null, ['class' => 'form-control']) !!}
</div>

<!-- Servicio Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Servicio_Descripcion', 'Servicio Descripcion:') !!}
    {!! Form::text('Servicio_Descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Servicio Latitud Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Servicio_Latitud', 'Servicio Latitud:') !!}
    {!! Form::text('Servicio_Latitud', null, ['class' => 'form-control']) !!}
</div>

<!-- Servicio Longitud Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Servicio_Longitud', 'Servicio Longitud:') !!}
    {!! Form::text('Servicio_Longitud', null, ['class' => 'form-control']) !!}
</div>

<!-- Servicio Icono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Servicio_Icono', 'Servicio Icono:') !!}
    {!! Form::text('Servicio_Icono', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('serviciosPlayas.index') !!}" class="btn btn-default">Cancel</a>
</div>
