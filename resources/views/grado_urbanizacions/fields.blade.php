<!-- Detalle Urbanizacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Detalle_Urbanizacion', 'Detalle Urbanizacion:') !!}
    {!! Form::text('Detalle_Urbanizacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('gradoUrbanizacions.index') !!}" class="btn btn-default">Cancel</a>
</div>
