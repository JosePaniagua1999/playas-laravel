@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Anchuras Playas
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($anchurasPlayas, ['route' => ['anchurasPlayas.update', $anchurasPlayas->id], 'method' => 'patch']) !!}

                        @include('anchuras_playas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection