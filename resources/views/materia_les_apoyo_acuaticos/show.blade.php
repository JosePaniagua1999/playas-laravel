@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Materia Les Apoyo Acuatico
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('materia_les_apoyo_acuaticos.show_fields')
                    <a href="{!! route('materiaLesApoyoAcuaticos.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
