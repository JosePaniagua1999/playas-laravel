<!-- Id Playa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Id_Playa', 'Id Playa:') !!}
    {!! Form::number('Id_Playa', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Usuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Id_Usuario', 'Id Usuario:') !!}
    {!! Form::number('Id_Usuario', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Avisos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Id_Avisos', 'Id Avisos:') !!}
    {!! Form::number('Id_Avisos', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('avisosPlayas.index') !!}" class="btn btn-default">Cancel</a>
</div>
