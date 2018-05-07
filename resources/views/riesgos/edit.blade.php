@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Riesgos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($riesgos, ['route' => ['riesgos.update', $riesgos->id], 'method' => 'patch']) !!}

                        @include('riesgos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection