@extends('layouts.app')

@section('content')
<div class="container">
    {{-- FILA BUSCADOR --}}
    <div class="row">
        <div class="col-md-12 col-lg-4">
            <h5>Creiterios de búsqueda</h5>
            <div class="form-group">                        
                <label for="buscar"><span>Buscar por:</span></label>     
                <select class="form-control" id="buscar" wire:model="buscar">
                    <option value="" selected>...</option>
                    <option value="2" >División</option>
                    <option value="3" >Batallón</option>
                    <option value="4" >Regimiento</option>
                    <option value="1" >Todos</option>
                </select>
                @error('buscar') 
                    <small class="text-danger">{{ $message }}</small>
                @enderror                 
            </div>
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre">
                @error('nombre') 
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>  
            <div class="form-group">
                <label for="fecha">Fecha:</label>
                <input type="date" class="form-control" id="fecha">
                @error('fecha') 
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <button type="button" class="form-control btn btn-primary">Buscar</button>
            </div>                                                
        </div>
        <div class="col-md-12 col-lg-8 bg-dark text-white">
            <h5>Resultados</h5>
        </div>
    </div>
    {{-- FILA MULTI SELECT --}}
    <div class="row justify-content-center mt-4">
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
    </div>
</div>
@endsection