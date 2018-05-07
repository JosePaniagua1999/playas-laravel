<!-- Id Playa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Id_Playa', 'Id Playa:') !!}
    {!! Form::number('Id_Playa', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Registroriesgo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Id_RegistroRiesgo', 'Id Registroriesgo:') !!}
    {!! Form::number('Id_RegistroRiesgo', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Registrosuceso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Id_RegistroSuceso', 'Id Registrosuceso:') !!}
    {!! Form::number('Id_RegistroSuceso', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Registroaviso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Id_RegistroAviso', 'Id Registroaviso:') !!}
    {!! Form::number('Id_RegistroAviso', null, ['class' => 'form-control']) !!}
</div>

<!-- Longitud Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Longitud', 'Longitud:') !!}
    {!! Form::text('Longitud', null, ['class' => 'form-control']) !!}
</div>

<!-- Latitud Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Latitud', 'Latitud:') !!}
    {!! Form::text('Latitud', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('poligonos.index') !!}" class="btn btn-default">Cancel</a>
</div>
