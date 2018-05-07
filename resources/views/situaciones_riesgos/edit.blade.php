@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Situaciones Riesgos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($situacionesRiesgos, ['route' => ['situacionesRiesgos.update', $situacionesRiesgos->id], 'method' => 'patch']) !!}

                        @include('situaciones_riesgos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection