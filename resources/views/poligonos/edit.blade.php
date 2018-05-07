@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Poligonos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($poligonos, ['route' => ['poligonos.update', $poligonos->id], 'method' => 'patch']) !!}

                        @include('poligonos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection