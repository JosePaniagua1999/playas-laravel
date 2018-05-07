@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipologia Sucesos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tipologiaSucesos, ['route' => ['tipologiaSucesos.update', $tipologiaSucesos->id], 'method' => 'patch']) !!}

                        @include('tipologia_sucesos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection