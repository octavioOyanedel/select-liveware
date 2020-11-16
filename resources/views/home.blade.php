@extends('layouts.app')

@section('content')
<div class="container">

    {{-- FILA MÓDULO --}}
    <livewire:divisiones />

    {{-- FILA BUSCADOR --}}
    {{-- <livewire:busqueda /> --}}

    {{-- FILA MULTI SELECT --}}
{{--     <div class="row justify-content-center mt-4">
        <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="card">
                <div class="card-header"><span>Formulario</span></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="form-group">
                        <a href="{{ route('export') }}" class="btn btn-success form-control"><i class="fas fa-file-excel"></i> Exportar </a>
                    </div>
                    
                    <livewire:multiselect />

                </div>
            </div>
        </div>
    </div> --}}
</div>
@endsection