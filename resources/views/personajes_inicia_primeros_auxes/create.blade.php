@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Personajes Inicia Primeros Aux
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'personajesIniciaPrimerosAuxes.store']) !!}

                        @include('personajes_inicia_primeros_auxes.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
