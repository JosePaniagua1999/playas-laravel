@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Servicios Playa
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('servicios_playas.show_fields')
                    <a href="{!! route('serviciosPlayas.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
