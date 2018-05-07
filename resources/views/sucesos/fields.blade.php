<!-- Detalle Suceso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Detalle_Suceso', 'Detalle Suceso:') !!}
    {!! Form::text('Detalle_Suceso', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('sucesos.index') !!}" class="btn btn-default">Cancel</a>
</div>
