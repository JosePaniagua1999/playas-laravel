@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Sucesos Playas
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($sucesosPlayas, ['route' => ['sucesosPlayas.update', $sucesosPlayas->id], 'method' => 'patch']) !!}

                        @include('sucesos_playas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection