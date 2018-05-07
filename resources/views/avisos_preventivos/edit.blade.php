@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Avisos Preventivos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($avisosPreventivos, ['route' => ['avisosPreventivos.update', $avisosPreventivos->id], 'method' => 'patch']) !!}

                        @include('avisos_preventivos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection