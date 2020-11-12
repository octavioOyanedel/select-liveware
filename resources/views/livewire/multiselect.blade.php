<div>
	{{-- select división --}}
	<div class="form-group">
	    <label for="division"><span>División</span></label>
	    <a class="text-primary float-right" href="#" data-toggle="modal" data-target="#modalDivision" wire:click="limpiarModalForm"><i role="button" class="fas fa-plus-circle"></i></a>	     
		<select class="form-control" id="division" wire:model="division">
			<option value="" selected>...</option>
			@foreach($divisiones as $item)
				<option value="{{ $item->id }}">{{ $item->name }}</option>			
			@endforeach
		</select>
	</div>

	{{-- select batallón --}}
	<div class="form-group">
	    <label for="batallon"><span>Batallón</span></label>
	    <a class="text-primary float-right" href="#" data-toggle="modal" data-target="#modalBatallon" wire:click="limpiarModalForm"><i role="button" class="fas fa-plus-circle"></i></a>
	    <select class="form-control" id="batallon" wire:model="batallon">
			<option value="" selected>...</option>
			@foreach($batallones as $item)
				<option value="{{ $item->id }}">{{ $item->name }}</option>			
			@endforeach
	    </select>
	</div>

	{{-- select regimiento --}}
	<div class="form-group">
	    <label for="regimiento"><span>Regimiento</span></label>
	    <a class="text-primary float-right" href="#" data-toggle="modal" data-target="#modalRegimiento" wire:click="limpiarModalForm"><i role="button" class="fas fa-plus-circle"></i></a>
	    <select class="form-control" id="regimiento">
	      <option value="" selected>...</option>
			@foreach($regimientos as $item)
				<option value="{{ $item->id }}">{{ $item->name }}</option>			
			@endforeach	      
	    </select>
	</div>

	{{-- modal nueva división --}}
	<x-modal idModal="modalDivision" labelModal="modalDivisionLabel" titulo="Nueva División" wireClick="guardarDivision" colecciones=""/>

	{{-- modal nuevo batallón --}}
	<x-modal idModal="modalBatallon" labelModal="modalBatallonLabel" titulo="Nuevo Batallón" wireClick="guardarBatallon" :colecciones="$colecciones"/>

	{{-- modal nuevo regimiento --}}
	<x-modal idModal="modalRegimiento" labelModal="modalRegimientoLabel" titulo="Nuevo Regimiento" wireClick="guardarRegimiento" :colecciones="$colecciones"/>

</div>
@push('scripts')
    <script type="text/javascript">
        window.livewire.on('limpiarModalForm', () => {
            $('.limpiar-input-modal').val('');
        });
    </script>
    <script type="text/javascript">
        window.livewire.on('cerrarModal', () => {
            $('#modalDivision').modal('hide');
            $('#modalBatallon').modal('hide');
            $('#modalRegimiento').modal('hide');
        });
    </script>
@endpush