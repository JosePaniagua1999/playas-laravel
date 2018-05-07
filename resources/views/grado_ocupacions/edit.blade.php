@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Grado Ocupacion
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($gradoOcupacion, ['route' => ['gradoOcupacions.update', $gradoOcupacion->id], 'method' => 'patch']) !!}

                        @include('grado_ocupacions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection