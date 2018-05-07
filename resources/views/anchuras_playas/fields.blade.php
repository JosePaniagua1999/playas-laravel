<!-- Detalle Anchura Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Detalle_Anchura', 'Detalle Anchura:') !!}
    {!! Form::text('Detalle_Anchura', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('anchurasPlayas.index') !!}" class="btn btn-default">Cancel</a>
</div>
