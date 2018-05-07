<!-- Abreviatura Direccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Abreviatura_Direccion', 'Abreviatura Direccion:') !!}
    {!! Form::text('Abreviatura_Direccion', null, ['class' => 'form-control']) !!}
</div>

<!-- Detalle Direccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Detalle_Direccion', 'Detalle Direccion:') !!}
    {!! Form::text('Detalle_Direccion', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('direcciones.index') !!}" class="btn btn-default">Cancel</a>
</div>
