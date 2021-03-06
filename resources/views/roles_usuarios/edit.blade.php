@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Roles Usuario
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($rolesUsuario, ['route' => ['rolesUsuarios.update', $rolesUsuario->id], 'method' => 'patch']) !!}

                        @include('roles_usuarios.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection