<!-- Viento Numero Beaufort Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Viento_Numero_Beaufort', 'Viento Numero Beaufort:') !!}
    {!! Form::number('Viento_Numero_Beaufort', null, ['class' => 'form-control']) !!}
</div>

<!-- Viento Velocidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Viento_Velocidad', 'Viento Velocidad:') !!}
    {!! Form::text('Viento_Velocidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Viento Nudos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Viento_Nudos', 'Viento Nudos:') !!}
    {!! Form::text('Viento_Nudos', null, ['class' => 'form-control']) !!}
</div>

<!-- Viento Denominacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Viento_Denominacion', 'Viento Denominacion:') !!}
    {!! Form::text('Viento_Denominacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Viento Aspecto Mar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Viento_Aspecto_Mar', 'Viento Aspecto Mar:') !!}
    {!! Form::text('Viento_Aspecto_Mar', null, ['class' => 'form-control']) !!}
</div>

<!-- Viento Efectos Tierra Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Viento_Efectos_Tierra', 'Viento Efectos Tierra:') !!}
    {!! Form::text('Viento_Efectos_Tierra', null, ['class' => 'form-control']) !!}
</div>

<!-- Oleaje Altura Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Oleaje_Altura', 'Oleaje Altura:') !!}
    {!! Form::text('Oleaje_Altura', null, ['class' => 'form-control']) !!}
</div>

<!-- Oleaje Cifrado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Oleaje_Cifrado', 'Oleaje Cifrado:') !!}
    {!! Form::number('Oleaje_Cifrado', null, ['class' => 'form-control']) !!}
</div>

<!-- Oleaje Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Oleaje_Nombre', 'Oleaje Nombre:') !!}
    {!! Form::text('Oleaje_Nombre', null, ['class' => 'form-control']) !!}
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

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('escalas.index') !!}" class="btn btn-default">Cancel</a>
</div>
