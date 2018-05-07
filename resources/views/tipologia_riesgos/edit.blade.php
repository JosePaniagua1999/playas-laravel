@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipologia Riesgos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tipologiaRiesgos, ['route' => ['tipologiaRiesgos.update', $tipologiaRiesgos->id], 'method' => 'patch']) !!}

                        @include('tipologia_riesgos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection