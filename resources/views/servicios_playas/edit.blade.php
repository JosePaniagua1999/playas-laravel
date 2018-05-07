@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Servicios Playa
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($serviciosPlaya, ['route' => ['serviciosPlayas.update', $serviciosPlaya->id], 'method' => 'patch']) !!}

                        @include('servicios_playas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection