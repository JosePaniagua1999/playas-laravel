@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Ruta Sujeto Playa
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'rutaSujetoPlayas.store']) !!}

                        @include('ruta_sujeto_playas.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
