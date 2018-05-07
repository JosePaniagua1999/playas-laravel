@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Personajes Participa Pimeros Aux
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($personajesParticipaPimerosAux, ['route' => ['personajesParticipaPimerosAuxes.update', $personajesParticipaPimerosAux->id], 'method' => 'patch']) !!}

                        @include('personajes_participa_pimeros_auxes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection