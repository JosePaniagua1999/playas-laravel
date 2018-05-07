<!-- Id Playa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Id_Playa', 'Id Playa:') !!}
    {!! Form::number('Id_Playa', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Usuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Id_Usuario', 'Id Usuario:') !!}
    {!! Form::number('Id_Usuario', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Nombre', 'Nombre:') !!}
    {!! Form::text('Nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Riesgo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Id_Riesgo', 'Id Riesgo:') !!}
    {!! Form::number('Id_Riesgo', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Id_Tipo', 'Id Tipo:') !!}
    {!! Form::number('Id_Tipo', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Tipo', 'Tipo:') !!}
    {!! Form::number('Tipo', null, ['class' => 'form-control']) !!}
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
    <a href="{!! route('riesgosPlayas.index') !!}" class="btn btn-default">Cancel</a>
</div>
