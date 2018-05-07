@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Distancia Desp Terrestre
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('distancia_desp_terrestres.show_fields')
                    <a href="{!! route('distanciaDespTerrestres.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
