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
                    {!! Form::open(['route' => 'riesgos.store']) !!}

                        @include('riesgos.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
