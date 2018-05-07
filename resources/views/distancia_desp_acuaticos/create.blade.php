@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Distancia Desp Acuatico
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'distanciaDespAcuaticos.store']) !!}

                        @include('distancia_desp_acuaticos.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
