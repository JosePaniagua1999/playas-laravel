<!-- Id Registro Riesgo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Id_Registro_Riesgo', 'Id Registro Riesgo:') !!}
    {!! Form::number('Id_Registro_Riesgo', null, ['class' => 'form-control']) !!}
</div>

<!-- Viento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Viento', 'Viento:') !!}
    {!! Form::number('Viento', null, ['class' => 'form-control']) !!}
</div>

<!-- Oleaje Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Oleaje', 'Oleaje:') !!}
    {!! Form::number('Oleaje', null, ['class' => 'form-control']) !!}
</div>

<!-- Marea Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Marea', 'Marea:') !!}
    {!! Form::number('Marea', null, ['class' => 'form-control']) !!}
</div>

<!-- Direccion Viento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Direccion_Viento', 'Direccion Viento:') !!}
    {!! Form::text('Direccion_Viento', null, ['class' => 'form-control']) !!}
</div>

<!-- Viento Velocidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Viento_Velocidad', 'Viento Velocidad:') !!}
    {!! Form::text('Viento_Velocidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Direccion Oleaje Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Direccion_Oleaje', 'Direccion Oleaje:') !!}
    {!! Form::text('Direccion_Oleaje', null, ['class' => 'form-control']) !!}
</div>

<!-- Oleaje Tamano Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Oleaje_Tamano', 'Oleaje Tamano:') !!}
    {!! Form::text('Oleaje_Tamano', null, ['class' => 'form-control']) !!}
</div>

<!-- Marea Altura Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Marea_Altura', 'Marea Altura:') !!}
    {!! Form::text('Marea_Altura', null, ['class' => 'form-control']) !!}
</div>

<!-- Marea Coeficiente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Marea_Coeficiente', 'Marea Coeficiente:') !!}
    {!! Form::text('Marea_Coeficiente', null, ['class' => 'form-control']) !!}
</div>

<!-- Marea Momento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Marea_Momento', 'Marea Momento:') !!}
    {!! Form::text('Marea_Momento', null, ['class' => 'form-control']) !!}
</div>

<!-- Probabilidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Probabilidad', 'Probabilidad:') !!}
    {!! Form::text('Probabilidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Severidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Severidad', 'Severidad:') !!}
    {!! Form::text('Severidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Evaluacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Evaluacion', 'Evaluacion:') !!}
    {!! Form::text('Evaluacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('situacionesRiesgos.index') !!}" class="btn btn-default">Cancel</a>
</div>
