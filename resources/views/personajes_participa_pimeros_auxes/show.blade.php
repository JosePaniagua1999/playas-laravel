@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Personajes Participa Pimeros Aux
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('personajes_participa_pimeros_auxes.show_fields')
                    <a href="{!! route('personajesParticipaPimerosAuxes.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
