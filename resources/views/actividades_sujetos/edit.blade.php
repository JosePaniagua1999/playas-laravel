@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Actividades Sujeto
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($actividadesSujeto, ['route' => ['actividadesSujetos.update', $actividadesSujeto->id], 'method' => 'patch']) !!}

                        @include('actividades_sujetos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection