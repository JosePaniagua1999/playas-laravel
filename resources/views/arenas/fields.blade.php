<!-- Tipo Arena Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Tipo_Arena', 'Tipo Arena:') !!}
    {!! Form::text('Tipo_Arena', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('arenas.index') !!}" class="btn btn-default">Cancel</a>
</div>
