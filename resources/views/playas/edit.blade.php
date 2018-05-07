@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Playas
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($playas, ['route' => ['playas.update', $playas->id], 'method' => 'patch']) !!}

                        @include('playas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection