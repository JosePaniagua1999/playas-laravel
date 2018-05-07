@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Riesgos Playa
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('riesgos_playas.show_fields')
                    <a href="{!! route('riesgosPlayas.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
