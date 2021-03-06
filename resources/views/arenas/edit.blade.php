@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Arenas
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($arenas, ['route' => ['arenas.update', $arenas->id], 'method' => 'patch']) !!}

                        @include('arenas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection