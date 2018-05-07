<!-- Detalle Consecuencia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Detalle_Consecuencia', 'Detalle Consecuencia:') !!}
    {!! Form::text('Detalle_Consecuencia', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('consecuenciasSucesos.index') !!}" class="btn btn-default">Cancel</a>
</div>
