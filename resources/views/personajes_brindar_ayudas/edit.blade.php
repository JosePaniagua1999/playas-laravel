@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Personajes Brindar Ayuda
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($personajesBrindarAyuda, ['route' => ['personajesBrindarAyudas.update', $personajesBrindarAyuda->id], 'method' => 'patch']) !!}

                        @include('personajes_brindar_ayudas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection