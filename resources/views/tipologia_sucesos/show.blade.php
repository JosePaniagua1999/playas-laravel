@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipologia Sucesos
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('tipologia_sucesos.show_fields')
                    <a href="{!! route('tipologiaSucesos.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
