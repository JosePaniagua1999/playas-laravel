@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Grado Urbanizacion
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($gradoUrbanizacion, ['route' => ['gradoUrbanizacions.update', $gradoUrbanizacion->id], 'method' => 'patch']) !!}

                        @include('grado_urbanizacions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection