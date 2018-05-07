<!-- Material Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Material', 'Material:') !!}
    {!! Form::text('Material', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('materiaLesApoyoAcuaticos.index') !!}" class="btn btn-default">Cancel</a>
</div>
