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
	<div wire:ignore.self class="modal fade" id="modalDivision" tabindex="-1" aria-labelledby="modalDivisionLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalDivisionLabel">Nueva División</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="nueva_division">División</label>
						<input type="text" class="limpiar-input-modal form-control" id="nueva_division" wire:model="nueva_division_modal">
						@error('nueva_division_modal') 
							<small class="text-danger">{{ $message }}</small>
						@enderror
					</div>			
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					<button type="button" class="btn btn-primary" wire:click="guardarDivision">Guardar</button>
				</div>
			</div>
		</div>
	</div>
	{{-- modal nuevo batallón --}}
	<div wire:ignore.self class="modal fade" id="modalBatallon" tabindex="-1" aria-labelledby="modalBatallonLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalBatallonLabel">Nuevo Batallón</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">						
					    <label for="division"><span>División</span></label>     
						<select class="form-control" id="division" wire:model="division">
							<option value="" selected>...</option>
							@foreach($divisiones as $item)
								<option value="{{ $item->id }}">{{ $item->name }}</option>
							@endforeach
						</select>	
					</div>	
					<div class="form-group">
						<label for="nuevo_batallon">Batallón</label>				
						<input type="text" class="limpiar-input-modal form-control" id="nuevo_batallon" wire:model="nuevo_batallon_modal">
						@error('nuevo_batallon_modal') 
							<small class="text-danger">{{ $message }}</small>
						@enderror
					</div>			
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					<button type="button" class="btn btn-primary" wire:click="guardarBatallon">Guardar</button>
				</div>
			</div>
		</div>
	</div>
	{{-- modal nuevo regimiento --}}
	<div wire:ignore.self class="modal fade" id="modalRegimiento" tabindex="-1" aria-labelledby="modalRegimientoLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalRegimientoLabel">Nuevo Regimiento</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">						
					    <label for="division"><span>División</span></label>     
						<select class="form-control" id="division" wire:model="division">
							<option value="" selected>...</option>
							@foreach($divisiones as $item)
								<option value="{{ $item->id }}">{{ $item->name }}</option>
							@endforeach
						</select>	
					</div>	
					<div class="form-group">
					    <label for="batallon"><span>Batallón</span></label>					 
					    <select class="form-control" id="batallon" wire:model="batallon">
							<option value="" selected>...</option>
							@foreach($batallones as $item)
								<option value="{{ $item->id }}">{{ $item->name }}</option>			
							@endforeach
					    </select>
					</div>
					<div class="form-group">
						<label for="nuevo_regimiento">Regimiento</label>				
						<input type="text" class="limpiar-input-modal form-control" id="nuevo_regimiento" wire:model="nuevo_regimiento_modal">
						@error('nuevo_regimiento_modal') 
							<small class="text-danger">{{ $message }}</small>
						@enderror
					</div>									
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					<button type="button" class="btn btn-primary" wire:click="guardarRegimiento">Guardar</button>
				</div>
			</div>
		</div>
	</div>
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