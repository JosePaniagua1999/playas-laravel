@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Distancia Desp Terrestre
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($distanciaDespTerrestre, ['route' => ['distanciaDespTerrestres.update', $distanciaDespTerrestre->id], 'method' => 'patch']) !!}

                        @include('distancia_desp_terrestres.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection