@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Usuarios Playas
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('usuarios_playas.show_fields')
                    <a href="{!! route('usuariosPlayas.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
