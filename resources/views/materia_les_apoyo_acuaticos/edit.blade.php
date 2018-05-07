@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Materia Les Apoyo Acuatico
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($materiaLesApoyoAcuatico, ['route' => ['materiaLesApoyoAcuaticos.update', $materiaLesApoyoAcuatico->id], 'method' => 'patch']) !!}

                        @include('materia_les_apoyo_acuaticos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection