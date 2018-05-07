<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $rolesUsuario->id !!}</p>
</div>

<!-- Nombre Rol Field -->
<div class="form-group">
    {!! Form::label('Nombre_Rol', 'Nombre Rol:') !!}
    <p>{!! $rolesUsuario->Nombre_Rol !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $rolesUsuario->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $rolesUsuario->updated_at !!}</p>
</div>

