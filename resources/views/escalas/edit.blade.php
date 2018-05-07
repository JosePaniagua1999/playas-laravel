@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Escalas
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($escalas, ['route' => ['escalas.update', $escalas->id], 'method' => 'patch']) !!}

                        @include('escalas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection