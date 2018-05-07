<!-- Detalle Ocupacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Detalle_Ocupacion', 'Detalle Ocupacion:') !!}
    {!! Form::text('Detalle_Ocupacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('gradoOcupacions.index') !!}" class="btn btn-default">Cancel</a>
</div>
