@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Lista Servicios
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($listaServicios, ['route' => ['listaServicios.update', $listaServicios->id], 'method' => 'patch']) !!}

                        @include('lista_servicios.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection